<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<!--	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->
<!--	<script src="--><?//= get_template_directory_uri().'/js/pace.js' ?><!--"></script>-->
<!--	<script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>-->
<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header>
		<div class="container">
			<div class="header">
				<div class="logo hover-this">
					<?php the_custom_logo(); ?>
				</div>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main_menu',
						'container' => 'nav',
						'container_class' => 'header_menu',
						'link_target' => '_blank',
					)
				);
				?>
			</div>
		</div>
	</header><!-- #masthead -->

