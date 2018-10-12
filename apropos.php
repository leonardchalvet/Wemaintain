<?php session_start(); ?>
<html>
	<head>

		<title>A Propos</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/apropos.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	</head>
	
	<body>

		<?php
			$name = "apropos";
			include('traduction.php');

			$styleHeader = 'style-1 active-4';
			include('common_header.php');
		?>

		<main>

			<section id="section-cover" class="container__anim">
				<div class="wrapper">
					<h1 class="anim__slide anim__delayMedium_1">
						We rise by lifting others
					</h1>
					<p>
						WeMaintain a été fondé en 2017 et est présent sur le marché depuis le 15 septembre 2017.
					</p>
					<div class="banner anim__slide anim__delayMedium_2" style="background-image: url(img/apropos/img-section2@2x.jpg);"></div>
					<div class="obj anim__fade anim__delayMedium_3"></div>
				</div>
			</section>

			<section id="section-valeurs" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">Nos valeurs</h2>
						<p class="anim__slide anim__delayMedium_2">
							L'équipe partage ces trois valeurs et nous avons à coeur que notre service les reflète.
						</p>
					</div>
					<div class="container-el">
						<div class="el anim__slide anim__delayMedium_3">
							<div class="icn">
								<img src="img/apropos/valeurs/picto1-section1.svg" alt="">
							</div>
							<h3>
								Singularité
							</h3>
							<p>
								Chaque membre de l'équipe est aligné dans ce qu'il est, fait et pense. Au quotidien, cela donne des personnes qui aiment ce qu'elles font et font ce qu'elles aiment.
							</p>
						</div>
						<div class="el anim__slide anim__delayMedium_4">
							<div class="icn">
								<img src="img/apropos/valeurs/picto2-section1.svg" alt="">
							</div>
							<h3>
								Détermination
							</h3>
							<p>
								Nous connaissons nos concurrents, leur emprise et taille et emprise et savons que la différence se fera sur l'exigence et la détermination de l'équipe.
							</p>
						</div>
						<div class="el anim__slide anim__delayMedium_5">
							<div class="icn">
								<img src="img/apropos/valeurs/picto3-section1.svg" alt="">
							</div>
							<h3>
								Attention aux autres
							</h3>
							<p>
								Les autres ne sont pas négociables. Nous faisons le choix de les considérer pleinement et d'y faire attention quotidiennement.
							</p>
						</div>
					</div>
				</div>
			</section>

			<section id="section-numbers" class="container__anim">

				<div class="wrapper">
					<div class="banner anim__slide anim__delayMedium_1" style="background-image: url(img/apropos/img-section2@2x.jpg);"></div>

					<div class="container-el">
						<div class="el anim__slide anim__delayMedium_2">
							<div class="num">
								2017 
							</div>
							<div class="bar"></div>
							<p>
								L'aventure s'est vraiment lancée en <span>septembre 2017</span>.
							</p>
						</div>
						<div class="el anim__slide anim__delayMedium_3">
							<div class="num">
								13							
							</div>
							<div class="bar"></div>
							<p>
								L'équipe est composée de <span>13 salariés</span> aux expériences diverses et aux compétences variés.
							</p>
						</div>
						<div class="el anim__slide anim__delayMedium_4">
							<div class="num">
								2M
							</div>
							<div class="bar"></div>
							<p>
								WeMaintain a fait une première levée de fonds de <span>2Millions</span> de dollars en février 2018 auprès de family offices.
							</p>
						</div>
					</div>
				</div>
				
			</section>

			<section id="section-team" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							Notre équipe au service de l’industrie !
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum. 
						</p>
					</div>
					<div class="container-col">
						<div class="col anim__slide anim__delayMedium_3">
							<h3>Sous-titre 1</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt lobortis sagittis. Phasellus quis iaculis orci. Proin in interdum odio. Proin dignissim dictum luctus. Morbi nulla orci, fringilla in consectetur eget, luctus non augue. Sed interdum felis nulla, at tincidunt purus egestas quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean at nisl auctor, dignissim nisl eu, porta urna. Mauris blandit nunc non ante aliquet, eget tristique diam rutrum. Praesent non tincidunt ligula.
							</p>
						</div>
						<div class="col anim__slide anim__delayMedium_4">
							<h3>Sous-titre 2</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt lobortis sagittis. Phasellus quis iaculis orci. Proin in interdum odio. Proin dignissim dictum luctus. Morbi nulla orci, fringilla in consectetur eget, luctus non augue. Sed interdum felis nulla, at tincidunt purus egestas quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean at nisl auctor, dignissim nisl eu, porta urna. Mauris blandit nunc non ante aliquet, eget tristique diam rutrum. Praesent non tincidunt ligula.
							</p>
						</div>
					</div>
					<div class="container-grid">
						<div class="grid-item anim__slide anim__delayMedium_5" style="background-image: url(img/apropos/team/img1-section3@2x.jpg);"></div>
						<div class="grid-item anim__slide anim__delayMedium_6" style="background-image: url(img/apropos/team/img2-section3@2x.jpg);"></div>
						<div class="grid-item anim__slide anim__delayMedium_7" style="background-image: url(img/apropos/team/img3-section3@2x.jpg);"></div>
						<div class="grid-item anim__slide anim__delayMedium_8">
							<div class="content">
								<h4>
									Rejoignez-nous !
								</h4>
								<p>
									Nous sommes à la recherche de profils qui partagent les mêmes valeurs et l'envie de bouger les lignes de l'industrie.
								</p>
								<div class="btn">
									<div class="btn-text">
										Je postule
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section id="section-fondateur" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							Les trois fondateurs
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							Expatriés de longue date, les trois fondateurs de WeMaintain sont rentrés en France pour y lancer l'aventure.
						</p>
					</div>
					<div class="container-el">
						<div class="el anim__slide anim__delayMedium_3">
							<div class="img" style="background-image: url(img/apropos/fondateurs/andrew-bartholomew-500w.png);"></div>
							<div class="text">
								<div class="name">
									Benoit Dupont
								</div>
								<div class="job">
									CEO
								</div>
								<p>
									Après avoir grandi entre l'Afrique, l'Allemagne et la France, Benoit a commencé sa carrière chez le leader de l'ascenseur. Il y a travaillé 10 ans, dont 2 en France et 8 en Chine. Son dernier poste l'a amené à gérer le service dans la Zone Asie du Nord.<br>
									<br>
									En 2015, direction l'université de Harvard où les prémices de WeMaintain naîtront.<br> 
									<br>
									En 2017, redirection la France pour montrer que l'Europe a sa place dans la compétition internationale des startups.
								</p>
							</div>
						</div>
						<div class="el anim__slide anim__delayMedium_4">
							<div class="img" style="background-image: url(img/apropos/fondateurs/nicole-anasenes-500w@2x.png);"></div>
							<div class="text">
								<div class="name">
									Tristan Foureur
								</div>
								<div class="job">
									CTO
								</div>
								<p>
									Après quatre ans d'expatriation en Angleterre, Inde et États-unis à travailler sur des architectures à haut volume (Trading à haute fréquence, VoIP…). Tristan se retrouve à vivre en France et à enchaîner les allers-retours à Bangalore, en Inde, et aux Etats-Unis.<br>
									<br>
									Au vu de son expérience technique, il rejoint WeMaintain en tant que CTO (Chief Technology Officer). Au quotidien, il dirige les développeurs qui compose la moitié de l'équipe de WeMaintain.
								</p>
							</div>
						</div>
						<div class="el anim__slide anim__delayMedium_5">
							<div class="img" style="background-image: url(img/apropos/fondateurs/kinjil-mathur-500w@2x.png);"></div>
							<div class="text">
								<div class="name">
									Jade Francine
								</div>
								<div class="job">
									COO
								</div>
								<p>
									Suite à des études en France et à un LLM en droit chinois à l'Université de Pékin, Jade rentre en cabinet d'avocats d'affaires à Shanghai où elle accompagne des entrepreneurs à monter leur business, lever des fonds et se développer sur le marché asiatique.<br>
									<br>
									Elle rejoint WeMaintain en tant que COO (Chief Operating Officer). Au quotidien, elle s'assure que tout le monde soit aligné autour de l'exécution du projet.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section id="section-joinus" class="container__anim">
				<div class="background anim__slide anim__delayMedium_1"></div>
				<div class="wrapper">
					<h2 class="anim__slide anim__delayMedium_2">
						Rejoignez l’aventure WeMaintain
					</h2>
					<div class="btn anim__slide anim__delayMedium_3">
						<div class="btn-text">Candidatez</div>
					</div>
					<img class="dots anim__fade anim__delayMedium_4" src="img/apropos/points1.svg" alt="">
				</div>
			</section>

		</main>

		<?php
			include('common_footer.php');
		?>

		<script type="text/javascript" src="js/common.js"></script>
		<script type="text/javascript" src="js/tertiaire.js"></script>
	</body>
</html>