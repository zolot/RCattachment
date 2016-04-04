<?php get_header(); ?>

<div class="main">

<section id="main-slider" class="panel">
    <div id="slider-top" class="owl-carousel owl-theme">
                  
        <?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC',  'cat'=>'8') );
        	if ( have_posts() ) : 
            while (have_posts()) : the_post(); ?>
			<div class="item" style="background-image: url(<?php
				 if ( has_post_thumbnail()) {
				   	$full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
				   	echo ''.$full_image_url[0] . '';
				}
				 ?>)">
			</div>
         <?php endwhile; endif; wp_reset_query(); ?>            
        </div> 

</section>

<section id="about-us" class="panel">
	<div class="vertical-middle-wrap">
		<div class="container">
			<div class="col-left">
				<div class="title">
					<h2><?php echo get_cat_name(9); ?></h2>
					<div class="line"><div class="line-inside"></div></div>
				</div>
				<div class="descr"><?php echo category_description(9); ?></div>
			</div>
			<div class="col-right">
				<?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC',  'cat'=>'9') );
					if ( have_posts() ) : 
        	        while (have_posts()) : the_post(); ?>
			      		<?php the_content(); ?> 
			      	<?php endwhile; 
			      	endif; 
		      	wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<section id="impulse" class="brand panel">
	<div class="logo-wrap">
		<?php if($imgcat1=get_field("imgcat1",get_category(10))){?>
                    <img src="<?php echo $imgcat1;?>"/>
                    <?php }?>
	</div>

	<ul class="links-wrap">
		<?php
		$args = array(
			'parent'                   => 10,
			'hide_empty'               => 0,
			'taxonomy'                 => 'category',
			'pad_counts'               => true );
		$categories = get_categories($args);
		if($categories){
		foreach($categories as $cat){?>				
			<li>				
				<a href="<?php echo get_category_link($cat->term_id);?>">
					<h4><?php echo $cat->name;?></h4>			
				</a>
			</li>
		<?php }?>
		<?php }?>
	</ul>
</section> 

<section id="eik" class="brand panel">
	<div class="logo-wrap">
		<?php if($imgcat1=get_field("imgcat1",get_category(14))){?>
                    <img src="<?php echo $imgcat1;?>"/>
                    <?php }?>
	</div>

	<ul class="links-wrap">
		<?php
		$args = array(
			'parent'                   => 14,
			'hide_empty'               => 0,
			'taxonomy'                 => 'category',
			'pad_counts'               => true );
		$categories = get_categories($args);
		if($categories){
		foreach($categories as $cat){?>				
			<li>				
				<a href="<?php echo get_category_link($cat->term_id);?>">
					<h4><?php echo $cat->name;?></h4>			
				</a>
			</li>
		<?php }?>
		<?php }?>
	</ul>
</section>

<section id="our-customers" class="panel">
	<div class="vertical-middle-wrap">
		<div class="container">
			<div class="title">
				<h2><?php echo get_cat_name(18); ?></h2>
				<div class="line"><div class="line-inside"></div></div>
			</div>
			<div class="logos">
				<?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC',  'cat'=>'18') );
					if ( have_posts() ) : 
        	        while (have_posts()) : the_post(); ?>
			      		<?php the_content(); ?> 
			      	<?php endwhile; 
			      	endif; 
		      	wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<div id="contacts" class="panel">
<section id="map-wrap" class="panel">
	<?php query_posts( array ( 'orderby' => 'date ', 'order' => 'ASC',  'cat'=>'27') );
		if ( have_posts() ) : 
        while (have_posts()) : the_post(); ?>
      		<?php the_content(); ?> 
      	<?php endwhile; 
      	endif; 
  	wp_reset_query(); ?>
  	
</section>

<?php get_footer(); ?>
<script>
	$(document).ready(function() {
		$.scrollify({
		     section:".panel",
		     scrollSpeed: 1500,
		 });
	})
</script>
</div>


</div>

