<?php
//session démarrée
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
    <title>Checkboxes</title>

</head>


<body>
    
<div class="container-fluid">
    <div class="row text-center justify-content-center mt-5">

    <?php

    $tableau = $_POST["tableau"];

    //var_dump($tableau);

    if(isset($_POST)){
    //echo "la variable existe";
    }

    foreach($tableau as $aliasTableau){
        echo "Vous avez sélectionné la table de : " . $aliasTableau;

        for($i = 0; $i <= 10; $i++){
            $resultat = $i * $aliasTableau;
            echo "$resultat" . "<br>";
        }
        echo "<hr>";
    }
    ?>

        <div>
            <button class="btn btn-outline-dark w-25 mt-3"><a href="./accueil.php">RETOUR</a></button>
        </div>

    </div>
</div>


</body>
</html>