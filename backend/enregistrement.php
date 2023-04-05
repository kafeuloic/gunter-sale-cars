<?php


include("../config/connect.php");

if(isset($_POST["envoyer"])){
	$req0= $con->query("select count(*) as cpt from client where Email= '".$_POST["email"]."';");
	$r0= $req0->fetch();
	if($r0["cpt"]==0){
		$req1= $con->prepare("insert into client values(:email, :mdp);");
		$req1->execute(["email" => $_POST["email"], "mdp" => $_POST["mdp"]]);
		header('location:pageConnexion.php');
	}
	else{
		?>
		<script language="javascript">
			document.querySelector("h3").innerHTML= "Cette email éxiste déjà !";
		</script>
		<?php
	}
}
?>
