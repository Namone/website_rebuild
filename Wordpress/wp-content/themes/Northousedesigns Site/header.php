<head>
<title></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />
<script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>

<body>

<div id="header">
	<div id="desktop" class="layer">
		<div class="overlay"></div>
		<div id="logo">
			<?php if(get_field('logo', 'options')) : ?>
				<img id='header-logo' src="<?php the_field('logo', 'options'); ?>" />
			<?php endif; ?>
		</div>
		<div id="nav">
			<?php if(get_field('primary_menu','option')) : ?>
				<?php the_field('primary_menu','option'); ?>
			<?php endif; ?>
		</div>
		<?php if(get_field('header_image', 'options')) : ?>
			<img id="header-img" src="<?php the_field('header_image', 'options'); ?>" />
		<?php endif; ?>
		<div id="header-text">
			<?php if(get_field('header_text', 'options')) : ?>
				<h1 class="head-text"><?php the_field('header_text', 'options'); ?></h1>
			<?php endif; ?>
		</div>
	</div>
	<div id="mobile" class="layer">
		<div class="overlay"></div>
		<div id="logo">
			<?php if(get_field('logo', 'options')) : ?>
				<img id='header-logo' src="<?php the_field('logo', 'options'); ?>" />
			<?php endif; ?>
		</div>
		<?php if(get_field('header_image_mobile', 'options')) : ?>
			<img id="header-img-mobile" src="<?php the_field('header_image_mobile', 'options'); ?>" />
		<?php endif; ?>
	</div>
</div>


<!-- END OF HEADER -->





