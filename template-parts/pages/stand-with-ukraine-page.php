<?php
global $post;
$post_id = $post->ID;
?>

<div class="container">
	<section class="stand-with-ukraine">
		<div class="page-title"><?= get_the_content() ?></div>
		<div class="vide_wrapper"><?php the_field( 'youtube_video_iframe', $post_id ); ?></div>
		<div class="page-text"><?php the_field( 'text', $post_id ); ?></div>
		<h2 class="to_help_links_tit">Donation links. Help save Ukraine!</h2>
		<div class="to_help_links">
			<?php if ( have_rows( 'pay_links' ) ) : ?>
				<?php while ( have_rows( 'pay_links' ) ) : the_row(); ?>
					<a href="<?php the_sub_field( 'pay_link', $post_id ); ?>" class="to_help_link hover-this" target="_blank"><span class="text"><?php the_sub_field( 'pay_text', $post_id ); ?></span></a>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</section>
</div>