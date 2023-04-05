<?php

include("../config/connect.php");

if(isset($_POST["envoyer"])){
	$req0= $con->query("select count(*) as cpt from avis where Email= '".$_POST["email"]."' ;");
	$r0= $req0->fetch();
	if($r0["cpt"]==0){
		$req1= $con->prepare("insert into avis values(?,?,?,?);");
		$req1->execute([$_POST["email"], $_POST["nom"], $_POST["sujet"], $_POST["message"]]);
	}
	if($r0["cpt"]==1){
		$req3= $con->prepare("update avis set Nom= '".$_POST["nom"]."', Sujet='".$_POST["sujet"]."', Message='".$_POST["message"]."' where Email='".$_POST["email"]."' ;");
		$req3->execute();
	}
	?>
	<script>
		var v= document.getElementById("rep");
		v.innerHTML="Message envoyé !";
		v.style.margin="8%";
		document.querySelector("#cont").style.paddingBottom="8%";
	</script>
	<?php
}

?>
