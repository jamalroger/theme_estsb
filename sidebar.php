<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?>
	<?php
		// Sidebar widgets only appear if the plugin is installed and widgets are active
		if ( ! function_exists('dynamic_sidebar') || ! dynamic_sidebar('sidebar2') ) :

		// Otherwise insert default sidebar elements
	?>
		<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Search </span></h4></div>
			<?php get_search_form(); ?>


		<?php if ( is_404() || is_category() || is_tag() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?>
			

			<?php if (is_404()) { ?>

			<?php } elseif (is_category()) { ?>
				<p>You are browsing the <strong>&#8220;<?php single_cat_title(''); ?>&#8221;</strong> category archive.</p>

			<?php } elseif (is_tag()) { ?>
				<p>You are browsing the <strong>&#8220;<?php single_tag_title(''); ?>&#8221;</strong> tag archive.</p>

			<?php } elseif (is_day()) { ?>
				<p>You are browsing the <strong><?php the_time('l, F jS, Y'); ?></strong> archive.</p>

			<?php } elseif (is_month()) { ?>
				<p>You are browsing the <strong><?php the_time('F, Y'); ?></strong> archive.</p>

			<?php } elseif (is_year()) { ?>
				<p>You are browsing the <strong><?php the_time('Y'); ?></strong> archive.</p>

			<?php } elseif (is_search()) { ?>
				<p>You are browsing the search results for <strong>&#8220;<?php the_search_query(); ?>&#8221;</strong>.</p>

			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<p>You are browsing the archive.</p>

			<?php } ?>

		<?php
			}
			
		?>

	<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Last articles  </span></h4></div>
	  <?php if (have_posts()) :  ?>
           <?php  $i=0; while (have_posts() && i<5) : the_post(); ?>
         <div class="items">
		      <h6>
				  <i class="fa fa-caret-square-o-right"></i> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				 <?php the_title(); ?>
		    </a>
			 </h6>
		 </div>
	       <?php $i++; endwhile; ?>
	  <?php endif; ?>

	
	<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Archive </span></h4></div>
	<?php
				// Display a list of monthly archives
				if ($estsb_archive_count == "1") $archive_count = '1'; else $archive_count = '0';
				wp_get_archives('show_post_count=' . $archive_count . '&type=monthly');
	
				
		if ( is_home() || is_page() ) {
				wp_list_bookmarks();
		}
	endif;?>
			


	
	<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Calendrier </span></h4></div>
	
<div class="auto-jsCalendar material-theme blue"></div>
		<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Location </span></h4></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.389118192741!2d-5.277214085463545!3d35.61813264103864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b44d117ce801f%3A0x803722067333df9a!2z2KfZhNmF2K_Ysdiz2Kkg2KfZhNi52YTZitinINmE2YTYo9iz2KfYqtiw2Kk!5e0!3m2!1sen!2sma!4v1572908557869!5m2!1sen!2sma" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
	