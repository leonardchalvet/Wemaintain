<?php session_start(); ?>
<html>
	<head>

		<title>Tertiaire</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/tertiaire.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	</head>
	
	<body>

		<?php
			$name = "tertiaire";
			include('traduction.php');

			$styleHeader = 'active-2';
			include('common_header.php');
		?>

		<main>

			<section id="section-cover" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h1 class="anim__slide anim__delayMedium_1">
							<?php echo $content_page['section-cover']['title']; ?>
						</h1>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-cover']['text']; ?>
						</p>
						<div class="container-btn anim__slide anim__delayMedium_3">
							<a class="btn" <?php echo 'href="'.$content_page['section-cover']['container-btn'][1].'"'; ?> >
								<span class="btn-text">
									<?php echo $content_page['section-cover']['container-btn'][0]; ?>
								</span>
							</a>
						</div>
						
					</div>
					<div class="container-illu">
						<img class="tablet anim__slide anim__delayMedium_4" src="img/tertiaire/cover/Notebook@2x.png" alt="">
						<img class="obj anim__slide anim__delayMedium_5" src="img/tertiaire/cover/Photo@2x.png" alt="">
						<img class="dots anim__fade anim__delayMedium_6" src="img/tertiaire/cover/Oval.svg" alt="">
					</div>
				</div>
			</section>

			<section id="section-features" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							<?php echo $content_page['section-features']['title']; ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-features']['text']; ?>
						</p>
					</div>
					<div class="container-el">
						<?php
							$i = 3;
							foreach ($content_page['section-features']['container-el'] as $el) {
								
								echo '<div class="el anim__slide anim__delayMedium_'.$i.'">
										<div class="icn">
											<img src="img/tertiaire/features/'.$el[0].'" alt="">
										</div>
										<h3>'.$el[1].'</h3>
										<p>'.$el[2].'</p>
									  </div>';

								$i++;
							}
						?>
					</div>
					<div class="container-action anim__slide anim__delayMedium_7">
						<a class="btn" <?php echo 'href="'.$content_page['section-features']['container-btn'][1].'"'; ?> >
							<span class="btn-text">
								<?php echo $content_page['section-features']['container-btn'][0]; ?>
							</span>
						</a>
					</div>
				</div>
			</section>

			<section id="section-signup">
				<div class="wrapper">
					<div class="container-text container__anim">
						<h2 class="anim__slide anim__delayMedium_1">
							<?php echo $content_page['section-signup']['title']; ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-signup']['text']; ?>
						</p>
					</div>
					<div class="container-tsr">
						<div class="container-illu">
							<div class="el-illu el-illu-1 container__anim__dt">
								<img class="img-1 anim__slide anim__delayMedium_1" src="img/tertiaire/features-1/browser.png" alt="">
								<img class="dots  anim__fade anim__delayMedium_2" src="img/tertiaire/features-1/oval.svg" alt="">
								<img class="obj-1 anim__slide anim__delayMedium_3" src="img/tertiaire/features-1/perso-Petitdroite.svg" alt="">
								<img class="obj-2 anim__slide anim__delayMedium_3" src="img/tertiaire/features-1/perso-Petitgauche.svg" alt="">
							</div>
							<div class="el-illu el-illu-2 container__anim__dt">
								<img class="img-1 anim__slide anim__delayMedium_1" src="img/tertiaire/features-2/Box-illu1@3x.jpg" alt="">
								<img class="img-2 anim__slide anim__delayMedium_2" src="img/tertiaire/features-2/Synthese-illu1@3x.jpg" alt="">
								<img class="obj-1 anim__fade anim__delayMedium_5" src="img/tertiaire/features-2/Oval-illu1.svg" alt="">
								<img class="obj-2 anim__slide anim__delayMedium_3" src="img/tertiaire/features-2/technicien-illu1.svg" alt="">
								<img class="obj-3 anim__fade anim__delayMedium_4" src="img/tertiaire/features-2/box-bleue-illu1@3x.jpg" alt="">
							</div>
							<div class="el-illu el-illu-3 container__anim__dt">
								<img class="img-1 anim__slide anim__delayMedium_1" src="img/tertiaire/features-3/Contrat@3x.jpg" alt="">
								<img class="img-2 anim__slide anim__delayMedium_2" src="img/tertiaire/features-3/Sign@3x.jpg" alt="">
								<img class="obj anim__slide anim__delayMedium_3" src="img/tertiaire/features-3/cercle.svg" alt="">
							</div>
							<div class="el-illu el-illu-4 container__anim__dt">
								<img class="img-1 anim__slide anim__delayMedium_1" src="img/tertiaire/features-4/Browser@2x.png" alt="">
								<img class="img-2 anim__slide anim__delayMedium_2" src="img/tertiaire/features-4/iPhone.png" alt="">
								<img class="obj-1 anim__slide anim__delayMedium_3" src="img/tertiaire/features-4/technicien-illu2-residentiel.svg" alt="">
								<img class="obj-2 anim__fade anim__delayMedium_4" src="img/tertiaire/features-4/points1.svg" alt="">
							</div>
						</div>
						<div class="container-nav">
							<div class="container-el">
								<div class="el" data-illu="1" ><?php echo $content_page['section-signup']['container-nav'][0]; ?></div>
								<div class="el" data-illu="2"><?php echo $content_page['section-signup']['container-nav'][1]; ?></div>
								<div class="el" data-illu="3"><?php echo $content_page['section-signup']['container-nav'][2]; ?></div>
								<div class="el" data-illu="4"><?php echo $content_page['section-signup']['container-nav'][3]; ?></div>
							</div>
							<div class="container-bar">
								<div class="triangle-left"></div>
								<div class="triangle-right"></div>
							</div>
						</div>
						<div class="container-desc">
							<p class="desc-1">
								<?php echo $content_page['section-signup']['container-desc'][0]; ?>
							</p>
							<p class="desc-2">
								<?php echo $content_page['section-signup']['container-desc'][1]; ?>
							</p>
							<p class="desc-3">
								<?php echo $content_page['section-signup']['container-desc'][2]; ?>
							</p>
							<p class="desc-4">
								<?php echo $content_page['section-signup']['container-desc'][3]; ?>
							</p>
						</div>
					</div>
				</div>
			</section>

			<section id="section-services" class="container__anim">
				<div class="background anim__slide anim__delayMedium_0"></div>
				<div class="wrapper">
					<div class="container-text">
						<div class="container-desc">
							<h2 class="anim__slide anim__delayMedium_1">
								<?php echo $content_page['section-services']['title']; ?>
							</h2>
							<p class="anim__slide anim__delayMedium_2">
								<?php echo $content_page['section-services']['text']; ?>
							</p>
						</div>
					</div>
					<div class="container-li">
						<div class="container-el">
							<?php
								$i = 5;
								foreach ($content_page['section-services']['container-el'] as $el) {
									
									echo '<div class="el anim__slide anim__delayMedium_'.$i.'">
											<div class="icn">
												<img src="img/tertiaire/services/'.$el[0].'" alt="">
											</div>
											<div class="text">
												<h3>'.$el[1].'</h3>
												<p>'.$el[2].'</p>
											</div>
										  </div>';

									$i++;
								}
							?>
						</div>
						<div class="container_illu anim__slide anim__delayMedium_4">
							<img src="img/tertiaire/services/Illustration.svg" alt="">
						</div>
					</div>
				</div>
			</section>

			<section id="section-sponsors" class="container__anim">
				<div class="background anim__slide anim__delayMedium_"></div>
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1"><?php echo $content_page['section-sponsors']['title']; ?></h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-sponsors']['text']; ?>
						</p>
					</div>
					<div class="container-col">
						<div class="col anim__slide anim__delayMedium_3">
							<div class="title"><?php echo $content_page['section-sponsors']['container-clients']['title']; ?></div>
							<div class="content">
								<div class="container-logo">
									<?php
										foreach ($content_page['section-sponsors']['container-clients']['container-logos'] as $el) {
											echo '<div class="logo">
													<img src="img/residentiel/logo/'.$el.'" alt="">
												  </div>';		
										}
									?>
								</div>
							</div>
						</div>
						<div class="col anim__slide anim__delayMedium_4">
							<div class="title"><?php echo $content_page['section-sponsors']['container-fans']['title']; ?></div>
							<div class="content">
								<div class="container-quote">
									<q><?php echo $content_page['section-sponsors']['container-fans']['quote']; ?></q>
									<div class="author">
										<div class="name"><?php echo $content_page['section-sponsors']['container-fans']['name']; ?></div>
										<div class="job"><?php echo $content_page['section-sponsors']['container-fans']['job']; ?></div>
										<?php echo '<img src="img/common/'.$content_page['section-sponsors']['container-fans']['img'].'" alt="">'; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col anim__slide anim__delayMedium_5">
							<div class="title"><?php echo $content_page['section-sponsors']['container-distinction']['title']; ?></div>
							<div class="content">
								<div class="container-logo">
									<?php
										foreach ($content_page['section-sponsors']['container-distinction']['container-logos'] as $el) {
											echo '<div class="logo">
													<img src="img/residentiel/logo/'.$el.'" alt="">
												  </div>';		
										}
									?>
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
						<h2 class="anim__slide anim__delayMedium_2"><?php echo $content_page['section-experience']['title']; ?></h2>
					</div>
					<div class="container-btn">
						<div class="btn anim__slide anim__delayMedium_3">
							<a class="btn-text" <?php echo 'href="'.$content_page['section-experience']['container-btn'][1].'"'; ?> >
								<?php echo $content_page['section-experience']['container-btn'][0]; ?>
							</a>
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
		<script type="text/javascript" src="js/tertiaire.js"></script>
	</body>
</html>