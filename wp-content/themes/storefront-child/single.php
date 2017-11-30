<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Storefront
 * @since 1.0
 * @version 1.0
 */
?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); 

					get_template_part( 'template-parts/post/content', get_post_format() );
					echo get_post_meta($post->ID, 'faq' , true);
					// If comments are open or we have at least one comment, load up the comment template.
				
				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

