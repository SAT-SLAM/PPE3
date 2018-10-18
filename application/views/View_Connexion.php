<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SAT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<script type="text/javascript" src="<?php echo base_url(); ?>JS/mesFonctions.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>

      <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>CSS/style1.css">

</head>

<body>

  <form role="form" method="post" action="<?php echo base_url('ControleurConnexion/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Login" name="login" type="text" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mot de passe" name="mdp" type="password" value="" >
                            </div><br><br>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Connexion" name="connexion" >

                        </fieldset>
                    </form>
  
  

</body>

</html>