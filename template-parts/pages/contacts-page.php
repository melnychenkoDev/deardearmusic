<?php
global $post;
$post_id = $post->ID;
?>

<div class="container">
	<section class="contacts_wrapper">
		<div class="map">
			<?php the_field( 'google_map_iframe', $post_id ); ?>
		</div>
		<div class="contacts">
			<div class="contacts_item">
				<div class="label">Phone:</div>
				<a class="hover-this" href="tel:<?= clear_phone(the_field( 'main_number', 'option' )); ?>"><?php the_field( 'main_number', 'option' ); ?></a>
			</div>
			<div class="contacts_item">
				<div class="label">Email:</div>
				<a class="hover-this" href="mailto:<?php the_field( 'main_email', 'option' ); ?>"><?php the_field( 'main_email', 'option' ); ?></a>
			</div>
			<div class="contacts_item">
				<div class="label">Address:</div>
				<a class="hover-this" href="https://goo.gl/maps/ZBqgCCW9mrUeXECu9" target="_blank"><?php the_field( 'address', 'option' ); ?></a>
			</div>
		</div>
	</section>
</div>
