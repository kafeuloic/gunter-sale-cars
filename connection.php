<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion</title>
    <link rel="stylesheet" href="./assets/css/auth.css" />
	<link rel="shortcut icon" href="favicon.jpg" type="image/gif" />
</head>

<body>
    <div id="contenu">
        <img src="./assets/images/icone.jpg" alt="logo" /> <br /> <br />
		<h3 style="color:red" align="center"></h3>
        <form action="" method="post">
            <label for="email">Adresse e-mail</label><br />
            <input type="email" name="email" placeholder="name@gmail.com" id="email" required/> <br />
            <label for="mdp">Mot de passe</label><br />
            <input type="password" name="mdp" id="mdp" minlength="8" maxlength="8" required/><br />
            <button type="submit" name="envoyer">Envoyer</button>
        </form>
		<?php include("./backend/connexion.php"); ?>
        <p>Pas de compte ? <a href="enregistrement.php">Creer un compte</a></p>
        <p><a href="forgot.php">Mot de passe oublié ?</a></p>
    </div>
</body>

</html>
