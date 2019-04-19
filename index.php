<?php get_header(); ?>

	
<div class="slider" id="slider3">
	 <?php if (have_posts()) :  ?>
           <?php  $i=0; while (have_posts() && i<3) : the_post(); ?>
    <div style="background-image:url(<?=catch_that_image();?>)">
            <span>
          <h2> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </span>
        </div>
	<?php $i++; endwhile; ?>
	<?php endif; ?>
	
        <!-- The Arrows -->
        <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;">
      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
        <!-- Title Bar -->
        <!--     <span class="titleBar">
        <h1>I am like a leaf in the wind.</h1> 
        <p>Watch me soar!</p>
    </span> -->
  </div>
<script>
$(document).ready(function() {
  $("#slider1").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off", 
    // hideDots: "off", 
    // hoverZoom: "on", 
    // titleBarTop: "off"
  });
  
  $("#slider_est").sliderResponsive({
    fadeSpeed: 300,
    autoPlay: "off",
    showArrows: "on",
    hideDots: "on"
  });
  
  $("#slider3").sliderResponsive({
    hoverZoom: "off",
    hideDots: "on"
  });
  
}); 
</script>

<div class="container" style="padding-top:30px">
  <div class="row">
    <div class="col-md-8">
		<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Articles</span></h4></div>
		<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
     <?php if(!has_post_format('aside') && !has_post_format('image')) { ?>
<div class="blog-post hentry index-post">
<div class="post-image-wrap-out">
<div class="post-image-wrap-inner">
<div class="post-meta-date">
<span class="post-date published" datetime="<?php the_time('c'); ?>"> <?php the_time(get_option('date_format')); ?></span>
</div>
<div class="post-image-wrap">

<img alt="Essential Tips for Portrait Photographers" class="post-thumb" src="<?=catch_that_image()?>">

</div>
<div class="rotate">
<div class="cat-links">
<div class="cat-content">
<span class="post-tag"><p><?php the_category( ', ' ) ?></p></span>
</div>
</div>
</div>
</div></div>
<div class="post-info">
<h2 class="post-title">
<a  dir='auto' href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>&#8221;"><?php the_title(); ?></a>
</h2>

<p class="post-snippet" dir='auto'>
<?php
echo get_content();
?>
</p>
<a class="read-more" href="<?php the_permalink() ?>">Read more</a>
</div>
</div>
 <?php  }  ?>
 <?php edit_post_link('Edit', '<p>', '</p>'); ?>
<?php endwhile; ?>
<?php endif; ?>			 
	<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>		 

		
<?php if (show_posts_link_nav()): ?>
		<nav><?php next_posts_link('Older'); delim_posts_link(); previous_posts_link('Newer') ?></nav>
	<?php endif; ?>


    </div>
 </strong>
<div class="col-md-4" style="max-width:100% !important;">

    	<?php get_sidebar(); ?>


</div>
</div>
</div


<?php get_footer(); ?>
