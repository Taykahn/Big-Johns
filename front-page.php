<?php 
/**
 * Template Name: Frontpage
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<section class="fp-section-1">

	<div class="services-title">

		<h1>Services Include</h1><hr>

	</div><!-- .services-title -->

	<div class="container">

		<div class="list">

			<div class="col-md-6">

				<div class="list-banner" style="background: url( '<?php the_field( 'exp_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

				<div class="list-content">

					<p><?php the_field('exp_sec', $post_id ); ?></p>

				</div><!-- .list-content -->

			</div><!-- .list -->

		</div><!-- .col-md-6 -->

	</div><!-- .container -->

		<div class="col-md-6">

			<div class="experience">

				<h1>OVER 30 YEARS COMBINED EXPERIENCE</h1>

			</div><!-- .experience -->

		</div><!-- .col-md-6 -->

	</div><!-- .container -->

</section><!-- .fp-section-1 -->

<section class="fp-section-2">

	<div class="wwd-title">

		<h1>Recent Work</h1><hr>

	</div><!-- .wwd-title -->

	<div class="container">

		<div class="wwd-section">

			<?php if( have_rows('what_we_do') ): ?>

			<?php $i = 0; ?>

				<?php while ( have_rows('what_we_do') ) : the_row(); ?>

				<?php if($i % 2 == 0) { ?> 

				<?php } ?>

					<div class="col-md-6">

						<div class="banner" style="background: url( '<?php the_sub_field( 'bkgd_img_blocks', $post_id ) ?>' ) 50%/cover no-repeat;">

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

	</div><!-- .container -->

</section><!-- .fp-section-2 -->

<section class="fp-section-3">

	<div class="contact-us-title">

		<h1>About Us</h1><hr>

	</div><!-- .something-section -->

	<div class="container">

		<div class="row">

			<div class="col-md-7">

				<div class="fp-col-right">

					<?php if( have_rows('col_right_fp') ): ?>

						<?php while ( have_rows('col_right_fp') ) : the_row(); ?>

							<h2><?php the_sub_field('col_right_title'); ?></h2>

							<p><?php the_sub_field('col_right_content'); ?></p>

							<img src="<?php the_sub_field('col_right_image'); ?>">

						<?php endwhile; ?>

					<?php endif; ?>

				</div><!-- .fp-col-right -->

			</div><!-- col-md-7 -->

			<div class="col-md-5">

				<div class="contact-heading">

					<h2>Contact Us</h2><hr>

				</div><!-- .contact-heading -->

				<div class="contact-form">

					<?php the_field( 'contact_form', $post_id ); ?>

				</div><!-- .contact-form -->

			</div><!-- .col-md-5 -->

		</div><!-- .row -->

	</div><!-- .container -->

</section><!-- .fp-section-3 -->

<section class="fp-section-4">

	<div class=" container">

		<div class="slider">

			<?php the_field( 'slider', $post_id  ); ?>

		</div><!-- .header-slider -->

	</div><!-- .container -->

</section><!-- .fp-section-4 -->

<?php get_footer() ?>
