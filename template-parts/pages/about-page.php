<?php
global $post;
$post_id = $post->ID;
?>


<div class="container">
	<section class="content">
		<h1 class="page-title"><?php the_field( 'title', $post_id ); ?></h1>
		<div class="page-text"><?php the_field( 'text', $post_id ); ?></div>
	</section>
</div>