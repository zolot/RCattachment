<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8" />

    <title>RCattachment</title>
    <meta content="" name="description" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    
    <?php wp_head(); ?>
        
</head>
<body>
    <header class="default">
        <div class="header-insert">
            <div class="container">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <?php if($imgcat1=get_field("imgcat1",get_category(3))){?>
                    <img src="<?php echo $imgcat1;?>"/>
                    <?php }?>
                </a>
                <div class="nav-line">
                    <?php wp_nav_menu(array('theme_location' => 'primary',
                                        'menu_class' => 'menu', 
                                        'menu_id' => 'menu',
                                        'container' => '')) ; ?>
                    <div class="callback">
                        <a href="#modal-form" class="form-link popup"></a>
                        <div class="phone"><?php $post_id_56 = get_post( 56, ARRAY_A);
$content = $post_id_56['post_content']; echo $content?></div>

                    </div>
                </div>
                
            </div>
        </div>
        <div class="hidden">
            <div class="form-wrap" id='modal-form'>
                <?php echo do_shortcode( '[contact-form-7 id="349" title="Contact form"]' ); ?>
                
            </div>
        </div>
        
    </header>
    
