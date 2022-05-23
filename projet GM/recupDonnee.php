<?php session_start();


    $nbVariables = $_GET['nbVariables'];


    $donnees = file_get_contents('data1.json');
    $donnees = json_decode($donnees, true);


    $res = (int)($nbVariables/2);

    ?>

    <div class="resultat">
    <p>Client : <?=$_SESSION['connexion']['nom']." ".$_SESSION['connexion']['prenom'];?></p>
    <p>Nom de société  : <?=$_SESSION['connexion']['nomSociete'];?></p>
    <p>Type de société  : <?=$_SESSION['connexion']['typeSociete'];?></p>
    <p>Voici les solutions de votre problème d'optimisation :<strong> Z* = <?=$donnees[0]['opt'];?></strong></p>
    </div>

<div class="res">



<table>

<?php for ($k = 0; $k <= ($res); $k++):?>

    <tr>
        <th><p>X<?=($k+1)."*";?> = </th><td><p><?=$donnees[0]['res'][$k];?></p></td>
    </tr>

    <?php endfor; ?>

</table>

<table>

<?php for ($k = ($res+1); $k < $nbVariables; $k++):?>

    <tr>
        <?$k;?>
        <th><p>X<?=($k+1)."*";?> = </th><td><p><?=$donnees[0]['res'][$k];?></p></td>
    </tr>

<?php endfor; ?>

</table>

</div>
       
