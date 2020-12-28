		
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
   
        	Veuillez remplir ces champs:
   

			<form action="SignUp_post.php" method="POST">
    			
    			<label>Nom d'utilisateur</label>
				<input type=text name="user_name" required></br>
				<label>mot de passe</label>
				<input type=password name="pwd"></br>
				<button type="submit" value="S'inscrire'" >S'inscrire</button>

    		</form>     

    		   
    		   </br>
    		   <a href="index.php"> Accueil </a><br>
 

    	</p>

    <?php
    	}
    ?>
	
    
    </body>
</html>