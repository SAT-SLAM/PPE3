<!DOCTYPE html>
<html lang="en">
<head>
	<title>Création d'une offre</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="img/airplane.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap1/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/styles.css">
	<script type="text/javascript" src="./JQuery/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="./JS/mesFonctions.js"></script>
	<script type="text/javascript">
$
(
	function()
	{
		$('#btnValider').click
                (
                    function()
                    {
                        InsertNewOffre();
                    }
                );
            }
        );
	}
)
</script>
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="support.php" method="post">
				<span class="contact100-form-title">
					Créer une offre
				</span>

				<label class="label-input100" for="numeroOffre">Numéro de l'offre</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Le champ est requis">
					<input id="idOffre" class="input100" type="text" name="idOffre">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="description">Description de l'offre</label>
				<div class="wrap-input100 validate-input" data-validate = "Vous n'avez pas donné de description">
					<input id="descriptionOffre" class="input100" type="text" name="descriptionOffre">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Date de l'offre</label>
				<div class="wrap-input100">
					<input id="dateOffre" class="input100" type="date" name="dateOffre" placeholder="jj/mm/aaaa">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Nom du service</label>
				<div class="wrap-input100 validate-input" data-validate = "Vous n'avez pas écrit">
				<?php 
						echo "<select id='lstServices'>" ;
                        foreach($lesServices as $unService)
                        {
                          echo "<option value='" .$unService->idService. "'>".$unService->nomService."</option>";
                        
                        }
                        
					echo "</select>" ;
					?>
				<input id="idService" class="input100" type="" name="idService">
						
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<input class="contact100-form-btn" type="submit" id="btnValider" value="Envoyer">
						
					</input>
                </div>
                
                <div class="container-contact100-form-btn">
					<a class="contact100-form-btn"  href="<?php echo site_url('ControleurAccueil/index') ?>">Accueil</a>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('img/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Adresse
						</span>

						<span class="txt3">
							Paris 13ème, 28 avenue tropicale
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Appelez nous
						</span>

						<span class="txt3">
							06.29.03.15.20
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Support général
						</span>

						<span class="txt3">
							sat_slam@gmail.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/jquery1/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/bootstrap1/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>vendor/bootstrap1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="JS/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
