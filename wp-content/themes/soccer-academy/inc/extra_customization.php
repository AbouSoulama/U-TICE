<?php 

$soccer_academy_custom_style= "";

if (false === get_option('soccer_academy_sticky_header')) {
    add_option('soccer_academy_sticky_header', 'off');
}

// Define the custom CSS based on the 'soccer_academy_sticky_header' option

if (get_option('soccer_academy_sticky_header', 'off') !== 'on') {
    $soccer_academy_custom_style .= '.menu_header.fixed {';
    $soccer_academy_custom_style .= 'position: static;';
    $soccer_academy_custom_style .= '}';
}

if (get_option('soccer_academy_sticky_header', 'off') !== 'off') {
    $soccer_academy_custom_style .= '.menu_header.fixed {';
    $soccer_academy_custom_style .= 'position: fixed; background: #fff; box-shadow: 0px 3px 10px 2px #eee;';
    $soccer_academy_custom_style .= '}';

    $soccer_academy_custom_style .= '.admin-bar .fixed {';
    $soccer_academy_custom_style .= ' margin-top: 32px;';
    $soccer_academy_custom_style .= '}';
}

/*---------------------------Scroll-top-position -------------------*/

$soccer_academy_scroll_options = get_theme_mod( 'soccer_academy_scroll_options','right_align');

if($soccer_academy_scroll_options == 'right_align'){

$soccer_academy_custom_style .='.scroll-top button{';

	$soccer_academy_custom_style .='';

$soccer_academy_custom_style .='}';

}else if($soccer_academy_scroll_options == 'center_align'){

$soccer_academy_custom_style .='.scroll-top button{';

	$soccer_academy_custom_style .='right: 0; left:0; margin: 0 auto; top:85% !important';

$soccer_academy_custom_style .='}';

}else if($soccer_academy_scroll_options == 'left_align'){

$soccer_academy_custom_style .='.scroll-top button{';

	$soccer_academy_custom_style .='right: auto; left:5%; margin: 0 auto';

$soccer_academy_custom_style .='}';
}
/*---------------------------text-transform-------------------*/

$soccer_academy_text_transform = get_theme_mod( 'soccer_academy_menu_text_transform','CAPITALISE');
if($soccer_academy_text_transform == 'CAPITALISE'){

$soccer_academy_custom_style .='nav#top_gb_menu ul li a{';

	$soccer_academy_custom_style .='text-transform: capitalize ; font-size: 14px;';

$soccer_academy_custom_style .='}';

}else if($soccer_academy_text_transform == 'UPPERCASE'){

$soccer_academy_custom_style .='nav#top_gb_menu ul li a{';

	$soccer_academy_custom_style .='text-transform: uppercase ; font-size: 14px;';

$soccer_academy_custom_style .='}';

}else if($soccer_academy_text_transform == 'LOWERCASE'){

$soccer_academy_custom_style .='nav#top_gb_menu ul li a{';

	$soccer_academy_custom_style .='text-transform: lowercase ; font-size: 14px;';

$soccer_academy_custom_style .='}';
}

/*-------------------------Slider-content-alignment-------------------*/

$soccer_academy_slider_content_alignment = get_theme_mod( 'soccer_academy_slider_content_alignment','LEFT-ALIGN');

if($soccer_academy_slider_content_alignment == 'LEFT-ALIGN'){

$soccer_academy_custom_style .='#slider .carousel-caption{';

	$soccer_academy_custom_style .='text-align:left; right: 45%; left: 19%';

$soccer_academy_custom_style .='}';


}else if($soccer_academy_slider_content_alignment == 'CENTER-ALIGN'){

$soccer_academy_custom_style .='#slider .carousel-caption{';

	$soccer_academy_custom_style .='text-align:center; left: 15%; right: 15%;';

$soccer_academy_custom_style .='}';


}else if($soccer_academy_slider_content_alignment == 'RIGHT-ALIGN'){

$soccer_academy_custom_style .='#slider .carousel-caption{';

	$soccer_academy_custom_style .='text-align:right; left: 45%; right: 19%;';

$soccer_academy_custom_style .='}';

}
//---------------------------------Logo-Max-height---------	
$soccer_academy_logo_max_height = get_theme_mod('soccer_academy_logo_max_height','100');

if($soccer_academy_logo_max_height != false){

$soccer_academy_custom_style .='.custom-logo-link img{';

	$soccer_academy_custom_style .='max-height: '.esc_html($soccer_academy_logo_max_height).'px;';

$soccer_academy_custom_style .='}';
}

/*---------------------------Width -------------------*/
	
$soccer_academy_theme_width = get_theme_mod( 'soccer_academy_width_options','full_width');

if($soccer_academy_theme_width == 'full_width'){

$soccer_academy_custom_style .='body{';

	$soccer_academy_custom_style .='max-width: 100%;';

$soccer_academy_custom_style .='}';

}else if($soccer_academy_theme_width == 'container'){

$soccer_academy_custom_style .='body{';

	$soccer_academy_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px;  margin-right: auto !important; margin-left: auto !important;';

$soccer_academy_custom_style .='}';


}else if($soccer_academy_theme_width == 'container_fluid'){

$soccer_academy_custom_style .='body{';

	$soccer_academy_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

$soccer_academy_custom_style .='}';
}

/*--------------------------button -------------------*/
$soccer_academy_theme_button_color = get_theme_mod('soccer_academy_theme_button_color');

if($soccer_academy_theme_button_color != false){

$soccer_academy_custom_style .='button,input[type="button"],input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,button.search-submit,a.added_to_cart.wc-forward,home-btn,.site-footer .search-form .search-submit,.prev.page-numbers, .next.page-numbers, .page-numbers.current,.home-btn a{';

$soccer_academy_custom_style .='background-color: '.esc_attr($soccer_academy_theme_button_color).';';

$soccer_academy_custom_style .='}';
}
$soccer_academy_button_border = get_theme_mod('soccer_academy_button_border_radius','0');

if($soccer_academy_button_border != false){

$soccer_academy_custom_style .='button,input[type="button"],input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,button.search-submit,a.added_to_cart.wc-forward,home-btn,.site-footer .search-form .search-submit,#sidebar input[type="search"], input[type="search"], .prev.page-numbers, .next.page-numbers, .home-btn a{';

$soccer_academy_custom_style .='border-radius: '.esc_attr(

$soccer_academy_button_border).'px;';

$soccer_academy_custom_style .='}';
}

//related products
if( get_option( 'soccer_academy_related_product',true) != 'on') {

$soccer_academy_custom_style .='.related.products{';

	$soccer_academy_custom_style .='display: none;';
	
$soccer_academy_custom_style .='}';
}

if( get_option( 'soccer_academy_related_product',true) != 'off') {

$soccer_academy_custom_style .='.related.products{';

	$soccer_academy_custom_style .='display: block;';
	
$soccer_academy_custom_style .='}';
}

// woocommerce breadcrumb
if( get_option( 'soccer_academy_woocommerce_enable_breadcrumb',true) != 'on') {

$soccer_academy_custom_style .='.woocommerce-breadcrumb{';

	$soccer_academy_custom_style .='display: none;';
	
$soccer_academy_custom_style .='}';
}

if( get_option( 'soccer_academy_woocommerce_enable_breadcrumb',true) != 'off') {

$soccer_academy_custom_style .='.woocommerce-breadcrumb{';

	$soccer_academy_custom_style .='display: block;';
	
$soccer_academy_custom_style .='}';
}