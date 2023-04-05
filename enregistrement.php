<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enregistrement</title>
    <link rel="stylesheet" href="./assets/css/auth.css" />
	<link rel="shortcut icon" href="favicon.jpg" type="image/gif" />
</head>

<body>
    <div id="contenu">
        <img src="./assets/images/icone.jpg" alt="logo" /> <br /><br/>
		<h3 style="color:red" align="center"></h3>
        <form action="" method="post" id="form">
            <label for="email">Adresse e-mail</label><br />
            <input type="email" name="email" placeholder="name@gmail.com" id="email" required/> <br />
            <label for="mdp">Mot de passe</label><br />
            <input type="password" name="mdp" id="mdp" minlength="8" maxlength="8" required/><br />
			<label for="mdpc">Confirmation du mot de passe</label><br />
            <input type="password" name="mdpc" id="mdpc" minlength="8" maxlength="8" required/><br />
            <button type="submit" name="envoyer">Envoyer</button>
        </form>
		<?php include("./backend/enregistrement.php");?>
        <p>Déjà un compte ? <a href="connection.php">Connectez-vous</a></p>
    </div>
	<script language="javascript" src="./assets/js/verification.js"></script>
</body>

</html>
