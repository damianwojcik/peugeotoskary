<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- HTML 5 SUPPORT
	================================================== -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>


	<!-- =================================================
			header
	================================================== -->

	<header>

		<div class="container">

			<div class="row">

				<div class="span12">

					<h2><?php the_field('home_headline_subtitle', 'option'); ?></h2>

					<h1><?php the_field('home_headline', 'option'); ?></h1>

					<img class="logo" src="<?= THEME_URL; ?>/assets/img/statuette.png" alt="Peugeot Statuette">

					<small class="image-caption"><?php the_field('statuette_title', 'option'); ?></small>

					<h4><?php the_field('home_intro_headline', 'option'); ?></h4>

					<div class="header-intro">

						<?php the_field('home_intro', 'option'); ?>

					</div>

					<a href="#sections-landingarea" class="btn-arrow-down"></a>

					<a href="#sections-landingarea"><strong><?php the_field('vote_link', 'option'); ?></strong></a>

				</div>

			</div>

		</div>

	</header>
