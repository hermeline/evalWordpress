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

<article class="FAQ" id="post-<?php the_ID(); ?> <?php post_class(); ?>
	<?php
echo "HELLLOOOO";
		if ( is_sticky() && is_home() ) :
			echo storefront_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>
	<header class="entry-header">
		<?php
			if ( 'post' === get_post_type() ) :
				echo '<div class="entry-meta">';
					if ( is_single() ) :
						storefront_posted_on();
					else :
						echo storefront_time_link();
						storefront_edit_link();
					endif;
				echo '</div><!-- .entry-meta -->';
			endif;

		?>
	</header><!-- .entry-header -->
<div id="qr">

	<div class="entry-content essai" id="cssFaq">

		<div class="champPers">
			<h3>Question : </h3>
			<p> <?php echo get_post_meta($post->ID, 'Question' , true); ?> </p>
			<h3> Réponse : </h3>
			<p> <?php echo get_post_meta($post->ID, 'Reponse' , true); ?> </p>
		</div>
 </div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
