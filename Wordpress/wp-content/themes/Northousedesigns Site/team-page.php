<?php /* Template Name: Our Team */ ?>
<?php get_header(); ?>

<div id="body">	
	<div id="content" class="layer">
		<div class="wrapper">
			<?php if(get_field('header_blurb')) : ?>
				<?php the_field('header_blurb'); ?>
			<?php endif; ?>
		</div>
	</div>

	<div id="team" class="layer">
		<div class="wrapper">
			<?php if(have_rows('team_member')) : ?>
				<?php $layer = 0; $block = 1; while(have_rows('team_member')) : the_row(); ?>
					<?php $is_dark_blue = false; ?>

					<?php
					if ($layer % 2 == 0 && $block == 2) { // if the layer is odd and we are on block two
						$is_dark_blue = true;
					} elseif($layer % 2 != 0 && $block == 1) { // if the layer is even and we are on block 1
						$is_dark_blue = true;
					} else {
						$is_dark_blue = false;
					}
					?>
					<div class="team-member <?php if($is_dark_blue) : ?>darkblue<?php endif; ?>">
						<div class="image">
							<img src="<?php the_sub_field('picture'); ?>" />
						</div>
						<div class="blurb">
							<div class="position">
								<h2><?php the_sub_field('position'); ?></h2>
							</div>
							<p><?php the_sub_field('blurb'); ?></p>
							<div class="name">
								<p><?php the_sub_field('name'); ?></p>
							</div>
						</div>
					</div>
					<?php if ($block == 2) {
						$layer++; // if we have gone through 2 blocks, add to layers
						
					} ?>
				<?php if($block == 1) : $block++; else: $block = 1; endif; endwhile; ?>
			<?php endif; ?>			
		</div>
	</div>

<?php get_footer(); ?>