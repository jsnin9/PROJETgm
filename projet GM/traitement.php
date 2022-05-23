<?php
 
   require "db.class.php";
   $DB = new DB();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   


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

if (isset($_POST['nom'])){

 

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $statut = $_POST['statut'];
    $nomSociete= $_POST['societe'];
    $typeSociete = $_POST['type'];

    $siret = $_POST['siret'];

    $telephone = $_POST['telephone'];
    $email = $_POST['mail'];
    $mdp= $_POST['mdp'];


   $req = "INSERT INTO Client(nom, prenom, nomSociete, typeSociete, email, motDePasse) VALUES('$nom','$prenom','$nomSociete','$typeSociete', '$email','$mdp' )";

    

  $query = $DB->query($req );

    echo "<p>Inscription réussie !</p>";

}

else{
    echo "erreur d'enregistrement!<br>";
}

?>

<div class=""><a href="index.php"><button type="submit">Appuyer pour retourner à la page d'acceuil</a></button></div>


    
</body>
</html>
