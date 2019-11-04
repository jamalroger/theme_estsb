<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?>

<?php get_header(); ?>

<div  class="container" style="padding-top:30px">
  <div class="row">
			<div class="col-md-8">

				<section id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><?php if(the_title( '', '', false ) !='') the_title();?></h2>
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					</article>
				<?php endwhile; endif; ?>

				<?php edit_post_link('Edit', '<p>', '</p>'); ?>
				</section>
		</div>
		<div class="col-md-4">
		                     <?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
