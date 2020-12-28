<?php 
	session_start();
	include ("Db.php");

	


	if (isset($_POST['user_name']) AND isset($_POST['pwd']))
	{	
		$req = $bdd->prepare('Select * from user where user_name = ?');
		$req->execute(array($_POST['user_name']));
		$tab=$req->fetchAll();


        	

			if (count($tab) == 0)
			{
				$requ = $bdd->prepare('INSERT INTO user values (?, ?)');
				$requ->execute(array($_POST['user_name'], $_POST['pwd']));
				header("Location: Login.php");

				
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
    	<p>Already exists!</p>
        <a href="SignUp.php"> Connexion </a><br>
        <a href="index.php"> Accueil </a><br>


     </body>
</html>
<?php

			//$_SESSION['login'] = false;
			

		}
	}

	?>
    


		