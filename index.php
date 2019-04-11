<?php get_header(); ?>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
	  <?php if (have_posts()) :  ?>
           <?php  $i=0; while (have_posts() && i<3) : the_post(); ?>
    <div class="carousel-item <?php if($i===0) echo 'active'?>">
      <img src="<?=catch_that_image()?>" alt="Los Angeles">
	  <div class="carousel-caption">
         <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
      </div>
    </div>
	    <?php $i++; endwhile; ?>
	  <?php endif; ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>



<div style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8">
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
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>&#8221;"><?php the_title(); ?></a>
</h2>
<div class="post-meta">
<span class="post-author">
	<a class="url" href="<?php the_author_meta('user_url') ?>" title="Visit the author&#8217;s site">
							<?php the_author_meta('display_name'); ?>
						</a>
	</span>
</div>
<p class="post-snippet">
<?php
echo get_content();
?>
</p>
<a class="read-more" href="<?php the_permalink() ?>">Read more</a>
</div>
</div>
 <?php  }  ?>
<?php endwhile; ?>
<?php endif; ?>

<?php if (show_posts_link_nav()): ?>
		<nav><?php next_posts_link('Older'); delim_posts_link(); previous_posts_link('Newer') ?></nav>
	<?php endif; ?>


    </div>

    <div class="col-sm-4">

	<?php get_sidebar(); ?>


    </div>
</div>
</div>

<?php get_footer(); ?>
