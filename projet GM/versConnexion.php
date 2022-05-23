<?php
    if(!isset($_SESSION)){
    session_start();
    }



require "db.class.php";
$DB = new DB();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bouton.css">

    <title>redirection</title>


    
    <style>   button{ background-color:  #52cf18;
    border: 2px solid  #52cf18;
    border-radius: 4px;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    font-size: 12px;
    padding: 5px;
    margin-top: 10px;
    cursor: pointer;
    margin-bottom: 50px;}</style>

    
</head>
<body>

<?php

if (isset($_POST['email'])){
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];


    $req = "SELECT * FROM client WHERE email like '$email' AND motDePasse like '$mdp'";
    $query = $DB->query($req);


    if (!empty($query)){
        echo "</p>Vous êtes authentifié dans notre base de données"."<br>";
        echo "Bienvenue : ".$query[0]->nom." ".$query[0]->prenom."<br>";
        echo "Nom de Societe : ".$query[0]->nomSociete."<br>";
        echo "Type de Societe : ".$query[0]->typeSociete."<br>";

                
        $_SESSION['connexion'] = array();
        $_SESSION['connexion']['nom'] = $query[0]->nom;
        $_SESSION['connexion']['prenom'] = $query[0]->prenom;
        $_SESSION['connexion']['nomSociete'] = $query[0]->nomSociete;
        $_SESSION['connexion']['typeSociete'] = $query[0]->typeSociete;

     
    



}else{
echo "Vous n'êtes pas authentifié dans notre base de données <br>"; 
   }
}

?>



<a href="index.php"> <button type="submit"><p>Appuyer pour retourner à la page d'acceuil</p></button></a>

</body>
</html>