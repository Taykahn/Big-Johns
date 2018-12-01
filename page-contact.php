<?php 
/**
 * Template Name: Contact Page
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<div id="contact-page">

	<div class="container">

		<div class="banner no-pad" style="background: url( '<?php the_field( 'contact_img', $post_id ); ?>' ) 50%/cover no-repeat;">

		<div class="row">

			<div class="contact-form">

				<?php include( 'form/form.php' ); ?>

			</div><!-- end contact-content -->

		</div><!-- end row -->

	</div><!-- end container -->

</div><!-- end nav-change -->

<?php get_footer(); ?>