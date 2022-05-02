<?php
global $post;
$post_id = $post->ID;
?>

<div class="container">
	<section class="stand-with-ukraine">
		<div class="page-title"><?= get_the_content() ?></div>
		<div class="vide_wrapper"><?php the_field( 'youtube_video_iframe', $post_id ); ?></div>
		<div class="page-text"><?php the_field( 'text', $post_id ); ?></div>
		<a href="<?php the_field( 'pay_link', $post_id ); ?>" class="btn to-help-link" target="_blank">HELP TO UKRAINE ARMY</a>
	</section>
</div>