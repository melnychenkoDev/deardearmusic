<?php
global $post;
$post_id = $post->ID;

$labels_args = array(
	'post_type' => 'labels',
	'posts_per_page' => -1,
	'post_status' => array( 'publish' )
);
$labels_query = new WP_Query($labels_args);
?>


<div class="container">
	<section class="content">
		<h1 class="page-title"><?php the_field( 'title', $post_id ); ?></h1>

		<div class="labels">
			<?php if ($labels_query->posts): ?>
				<?php foreach ($labels_query->posts as $post) : ?>
					<?php
						$post_id = $post->ID;
						$post_title = $post->post_title;
					?>

					<div class="labels_item hover-this">
						<a href="<?php the_field('label_url', $post_id); ?>" target="_blank">
							<img width="360" height="360" src="<?= get_the_post_thumbnail_url($post_id, 'full') ?>"
								 alt="<?= $post_title ?>" title="<?= $post_title ?>">
						</a>
					</div>

				<?php endforeach; ?>
				<a href="<?= get_page(23)->guid ?>" class="labels_item end hover-this">
					<div class="text">Your label could be next. Submit your application</div>
					<span class="arrow-to"></span>
				</a>
			<?php endif; ?>
		</div>

	</section>
</div>