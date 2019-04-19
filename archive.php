<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?>
<?php get_header(); ?>

<div class="container" style="padding-top:15px">
      <div class="row">
	  <div class="col-md-8">
<section id="content">
<?php if (have_posts()) :
	if (is_category()) { ?>
		<h2>Category: &#8220;<?php single_cat_title(); ?>&#8221; category</h2>
	<?php } elseif( is_tag() ) { ?>
		<h2>Tag: &#8220;<?php single_tag_title(); ?>&#8221;</h2>
	<?php } elseif (is_day()) { ?>
		<h2>Archive: <?php the_time('F jS, Y'); ?></h2>
	<?php } elseif (is_month()) { ?>
		<h2>Archive: <?php the_time('F, Y'); ?></h2>
	<?php } elseif (is_year()) { ?>
		<h2>Archive: <?php the_time('Y'); ?></h2>
	<?php } elseif (is_author()) { ?>
		<h2>Author:</h2>
	<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Archives</h2>
	<?php } ?>

	<?php if (show_posts_link_nav()): ?>
		<nav><?php next_posts_link('Older'); delim_posts_link(); previous_posts_link('Newer') ?></nav>
	<?php endif; ?>
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
 <?php edit_post_link('Edit', '<p>', '</p>'); ?>
<?php endwhile; ?>
<?php endif; ?>

	<?php if (show_posts_link_nav()): ?>
		<nav><?php next_posts_link('Older'); delim_posts_link(); previous_posts_link('Newer') ?></nav>
	<?php endif; ?>
		
	<?php else :
    	if ( is_category() ) {
			printf("<h2>Sorry, but there aren&#8217;t any posts in the %s category yet.</h2>", single_cat_title('',false));
		} elseif ( is_date() ) {
			echo("<h2>Sorry, but there aren&#8217;t any posts with this date.</h2>");
		} elseif ( is_author() ) {
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2>Sorry, but there aren&#8217;t any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2>Sorry, no posts found.</h2>");
		}
	endif;
?>
</section>
</div>
 </strong>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
</div>

<?php get_footer(); ?>