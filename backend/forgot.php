<?php

include("../config/connect.php");

if(isset($_POST["envoyer"])){
	$req = $con->query("select Password as pass from client where Email= '".$_POST["email"]."' ;");
	$r= $req->fetch();
	$v= (string)$r["pass"];
	if(!empty($v)){
		echo "<h1 align=\"center\">".$v."</h1><br />";
	}
	else{
		?>
		<script language="javascript">
			document.querySelector("h3").innerHTML= "Compte inéxistant !";
		</script>
		<?php
	}
}

?>
