<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button data-target="#nav-walker" data-toggle="collapse" class="navbar-toggle collapsed" type="button" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Menu</a>
        </div>                               
            

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'nav-walker',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'twitter_bootstrap_nav_walker::fallback',
                'walker'            => new twitter_bootstrap_nav_walker())
            );
        ?>
                                               
        <!-- </div>                                                      -->
    </div> 
</nav>  

 

