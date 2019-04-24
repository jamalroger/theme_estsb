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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Background-Slider-Plugin-jQuery-sliderResponsive/sliderResponsive.css">
	<script src="https://www.jqueryscript.net/demo/Background-Slider-Plugin-jQuery-sliderResponsive/sliderResponsive.js"></script>	
	<link rel="stylesheet" type="text/css" href="https://www.cssscript.com/demo/customizable-pure-javascript-calendar-library-jscalendar/jsCalendar.css">
<link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
		<!-- jsCalendar -->
		<script type="text/javascript" src="https://www.cssscript.com/demo/customizable-pure-javascript-calendar-library-jscalendar/jsCalendar.js"></script>
		
<style>
			/* Make the image fully responsive */
			.carousel-inner img {
				width: 100%;
				height: 500px;
			}
			  .td-block-title-wrap {
    position: relative;
}
.td_block_template_1 .block-title {
    text-align: left;
}
a:hover {
	text-decoration: none;
		
	}
a.read-more:hover {
	color:#fff;
		
	}
.block-title {
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    line-height: 1;
    margin-top: 0;
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
.shadow1 {
        padding-right: 0px;
        padding-left: 0px;

	} 
	html {
		margin-top:0px !important;
	}
	.col-md-8,.col-md-4,col-sm-8,.col-sm-4 {
		position:initial ! important;
	}
</style>

		<?php wp_head(); ?>
</head>




<body <?php body_class(); ?>>

		<header>
			<div style="background:linear-gradient(90deg,#00c4cc,#7d2ae8)">
			<div class="container shadow1">
			    
				<a href="<?=get_home_url()?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" max-with="100%" height="100px"></a>
				  <div class="leftm">
								<?php get_search_form(); ?>	  
				    
					</div> 
				
				<div id='cssmenu'>
					<?php
					wp_nav_menu( array( 
						'theme_location' => 'my-custom-menu', 
						'container_class' => 'custom-menu-class' ) ); 	
					?>
                 </div>
				
				
			 </div>
			
	
			</div>

			
	</header>
	


<div class="container shadow">	

	
	