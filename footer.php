<?php

?>
<footer>
	<div class="container">
		<div class="footer">
			<div class="left">
				<div class="company-text"><span>Dear Deer © All Rights Reserved</span></div>
<!--				<a class="hashtag-ukr hover-this" href="--><?//= get_page(21)->guid ?><!--">#STAND WITH UKRAINE</a>-->
			</div>
			<div class="right social-wrap">
				<?php if (have_rows('social_networks', 'option')) : ?>
					<div class="follow-us hover-this">Follow Us</div>
					<ul class="socials">
						<?php while (have_rows('social_networks', 'option')) : the_row(); ?>
						<?php
								$svgImg = get_sub_field('social_networks_svg_img');
								$shortName = get_sub_field('social_networks_name');
							?>
							<li class="socials_item">
								<a class="hover-this magnet-link" href="<?php the_sub_field('social_networks_link'); ?>" title="<?php the_sub_field('social_networks_full_name'); ?>" target="_blank" ><span data-magnet="item"><?= $svgImg ? $svgImg : $shortName ?></span></a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>
<div class="bg-noise"></div>
<div class="cursor-outer"></div>
<div class="cursor-inner"></div>
<div class="cursor-view"></div>
<div class="overlay"></div>
<?php wp_footer(); ?>
</body>
</html>
