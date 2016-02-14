<?php
/**
 * Template part for displaying home page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FileTime
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'file-time' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->