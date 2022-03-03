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
    
    
    <title>Quizz Page 2</title>

</head>

<body>

    <div class="alert alert-dark text-white text-center">
        <h4>Score : <?=  $_SESSION["score"] ?> /5</h4>
    </div>

    <div class="text-center">
        <button class="btn-question-precedente rounded"><a href="quizz-P3.php">Précédent</a></button>
    </div>



    <?php

    $tableauAsso = [
        $tableauAsso2 = [
            "question" => "Et on travail sur...",
            "reponse_1" => "des minitels",
            "reponse_2" => "des cahiers",
            "reponse_3" => "des tableaux",
            "reponse_4" => "des ordinateurs"
            ]
        ];

    foreach($tableauAsso as $reponsesQuizz){
        //var_dump($questionsQuizz);
    }

    ?>


    <div class="container-fluid">
        <div class="row">
            <h2 id="h2-question-quizz" class= "text-center bg-secondary text-white mt-5 p-4"> <?= $reponsesQuizz["question"] ?> </h2>
        </div>

        <div class = "row text-center">

            <form action="" method = "POST">

            <div class ="question-reponses mt-5 mb-3">
                <div></div>
                <input type="radio" name = "reponse1">
                <label for="reponse1" value = "reponse1"> <?= $reponsesQuizz["reponse_1"] ?> </label>
            </div>

            <div class = "question-reponses mt-3 mb-3">
                <input type="radio" name = "reponse2">
                <label for="reponse2" value = "reponse2"> <?= $reponsesQuizz["reponse_2"] ?> </label>
            </div>

            <div class = "question-reponses mt-3 mb-3">
                <input type="radio" name = "reponse3">
                <label for="reponse3" value = "reponse3"> <?=  $reponsesQuizz["reponse_3"] ?> </label>
            </div>

            <div class = "question-reponses mt-3 mb-3">
                <input type="radio" name = "reponse4">
                <label for="reponse4" value = "reponse4"> <?= $reponsesQuizz["reponse_4"] ?> </label>
             </div>


                <?php
                    $scoreJoueur = $_SESSION["score"];
                ?>

                

                <button id="btn-valider-reponse" class="rounded" type = "submit" name = "btn-valider">Valider réponse</button>

                
            </form>


            <?php
            
            if(isset($_POST["btn-valider"])){
                //echo "btn ok";

                if(isset($_POST["reponse3"]) && isset($_POST["reponse4"])){
                    ?>
                    <div>
                        <p class="alert alert-warning w-50 m-auto mt-5 mb-5">CORRECT! +1 POINT!</p>
                        
                    </div>

                    <style>
                        #btn-valider-reponse{
                            display: none;
                        }
                        #h2-question-quizz{
                            display: none;
                        }
                        .question-reponses{
                            display: none;
                        }
                    </style>

                    <?php
                    $_SESSION["score"] += 1;

                    
                }else{
                    ?>
                    <div>
                        <p class="alert alert-warning w-50 m-auto mt-5 mb-5">INCORRECT!</p>
                        <p>La réponse était <?= $reponsesQuizz["reponse_4"] ?> </p>
                        
                    </div>

                    <style>
                        
                        #btn-valider-reponse{
                            display: none;
                        }
                        #h2-question-quizz{
                            display: none;
                        }
                        .question-reponses{
                            display: none;
                        }
                    </style>

                    <?php
                    $_SESSION["score"] += 0;
                }
                
            }  

            ?>

                <div>
                    <button class="btn btn-outline-dark w-25 mt-5"><a href="./accueil.php">RETOUR ACCUEIL</a></button>
                </div>

        </div>
    </div>

</body>
</html>