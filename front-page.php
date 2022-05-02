<?php

get_header();
?>

<main>
	<div class="container">
		<section class="first">
			<div class="text_content page-title">
				<?php echo get_the_content() ?>
			</div>
		</section>
	</div>

	<section class="second">
		<div class="labels_slide_container">
			<div class="swiper labelsSlider">
				<div class="swiper-wrapper">
					<?php $labels_items = get_field('labels_items'); ?>
					<?php if ($labels_items) : ?>
						<?php foreach ($labels_items as $post) : ?>
							<div class="swiper-slide">
								<?php setup_postdata($post); ?>
								<a class="labels_item hover-this" href="<?php the_field('label_url', $post->ID); ?>" target="_blank">
									<img width="283" height="283" src="<?= get_the_post_thumbnail_url($post->ID, 'full') ?>"
										 alt="<?= $post->post_title ?>" title="<?= $post->post_title ?>">
								</a>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
?>
