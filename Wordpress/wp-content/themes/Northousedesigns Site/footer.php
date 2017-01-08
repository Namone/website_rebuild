	

	<div id="contact_form" class="layer">
		<div class="wrapper">
			<div id="form_copy">
				<?php if(have_rows('form', 'option')) : ?>
					<?php while(have_rows('form', 'option')) : the_row(); ?>
						<?php if (get_sub_field('form_copy')) : ?>
							<?php the_sub_field('form_copy'); ?>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div id="form">
				<?php if(have_rows('form', 'option')) : ?>
					<?php while(have_rows('form', 'option')) : the_row(); ?>
						<?php if (get_sub_field('form_shortcode')) : ?>
							<?php $form = get_sub_field('form_shortcode'); ?>
							<?php echo do_shortcode($form); ?>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<style>
	#testimonials { background: <?php if(get_field('testimonial_background_image', 'option')) : ?>url("<?php the_field('testimonial_background_image', 'option'); ?>") center center no-repeat; background-size: cover; <?php endif; ?> }
	</style>
	<div id="testimonials" class="layer">
		<?php if(get_field('testimonial_background_image', 'option')) : ?>
			<div class="overlay"></div>
		<?php endif; ?>
		<?php if(have_rows('testimonials', 'option')) : ?>
			<?php while(have_rows('testimonials', 'option')) : the_row(); ?>
					<div class="testimonial">
						<?php the_sub_field('copy', 'option'); ?>
						<div class="name"><?php the_sub_field('by', 'option'); ?></div>
						<div class="from"><?php the_sub_field('from', 'option'); ?></div>
					</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<div id="footer" class="layer">
		<div class="wrapper">
			<?php if(get_field('footer_copy', 'option')) : ?>
				<?php the_field('footer_copy', 'option'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

</body>

<footer>


</footer>