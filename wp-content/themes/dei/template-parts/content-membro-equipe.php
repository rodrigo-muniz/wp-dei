<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dei
 */

?>
<div id="main-content" class="col-sm-12 col-md-8 col-lg-8">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="professor-wrapper">
			<div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8 professor-content">
				<a href="<?php echo get_post_type_archive_link( 'equipe' ); ?>"
					<span class="glyphicon glyphicon-remove close-symbol" aria-hidden="true"></span>
				</a>			
				<div class="professor-photo">
					<?php if ( has_post_thumbnail() ) {
							$img = wp_get_attachment_image_src( get_post_thumbnail_id() );
							echo "<img src='$img[0]' />"; 
						}else{
							echo "<img src=''/>";
						}
					?>

				</div>
				<div class="professor-nome">
					<span><?php echo get_post_meta(get_the_ID(), 'nome', true); ?></span>
				</div>
				<div class="professor-email">
					<span><?php echo get_post_meta(get_the_ID(), 'email', true); ?></span>
				</div>
				<div class="professor-descricao">
					<span><?php the_content(); ?></span>
				</div>
			</div>
		</div>
	</article><!-- #post-## -->
</div>

