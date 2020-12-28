
<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PROFIL</title>
    </head>
    <body>
    



<?php

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) 
{
	header("Location: Login.php");
	exit;
}
else
{
	echo'Profil ';

?>

	<p>
           	<a href="index.php"> Accueil </a><br>
			<a href="deco.php"> Deconnexion </a><br>

	</p>

<?php
	}
?>
</body>
</html>