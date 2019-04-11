<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&mdash;', true, 'right'); ?></title>
		<?php
			global $options;
			foreach ($options as $value) {
				if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else {                     $$value['id'] = get_option( $value['id'] ); }
			}
		?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- 		boostrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
			/* Make the image fully responsive */
			.carousel-inner img {
				width: 100%;
				height: 100%;
			}
			  .td-block-title-wrap {
    position: relative;
}
.td_block_template_1 .block-title {
    text-align: left;
}
.block-title {
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    line-height: 1;
    margin-top: 0;
    margin-bottom: 26px;
    border-bottom: 2px solid #222222;
}
.td-block-title span, .td-block-title a {
    display: inline-block;
}
.block-title > span, .block-title > a, .block-title > label, .widgettitle, .widgettitle:after, .td-trending-now-title, .td-trending-now-wrapper:hover .td-trending-now-title, .wpb_tabs li.ui-tabs-active a, .wpb_tabs li:hover a, .woocommerce .product .products h2:not(.woocommerce-loop-product__title), .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more {
    background-color: #4db2ec;
}


.td-block-title span, .td-block-title a {
    display: inline-block;
}

.block-title a, .block-title span, .block-title label {
    line-height: 17px;
    display: inline-block;
    padding: 7px 12px 4px;
    color: #fff;
}
.block-title, .wpb_tabs .wpb_tabs_nav, .woocommerce div.product .woocommerce-tabs ul.tabs:before {
    border-color: #4db2ec;
}
	.shadow {
		box-shadow:0 0 20px rgba(0,0,0,.25);
        padding-right: 0px;
        padding-left: 0px;

	}

</style>

		<?php wp_head(); ?>
</head>




<body <?php body_class(); ?>>

<div class="container shadow">
		<header>

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">Navbar</a>
		<?php
		// wp_nav_menu( array(
		// 	'theme_location'    => 'primary',
		// 	'depth'             => 2,
		// 	'container'         => 'div',
		// 	'container_class'   => 'collapse navbar-collapse',
		// 	'container_id'      => 'bs-example-navbar-collapse-1',
		// 	'menu_class'        => 'nav navbar-nav',
		// 	'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		// 	'walker'            => new WP_Bootstrap_Navwalker(),
		// ) );
//      wp_nav_menu( array(
//     'theme_location' => 'my-custom-menu',
//     'container_class' => 'custom-menu-class' ) );

		?>
	</div>

</nav>

	</header>
