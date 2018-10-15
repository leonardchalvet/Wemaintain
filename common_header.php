<header id="header-desktop" class="<?php echo($styleHeader); ?>">
	<div class="wrapper">
		<a class="logo" href="index.php">
			<img class="logo-style-1" src="img/common/logo-style-1.svg" alt="">
			<img class="logo-style-2" src="img/common/logo-style-2.svg" alt="">
		</a>
		<ul class="container-link">
			<?php
				foreach ($content_header['container-link'] as $link) {
				    echo '<li><a href="'.$link[1].'">'.$link[0].'</a></li>';
				 }
			?>
		</ul>
		<div class="container-action">
			<div class="signin"><?php echo '<a href="'.$content_header['container-action']['0'][1].'">'.$content_header['container-action']['0'][0].'</a>'; ?></div>
			<div class="sep"></div>
			<div class="signup"><?php echo '<a href="'.$content_header['container-action']['1'][1].'">'.$content_header['container-action']['1'][0].'</a>'; ?></div>
		</div>
	</div>
</header>

<header id="header-mobile" class="<?php echo($styleHeader); ?>">	
	<div class="head">	
		<div class="wrapper">
			<a href="index.php" class="container-logo">	
				<img class="logo-style-1" src="img/common/logo-style-1.svg" alt="">
				<img class="logo-style-2" src="img/common/logo-style-2.svg" alt="">
			</a>	
			<div class="burger">
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</div>
	</div>
	<div class="container-link">
		<div class="wrapper">	
			<ul>
				<?php
					foreach ($content_header['container-link'] as $link) {
					    echo '<li><a href="'.$link[1].'">'.$link[0].'</a></li>';
					 }
				?>
			</ul>
			<div class="container-action">
				<?php 
					echo '<a href="'.$content_header['container-action']['0'][1].'">'.$content_header['container-action']['0'][0].'</a>';
					echo '<a href="'.$content_header['container-action']['1'][1].'">'.$content_header['container-action']['1'][0].'</a>'; 
				?>
			</div>
		</div>
	</div>
</header>