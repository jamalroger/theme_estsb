<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?>
<aside id="sidebar-1">
	<?php
		// Sidebar widgets only appear if the plugin is installed and widgets are active
		if ( ! function_exists('dynamic_sidebar') || ! dynamic_sidebar('sidebar2') ) :

		// Otherwise insert default sidebar elements
	?>
		<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Recherche</span></h4></div>
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
			
			if ( is_home() || is_page() ) {
				wp_list_bookmarks();
		?>
			
	<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Meta</span></h4></div>
					 <?php wp_meta(); ?>
	
		<?php
			}
			endif;
		?>
	<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Archive </span></h4></div>
	<?php
				// Display a list of monthly archives
				if ($estsb_archive_count == "1") $archive_count = '1'; else $archive_count = '0';
				wp_get_archives('show_post_count=' . $archive_count . '&type=monthly');
			?>
	
</aside>
<!-- <aside id="sidebar-2">
	<?php

		// Sidebar widgets only appear if the plugin is installed and widgets are active
		if ( ! function_exists('dynamic_sidebar') || ! dynamic_sidebar('sidebar1') ) :

		// Otherwise insert default sidebar elements
		global $options;
		foreach ($options as $value) {
			if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] );
			}
		}
				
		// Display a list of pages
		if ($estsb_page_depth == "1") $depth = '0'; else $depth = '1';
		wp_list_pages('depth=' . $depth . '&title_li=<h2>Pages</h2>' );

		// Display a list of categories
		if ($estsb_category_count == "1") $category_count = '1'; else $category_count = '0';
		wp_list_categories('show_count=' . $category_count . '&title_li=<h2>Categories</h2>');
	?>
		<div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size"> Archive </span></h4></div>

			<?php
				// Display a list of monthly archives
				if ($estsb_archive_count == "1") $archive_count = '1'; else $archive_count = '0';
				wp_get_archives('show_post_count=' . $archive_count . '&type=monthly');
			?>
		
	
	<?php
		endif;
	?>
</aside> -->