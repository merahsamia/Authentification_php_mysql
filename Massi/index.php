<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
    </head>
    <body>
    <p>
        
        Accueil 
    </p>
    </body>

    <?php
    	if (isset($_SESSION['login']))
    	{
    ?>
    		
    		<a href="deco.php"> Deconnexion </a><br>
    		<a href="Profil.php"> Profil </a><br>

    <?php
    	}
    	else{
    ?>
    	    <a href="Login.php"> Se connecter </a><br>
    	    <a href="SignUp.php"> S'inscrire </a><br>


	<?php

    	}

    ?>
</html>