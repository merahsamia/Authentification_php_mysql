		
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
   
    
    <?php
    	if (isset($_SESSION['login']))
    	{				
    		header("Location: index.php"); 

    	}
    	else
    	{
    ?>
    		<p>	
   
        	Veuillez vous connecter à votre compte:
   

			<form action="Login_post.php" method="POST">
    			
    			<label>Nom d'utilisateur</label>
				<input type=text name="user_name">
				<label>mot de passe</label>
				<input type=password name="pwd">
				<button type="submit" value="Se connecter" >Connexion</button>

    		</form>     

    		   <a href="index.php"> Accueil </a><br>
 

    	</p>

    <?php
    	}
    ?>
	
        

    
    
    </body>
</html>