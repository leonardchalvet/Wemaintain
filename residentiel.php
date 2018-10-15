<?php session_start(); ?>
<html>
	<head>

		<title>Résidentiel</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/residentiel.css">

		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	</head>
	
	<body>

		<?php
			$name = "residentiel";
			include('traduction.php');

			$styleHeader = 'active-1';
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
						<img class="phone anim__slide anim__delayMedium_4" src="img/residentiel/cover/iPhone.png" alt="">
						<img class="obj anim__slide anim__delayMedium_5" src="img/residentiel/cover/cercle-cover.svg" alt="">
						<img class="screen anim__slide anim__delayMedium_6" src="img/residentiel/cover/Box-cover@2x.png" alt="">
						<img class="dots anim__fade anim__delayMedium_7" src="img/residentiel/cover/dots.svg" alt="">
					</div>
				</div>
			</section>

			<section id="section-features">
				<div class="wrapper">
					<div class="container-text container__anim">
						<h2 class="anim__slide anim__delayMedium_1">
							<?php echo $content_page['section-features']['title']; ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-features']['text']; ?>
						</p>
					</div>
					<div class="container-features">
						<div class="container-el-illu">
							<div class="li-el-illu">
								<div class="el-illu el-illu-1 container__anim__dt">
									<img class="img-1 anim__slide anim__delayMedium_1" src="img/residentiel/features-1/Box-illu1@3x.jpg" alt="">
									<img class="img-2 anim__slide anim__delayMedium_2" src="img/residentiel/features-1/Synthese-illu1@3x.jpg" alt="">
									<img class="obj-1 anim__fade anim__delayMedium_5" src="img/residentiel/features-1/Oval-illu1.svg" alt="">
									<img class="obj-2 anim__slide anim__delayMedium_3" src="img/residentiel/features-1/technicien-illu1.svg" alt="">
									<img class="obj-3 anim__fade anim__delayMedium_4" src="img/residentiel/features-1/box-bleue-illu1@3x.jpg" alt="">
								</div>
								<div class="el-illu el-illu-2 container__anim__dt">
									<img class="img-1 anim__slide anim__delayMedium_1" src="img/residentiel/features-2/Box-illu3-residentiel@3x.jpg" alt="">
									<img class="img-2 anim__slide anim__delayMedium_2" src="img/residentiel/features-2/Synthese-illu3-residentiel@3x.jpg" alt="">
									<img class="obj-1 anim__slide anim__delayMedium_3" src="img/residentiel/features-2/cercle-illu3-residentiel.svg" alt="">
									<img class="obj-2 anim__slide anim__delayMedium_4" src="img/residentiel/features-2/technicien-illu3-residentiel.svg" alt="">
								</div>
								<div class="el-illu el-illu-3 container__anim__dt">
									<img class="img-1 anim__slide anim__delayMedium_1" src="img/residentiel/features-3/Browser@2x.png" alt="">
									<img class="img-2 anim__slide anim__delayMedium_2" src="img/residentiel/features-3/iPhone.png" alt="">
									<img class="obj-1 anim__slide anim__delayMedium_3" src="img/residentiel/features-3/technicien-illu2-residentiel.svg" alt="">
									<img class="obj-2 anim__fade anim__delayMedium_4" src="img/residentiel/features-3/points1.svg" alt="">
								</div>
							</div>
						</div>
						<div class="container-el-desc">
							<div class="container-bar">
								<div class="bar"></div>
								<div class="triangle-left"></div>
								<div class="triangle-right"></div>
							</div>
							<div class="li-el-desc">
								<?php
									$i = 1;
									foreach ($content_page['section-features']['container-features'] as $el) {
										
										echo '<div class="el-desc" data-illu="'.$i.'">
												<h3>'.$el[0].'</h3>
												<p>'.$el[1].'</p>
											  </div>';

										$i++;
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="section-tarifs" class="container__anim">
				<div class="background anim__slide anim__delayMedium_0"></div>
				<div class="wrapper">
					<div class="container-text">
						<div class="container-desc">
							<h2 class="anim__slide anim__delayMedium_1">
								<?php echo $content_page['section-tarifs']['title']; ?>
							</h2>
							<p class="anim__slide anim__delayMedium_2">
								<?php echo $content_page['section-tarifs']['text']; ?>
							</p>
						</div>
						<div class="btn anim__slide anim__delayMedium_3">
							<a class="btn-text" <?php echo 'href="'.$content_page['section-tarifs']['container-btn'][1].'"'; ?> >
								<?php echo $content_page['section-tarifs']['container-btn'][0]; ?>
							</a>
						</div>
					</div>
					<div class="container-li">
						<div class="container_illu anim__slide anim__delayMedium_4">
							<img src="img/residentiel/tarifs/Illustration-section2.svg" alt="">
						</div>
						<div class="container-el">
							<?php
								$i = 5;
								foreach ($content_page['section-tarifs']['container-el'] as $el) {
									
									echo '<div class="el anim__slide anim__delayMedium_'.$i.'">
											<div class="icn">
												<img src="img/residentiel/tarifs/'.$el[0].'" alt="">
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
		<script type="text/javascript" src="js/residentiel.js"></script>
	</body>
</html>
