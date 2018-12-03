<?php 
/**
 * Template Name: Custom Page
 *
 * This template is for the different kinds of work company has done
 */

global $post;

$post_id = $post->ID;

get_header(); ?>

	<div class="container" id="custom-page">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- .page-header -->

					<?php endwhile; ?>

				<?php endif; ?>

				<?php while ( have_rows('custom_page_layout') ) : the_row(); ?>

					<div class="content-title">

						<h2><?php the_sub_field('title'); ?></h2>

					</div><!-- .content-title -->

					<div class="custom-page-content">

						<div class="row">

							<div class="col-md-6">

									<img src="<?php the_sub_field('image'); ?>">

							</div><!-- .col-md-6 -->

							<div class="col-md-6">

									<p><?php the_sub_field('content'); ?></p>

									<button id="igButton">Gallery</button>

							</div><!-- .col-md-6 -->

							<div class='col-md-12'>

								<div class="image-gallery" id="imageGallery">

									<?php include( 'partials/ig-custom-page.php' ); ?>

								</div><!-- .image-gallery -->

						</div><!-- .col-md-12 -->

						</div><!-- .row -->

					</div><!-- .page-content --><hr>

				<?php endwhile; ?>

			</div><!-- .col-md-12 -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer(); ?>