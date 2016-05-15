<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dei
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row noticia-container">
		<div class="col-lg-offset-2 col-lg-5">
			<div class="row">
				<div class="col-lg-12 data-noticia">
					<?php the_date(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 noticia-content">
					<span><?php the_title(); ?></span>
					<p><?php the_content(); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 link-noticia">
					<a href="<?php the_permalink(); ?>" rel="bookmark">>> VER NOTÍCIA</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-offset-2 divider"></div>
	
</article><!-- #post-## -->
