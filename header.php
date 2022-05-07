<?phpv

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<div class="container">
		<div class="header">
			<div class="logo hover-this">
				<?php the_custom_logo(); ?>
			</div>
			<div id="menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main_menu',
						'container' => 'nav',
						'container_class' => 'header_menu',
					)
				);
				?>

				<div id="mob-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main_mob_menu',
							'container' => 'nav',
							'container_class' => 'header_mob_menu',
						)
					);
					?>
					<?php if (have_rows('social_networks', 'option')) : ?>
						<ul class="socials">
							<?php while (have_rows('social_networks', 'option')) : the_row(); ?>
								<li class="socials_item">
									<a class="hover-this magnet-link"
									   href="<?php the_sub_field('social_networks_link'); ?>"
									   title="<?php the_sub_field('social_networks_full_name'); ?>"
									   target="_blank"><span
											data-magnet="item"><?php the_sub_field('social_networks_full_name'); ?></span></a>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>

			</div>
			<div class="menu_open_btn">
				<div class="text">menu</div>
				<div class="lines">
					<span class="line"></span>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->

