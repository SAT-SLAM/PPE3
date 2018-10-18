<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SAT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<<<<<<< HEAD

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<script type="text/javascript" src="<?php echo base_url(); ?>JS/mesFonctions.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>

      <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>CSS/style1.css">

      <script type="text/javascript">
    $
    (
        function()
        {
            $('#connexion').click(connexion);
            (
=======
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
  <script type="text/javascript" src="<?php echo base_url(); ?>JS/mesFonctions.js"></script>
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>CSS/style1.css">

      <script type="text/javascript">
         $
           (
             function()
               {
                 $('#connexion').click(connexion);
                     (
>>>>>>> 3e17599e0b08b7ed18b9f602cf1d21b669d90013
              function()
               {
                getUser();
              }
            );
        }
    );
</script>

  
</head>

<body>

  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Bonjour chèr(e) utilisateur(trice)</h1>
    </div>
    
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="#">
      <div class="form-group">
        <label for="username">Login</label>
        <input class="form-control" type="text" name="login" id="login" required />
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input class="form-control" type="password" name="mdp" id="mdp" required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" id ="connexion" value="Connexion" />
          </li>
          <li>
            <a class="signup__link" href="<?php echo site_url('ControlerInscription/index') ?>">Vous n'êtes pas encore membre ?</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
  
  

</body>

</html>