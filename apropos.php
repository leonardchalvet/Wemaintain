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
						<?php echo $content_page['section-cover']['title']; ?>
					</h1>
					<p>
						<?php echo $content_page['section-cover']['text']; ?>
					</p>
					<div class="banner anim__slide anim__delayMedium_2" style="background-image: url(img/apropos/img-section2@2x.jpg);"></div>
					<div class="obj anim__fade anim__delayMedium_3"></div>
				</div>
			</section>

			<section id="section-valeurs" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1"><?php echo $content_page['section-valeurs']['title']; ?></h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-valeurs']['text']; ?>
						</p>
					</div>
					<div class="container-el">
						<?php
							$i = 3;
							foreach ($content_page['section-valeurs']['container-el'] as $el) {
										
								echo '<div class="el anim__slide anim__delayMedium_'.$i.'">
										<div class="icn">
											<img src="img/apropos/valeurs/'.$el[0].'" alt="">
										</div>
										<h3>'.$el[1].'</h3>
										<p>'.$el[2].'</p>
									  </div>';

								$i++;
							}
						?>
					</div>
				</div>
			</section>

			<section id="section-numbers" class="container__anim">

				<div class="wrapper">
					<div class="banner anim__slide anim__delayMedium_1" style="background-image: url(img/apropos/img-section2@2x.jpg);"></div>

					<div class="container-el">
						<?php
							$i = 2;
							foreach ($content_page['section-numbers'] as $el) {
										
								echo '<div class="el anim__slide anim__delayMedium_'.$i.'">
										<div class="num">'.$el[0].'</div>
										<div class="bar"></div>
										<p>'.$el[1].'</p>
									  </div>';

								$i++;
							}
						?>
					</div>
				</div>
				
			</section>

			<section id="section-team" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							<?php echo $content_page['section-team']['title']; ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-team']['text']; ?>
						</p>
					</div>
					<div class="container-col">
						<div class="col anim__slide anim__delayMedium_3">
							<h3><?php echo $content_page['section-team']['container-col']["0"][0]; ?></h3>
							<p><?php echo $content_page['section-team']['container-col']["0"][1]; ?></p>
						</div>
						<div class="col anim__slide anim__delayMedium_4">
							<h3><?php echo $content_page['section-team']['container-col']["1"][0]; ?></h3>
							<p><?php echo $content_page['section-team']['container-col']["1"][1]; ?></p>
						</div>
					</div>
					<div class="container-grid">
						<div class="grid-item anim__slide anim__delayMedium_5" style="background-image: url(img/apropos/team/img1-section3@2x.jpg);"></div>
						<div class="grid-item anim__slide anim__delayMedium_6" style="background-image: url(img/apropos/team/img2-section3@2x.jpg);"></div>
						<div class="grid-item anim__slide anim__delayMedium_7" style="background-image: url(img/apropos/team/img3-section3@2x.jpg);"></div>
						<div class="grid-item anim__slide anim__delayMedium_8">
							<div class="content">
								<h4>
									<?php echo $content_page['section-team']['container-grid']["title"]; ?>
								</h4>
								<p>
									<?php echo $content_page['section-team']['container-grid']["text"]; ?>
								</p>
								<div class="btn">
									<a class="btn-text" <?php echo 'href="'.$content_page['section-team']['container-grid']["container-btn"][1].'"'; ?>>
										<?php echo $content_page['section-team']['container-grid']["container-btn"][0]; ?>
									</a>
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
							<?php echo $content_page['section-fondateur']["title"]; ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?php echo $content_page['section-fondateur']["text"]; ?>
						</p>
					</div>
					<div class="container-el">
						<?php
							$i = 3;
							foreach ($content_page['section-fondateur']["container-el"] as $el) {
										
								echo '<div class="el anim__slide anim__delayMedium_'.$i.'">
										<div class="img" style="background-image: url(img/apropos/fondateurs/'.$el[0].');"></div>
										<div class="text">
											<div class="name">'.$el[1].'</div>
											<div class="job">'.$el[2].'</div>
											<p>'.$el[3].'</p>
										</div>
									  </div>';

								$i++;
							}
						?>
					</div>
				</div>
			</section>


			<section id="section-joinus" class="container__anim">
				<div class="background anim__slide anim__delayMedium_1"></div>
				<div class="wrapper">
					<h2 class="anim__slide anim__delayMedium_2">
						<?php echo $content_page['section-joinus']["title"]; ?>
					</h2>
					<div class="btn anim__slide anim__delayMedium_3">
						<a class="btn-text" <?php echo 'href="'.$content_page['section-joinus']["container-btn"][1].'"'; ?>>
							<?php echo $content_page['section-joinus']["container-btn"][0]; ?>
						</a>
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