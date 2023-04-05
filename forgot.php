<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
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
            <button type="submit" name="envoyer">search</button>
        </form></br>
		<?php include("./backend/forgot.php"); ?>
        <p><a href="connection.php">Connectez-vous !</a></p>
    </div>
</body>
</html>
