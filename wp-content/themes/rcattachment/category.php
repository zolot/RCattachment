<?php get_header(); ?>

<div class="container">
    <div class="info">
        <?php get_sidebar(); ?>

        <div class="contant-wrap">
            <div class="cat-title">
                <h1><?php single_cat_title(); ?></h1>
                <div class="line"></div>
            </div>
            <div class="descr">
                <?php if (is_category() && !is_paged()) {
                 echo category_description();
                } ?>
            </div>

            <ul class="products">
            <?php 
                $args = array(
                    'parent'                   =>  $cat,
                    'hide_empty' => 0,
                    'orderby' => ID,
                    'order' => ASC
                    );
                $categories = get_categories( $args );

                if( $categories ):
                    foreach( $categories as $cat ): ?>
                        <li>                
                            <a href="<?php echo get_category_link($cat->term_id);?>">
                                <div class="thumb-wrap"><?php if($imgcat1=get_field("imgcat1",$cat)){?><img src="<?php echo $imgcat1;?>"/><?php }?></div>
                                <div class="descr">
                                    <h3><?php echo $cat->name;?></h3>
                                </div>           
                            </a>
                        </li>    
            <?php 
                    endforeach;
                endif;
            ?>
            </ul>

        </div>
    </div>
</div>

<?php get_footer(); ?>