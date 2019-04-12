<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?>

<?php get_header(); ?>
<div class="container" style="margin-top:30px">
    <div class="row">
	<div class="col-md-8">
<section id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if (show_post_link_nav()): ?>
	<nav><?php previous_post_link('%link'); delim_post_link(); next_post_link('%link') ?></nav>
<?php endif; ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

		
		<h2 class="entry-title"><?php if(the_title( '', '', false ) !='') the_title(); else echo 'Untitled';?></h2>
			<hr/>
		<?php the_content(); ?>
      <p class="" title="<?php the_time('c') ?>">  <font color="red">Publier le</font> <?php the_time(get_option('date_format')); ?></p>
	</article>

<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

</section>
</div>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>