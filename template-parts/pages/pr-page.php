<?php
global $post;
$post_id = $post->ID;
?>

<div class="container">
	<section class="first">
		<h1 class="page-title"><?php the_field( 'title', $post_id ); ?></h1>
		<div class="page-text"><?php the_field( 'text', $post_id ); ?></div>
	</section>

	<section class="contacts">
		<div class="contacts_item">
			<div class="label">Phone:</div>
			<a class="hover-this" href="tel:<?= clear_phone(the_field( 'main_number', 'option' )); ?>"><?php the_field( 'main_number', 'option' ); ?></a>
		</div>
		<div class="contacts_item">
			<div class="label">Email:</div>
			<a class="hover-this" href="mailto:<?php the_field( 'main_email', 'option' ); ?>"><?php the_field( 'main_email', 'option' ); ?></a>
		</div>
	</section>
</div>