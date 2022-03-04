<?php
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
    
    
    <title>Connexion</title>

</head>
    

<div class="container-fluid">
    <div class="row text-center mt-5">

        <h2>Connectez vous pour accéder au site</h2>

        <div class="bg-secondary mt-5 w-75 m-auto">
            <form  method="POST">

                <div class="mb-4 pt-5">
                    <label for="email" class="d-block">Votre email</label>
                    <input type="email" name="email"  required class="text-center p-2 w-25 rounded">
                </div>

                <div class="mt-4 mb-4">
                    <label for="password" class="d-block">Votre mot de passe</label>
                    <input type="password" name="password"  required class="text-center p-2 w-25 rounded">
                </div>

                <div class="mt-4 p-5">
                     <button type="submit" name="btn-connexion">Connexion</button>
                </div>
                
            </form>

            <?php

            //fonction connexion avec le bouton "connexion"
            if(isset($_POST["btn-connexion"])){
                connexion();
            }

            function connexion(){

                 //hydratation (anti xss) (= sanitize)
                 $userEmail = trim(htmlspecialchars($_POST["email"]));
                 $userPassword = trim(htmlspecialchars($_POST["password"]));
     
                if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])){
                     //var_dump($_POST['email']);
                     //ids fictifs
                     $email = "emailtest@email.com";
                     $password = "mdptest";
                     
                            if($userEmail == $email && $userPassword == $password){
                                $_SESSION['email'] = $userEmail;
                                header("location: accueil.php");
                            }else{
                                ?>
                                <h3 class="alert alert-danger text-center">Erreur, merci de vérifier vos identifiants.</h3>
                                <?php
                            }
                     
                        }else{
                            echo "merci de remplir tous les champs";
                }
             }
            
             ?>

        </div>
    </div>
</div>

    
</body>
</html>