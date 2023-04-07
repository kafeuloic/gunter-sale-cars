<?php

include("../config/connect.php");

if(isset($_POST["envoyer"])){
	$req = $con->query("select count(*) as cpt from client where Email= '".$_POST["email"]."' and Password= '".$_POST["mdp"]."';");
	$r= $req->fetch();
	if($r["cpt"]==1){
		header("location: home.php");
	}
	else{
		?>
		<script language="javascript">
			document.querySelector("h3").innerHTML= "Aucun compte trouvé !";
		</script>
		<?php
	}
}

?>
