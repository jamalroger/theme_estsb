<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?>

<?php get_header(); ?>

<div class="container" style="margin-top:15px">
      <div class="row">
	  <div class="col-sm-8">

<section id="content">
<?php if (have_posts()) : ?>

	<h2>Search: &#8220;<span><?php the_search_query(); ?></span>&#8221;</h2>

<?php if (show_posts_link_nav()): ?>
	<nav><?php next_posts_link('Older'); delim_posts_link(); previous_posts_link('Newer') ?></nav>
<?php endif; ?>

<hr/>
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


<?php if (show_posts_link_nav()): ?>
	<nav><?php next_posts_link('Older'); delim_posts_link(); previous_posts_link('Newer') ?></nav>
<?php endif; ?>
	
<?php else : ?>

	<h2>Not found.</h2>
	<p>Sorry, you seem to be looking for something that simply isn&#8217;t here.</p>

<?php endif; ?>
</section>

</div>

<div class="col-sm-4">

<?php get_sidebar(); ?>


</div>
</div>
</div>

<?php get_footer(); ?>