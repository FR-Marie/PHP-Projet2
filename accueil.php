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
    
    
    <title>Quizz PHP -Accueil-</title>


</head>


<body>
    
<!-------------------------TABLE DE 3-------------------------->
<div class="container-fluid mb-5">
    <div class="row text-center">

        <h2 class="h2 mt-5">LA TABLE DE 3</h2>
        <button class="btnTableDe3 rounded bg-secondary text-white"><a href="./tablede3.php">VOIR LA TABLE DE 3</a></button>

    </div>
</div>
<hr>


<!-------------------------TABLE DE CHOIX AVEC FENETRE DEROULANTE-------------------------->
<div class="container-fluid mt-5">
        <div class="row text-center">

        <h2 class="h2">Table de multiplication dans fenêtre déroulante</h2>

        
        <form action="choixTable.php" method="post">

        <label for="choix">↓ Choisissez une table dans le menu déroulant ↓</label>
            <select name="multiple" id="multiple" class="form-control w-25 m-auto">
                <option value="">cliquez ici</option>
                <option value="1">Table de 1</option>
                <option value="2">Table de 2</option>
                <option value="3">Table de 3</option>
                <option value="4">Table de 4</option>
                <option value="5">Table de 5</option>
                <option value="6">Table de 6</option>
                <option value="7">Table de 7</option>
                <option value="8">Table de 8</option>
                <option value="9">Table de 9</option>
                <option value="10">Table de  10</option>
            </select>

            <button type="submit" class="mt-3 rounded bg-secondary text-white"> Valider </button>

        </form>

        </div>
    </div>
    <hr>
<!-------------------------TABLES AVEC CHECKBOX-------------------------->
<div class="container-fluid mt-5">
        <div class="row text-center">

        <h2 class="h2 mt-5 mb-4">Table de multiplication dans fenêtre déroulante</h2>


            <form action="checkbox.php" method="post">

                <label for="" class="border border-dark rounded p-2">Table de 1</label>
                <input type="checkbox" name="tableau[]" value="1" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 2</label>
                <input type="checkbox" name="tableau[]" value="2" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 3</label>
                <input type="checkbox" name="tableau[]" value="3" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 4</label>
                <input type="checkbox" name="tableau[]" value="4" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 5</label>
                <input type="checkbox" name="tableau[]" value="5" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 6</label>
                <input type="checkbox" name="tableau[]" value="6" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 7</label>
                <input type="checkbox" name="tableau[]" value="7" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 8</label>
                <input type="checkbox" name="tableau[]" value="8" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 9</label>
                <input type="checkbox" name="tableau[]" value="9" class="me-3"></input>

                <label for="" class="border border-dark rounded p-2">Table de 10</label>
                <input type="checkbox" name="tableau[]" value="10" class="me-3"></input>

                <div>
                    <button type="submit" class="mt-3 rounded bg-secondary text-white"> Valider </button>
                </div>

            
            </form>

    </div>
</div>
<hr>
<!------------------------- MULTIPLICATION ALEATOIRE SELON REPONSE UTILISATEUR-------------------------->
<div class="container-fluid mt-5">
    <div class="row text-center">

        <h2 class="h2 mt-5 mb-4">Multiplication random</h2>

        

            <form action="random.php" method="POST">

                <?php
                $tableau_1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                $tableau_2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

                $aleatoire_1 = array_rand($tableau_1);
                $aleatoire_2 = array_rand($tableau_2);

                $multiplicationAfaire = "$aleatoire_1 * $aleatoire_2";
                $resultat = $aleatoire_1 * $aleatoire_2;

                //var_dump($multiplicationAfaire);
                //var_dump($resultat);
                
                
                ?>

        
                <label for="MultiplicationAfaire"> <?= $multiplicationAfaire . " = "?></label>
                <input type="number" min = 0 name= "reponseUtilisateur">
                <input type="hidden" min = 0 name = "bonneReponse" value = "<?= $resultat ?>">

                <button type="submit" class="rounded bg-secondary text-white">Ok</button>

            </form>

    </div>
</div>
<hr>
<!------------------------- QUIZZ-------------------------->
        <div class="text-center mt-5 mb-5">
            <h2 class="h2 mt-5 mb-4">Le Quizz</h2>
            <button id="btn-quizz" class="rounded text-white"><a class="lien-bouton-quizz" href="quizz.php">Accéder au Quizz</a></button>
        </div>



        
<hr>
<!------------------------- QUIZZ  2-------------------------->
    <div class="text-center mt-5 mb-5">
        <h2 class="h2 mt-5 mb-4">Un second Quizz</h2>
        <button id="btn-quizz" class="rounded text-white"><a class="lien-bouton-quizz" href="secondQuizz.php">Accéder au second Quizz</a></button>
    </div>





<!-------SESSION------->
        <?php
    }else{
        header("location: index.php");
    }
    ?>
</body>

</html>
