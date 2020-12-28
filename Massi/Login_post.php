<?php 
	session_start();
	include ("Db.php");

	


	if (isset($_POST['user_name']) AND isset($_POST['pwd']))
	{	$req = $bdd->prepare('SELECT * FROM user WHERE user_name = ? AND pwd = ?');
		$req->execute(array($_POST['user_name'], $_POST['pwd']));
		$tab=$req->fetchAll();


        	

			if (count($tab) != 0)
			{
				echo 'Bienvenue  '. $_POST['user_name'] ;
				$_SESSION['login'] = true;
				header("Location: Profil.php"); 

			}

			else
	{?>
			
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <title>Accueil</title>
    </head>
    <body>
    	<p>password or user_name incorrect</p>
        <a href="Login.php"> Connexion </a><br>
        <a href="index.php"> Accueil </a><br>


     </body>
</html>
<?php

			//$_SESSION['login'] = false;
			

		}
	}

	?>
    


		