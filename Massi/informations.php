

<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Infos</title>
    </head>
    <body>
    



<?php


if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) 
{
    header("Location: index.php");
    exit;
}
else
{
    echo'Je me souviens de toi tu t appelles ' . $_SESSION['pseudo'];
}
?>

    <p>
            <a href="Profil.php"> Retour au profil </a><br>


    </p>
    

</body>
</html>






