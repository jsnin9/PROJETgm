<?php session_start(); 

    if(isset($_SESSION['connexion'])):?>

<?php 
    $nbVariables = $_GET['nbVariables'];
    $nbContraintes = $_GET['nbContraintes'];
?>    
<div class="titre"><h2>Fonction objectif Z</h2></div>
<div class="tableau">
<table>
    <thead>
    <tr>
            <?php for ($k = 1; $k <= ($nbVariables-1); $k++):?>
                <td> <div class="aligne"><input name = "coef<?=$k;?>"  type="text" placeholder="..." id="coef<?=$k;?>"><div class="plus"> <p>X<?=$k;?></p> <p>+</p> </div></div></td>
            <?php endfor;?>
            <td><div class="aligne"><input  name = "coef<?=$nbVariables;?>"  type="text" placeholder="..." id="coef<?=$k;?>"><div class="plus"> <p>X<?=$nbVariables;?></p></div></div></td>
    </tr>

</thead>

    <tbody>
        <?php for ($j = 1; $j <= $nbContraintes; $j++):?>
            <tr>
                    <?php for ($k = 1; $k <= ($nbVariables-1); $k++):?>
                        <td ><div class="aligne"><input  name = "cntr<?=$j.$k;?>"  type="text" placeholder="..." id="cntr<?=$j.$k;?>"><div class="plus"> <p>X<?=$k;?></p> <p>+</p> </div></div></td>
                    <?php endfor;?>
                        <td><div class="aligne"><input  name = "cntr<?=$j.$k;?>"  type="text" placeholder="..." id="cntr<?=$j.$k;?>"> <p>X<?=$nbVariables;?></p></div></td>
                    <td><span>&le;</span</td>
                    <td><div class="aligne"><input  name = "scnd<?=$j;?>"  type="text" placeholder="..." id="scnd<?=$j;?>"></div></td>
            </tr>
        <?php endfor;?>
    </tbody>

</table>
</div>

<div class="bouton">
            <button onclick="versCalcul()" type="button" >Valider</button>
            <button type="reset"> Effacer</button>
</div>
<?php endif;?>


<?php if (!isset($_SESSION['connexion'])):?>
   <small style="color:red">Veuillez vous connectez ! </small>
<?php endif ;?>