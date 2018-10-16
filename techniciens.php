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
							<?php echo $content_page['section-features']['title']; ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-features']['text']; ?>
						</p>
					</div>
					<div class="container-el">
						<?php
							$i = 5;
							foreach ($content_page['section-features']['container-el'] as $el) {
								
								echo '<div class="el anim__slide anim__delayMedium_'.$i.'">
										<div class="icn">
											<img src="img/techniciens/features/'.$el[0].'" alt="">
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

			<section id="section-ots">
				<div class="background"></div>
				<div class="wrapper">
					<div class="container-head container__anim">
						<h2 class="anim__slide anim__delayMedium_1"><?php echo $content_page['section-ots']['title']; ?></h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-ots']['text']; ?>
						</p>
					</div>
					<div class="container-el">
						<div class="el container__anim">
							<div class="container-text">
								<h3 class="anim__slide anim__delaySmall_1">
									<?php echo $content_page['section-ots']['container-el']['0'][0]; ?>
								</h3>
								<p class="anim__slide anim__delaySmall_2">
									<?php echo $content_page['section-ots']['container-el']['0'][1]; ?>
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
									<?php echo $content_page['section-ots']['container-el']['1'][0]; ?>
								</h3>
								<p class="anim__slide anim__delaySmall_2">
									<?php echo $content_page['section-ots']['container-el']['1'][1]; ?>
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
							<?php echo $content_page['section-services']['title']; ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-services']['text']; ?>
						</p>
					</div>
					<div class="container-li">
						<div class="container_illu anim__slide anim__delayMedium_4">
							<img src="img/techniciens/services/Illustration.svg" alt="">
						</div>
						<div class="container-el">
							<?php
								$i = 5;
								foreach ($content_page['section-services']['container-el'] as $el) {
	
									echo '<div class="el anim__slide anim__delayMedium_'.$i.'">
											<div class="icn">
												<img src="img/techniciens/services/'.$el[0].'" alt="">
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
		<script type="text/javascript" src="js/techniciens.js"></script>
	</body>
</html>