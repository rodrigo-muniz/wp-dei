<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dei
 */

get_header(); 
get_sidebar();?>

	<div id="main-content" class="col-sm-12 col-md-8 col-lg-8">
		<div class="row page-content-wrapper body-content">
			<div class="page-content">
				<div class="equipe-content">
					<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 equipe-wrapper">
						<div class="row">

							<?php
							if ( have_posts() ) : ?>

								

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'equipe' );

								endwhile;

								

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
						</div>
					</div>
				</div><!-- .equipe-content -->
			</div><!-- .page-content -->
		</div><!-- .page-content-wrapper-->
	</div><!-- #main-content -->

<?php
get_footer();
