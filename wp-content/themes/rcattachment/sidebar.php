<aside>
    
    <?php
            // if ( is_category() ) {
            //     $parent = 10;
            //      wp_nav_menu( array( 'theme_location' => 'impulse_menu', 'menu_class' => 'products-menu', 'orderby' => 'date ', 'order' => 'ASC', ) );
            // } elseif ( is_category() )  {
            //         $parent = 14;
            //        wp_nav_menu( array( 'theme_location' => 'eik_menu', 'menu_class' => 'products-menu', 'orderby' => 'date ', 'order' => 'ASC', ) );
            // }
        // if (get_category_parents($cat)) {
        //     echo "10";
        // } elseif (parent_category_is(14)) {
        //     echo "14";
        // } else {
        //     echo "not work";
        // }
        // echo get_category_parents($cat, false);
        if (main_parent_is("10")) {
            wp_nav_menu( array( 'theme_location' => 'impulse_menu', 'menu_class' => 'products-menu', 'orderby' => 'date ', 'order' => 'ASC', ) );
        } elseif(main_parent_is("14"))  {
            wp_nav_menu( array( 'theme_location' => 'eik_menu', 'menu_class' => 'products-menu', 'orderby' => 'date ', 'order' => 'ASC', ) );
        }
    ?>
    
    
    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC',  'category__and' => array(42, get_query_var('cat'))) ); 
        if ( have_posts() ) : ?>
            <div class="dowload-catalogue">
            <?php while (have_posts()) : the_post(); ?>   
                <?php the_content(); ?>
            <?php endwhile; ?>
            </div>
        <?php endif; wp_reset_query(); ?>
    


</aside>