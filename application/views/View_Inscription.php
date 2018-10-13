<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>CSS/style.css">

  
</head>

<body>

  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Votre image</h1>
      <input type="file" name="photoUser"/>      
    </div>
    
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="#">
      <div class="form-group">
      
      <div class="form-group">
        <label for="nomUser">Nom et prénom</label>
        <input class="form-control" type="text" name="nomUser" id="nomUser" required />
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input class="form-control" type="text" name="email" id="email" required />
      </div>

      <div class="form-group">
        <input type="radio" name="sexe" value="0" checked><label for="homme"> Homme </label><input type="radio" name="sexe" value="1" checked><label for="femme"> Femme</label>
      </div>

      <div class="form-group">
      <label for="username">Date de naissance</label>
        <input class="form-control" type="date" name="dateNaissance" id="dateNaissance" required />
      </div>

        <div class="form-group">
        <label for="username">Login</label>
        <input class="form-control" type="text" name="login" id="login" required />
      </div>

      <div class="form-group">
        <label for="email">Mot de passe</label>
        <input class="form-control" type="password" name="mdp" id="mdp" required />
      </div>
      
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Inscription" />
          </li>
		  <br>
      <br>
          <li>
            <a class="signup__link" href="<?php echo site_url('ControleurConnexion/pageConnexion') ?>">Je suis déjà membre</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
  
  

</body>

</html>