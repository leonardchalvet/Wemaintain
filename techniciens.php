<?php session_start(); ?>
<html>
	<head>

		<title>Techniciens</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/techniciens.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	</head>
	
	<body>

		<?php
			$name = "techniciens";
			include('traduction.php');

			$styleHeader = 'active-3';
			include('common_header.php');
		?>

		<main>
			<section id="section-cover" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h1 class="anim__slide anim__delayMedium_1">	
							<span>Techniciens</span>, captez la valeur de votre travail
						</h1>
						<p class="anim__slide anim__delayMedium_2">
							Devenez indépendant grâce à la technologie et rejoignez une communauté qui vous ressemble
						</p>
						<div class="container-btn anim__slide anim__delayMedium_3">
							<a class="btn">
								<span class="btn-text">
									Commencer
								</span>
							</a>
						</div>
						
					</div>
					<div class="container-illu">
						<img class="phone anim__slide anim__delayMedium_5" src="img/techniciens/cover/iPhone.png" alt="">
						<img class="obj-1 anim__slide anim__delayMedium_6" src="img/techniciens/cover/photo1@2x.png" alt="">
						<img class="obj-2 anim__slide anim__delayMedium_4" src="img/techniciens/cover/photo2.png" alt="">
						<img class="dots anim__fade anim__delayMedium_7" src="img/common/points1.svg" alt="">
					</div>
				</div>
			</section>

			<section id="section-features" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							Rejoignez la communauté WeMaintain
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							Aux Etats-Unis un technicien gagne en moyenne [63 000€/an]. Et si on revalorisait votre métier en France?
						</p>
					</div>
					<div class="container-el">
						<div class="el anim__slide anim__delayMedium_3">
							<div class="icn">
								<img src="img/techniciens/features/picto1-section1.svg" alt="">
							</div>
							<h3>
								Devenez votre propre patron
							</h3>
							<p>
								Nous vous accompagnons dans toutes les démarches
							</p>
						</div>
						<div class="el anim__slide anim__delayMedium_4">
							<div class="icn">
								<img src="img/techniciens/features/picto2-section1.svg" alt="">
							</div>
							<h3>
								La technologie à votre service
							</h3>
							<p>
								Une application adaptée à vos besoins vous accompagne pour gérer votre activité au quotidien.
							</p>
						</div>
						<div class="el anim__slide anim__delayMedium_5">
							<div class="icn">
								<img src="img/techniciens/features/picto3-section1.svg" alt="">
							</div>
							<h3>
								Vous êtes entouré
							</h3>
							<p>
								Exigence, compétences et valeurs lient la communauté
							</p>
						</div>
					</div>
					<div class="container-action anim__slide anim__delayMedium_7">
						<a href="" class="btn">
							<span class="btn-text">
								Je veux en savoir plus
							</span>
						</a>
					</div>
				</div>
			</section>

			<section id="section-signup">
				<div class="wrapper">
					<div class="container-text container__anim">
						<h2 class="anim__slide anim__delayMedium_1">
							Une solution pensée pour vous
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							Notre but: vous faire gagner du temps et simplifier chaque étape.
						</p>
					</div>
					<div class="container-tsr">
						<div class="container-illu">
							
							<div class="el-illu el-illu-1 container__anim__dt">
								<img class="img-1 anim__slide anim__delayMedium_1" src="img/techniciens/signup-step-1/Contrat@3x.jpg" alt="">
								<img class="img-2 anim__slide anim__delayMedium_2" src="img/techniciens/signup-step-1/Sign@3x.jpg" alt="">
								<img class="obj anim__slide anim__delayMedium_3" src="img/techniciens/signup-step-1/cercle.svg" alt="">
								<img class="dots anim__fade anim__delayMedium_4" src="img/techniciens/signup-step-1/Oval2.svg" alt="">
							</div>
							<div class="el-illu el-illu-2 container__anim__dt">
								<img class="img anim__slide anim__delayMedium_1" src="img/techniciens/signup-step-2/iPhone.png" alt="">
								<img class="obj anim__slide anim__delayMedium_2" src="img/techniciens/signup-step-2/circle.svg" alt="">
								<img class="dots anim__slide anim__delayMedium_3" src="img/techniciens/signup-step-2/Oval.svg" alt="">
							</div>
							<div class="el-illu el-illu-3 container__anim__dt">
								<img class="img-1 anim__slide anim__delayMedium_1" src="img/techniciens/signup-step-3/Browser.png" alt="">
								<img class="dots anim__slide anim__delayMedium_2" src="img/techniciens/signup-step-3/Oval.svg" alt="">
								<img class="obj anim__slide anim__delayMedium_3" src="img/techniciens/signup-step-3/technicien.svg" alt="">
							</div>
							<div class="el-illu el-illu-4 container__anim__dt">
								<img class="img-1 anim__slide anim__delayMedium_1" src="img/techniciens/signup-step-4/Screen.png" alt="">
								<img class="dots anim__slide anim__delayMedium_2" src="img/techniciens/signup-step-4/Oval.svg" alt="">
								<img class="obj anim__slide anim__delayMedium_3" src="img/techniciens/signup-step-4/technicien.svg" alt="">
							</div>
						</div>
						<div class="container-nav">
							<div class="container-el">
								<div class="el" data-illu="1" >Création de votre société</div>
								<div class="el" data-illu="2">Vos premiers pas</div>
								<div class="el" data-illu="3">Votre parc</div>
								<div class="el" data-illu="4">Communauté</div>
							</div>
							<div class="container-bar">
								<div class="triangle-left"></div>
								<div class="triangle-right"></div>
							</div>
						</div>
						<div class="container-desc">
							<p class="desc-1">
								WeMaintain vous accompagne dans la création de votre statut pour devenir indépendant
							</p>
							<p class="desc-2">
								Vous êtes maintenant indépendant, mais pas seul. WeMaintain vous forme à la prise en main de l'application et à la relation client.
							</p>
							<p class="desc-3">
								Lorsqu'un client créé une demande de maintenance dans le périmètre que vous avez défini, vous pouvez y répondre. Ainsi vous choisissez et maintenez vos ascenseurs.
							</p>
							<p class="desc-4">
								Vous faîtes en relation continue avec les autres techniciens de la communauté WeMaintain via des outils de communication et des rencontres chaque semaine.
							</p>
						</div>
					</div>
				</div>
			</section>

			<section id="section-ots">
				<div class="background"></div>
				<div class="wrapper">
					<div class="container-head container__anim">
						<h2 class="anim__slide anim__delayMedium_1">Comment ça marche ?</h2>
						<p class="anim__slide anim__delayMedium_2">
							Créez votre première demande de maintenance en seulement trois minutes
						</p>
					</div>
					<div class="container-el">
						<div class="el container__anim">
							<div class="container-text">
								<h3 class="anim__slide anim__delaySmall_1">
									Des outils métiers pour vous accompagner
								</h3>
								<p class="anim__slide anim__delaySmall_2">
									Notre application vous permet de gérer votre activité en phase avec la réglementation et d’effectuer efficacement vos visites de maintenance.
								</p>
							</div>
							<div class="container-illu">
								<img class="img anim__fade anim__delaySmall_3" src="img/techniciens/ots-el-1/iPhone.png" alt="">
								<img class="obj-2 anim__slide anim__delaySmall_4" src="img/techniciens/ots-el-1/Lieu@3x.jpg" alt="">
								<img class="obj-1 anim__slide anim__delaySmall_5" src="img/techniciens/ots-el-1/Map@3x.jpg" alt="">
								<img class="dots anim__fade anim__delaySmall_6" src="img/techniciens/ots-el-1/Oval3.svg" alt="">
							</div>
						</div>
						<div class="el container__anim">
							<div class="container-text">
								<h3 class="anim__slide anim__delaySmall_1">
									Gérez votre emploi du temps
								</h3>
								<p class="anim__slide anim__delaySmall_2">
									Notre technologie gère et optimise votre emploi du temps, mais vous contrôlez tout : vous choisissez vos immeubles et vos horaires de travail, nous nous occupons du reste.
								</p>
							</div>
							<div class="container-illu">
								<img class="img anim__fade anim__delaySmall_3" src="img/techniciens/ots-el-2/Box@3x.jpg" alt="">
								<img class="obj-2 anim__slide anim__delaySmall_5" src="img/techniciens/ots-el-2/photo@2x.png" alt="">
								<img class="dots anim__slide anim__delaySmall_6" src="img/techniciens/ots-el-2/Oval.svg" alt="">
								<img class="obj anim__fade anim__delaySmall_7" src="img/techniciens/ots-el-2/circle.svg" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="section-services" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							Sécurité
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							Vous exercez un métier à risque : votre sécurité n'a pas de prix
						</p>
					</div>
					<div class="container-li">
						<div class="container_illu anim__slide anim__delayMedium_4">
							<img src="img/techniciens/services/Illustration.svg" alt="">
						</div>
						<div class="container-el">
							<div class="el anim__slide anim__delayMedium_5">
								<div class="icn">
									<img src="img/techniciens/services/picto1-section4.svg" alt="">
								</div>
								<div class="text">
									<h3>SOS</h3>
									<p>
										Une fonction SOS intégrée à votre application est activable à tout moment
									</p>
								</div>
							</div>
							<div class="el anim__slide anim__delayMedium_6">
								<div class="icn">
									<img src="img/techniciens/services/picto2-section4.svg" alt="">
								</div>
								<div class="text">
									<h3>Protection du travailleur isolé</h3>
									<p>
										Nos équipes interviennent lorsque vous restez hors ligne trop longtemps lors d’une visite.
									</p>
								</div>
							</div>
							<div class="el anim__slide anim__delayMedium_7">
								<div class="icn">
									<img src="img/techniciens/services/picto3-section4.svg" alt="">
								</div>
								<div class="text">
									<h3>EPI</h3>
									<p>
										Nous vous fournissons tout l’équipement nécessaire pour travailler en sécurité
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="section-experience" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<img class="anim__slide anim__delayMedium_1" src="img/home/picto-section-exigez.svg" alt="">
						<h2 class="anim__slide anim__delayMedium_2">Rien ne vous retient, vivez autrement votre métier</h2>
					</div>
					<div class="container-btn">
						<div class="btn anim__slide anim__delayMedium_3">
							<span class="btn-text">Je veux rencontrer WeMaintain</span>
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
		<script type="text/javascript" src="js/techniciens.js"></script>
	</body>
</html>