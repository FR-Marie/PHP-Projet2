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
    
    
    <title>Table-de-3</title>

</head>


<body>

    <!---------TABLE DE 3----------->
<div class="container-fluid">
    <div class="row w-25 m-auto text-center justify-content-center">

        <h2 class="h2 mt-5 mb-5">LA TABLE DE 3</h2>


        <?php

        $multiplicateur = 3;
        
        for ($i = 0; $i <= 10; $i++){
            $resultat = $i * $multiplicateur;
            echo "$i" . "x" . "$multiplicateur = " . $i * $multiplicateur ."<br>";
        }

        ?>

        <div>
            <button class="btn btn-outline-dark w-25 mt-3"><a href="./accueil.php">RETOUR</a></button>
        </div>
        

    </div>
</div>
    
    
    
<!-------SESSION------->
<?php
    }else{
        header("location:index.php");
    }
    ?>
</body>
</html>