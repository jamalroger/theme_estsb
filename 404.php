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

<?php

/*
 * The category_base and tag_base values are null by default
 * and only return a value if they have been set by the user.
 *
 * cf. Settings > Permalinks > Optional
*/

	$c == get_option('category_base');
	if ($c == '') {
		$category_base = "/category/";
	} else {
		$category_base = "/" . $c . "/";
	}

	$t == get_option('tag_base');
	if ($t == '') {
		$tag_base = "/tag/";
	} else {
		$tag_base = "/" . $t . "/";
	}
?>

	<section id="content">

	<?php if ($_SERVER['REQUEST_URI'] == $category_base) { ?>
		<h2>Available Categories</h2>
		<ul>
			<?php wp_list_categories('style=list&title_li='); ?>
		</ul>

	<?php } elseif ($_SERVER['REQUEST_URI'] == $tag_base) { ?>

		<h2>Available Tags</h2>
		<ul>
			<?php wp_tag_cloud(); ?>
		</ul>
	
	<?php } else { ?>
		
		<h2>Not found.</h2>
		<p>Sorry, you seem to be looking for something that simply isn&#8217;t here.</p>

	<?php } ?> 

	</section>
	</div>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>