<?php 
/**
 * Template Name: Recent Work Page
 *
 * This template is to display the services by company
 */

global $post;

$post_id = $post->ID;

get_header(); ?>

	<div class="container" id="recent-work-page">

		<div class="row">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="page-header">

						<h1><?php the_title(); ?></h1>

					</div><!-- .page-header -->

				<?php endwhile; ?>

			<?php endif; ?>

			<div class="wwd-section">

				<?php if( have_rows('recent_work_layout') ): ?>

				<?php $i = 0; ?>

					<?php while ( have_rows('recent_work_layout') ) : the_row(); ?>

					<?php if($i % 2 == 0) { ?> 

					<?php } ?>

						<div class="col-md-6">

							<div class="banner" style="background: url( '<?php the_sub_field( 'background_image', $post_id ) ?>' ) 50%/cover no-repeat;">

							<div class="wwd-content">

								<h3><?php the_sub_field('title'); ?></h3>

								<p><?php the_sub_field('content'); ?></p>

							</div><!-- .wwd-content -->

						</div><!-- col-md-6 -->

			</div><!-- .wwd-section -->

					<?php $i++; ?>

					<?php if($i != 0 && $i % 2 == 0) { ?>

					<?php } ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .row -->

	</div><!-- .container -->

	</div>

<?php get_footer(); ?>