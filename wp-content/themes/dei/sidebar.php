<aside class="col-sm-12 col-md-4 col-lg-4">

    <?php
    wp_nav_menu(array(
        'menu' => 'Main Navigation', // This will be different for you. 
        'container_id' => 'cssmenu',
        'walker' => new CSS_Menu_Maker_Walker()
    ));
    ?>

    <?php dynamic_sidebar(); ?>	
</aside>