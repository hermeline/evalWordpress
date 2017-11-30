<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Storefront
 * @since 1.0
 * @version 1.2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( 'post' === get_post_type() ) :
				echo '<div class="entry-meta"></div><!-- .entry-meta -->';
			endif;
?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="champPers">
			<h3> <?php the_title(); 
echo get_post_meta($post->ID, 'Question' , true); ?> </h3>
			<p> <?php echo get_post_meta($post->ID, 'Reponse' , true); ?> </p>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
