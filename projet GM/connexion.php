<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>

  <?php require 'header.php';?>

<div class="box">
    <form  method="post" action="versConnexion.php">
      <h1>Se connecter</h1>

      <div class="réseaux">
        <p><i class="fab fa-google"></i></p> <!-- logo google -->
        <p><i class="fab fa-youtube"></i></p> <!-- logo yt -->
        <p><i class="fab fa-facebook-f"></i></p>   <!-- logo fb -->
        <p><i class="fab fa-twitter"></i></p> <!-- logo twitter -->
      </div>

      <p class="choisir-email"> Ou se connecter via votre adresse mail</p>

      <div class="inputs">
        <input name="email" type="email" placeholder="Adresse mail">
        <input name="mdp" type="password" placeholder="Mot de passe">
      </div>

      <p class="inscription"> Je n'ai pas de compte, je m'en <a href="inscription.php" style="text-decoration: none;">crée un</a>.</p>

      <div align="center">
        <button type="submit" >Se connecter</button>
      </div>

    </form>
  </div>
  <div class="bas">
  <?php require 'footer.php'; ?>
</div>
  </body>
</html>
