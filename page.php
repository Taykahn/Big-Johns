<?php get_header(); ?>

	<div class="container" id="page">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- .page-header -->

						<div class="page-content">

							<div class="col-md-6">

								<p><?php the_content(); ?></p>

							</div><!-- .col-md-6 -->

							<div class="col-md-6">

								<?php the_post_thumbnail(); ?>

							</div><!-- .col-md-6 -->

						</div><!-- .page-content -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- .col-md-9 -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer(); ?>