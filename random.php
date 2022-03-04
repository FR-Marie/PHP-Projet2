<?php
//session démarrée
session_start();


if(isset($_SESSION['email'])){
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
    <title>Random</title>

</head>


<body>
    
<div class="text-center">
    
    <?php

        if(isset($_POST["reponseUtilisateur"])){
            $reponseUtilisateur = $_POST["reponseUtilisateur"];
        }

        if(isset($_POST["bonneReponse"])){
            $bonneReponse = $_POST["bonneReponse"];
        }

        if($reponseUtilisateur === $bonneReponse){
            ?>
            <h3 class="alert alert-success text-center">Bravo! La réponse était bien <?= $bonneReponse ?></h3>
            <?php
        }else{
            ?>
            <h3 class="alert alert-danger text-center">Perdu! La réponse était <?= $bonneReponse ?></h3>
            <?php
        }

    ?>

    <div>
        <button class="btn btn-outline-dark w-25 mt-5"><a href="./accueil.php">RETOUR</a></button>
    </div>

</div>



<!-------SESSION------->
<?php
    }else{
        header("location: index.php");
    }
    ?>
</body>
</html>