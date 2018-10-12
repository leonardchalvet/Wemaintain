<footer>
	<div class="wrapper">
		<div class="container-lg">
			<a href="index.php">
				<img src="img/common/logo-style-2.svg" alt="">
			</a>
			<div class="container-language">
				<select name="" id="" onchange="location = this.value;">
					<?php
						foreach ($content_footer['container-language'] as $language) {
							$url = explode("?",'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]);
						    echo '<option value="'.$url[0].'?lg='.strtolower($language).'" '. (strtoupper($lang)==$language?"selected":"") .' >'.$language.'</option>';
						 }
					?>
				</select>
			</div>
		</div>
		<div class="container-link">
			<?php
				foreach ($content_footer['container-link'] as $link) {
					echo '<ul>';
					foreach ($link as $content) {
						echo '<li>';
						if($content[1]=="null")
							echo $content[0];
						else 
							echo '<a href="'.$content[1].'">'.$content[0].'</a>';
						echo '</li>';
					}
					echo '</ul>';
				}
			?>
		</div>
		<div class="container-contact">
			<div class="title"><?php echo $content_footer['container-contact']['title']; ?></div>
			<div class="container-rs">
				<?php echo '<a href="'.$content_footer['container-contact']['container-rs'][0].'"?>'; ?>
					<img src="img/footer/icn-facebook.svg" alt="">
				</a>
				<?php echo '<a href="'.$content_footer['container-contact']['container-rs'][1].'"?>'; ?>
					<img src="img/footer/icn-linkedin.svg" alt="">
				</a>
				<?php echo '<a href="'.$content_footer['container-contact']['container-rs'][2].'"?>'; ?>
					<img src="img/footer/icn-twitter.svg" alt="">
				</a>
			</div>
			<div class="container-tel">
				<div class="icn">
					<img src="img/footer/icn-phone.svg" alt="">
				</div>
				<?php echo '<a href="tel:'.$content_footer['container-contact']['container-tel'][0].'">'.$content_footer['container-contact']['container-tel'][1].'</a>'; ?>
			</div>
		</div>
	</div>
	<div class="cpr">
		<?php echo $content_footer['container-contact']['cpr']; ?>
	</div>
</footer>