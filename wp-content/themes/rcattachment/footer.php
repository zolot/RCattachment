    <footer>
        <div class="container">
            <ul class="contacts-wrap">
                <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC',  'cat'=>'4') );
                    if ( have_posts() ) : 
                    while (have_posts()) : the_post(); ?>
                        <li>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?> 
                        </li>
                    <?php endwhile; 
                    endif; 
                wp_reset_query(); ?>
            </ul>
            <div class="logo-wrap"><?php if($imgcat1=get_field("imgcat1",get_category(19))){?>
                <img src="<?php echo $imgcat1;?>"/>
                <?php }?>
            </div>
        </div>
    </footer>

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.2.min.js"></script>  
    <script src="<?php echo get_template_directory_uri(); ?>/libs/owl/owl.carousel.min.js" />  </script>   
    <script src="<?php echo get_template_directory_uri(); ?>/libs/magnific/jquery.magnific-popup.min.js" />  </script>   
    <script src="<?php echo get_template_directory_uri(); ?>/libs/modernizr/modernizr.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/libs/jquery.fitvids.js"></script>   
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

    
    
    <?php wp_footer(); ?>

       
    <!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter --><!-- /Google Analytics counter -->
    
</body>
</html>