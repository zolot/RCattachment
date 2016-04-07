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
            
            <div class="characteristics-table-wrap">
                <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(28, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "the_weight_of__theexcavator";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "weight__breakers";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "tool__diameter";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "working__pressure";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>'><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('the_weight_of__theexcavator'); ?></div>
                            <div><?php echo the_field('weight__breakers'); ?></div>
                            <div><?php echo the_field('tool__diameter'); ?></div>
                            <div><?php echo the_field('working__pressure'); ?></div>
                        </div>  
                        <?php endwhile;  ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                    <div class="tab"><span><?php 
                                        $field_name = "description";
                                        $field = get_field_object($field_name);
                                        echo $field['label']; ?></span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>                                          
                                        <div class="technical"><?php the_content(); ?>  </div>
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <div class="descr"><?php echo the_field('description'); ?></div>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                  
                     <?php endwhile;  ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>
                     


                <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(29, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name_1";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "weight_of_base_machine_1";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "torque_1";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "maximum_pressure_1";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "oil_consumption_1";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name_1'); ?></a></div>
                            <div><?php echo the_field('weight_of_base_machine_1'); ?></div>
                            <div><?php echo the_field('torque_1'); ?></div>
                            <div><?php echo the_field('maximum_pressure_1'); ?></div>
                            <div><?php echo the_field('oil_consumption_1'); ?></div>
                        </div>   
                        <?php endwhile; ?> 
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <div class="technical"><?php the_content(); ?>  </div>                                        
                                    </div> 

                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>
                     

                    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(30, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name_2";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "static_eccentric_moment_2";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "weight_of_base_machine_2";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name_2'); ?></a></div>
                            <div><?php echo the_field('static_eccentric_moment_2'); ?></div>
                            <div><?php echo the_field('weight_of_base_machine_2'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                    <div class="tab"><span><?php 
                                        $field_name = "description_2";
                                        $field = get_field_object($field_name);
                                        echo $field['label']; ?></span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description_2'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                     <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(31, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "tamping_force";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "size_tamping_plate";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "weight_of_base_machine";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('tamping_force'); ?></div>
                            <div><?php echo the_field('size_tamping_plate'); ?></div>
                            <div><?php echo the_field('weight_of_base_machine'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                    <div class="tab"><span><?php 
                                        $field_name = "description";
                                        $field = get_field_object($field_name);
                                        echo $field['label']; ?></span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(32, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "forks_width_x_thickness";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "fork_length";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "the_width_of_the_fork_carriage";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('forks_width_x_thickness'); ?></div>
                            <div><?php echo the_field('fork_length'); ?></div>
                            <div><?php echo the_field('the_width_of_the_fork_carriage'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                    <div class="tab"><span><?php 
                                        $field_name = "description";
                                        $field = get_field_object($field_name);
                                        echo $field['label']; ?></span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(33, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "working_width";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "working_width_with_the_rotation";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "brush_diameter";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('working_width'); ?></div>
                            <div><?php echo the_field('working_width_with_the_rotation'); ?></div>
                            <div><?php echo the_field('brush_diameter'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(34, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "working_width";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "the_diameter_of_the_snow_blower";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "screw_diameter";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('working_width'); ?></div>
                            <div><?php echo the_field('the_diameter_of_the_snow_blower'); ?></div>
                            <div><?php echo the_field('screw_diameter'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(35, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "weight";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "width";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "applicable";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('weight'); ?></div>
                            <div><?php echo the_field('width'); ?></div>
                            <div><?php echo the_field('applicable'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(36, get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "angle_of_rotation";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "swivel_mechanism";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "working_width_mm";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('angle_of_rotation'); ?></div>
                            <div><?php echo the_field('swivel_mechanism'); ?></div>
                            <div><?php echo the_field('working_width_mm'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                    <div class="tab"><span><?php 
                                        $field_name = "description";
                                        $field = get_field_object($field_name);
                                        echo $field['label']; ?></span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(39,get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "nominal_horizontal_reach";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "horizontal_working_area";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "angle_of_rotation";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "operating_pressure";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('nominal_horizontal_reach'); ?></div>
                            <div><?php echo the_field('horizontal_working_area'); ?></div>
                            <div><?php echo the_field('angle_of_rotation'); ?></div>
                            <div><?php echo the_field('operating_pressure'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                     <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',    'category__and' => array(40,get_query_var('cat'))) ); 
                    if ( have_posts() ) : ?>
                    <div class="table">
                        <div class="table-row">
                            <div><?php 
                            $field_name = "name";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "operating_pressure_bar";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "the_oil_flow";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "energy_consumption";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "the_required_voltage";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                            <div><?php 
                            $field_name = "dimensions_hxwxd";
                            $field = get_field_object($field_name);
                            echo $field['label']; ?></div>
                        </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="table-row">
                            <div><a href="#" data-attribute='<?php echo $post->ID; ?>' ><?php echo the_field('name'); ?></a></div>
                            <div><?php echo the_field('operating_pressure_bar'); ?></div>
                            <div><?php echo the_field('the_oil_flow'); ?></div>
                            <div><?php echo the_field('energy_consumption'); ?></div>
                            <div><?php echo the_field('the_required_voltage'); ?></div>
                            <div><?php echo the_field('dimensions_hxwxd'); ?></div>
                        </div>    
                    <?php endwhile; ?>  
                    <?php while (have_posts()) : the_post(); ?>   
                        <div class="detal-descr" id="descr-<?php echo $post->ID; ?>">    
                            <div class="tabs-wrap">
                                <div class="tabs">
                                    <div class="tab active"><span>Technical specifications</span></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item">
                                        <h2><?php the_title(); ?>   </h2>  
                                        <?php the_content(); ?>        
                                        
                                    </div> 
                                    <div class="tab-item" style="display: none">
                                        <h2><?php the_title(); ?>   </h2>                      
                                            <?php echo the_field('description'); ?>  
                                    </div>
                                </div>
                                <button class="close-descr"></button>                   
                            </div>      

                        </div>                                                       
                     <?php endwhile; ?>
                     </div> 
                     <?php endif; wp_reset_query(); ?>

                     
                     
            </div>

            <?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; if( get_field('video', $taxonomy . '_' .$term_id) ): ?>
            <div class="video video-wrap">
             
                <?php $queried_object = get_queried_object(); $taxonomy = $queried_object->taxonomy;$term_id = $queried_object->term_id; the_field('video', $taxonomy . '_' .$term_id); ?>
             </div>
             
            <?php endif; ?>


                
            <?php 
                if (main_parent_is("14")) { ?>               

                    <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC', 'category__not_in' => '42',  'category__in' => array(get_query_var('cat'))) ); 
                        if ( have_posts() ) : ?>
                        <div class="detal-descr-eik">
                        <?php while (have_posts()) : the_post(); ?>
                              <?php the_content(); ?> 
                        <?php endwhile; ?>
                        </div>
                        <?php endif; wp_reset_query(); ?>
            <?php }  ?>        
            
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>