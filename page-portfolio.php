<?php 
/**
 * Portfolio
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<div id="nav-change">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="portfolio-page-header">

					<h1><?php the_title(); ?></h1>

				</div><!-- end page-header --><hr>

				<?php if( have_rows( 'portfolio', $post_id ) ): ?>

					<?php while ( have_rows( 'portfolio', $post_id ) ) : the_row(); ?>

						<div class="col-md-12">

							<div class="portfolio-title">

								<h2><?php the_sub_field( 'title', $post_id ); ?></h2>

							</div><!-- end portfolio-title -->

						</div><!-- end col-md-12 -->

						<div class="col-md-6 web-content">

							<div class="portfolio-img">

								<img src="<?php the_sub_field( 'image', $post_id ); ?>" />

							</div><!-- end portfolio-img -->

						</div><!-- end col-md-6 -->

						<div class="col-md-6 web-content">

							<div class="portfolio-content">

								<?php the_sub_field( 'content', $post_id ); ?>

							</div><!-- end portfolio-content -->

						</div><!-- end col-md-6 -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

</div><!-- end nav-change -->

<?php get_footer(); ?>