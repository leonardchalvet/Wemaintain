<?php session_start(); ?>
<html>
	<head>

		<title>Contact</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/contact.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	</head>
	
	<body>

		<?php
			$name = "contact";
			include('traduction.php');

			$styleHeader = 'style-1';
			include('common_header.php');
		?>

		<main>

			<section id="section-cover" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h1 class="anim__slide anim__delayMedium_1">
							Contact
						</h1>
						<p class="anim__slide anim__delayMedium_2">
							Pour toute demande n’hésitez pas à nous contacter en remplissant le formulaire ci-dessous. 
						</p>
					</div>
					<div class="obj anim__fade anim__delayMedium_3"></div>
				</div>
			</section>

			<section id="section-form" class="container__anim">
				<div class="wrapper anim__slide anim__delayMedium_4">
					<div class="container-form">
						<form action="">
							<div class="container-input">
								<div class="title">Nom</div>
								<div class="wrapper-input">
									<input placeholder="Nom" type="text">
								</div>
								<div class="container-error">
									Vérifiez votre nom
								</div>
							</div>
							<div class="container-input">
								<div class="title">Prénom</div>
								<div class="wrapper-input">
									<input placeholder="Prénom" type="text">
								</div>
								<div class="container-error">
									Vérifiez votre Prénom
								</div>
							</div>
							<div class="container-input error">
								<div class="title">Mail</div>
								<div class="wrapper-input">
									<input type="text" placeholder="Mail">
								</div>
								<div class="container-error">
									Vérifiez votre Mail
								</div>
							</div>
							<div class="container-input">
								<div class="title">Téléphone</div>
								<div class="wrapper-input">
									<input type="text" placeholder="Téléphone">
								</div>
								<div class="container-error">
									Vérifiez votre Téléphone
								</div>
							</div>
							<div class="container-input select">
								<div class="title">Sujet de votre message </div>
								<div class="wrapper-input">
									<select>
										<option value="" disabled selected>Sujet de votre message </option>
									  	<option value="valeur1">Valeur 1</option> 
									  	<option value="valeur2">Valeur 2</option>
									  	<option value="valeur3">Valeur 3</option>
									</select>
								</div>
							</div>
							<div class="container-input textarea">
								<div class="wrapper-input">
									<textarea placeholder="Entrez votre message"></textarea>
								</div>
							</div>
							<div class="container-btn">
								<!-- ADD CLASS "valid" on ".btn" FOR VALID FORM -->
								<div class="btn">
									<div class="btn-text">Envoyer</div>
									<div class="btn-valid">
										<img src="img/contact/check.svg" alt="">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="container-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10498.221828126949!2d2.3530999!3d48.8666868!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x808ca89b9327a3e4!2sWeMaintain!5e0!3m2!1sfr!2sfr!4v1538557658041" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</section>


			<section id="section-experience" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<img class="anim__slide anim__delayMedium_1" src="img/home/picto-section-exigez.svg" alt="">
						<h2 class="anim__slide anim__delayMedium_2">Exigez une nouvelle expérience</h2>
					</div>
					<div class="container-btn">
						<div class="btn anim__slide anim__delayMedium_3">
							<span class="btn-text">Je demande une pré-visite gratuite</span>
						</div>
					</div>
					<img class="dots anim__fade anim__delayMedium_1" src="img/common/points1.svg" alt="">
				</div>
			</section>

		</main>

		<?php
			include('common_footer.php');
		?>

		<script type="text/javascript" src="js/common.js"></script>
	</body>
</html>
