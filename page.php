<?php

get_header();
?>

	<main>
		<?php

		while (have_posts()) :
			the_post();

			global $post;
			$post_slug = $post->post_name;

			if ($post_slug) {
				get_template_part('template-parts/pages/'.$post_slug, 'page');
			} else {
				get_template_part('template-parts/content', 'none');
			}

		endwhile;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
