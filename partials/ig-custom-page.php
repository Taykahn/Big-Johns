<?php
/**
 * Image Gallery
 *
 * Gallery for Custom Page posts
 */
?>

<?php $images = get_sub_field('image_gallery'); ?>

<?php if( $images ): ?>

	<ul>

		<?php foreach( $images as $image ): ?>

		<div class="col-md-3 ig-custom-page">

			<li>

				<a href="<?php echo esc_url( $image['url'] ); ?>">

				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>" /></a>

				<p><?php echo esc_html( $image['caption'] ); ?></p>

				<p><?php echo esc_html( $image['description'] ); ?></p>

			</li>

		</div><!-- end col-md-4 -->

		<?php endforeach; ?>

	</ul>

<?php endif; ?>