<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dei
 */

get_header(); ?>
<?php get_sidebar(); ?>
	<div id="main-content" class="col-sm-12 col-md-8 col-lg-8">
		<div class="row page-content-wrapper body-content">
			<div class="page-content"></div>
		</div>
	</div>
	

<?php
get_footer();
