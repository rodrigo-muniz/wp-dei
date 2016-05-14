<?php
/*
  Template Name: Noticias Page
 */
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main-content" class="col-sm-12 col-md-8 col-lg-8">
    <div class="row page-content-wrapper body-content">
        <div class="page-content">
            <div class="content">
                <?php $loop = new WP_Query(array('post_type' => 'noticias'));
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
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
                                    <a href="#">>> VER NOTÍCIA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-offset-2 divider"></div>
<?php endwhile; ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();


