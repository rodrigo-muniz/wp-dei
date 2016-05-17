<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dei
 */

?>
<div id="main-content" class="col-sm-12 col-md-8 col-lg-8">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dei' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		
	</article><!-- #post-## -->
</div>
