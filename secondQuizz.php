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
    
    
    <title>Second Quizz</title>

    

</head>


<body>
    
    <div class="container-fluid">
        <div class="row text-center">

            <h2 class="text-center mt-5 mb-5">Second Quizz!</h2>

        </div>
    </div>


    <?Php

    $tableau_1 = [
            [
            "question_1" => "Trouvez l'intru : ",
            "reponse_1" => "Bleu",
            "reponse_2" => "Rouge",
            "reponse_3" => "Banane",
            "reponse_4" => "Vert",
            "reponse_5" => "Violet"
            ]
            ];

    $tableau_2 = [
            [
            "question_2" => "Trouvez l'intru : ",
            "reponse_1" => "Tomate",
            "reponse_2" => "Chou",
            "reponse_3" => "Aubergine",
            "reponse_4" => "Haricot",
            "reponse_5" => "Courgette"
            ]
            ];

    $tableau_3 = [
            [
            "question_3" => "Trouvez l'intru : ",
            "reponse_1" => "Avion",
            "reponse_2" => "Bateau",
            "reponse_3" => "Voiture",
            "reponse_4" => "Moto",
            "reponse_5" => "Chameau"
            ]
            ];

    $tableau_4 = [
            [
            "question_4" => "Trouvez l'intru : ",
            "reponse_1" => "Assiette",
            "reponse_2" => "Couteau",
            "reponse_3" => "Fourchette",
            "reponse_4" => "Cuillère",
            "reponse_5" => "Torchon"
            ]
            ];

    $tableau_5 = [
            [
            "question_5" => "Trouvez l'intru : ",
            "reponse_1" => "Ordinateur",
            "reponse_2" => "Console",
            "reponse_3" => "Minitel",
            "reponse_4" => "Cahier",
            "reponse_5" => "Téléphone"
            ]
            ];
    
                            
//QUESTION 1

        foreach($tableau_1 as $questionsReponses_1){
            //var_dump($questionsReponses_1);
            //var_dump($questionsReponses_1["question_1"]);
        }

        ?>

        <div id="question-1" class="container-fluid bg-secondary p-5 mb-5 w-50 m-auto rounded">
            <div class="row">

                        <h2 id="h2-question-quizz" class="text-center text-white"> Question n° 1 <br> <?= $questionsReponses_1["question_1"] ?> </h2>

                        <form action="" method="POST" id="form-question-q1">

                            <div id="reponse-q1" class ="text-center text-white mt-4 mb-1">
                                <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_1["reponse_1"]?>">
                                <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_1["reponse_1"] ?> "><?= $questionsReponses_1["reponse_1"]?> </label>
                            </div>

                            <div id="reponse-q1" class ="text-center text-white mt-1 mb-1">
                                <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_1["reponse_2"]?>">
                                <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_1["reponse_2"] ?> "><?= $questionsReponses_1["reponse_2"]?> </label>
                            </div>

                            <div id="reponse-q1" class ="text-center text-white mt-1 mb-1">
                                <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_1["reponse_3"]?>">
                                <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_1["reponse_3"] ?> "><?= $questionsReponses_1["reponse_3"]?> </label>
                            </div>

                            <div id="reponse-q1" class ="text-center text-white mt-1 mb-1">
                                <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value =  "<?= $questionsReponses_1["reponse_4"]?>">
                                <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_1["reponse_4"] ?> "><?= $questionsReponses_1["reponse_4"]?> </label>
                            </div>

                            <div id="reponse-q1" class ="text-center text-white mt-1 mb-1">
                                <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_1["reponse_5"]?>">
                                <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_1["reponse_5"] ?> "><?= $questionsReponses_1["reponse_5"]?> </label>
                            </div>

                            
                            
                            <div class="mt-5 border bg-info border-dark rounded  text-center p-3 w-25 m-auto">
                                    <button type="submit" name="btn-valider-question1" id="btn-valider-reponse1" class="rounded border border-warning">Valider la réponse</button>
                            </div>

                            

                            </form>

                            <?php
                            if(isset($_POST["btn-valider-question1"])){
                                //echo "btn ok";

                                //var_dump($questionsReponses_1["reponse_3"]);
                                //var_dump($_POST["reponse"]);
                                
                                
                                if($_POST["reponse"] === $questionsReponses_1["reponse_3"]){
                                    echo '<p class="alert alert-success text-center mt-3 w-50 m-auto"> CORRECT! </p>';
                                    $_SESSION["score"] += 1;

                                    ?>
                                    <style>
                                        #form-question-q1{
                                            display: none;
                                        }
                                        
                                    </style>   
                                    <?php
                                    
                                }else{
                                    ?>
                                    <div>
                                    <p class="alert alert-danger text-center mt-3 w-50 m-auto"> INCORRECT! La réponse était: Banane </p>
                                    </div>
                                    <?php
                                    $_SESSION["score"] += 0;

                                    ?>
                                    <style>
                                        #form-question-q1{
                                            display: none;
                                        }
                                        
                                    </style>   
                                    <?php
                                    
                                }
                                
                            }

                            ?>
            </div>
        </div>
            
        <?php

//QUESTION 2
    foreach($tableau_2 as $questionsReponses_2){
        //var_dump($questionsReponses_2);           
    }

    ?>

    <div id="question-2" class="container-fluid bg-secondary p-5 mb-5 w-50 m-auto rounded">
        <div class="row">
    
        <h2 id="h2-question-quizz" class="text-center text-white"> Question n° 2 <br> <?= $questionsReponses_2["question_2"] ?> </h2>

                    <form action="" method="POST" id="form-question-q2">

                        <div id="reponse-q2" class ="text-center text-white mt-4 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_2["reponse_1"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_2["reponse_1"] ?> "> <?= $questionsReponses_2["reponse_1"] ?> </label>
                        </div>

                        <div id="reponse-q2" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_2["reponse_2"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_2["reponse_2"] ?> "> <?= $questionsReponses_2["reponse_2"] ?> </label>
                        </div>

                        <div id="reponse-q2" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_2["reponse_3"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_2["reponse_3"] ?> "> <?= $questionsReponses_2["reponse_3"] ?> </label>
                        </div>

                        <div id="reponse-q2" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_2["reponse_4"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_2["reponse_4"] ?> "> <?= $questionsReponses_2["reponse_4"] ?> </label>
                        </div>

                        <div id="reponse-q2" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_2["reponse_5"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_2["reponse_5"] ?> "> <?= $questionsReponses_2["reponse_5"] ?> </label>
                        </div>


                        <div class="mt-5 border bg-info border-dark rounded  text-center p-3 w-25 m-auto">
                            <button type="submit" name="btn-valider-question2" id="btn-valider-reponse2" class="rounded border border-warning">Valider la réponse</button>
                        </div>


                    </form>

                    <?php
                    if(isset($_POST["btn-valider-question2"])){
                        //echo "btn ok";

                        //var_dump($questionsReponses_2["reponse_1"]);
                        //var_dump($_POST["reponse"]);                     
                        

                        if($_POST["reponse"] === $questionsReponses_2["reponse_1"]){
                            echo '<p class="alert alert-success text-center mt-3 w-50 m-auto"> CORRECT! </p>';
                            $_SESSION["score"] += 1;

                            ?>
                            <style>
                                #form-question-q1{
                                    display: none;
                                }
                                #form-question-q2{
                                    display: none;
                                }
                                
                            </style>   
                            <?php
                            
                        }else{
                            ?>
                            <div>
                            <p class="alert alert-danger text-center mt-3 w-50 m-auto"> INCORRECT! La réponse était: Tomate </p>
                            </div>
                            <?php
                            $_SESSION["score"] += 0;

                            ?>
                            <style>
                                #form-question-q1{
                                    display: none;
                                }
                                #form-question-q2{
                                    display: none;
                                }
                            </style>   
                            <?php
                            
                        }
                        
                    }

                    ?>
    
        </div>
    </div>
           
    <?php


//QUESTION 3
    foreach($tableau_3 as $questionsReponses_3){
        //var_dump($questionsReponses_3);
    }

    ?>

    <div id="question-3" class="container-fluid bg-secondary p-5 mb-5 w-50 m-auto rounded">
        <div class="row">
    
        <h2 id="h2-question-quizz" class="text-center text-white"> Question n° 3 <br> <?= $questionsReponses_3["question_3"] ?> </h2>

                    <form action="" method="POST" id="form-question-q3">

                        <div id="reponse-q3" class ="text-center text-white mt-4 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_3["reponse_1"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_3["reponse_1"] ?> "> <?= $questionsReponses_3["reponse_1"] ?> </label>
                        </div>

                        <div id="reponse-q3" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_3["reponse_2"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_3["reponse_2"] ?> "> <?= $questionsReponses_3["reponse_2"] ?> </label>
                        </div>

                        <div id="reponse-q3" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_3["reponse_3"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_3["reponse_3"] ?> "> <?= $questionsReponses_3["reponse_3"] ?> </label>
                        </div>

                        <div id="reponse-q3" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_3["reponse_4"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_3["reponse_4"] ?> "> <?= $questionsReponses_3["reponse_4"] ?> </label>
                        </div>

                        <div id="reponse-q3" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_3["reponse_5"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_3["reponse_5"] ?> "> <?= $questionsReponses_3["reponse_5"] ?> </label>
                        </div>


                        <!-----------------BOUTON VALIDATION DE LA REPONSE----------------->
                        <div class="mt-5 border bg-info border-dark rounded  text-center p-3 w-25 m-auto">
                            <button type="submit" name="btn-valider-question3" id="btn-valider-reponse3" class="rounded border border-warning">Valider la réponse</button>
                        </div>

                    </form>

                    <?php
                    if(isset($_POST["btn-valider-question3"])){
                        //echo "btn ok";

                        //var_dump($questionsReponses_3["reponse_5"]);
                        //var_dump($_POST["reponse"]);                     
                        

                        if($_POST["reponse"] === $questionsReponses_3["reponse_5"]){
                            echo '<p class="alert alert-success text-center mt-3 w-50 m-auto"> CORRECT! </p>';
                            $_SESSION["score"] += 1;

                            ?>
                            <style>
                                #form-question-q1{
                                    display: none;
                                }
                                #form-question-q2{
                                    display: none;
                                }
                                #form-question-q3{
                                    display: none;
                                }
                            </style>   
                            <?php
                            
                        }else{
                            ?>
                            <div>
                            <p class="alert alert-danger text-center mt-3 w-50 m-auto"> INCORRECT! La réponse était: Chameau </p>
                            </div>
                            <?php
                            $_SESSION["score"] += 0;

                            ?>
                            <style>
                                #form-question-q1{
                                    display: none;
                                }
                                #form-question-q2{
                                    display: none;
                                }
                                #form-question-q3{
                                    display: none;
                                }
                            </style>   
                            <?php
                            
                        }
                        
                    }

                    ?>
    
        </div>
    </div>
           
    <?php

//QUESTION 4
    foreach($tableau_4 as $questionsReponses_4){
        //var_dump($questionsReponses_4);
    }

    ?>

    <div id="question-4" class="container-fluid bg-secondary p-5 mb-5 w-50 m-auto rounded">
        <div class="row">
    
        <h2 id="h2-question-quizz" class="text-center text-white"> Question n° 4 <br> <?= $questionsReponses_3["question_3"] ?> </h2>

        
                    <form action="" method="POST" id="form-question-q4">

                        <div id="reponse-q4" class ="text-center text-white mt-4 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_4["reponse_1"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_4["reponse_1"] ?> "> <?= $questionsReponses_4["reponse_1"] ?> </label>
                        </div>

                        <div id="reponse-q4" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_4["reponse_2"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_4["reponse_2"] ?> "> <?= $questionsReponses_4["reponse_2"] ?> </label>
                        </div>

                        <div id="reponse-q4" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_4["reponse_3"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_4["reponse_3"] ?> "> <?= $questionsReponses_4["reponse_3"] ?> </label>
                        </div>

                        <div id="reponse-q4" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_4["reponse_4"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_4["reponse_4"] ?> "> <?= $questionsReponses_4["reponse_4"] ?> </label>
                        </div>

                        <div id="reponse-q4" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_4["reponse_5"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_4["reponse_5"] ?> "> <?= $questionsReponses_4["reponse_5"] ?> </label>
                        </div>


                        <!-----------------BOUTON VALIDATION DE LA REPONSE----------------->
                        <div class="mt-5 border bg-info border-dark rounded  text-center p-3 w-25 m-auto">
                            <button type="submit" name="btn-valider-question4" id="btn-valider-reponse4" class="rounded border border-warning">Valider la réponse</button>
                        </div>

                    </form>

                    <?php
                    if(isset($_POST["btn-valider-question4"])){
                        //echo "btn ok";

                        //var_dump($questionsReponses_4["reponse_5"]);
                        //var_dump($_POST["reponse"]);                     
                        

                        if($_POST["reponse"] === $questionsReponses_4["reponse_5"]){
                            echo '<p class="alert alert-success text-center mt-3 w-50 m-auto"> CORRECT! </p>';
                            $_SESSION["score"] += 1;

                            ?>
                            <style>
                                #form-question-q1{
                                    display: none;
                                }
                                #form-question-q2{
                                    display: none;
                                }
                                #form-question-q3{
                                    display: none;
                                }
                                #form-question-q4{
                                    display: none;
                                }
                            </style>   
                            <?php
                            
                        }else{
                            ?>
                            <div>
                            <p class="alert alert-danger text-center mt-3 w-50 m-auto"> INCORRECT! La réponse était: Torchon </p>
                            </div>
                            <?php
                            $_SESSION["score"] += 0;

                            ?>
                            <style>
                                #form-question-q1{
                                    display: none;
                                }
                                #form-question-q2{
                                    display: none;
                                }
                                #form-question-q3{
                                    display: none;
                                }
                                #form-question-q4{
                                    display: none;
                                }
                            </style>   
                            <?php
                            
                        }
                        
                    }

                    ?>
    
        </div>
    </div>
           
    <?php

//QUESTION 5
    foreach($tableau_5 as $questionsReponses_5){
        //var_dump($questionsReponses_5);
    }

    ?>

    <div id="question-5" class="container-fluid bg-secondary p-5 mb-5 w-50 m-auto rounded border-dark">
        <div class="row">
    
        <h2 id="h2-question-quizz" class="text-center text-white">  Question n° 5 <br> <?= $questionsReponses_3["question_3"] ?> </h2>

                    <form action="" method="POST" id="form-question-q5">

                        <div id="reponse-q5" class ="text-center text-white mt-4 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_5["reponse_1"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_5["reponse_1"] ?> "> <?= $questionsReponses_5["reponse_1"] ?> </label>
                        </div>

                        <div id="reponse-q5" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_5["reponse_2"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_5["reponse_2"] ?> "> <?= $questionsReponses_5["reponse_2"] ?> </label>
                        </div>

                        <div id="reponse-q5" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_5["reponse_3"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_5["reponse_3"] ?> "> <?= $questionsReponses_5["reponse_3"] ?> </label>
                        </div>

                        <div id="reponse-q5" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_5["reponse_4"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_5["reponse_4"] ?> "> <?= $questionsReponses_5["reponse_4"] ?> </label>
                        </div>

                        <div id="reponse-q5" class ="text-center text-white mt-1 mb-1">
                            <input id="input-reponse" class="form-check-input" type="radio" name = "reponse" value = "<?= $questionsReponses_5["reponse_5"]?>">
                            <label id = "label-reponse" for="input-reponse" value = " <?= $questionsReponses_5["reponse_5"] ?> "> <?= $questionsReponses_5["reponse_5"] ?> </label>
                        </div>


                        <!-----------------BOUTON VALIDATION DE LA REPONSE----------------->

                        <div class="mt-5 border bg-info border-dark rounded  text-center p-3 w-25 m-auto">
                            <button type="submit" name="btn-valider-question5" id="btn-valider-reponse5" class="rounded border border-warning">Valider la réponse</button>
                        </div>

                    </form>

                    <?php
                    if(isset($_POST["btn-valider-question5"])){
                        //echo "btn ok";

                        //var_dump($questionsReponses_5["reponse_4"]));
                        //var_dump($_POST["reponse"]);                     
                        

                        if($_POST["reponse"] === $questionsReponses_5["reponse_4"]){
                            echo '<p class="alert alert-success text-center mt-3 w-50 m-auto"> CORRECT! </p>';
                            $_SESSION["score"] += 1;

                            ?>
                            <style>
                                #form-question-q1{
                                    display: none;
                                }
                                #form-question-q2{
                                    display: none;
                                }
                                #form-question-q3{
                                    display: none;
                                }
                                #form-question-q4{
                                    display: none;
                                }
                                #form-question-q5{
                                    display: none;
                                }
                            </style>   
                            <?php
                            
                        }else{
                            ?>
                            <div>
                            <p class="alert alert-danger text-center mt-3 w-50 m-auto"> INCORRECT! La réponse était: Cahier </p>
                            </div>
                            <?php
                            $_SESSION["score"] += 0;

                            ?>
                            <style>
                                #form-question-q1{
                                    display: none;
                                }
                                #form-question-q2{
                                    display: none;
                                }
                                #form-question-q3{
                                    display: none;
                                }
                                #form-question-q4{
                                    display: none;
                                }
                                #form-question-q5{
                                    display: none;
                                }
                            </style>   
                            <?php
                            
                        }
                        
                    }

                    ?>
    
        </div>
    </div>
           
<!-----------------BOUTON SCORE TOTAL----------------->

<?php
switch($_SESSION["score"]){
    case 0:
        ?>
        <div class="mb-5 bg-info">
            <p class="alert alert-danger text-center w-50 m-auto"> Score total: <?= $_SESSION["score"] ?>/5</p>
        </div>
        <?php
        break;
    case 1:
        ?>
        <div class="mb-5 bg-info">
            <p class="alert alert-danger text-center w-50 m-auto"> Score total: <?= $_SESSION["score"] ?>/5</p>
        </div>
        <?php
        break;
    case 2:
        ?>
        <div class="mb-5 bg-info">
            <p class="alert alert-warning text-center w-50 m-auto"> Score total: <?= $_SESSION["score"] ?>/5</p>
        </div>
        <?php
        break;
    case 3:
        ?>
        <div class="mb-5 bg-info">
            <p class="alert alert-warning text-center w-50 m-auto"> Score total: <?= $_SESSION["score"] ?>/5</p>
        </div>
        <?php
        break;
    case 4:
        ?>
        <div class="mb-5 bg-info">
            <p class="alert alert-success text-center w-50 m-auto"> Score total: <?= $_SESSION["score"] ?>/5</p>
        </div>
        <?php
        break;
    case 5:
        ?>
        <div class="mb-5 bg-info">
            <p class="alert alert-success text-center w-50 m-auto"> Score total: <?= $_SESSION["score"] ?>/5</p>
        </div>
        <?php
        break;
}
?>

        

<!-----------------RETOUR ACCUEIL----------------->
            <div class="text-center mb-5 w-25 m-auto">
                <button class="btn btn-outline-dark w-50 mt-2"><a href="./accueil.php">RETOUR ACCUEIL</a></button>
            </div>

</body>
</html>