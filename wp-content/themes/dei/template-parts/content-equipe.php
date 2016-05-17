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
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 membro-equipe-wrapper">
		<div class="membro-equipe img-responsive">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) {
						$img = wp_get_attachment_image_src( get_post_thumbnail_id() );
						echo "<img src='$img[0]' />"; 
					}else{
						echo "<img src=''/>";
					}
				?>
			</a>
		</div>
		<div class="nome-membro-equipe" name="davi">
			<span class="text-uppercase">
				<?php echo get_post_meta(get_the_ID(), 'nome', true); ?>
			</span>
		</div>
		<div class="desc-membro-equipe">
			<span class="email-membro-equipe">
				<?php echo get_post_meta(get_the_ID(), 'email', true); ?>
			</span>
		</div>
	</div>
</article><!-- #post-## -->
