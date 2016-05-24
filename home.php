<?php get_header(); ?>


<!-- =================================================
		section-content
================================================== -->

<?php
	if( have_rows('site_section', 'option') ):

	$i = 0;

    while ( have_rows('site_section', 'option') ) : the_row();

?>


<div class="section-content" id="sections-landingarea">

	<div class="container">

		<div class="row">

			<div class="span12">

				<span class="icon icon-circle"><?php ++$i; echo $i;?></span>

				<h2><?php the_sub_field('site_section_headline', 'option'); ?></h2>

			</div>

		</div>
		<!-- END row -->

		<div class="row">

			<div class="span12">

				<div class="articles-wrapper">


				<?php

					if( have_rows('site_section_boxes') ):

					    while ( have_rows('site_section_boxes') ) : the_row();


							$image = get_sub_field('movie_image');
							$movie_title = get_sub_field('movie_title');
							$movie_director = get_sub_field('movie_director');
							$movie_description = get_sub_field('movie_description');

				?>

				<article>

					<div class="article-wrap">

						<?php if( !empty($image) ): ?>

							<div class="img-wrap" style="background-image: url('<?php echo $image['url']; ?>')"></div>

						<?php endif; ?>

						<?php if( !empty($movie_title) ): ?>

							<h3><?php the_sub_field('movie_title'); ?></h3>

						<?php endif; ?>


						<?php if( !empty($movie_director) ): ?>

							<h4><?php the_sub_field('movie_director'); ?></h4>

						<?php endif; ?>

						<?php if( !empty($movie_description) ): ?>

							<p><?php echo $movie_description; ?></p>

						<?php endif; ?>

						<a href="#" class="btn btn-rounded">GŁOSUJ</a>

					</div>

				</article>


				<?php

						endwhile;
					endif;

				?>

				</div>
				<!-- END articles-wrapper -->

			</div>
			<!-- END span12 -->

		</div>
		<!-- END row -->

	</div>

</div>
<!-- END section-content -->

<?php

		endwhile;
	endif;

?>



<!-- =================================================
		section-info
================================================== -->
<div class="section-info">

	<div class="container">

		<div class="row">

			<div class="wrap">

				<div class="span8">

					<h2><?php the_field('section_info_headline', 'option'); ?></h2>

				</div>
				<!-- END span8 -->

				<div class="span4">

					<p><?php the_field('section_info', 'option'); ?></p>

				</div>
				<!-- END span4 -->

			</div>
			<!-- END wrap -->

		</div>

	</div>

</div>
<!-- END section-info -->


<?php get_footer(); ?>
