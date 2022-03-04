<?php
//session démarrée
session_start();


if(isset($_SESSION['email'])){
?>
<div class="d-flex alert alert-info text-center justify-content-around">
    <h3 class="">Bienvenue <?= $_SESSION['email'] . "!"?> </h3>
    <form action="" method="POST">
    <button type="submit" name="btn-deconnexion" class="text-white bg-warning h-100 mt-2">DECONNEXION</button>
    </form>
    </div>

    <?php


    if(isset($_POST["btn-deconnexion"])){

        session_unset();
        session_destroy();
        header("location:index.php");
    }

    $_SESSION["score"] = 0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
    <title>Roue de la fortune</title>


</head>


<body>
    


<!-------SESSION------->
    <?php
    }else{
        header("location: index.php");
    }
    ?>
</body>
</html>