<!DOCTYPE html>
<html>
    <head>
        <title>Un titre</title>
        <meta charset="utf-8">
    </head>
    <body>
<?php
    $login = $_POST['login'];
    $MotDePasse = $_POST['password'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $newsletter = $_POST['newsletter'];
    $membre = $_POST['membre'];
    
    echo "$login<br>$MotDePasse<br>$age<br>$sexe<br>$newsletter<br>$membre";
?>
    </body>
</html>
