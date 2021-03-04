<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 <link rel="stylesheet" href="./public/css/main.css" />

	 <title>Test</title>
</head>
<body>
	<?php include('./views/includes/header.php');?>

    <div class="container">
    <!-- Form Login -->
    <?php
       $error='';
       if(isset($_GET['message_error'])){ 
        
          //récuperer paramètre d'url : 'message_error'

          $code_error = $_GET['message_error'];
          if($code_error==1){
              $error='Login/Password non valide(s)!';
          }else if($code_error==2){
              $error='Champs obligatoires non saisis!';
          }else if($code_error==3){
              $error='Les 2 mots de passe doivent correspondre!';
          }
       }
    ?>

    <?php if(empty($_SESSION['user']) && !isset($_GET['signup'])){ ?>  	
      <form action="traitement.php" method="POST">

        <div class="form-group row">
          <div class="col-sm-10">
              <h3>Se Connecter</h3>
          </div>
        </div>
        <?php
          if($error!=''){
        ?>
          <div class="alert alert-danger">
            <?= $error ?>
          </div>
        <?php
          }
        ?>
        
        <input type="email" name="email" placeholder="votre login (email).." class="form-control" />
        <input type="password" name="password" placeholder="votre mot de passe.." class="form-control" />

        <input type="submit" name="login_ok" value="Se Connecter" class="form-control btn btn-success"/>

        <a href="traitement.php?signup">Créer mon compte!</a>
      </form>

    <?php }?>

    <?php if(isset($_GET['signup'])){ ?>
      <form action="traitement.php" method="POST">

        <div class="form-group row">
          <div class="col-sm-10">
              <h3>Création Compte</h3>
          </div>
        </div>

        <?php
          if($error!=''){
        ?>
          <div class="alert alert-danger">
            <?= $error ?>
          </div>
        <?php
          }
        ?>
        
        <input type="text" name="prenom" placeholder="votre prénom.." class="form-control" />
        <input type="text" name="nom" placeholder="votre nom.." class="form-control" />

        <input type="email" name="email" placeholder="votre email (login).." class="form-control" />
        <input type="password" name="password" placeholder="votre mot de passe.." class="form-control" />
        <input type="password" name="password_confirm" placeholder="confirmer mot de passe.." class="form-control" />

        <input type="submit" name="signup_ok" value="Créer mon compte" class="form-control btn btn-success"/>

      </form>

    <?php } ?>
  </div> 

	<?php include('./views/includes/footer.php');?>
</body>
</html>
