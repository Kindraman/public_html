<?php

/*-----------------------------------------------------------------------------------

Caution: The Sky may fall if you edit this file. Please proceed with caution. :)

-------------------------
Notes for Developers:
-------------------------
In this File:
	- WP_DEBUG + PHP Error Reporting
	- Load Translation Text Domain
	- TrueThemes Framework init
	- JetPack + TrueThemes SEO Module + "Activate Karma 4.0"
	- Cleanup <head>
	- WP add_theme_support
	- WP add_editor_style
	- WP remove_filter + add_filter
	- <!--more--> disable scroll
	- WP Theme Customizer
	- WooCommerce
	- Register Sidebars
	- Register WP3.0+ Menus
	- Register Custom Taxonomies
	- Register Custom Post Types
	- Admin CSS additions
	- Miscellaneous Settings
	- IE9+ YouTube Video Fix
	- Sticky Menu
	- Flexslider slide animation RTL css fixes
	
Elsewhere in Theme:	
	- Action Hooks                      /framework/hooks.php
	- Additional Theme Functions        /framework/theme-functions.php
	- JavaScript and CSS Enqueue        /framework/script-enqueue.php
	- Metaboxes                         /framework/custom-metaboxes.php
	- Mobile Stylesheet                 /css/_mobile.css
	- Shortcodes                        /framework/shortcodes.php
	- Site Options Panel                /framework/site-options.php
	- Site Options Panel CSS Output     /framework/site-options-functions.php
	- Widgets                           /framework/widgets.php
	- WooCommerce Overriding            /framework/extended/woocommerce.php

-------------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/* WP_DEBUG + PHP Error Reporting
/*-----------------------------------------------------------------------------------*/

//Some plugins such as wpcu3er will disable PHP error reporting, 
//therefore we must make sure it is turn on if WP_DEBUG is set to true.
if(defined('WP_DEBUG') == 1 || WP_DEBUG == true){
$error_setting = ini_get("display_errors");
	if($error_setting == '0'){
		ini_set('display_errors', '1');
	}
}

//if PHP error reporting is enabled we will only ALLOW PHP fatal error, syntax error, parse errors etc to show only.
$php_error_setting = ini_get("display_errors");
	if($php_error_setting == '1'){
	    //reference to http://www.php.net/manual/en/errorfunc.constants.php
		error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_WARNING & ~ E_DEPRECATED & ~ E_USER_NOTICE);
}

/*-----------------------------------------------------------------------------------*/
/* Remove Query String from Static Resources
/*-----------------------------------------------------------------------------------*/
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


/*-----------------------------------------------------------------------------------*/
/* Load Translation Text Domain
/*-----------------------------------------------------------------------------------*/
load_theme_textdomain ('truethemes_localize', get_template_directory() . '/languages');


/*-----------------------------------------------------------------------------------*/
/* TrueThemes Framework init
/*-----------------------------------------------------------------------------------*/
// Define File Directories
define('TRUETHEMES_GLOBAL',         get_template_directory()     . '/framework');
define('TRUETHEMES_FRAMEWORK',      get_template_directory_uri() . '/framework');
define('TRUETHEMES_ADMIN',          get_template_directory()     . '/framework/admin');
define('TRUETHEMES_EXTENDED',       get_template_directory()     . '/framework/extended');
define('TRUETHEMES',                get_template_directory()     . '/framework/truethemes');
define('TRUETHEMES_JS',             get_template_directory_uri() . '/js');
define('TRUETHEMES_CSS',            get_template_directory_uri() . '/css/');
define('TIMTHUMB_SCRIPT',           get_template_directory_uri() . '/framework/extended/timthumb/timthumb.php');
define('TIMTHUMB_SCRIPT_MULTISITE', get_template_directory_uri() . '/framework/extended/timthumb/timthumb.php');
define('TRUETHEMES_HOME',           get_template_directory_uri());

// Used in Site Options
$admin_url = admin_url();

// Load Theme-Specific Functions
require_once(TRUETHEMES_GLOBAL   . '/script-enqueue.php');
require_once(TRUETHEMES_GLOBAL   . '/site-options.php');
require_once(TRUETHEMES_GLOBAL   . '/site-options-functions.php'); //formerly named "admin-functions.php"
require_once(TRUETHEMES_GLOBAL   . '/custom-metaboxes.php');
require_once(TRUETHEMES_GLOBAL   . '/template-tags.php');

//check if plugin is active
//reference https://codex.wordpress.org/Function_Reference/is_plugin_active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( !is_plugin_active( 'karma_builder/karma_builder.php' ) ) {
	//plugin is not active, we load the following files.
	// Load Global Elements
	require_once(TRUETHEMES_GLOBAL   . '/shortcodes.php');
	require_once(TRUETHEMES_GLOBAL   . '/shortcodes-old.php');
}
require_once(TRUETHEMES_GLOBAL   . '/widgets.php');
require_once(TRUETHEMES_GLOBAL   . '/theme-functions.php');
require_once(TRUETHEMES_GLOBAL   . '/nav-output.php');
require_once(TRUETHEMES_GLOBAL   . '/hooks.php');

// Load TrueThemes Functions
require_once(TRUETHEMES          . '/wysiwyg/wysiwyg.php');
require_once(TRUETHEMES          . '/image-thumbs.php');
require_once(TRUETHEMES          . '/metabox/init.php');

// Load Site Options Admin
require_once(TRUETHEMES_ADMIN    . '/admin-functions.php');
require_once(TRUETHEMES_ADMIN    . '/admin-interface.php');

// Load Extended Functionality
require_once(TRUETHEMES_EXTENDED . '/tgm-plugin-activation/class-tgm-plugin-activation.php');
require_once(TRUETHEMES_EXTENDED . '/pricing-tables/pricing.php');
require_once(TRUETHEMES_EXTENDED . '/multiple_sidebars.php');
require_once(TRUETHEMES_EXTENDED . '/breadcrumbs.php');
require_once(TRUETHEMES_EXTENDED . '/3d-tag-cloud/wp-cumulus.php');
require_once(TRUETHEMES_EXTENDED . '/latest-tweets.php');
require_once(TRUETHEMES_EXTENDED . '/page_linking.php');
if(!function_exists('wp_pagenavi')){require_once(TRUETHEMES_EXTENDED . '/wp-pagenavi.php');}

//TrueThemes Framework Global Variable
if(!isset($ttso)){
	$truethemes_site_option = new truethemes_site_option(); 
	$ttso                   = $truethemes_site_option->set_all(); // <-- very important
	}


/*----------------------------------------------------------------*/
/* JetPack
/*----------------------------------------------------------------*/
//since version 4.0.5 - From now onwards we do not deactivate any Jetpack modules, just show notice to disable contact form module.

function tt_jetpack_contact_form_notice(){
$message = '<div class="updated settings_error"><p><strong>Attention:</strong><br /><br />We\'ve detected that the JetPack Plugin\'s Contact Form is activated.</p><p>You will need to disable it, so as to prevent it from overwriting Karma\'s contact form features and design.</p></div>';
echo $message;
}

if(class_exists('Jetpack')){

	//get jetpack activated modules.
	$jetpack_activated_modules = get_option('jetpack_active_modules');
	
	//if jetpack contact form is activated, we show notice.
	//nothing else.. from now onwards we do not deactivate any modules.
	if(in_array('contact-form',$jetpack_activated_modules)){
		if(current_user_can('administrator')){ //show only to admin and not subscribers
			add_action('admin_notices','tt_jetpack_contact_form_notice');
		}
	}
}


/*----------------------------------------------------------------*/
/* Load Karma Theme Contact Form
/*----------------------------------------------------------------*/
function tt_grunion_contact_form_notice(){
$message = '<div class="updated settings_error"><p><strong>Attention:</strong><br /><br />We\'ve detected that Grunion Contact Form Plugin is installed and activated.</p><p>You will need to disable it, so as to prevent it from overwriting Karma\'s contact form features and design.</p></div>';
echo $message;
}
	//if user enables TrueThemes contact form plugin then display it
	$ka_formbuilder = get_option('ka_formbuilder');
	if ($ka_formbuilder == "true"){require_once(TRUETHEMES_EXTENDED . '/grunion-contact-form/grunion-contact-form.php');}
	
	if(function_exists('contact_form_parse')){
		if(current_user_can('administrator')){ //show only to admin and not subscribers
			add_action('admin_notices','tt_grunion_contact_form_notice');
		}
	}


/*----------------------------------------------------------------*/
/* TrueThemes SEO Module
/*----------------------------------------------------------------*/
global $ttso;
$seo_module = '';
$seo_module = $ttso->ka_seo_module;

//check user setting at site options general settings.
if ($seo_module == "true"){
//require all seo module files and "activate" seo module.
require_once(TRUETHEMES_EXTENDED. '/seo-module/seo_module.php');
	$aioseop_options = get_option('aioseop_options');
	if($aioseop_options['aiosp_enabled']==0){
	$aioseop_options['aiosp_enabled'] = 1;
	update_option('aioseop_options',$aioseop_options);
	}
} else {
    //user has "disable" seo module,
    //we do not include seo module files, but just show an empty seo settings page,
    //so that user do not encounter WordPress "permissions" error, 
    //and the seo settings page is always there.
	$aioseop_options = get_option('aioseop_options');
	$aioseop_options['aiosp_enabled'] = 0;
	update_option('aioseop_options',$aioseop_options);
    add_action('admin_menu','truethemes_add_empty_seo_settings_page');
}

/**
* Do not move this function!
* Load empty SEO Setting Page!
* this gets load when user disables SEO Module! so that there is no WordPress Permission error when user clicks on "SEO Settings" menu!
* @since version 2.6
**/
function truethemes_add_empty_seo_settings_page(){
	add_theme_page('SEO settings','SEO settings','manage_options','seo_settings','truethemes_empty_seo_settings_page');
}

/**
* Do not move this function!
* Empty SEO settings page!
* for use in function truethemes_add_empty_seo_settings_page()
* @since version 2.6
**/
function truethemes_empty_seo_settings_page(){
?>
<div class="wrap">
<div style='padding:8px 10px 15px 15px'>	
<div id="icon-options-general" class="icon32"></div>
<h2><?php _e('SEO Settings', 'truethemes_localize') ?></h2>
</div>
<?php
	$aioseop_options = get_option('aioseop_options');
	if($aioseop_options['aiosp_enabled'] == 0){
			echo "<div id=\"message\" class=\"updated fade\"style='width:765px!important;margin:10px 0px 0px 0px;'><p>The SEO Module is currently disabled. To enable this Module, please go to <a href='".admin_url('admin.php?page=siteoptions')."'>Appearance &gt; Site Options &gt; General Settings</a>.</p></div>";
	}

}


/*----------------------------------------------------------------*/
/* "Activate Karma 4.0" (General > Site Options)
/*----------------------------------------------------------------*/
/**
 * @since 4.0
 * @since 4.4 - setting has been removed....let's load scripts automatically
 *
 * Hides old page templates from Page Attributes metabox
 * Hides old "Custom Settings" metabox from Post Editing screen
 */

function true_remove_old_karma(){

	wp_register_script( 'remove_old_karma', TRUETHEMES_JS .'/admin-remove-deprecated.js', array('jquery'),'1.0');
	wp_enqueue_script( 'remove_old_karma'); //this jQuery hides page templates + post metaboxes

	global $ttso;
	$old_karma_active = $ttso->ka_old_karma_active;
	
	if ('true' ==  $old_karma_active): 
		wp_dequeue_script( 'remove_old_karma'); //remove JS so old options appear
	endif;

}
add_action( 'admin_enqueue_scripts', 'true_remove_old_karma' );



/*-----------------------------------------------------------------------------------*/
/* Register WP3.0+ Menus
/*-----------------------------------------------------------------------------------*/
register_nav_menu('Primary Navigation', 'Main Menu');
register_nav_menu('Footer Navigation', 'Footer Menu');
register_nav_menu('Top Toolbar Navigation', 'Top Toolbar Menu');
//add nav_menu if UberMenu installed...
global $ttso;
$ubermenu = $ttso->ka_ubermenu;
if('true' == $ubermenu):
register_nav_menu('UberMenu', 'UberMenu');
endif;


/*-----------------------------------------------------------------------------------*/
/* Cleanup <head>
/*-----------------------------------------------------------------------------------*/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra');
remove_action('wp_head', 'feed_links');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/*-----------------------------------------------------------------------------------*/
/* WP add_theme_support
/*-----------------------------------------------------------------------------------*/
add_theme_support('nav-menus');
add_theme_support( 'post-thumbnails' , array( 'post' ));
add_theme_support('automatic-feed-links');
add_theme_support( 'post-formats', array('image', 'video', 'audio', 'quote', 'gallery',) );


/*-----------------------------------------------------------------------------------*/
/* WP add_editor_style
/*-----------------------------------------------------------------------------------*/
add_editor_style('custom-editor-style.css');
if (!isset($content_width)) $content_width = 960;


/*-----------------------------------------------------------------------------------*/
/* WP remove_filter + add_filter
/*-----------------------------------------------------------------------------------*/
/* functon does not alter Wordpress' default wpautop */
function truethemes_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
		    //@since 4.0.3  - search for rev_slider in content, if found, do not wpautop
		    if(stripos($piece,"rev_slider") !== false){
		    $new_content .= $piece;
		    //this detects the vc front end editor,if found, do not wpautop, or it will break!
		    }elseif(stripos($piece,"vc_element")!==false){
		    $new_content .= $piece;
		    //this detects karma builder plugin, and the span class tt-blog-placeholder,if found, do not wpautop, or it will break!
		    }elseif(function_exists('karma_builder_load_textdomain') && stripos($piece,"tt-blog-placeholder")!==false){
		    $new_content .= $piece;
		    }else{
		    //in normal content, we do auto p tags.
			$new_content .= wptexturize(wpautop($piece));
			//$new_content .= $piece; //<-- uncomment and delete line above to disable wpautop
			}

		}
	}
	return $new_content;
}

remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
add_filter('widget_text', 'do_shortcode');
add_filter('widget_text', 'truethemes_formatter', 99);
add_filter('the_content', 'truethemes_formatter', 99);


/*-----------------------------------------------------------------------------------*/
/* <!--more--> disable scroll
/*-----------------------------------------------------------------------------------*/
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
 
   
/*-----------------------------------------------------------------------------------*/
/*	WP Theme Customizer
/*-----------------------------------------------------------------------------------*/
//add seections
function truethemes_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'tt_customizer_footer_copyright',
        array(
            'title'       => __( 'Footer Copyright' , 'truethemes_localize'),
            'description' => __( 'Add Copyright information to the Footer.' , 'truethemes_localize'),
            'priority'    => 1000,
        )
    );
	
//add settings
	$wp_customize->add_setting(
    	'footer_copyright_textbox',
		array(
        'type' => 'theme_mod',
    	)
);

//add controls (settings will not display with a control)
	$wp_customize->add_control(
    	'footer_copyright_textbox',
    	array(
        'label'   => __( 'Footer &copy; Copyright Text' , 'truethemes_localize'),
        'section' => 'tt_customizer_footer_copyright',
        'type'    => 'text',
    )
);

}
add_action( 'customize_register', 'truethemes_customizer' );

/*-----------------------------------------------------------------------------------*/
/* WooCommerce
/*-----------------------------------------------------------------------------------*/
if (class_exists('woocommerce')){
	require_once(TRUETHEMES_EXTENDED . '/woocommerce.php');
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' , array( 'post','product'));	
}

/*-----------------------------------------------------------------------------------*/
/* Register Sidebars
/*-----------------------------------------------------------------------------------*/
function karma_widgets_init() {
register_sidebar( array(
'name'          => 'Toolbar - Left Side',
'description'   => 'Add a Widget to this region or easily assign a Menu by clicking on Appearance > Menus.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<p class="top-block-title">',
'after_title'   => '</p>',
));

register_sidebar( array(
'name'          => 'Toolbar - Right Side',
'description'   => 'This region is located on the right side above the main navigation',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<p class="top-block-title">',
'after_title'   => '</p>',
));

register_sidebar( array(
'name'          => 'Blog Sidebar',
'description'   => 'This sidebar is displayed on all Blog pages.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          => 'Search Results Sidebar',
'description'   => 'This sidebar is displayed on the Search Results page.',
'before_widget' => '<div class="sidebar-widget">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          => 'Contact Sidebar (iPhone)',
'description'   => 'This sidebar is displayed within the iPhone screen on the Contact page.',
'before_widget' => '<div class="sidebar-widget sidebar-smartphone">',
'after_widget'  => '</div>',
'before_title'  => '<h4 class="smartphone-header">',
'after_title'   => '</h4>',
));

register_sidebar( array(
'name'          => 'First Footer Column',
'description'   => 'First Footer Column.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          => 'Second Footer Column',
'description'   => 'Second Footer Column.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          => 'Third Footer Column',
'description'   => 'Third Footer Column.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          => 'Fourth Footer Column',
'description'   => 'Fourth Footer Column.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          => 'Fifth Footer Column',
'description'   => 'Fifth Footer Column.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          => 'Sixth Footer Column',
'description'   => 'Sixth Footer Column.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          =>  'Footer Copyright - Left Side',
'description'   => 'This region is located on the left side below the footer. Use a text widget to enter your copyright info.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '',
'after_title'   => '',
));

register_sidebar( array(
'name'          =>  'Footer Menu - Right Side',
'description'   => 'Easily assign a menu to this region by clicking on Appearance > Menus.',
'before_widget' => '',
'after_widget'  => '',
'before_title'  => '',
'after_title'   => '',
));

// START Woo-check
if (class_exists('woocommerce')){
register_sidebar( array(
'name'          => 'WooCommerce Sidebar',
'description'   => 'This sidebar is displayed on your WooCommerce pages.',
'before_widget' => '<div class="sidebar-widget %2$s">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

register_sidebar( array(
'name'          => 'WooCommerce - Cart + Checkout',
'description'   => 'This sidebar is displayed on your WooCommerce Shopping Cart and Checkout pages.',
'before_widget' => '<div class="sidebar-widget %2$s">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>',
));

} // END Woo-check

}
add_action( 'widgets_init', 'karma_widgets_init' );

/*-----------------------------------------------------------------------------------*/
/* Register Custom Taxonomies
/*-----------------------------------------------------------------------------------*/
//Slider Taxonomy
function truethemes_karma_slider_taxonomy() {
	register_taxonomy(
		'karma-slider-category',
		'karma-slider',
		array(
			'label'        => __('Categories' , 'truethemes_localize'),
			'sort'         => true,
			'hierarchical' => true,
			'args'         => array( 'orderby' => 'term_order' ),
			'rewrite'      => array( 'slug'    => 'karma-slider-category' )
		)
	);
}
add_action( 'init', 'truethemes_karma_slider_taxonomy' );

//Gallery Taxonomy
function truethemes_karma_gallery_taxonomy() {
	register_taxonomy(
		'truethemes-gallery-category',
		'tt-gallery',
		array(
			'label'        => __('Categories' , 'truethemes_localize'),
			'sort'         => true,
			'hierarchical' => true,
			'args'         => array( 'orderby' => 'term_order' ),
			'rewrite'      => array( 'slug'    => 'truethemes-gallery-category' )
		)
	);
}
add_action( 'init', 'truethemes_karma_gallery_taxonomy' );


/*-----------------------------------------------------------------------------------*/
/*	Register Custom Post Types
/*-----------------------------------------------------------------------------------*/
//Slider Post Type
function truethemes_post_type_slider() {
	$labels = array(
		'name'          => __( 'Slider Posts' , 'truethemes_localize'),
		'singular_name' => __( 'Slider Post' , 'truethemes_localize'),
		'rewrite'       => array(
		'slug'               => __( 'slider' , 'truethemes_localize')),
		'add_new'            => __('Add New' , 'truethemes_localize'),
		'add_new_item'       => __('Add New Slider Post' , 'truethemes_localize'),
		'edit_item'          => __('Edit Slider Post' , 'truethemes_localize'),
		'new_item'           => __('New Slider Post' , 'truethemes_localize'),
		'view_item'          => __('View Slider Post' , 'truethemes_localize'),
		'search_items'       => __('Search Slider Posts' , 'truethemes_localize'),
		'not_found'          =>  __('No Slider Posts found' , 'truethemes_localize'),
		'not_found_in_trash' => __('No Slider Posts found in Trash' , 'truethemes_localize'), 
		'parent_item_colon'  => ''
	  );
	  
	  $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true, 
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array('title' , 'editor')
	  ); 
	  
	  register_post_type( 'karma-slider', $args );
}
add_action( 'init', 'truethemes_post_type_slider' );


//Gallery Post Type
function truethemes_post_type_gallery() 
{
	$labels = array(
		'name'               => __( 'Gallery Posts' , 'truethemes_localize'),
		'singular_name'      => __( 'Gallery Post' , 'truethemes_localize'),
		'rewrite'            => array(
		'slug'               => __( 'gallery' , 'truethemes_localize')),
		'add_new'            => __('Add New' , 'truethemes_localize'),
		'add_new_item'       => __('Add New Gallery Post' , 'truethemes_localize'),
		'edit_item'          => __('Edit Gallery Post' , 'truethemes_localize'),
		'new_item'           => __('New Gallery Post' , 'truethemes_localize'),
		'view_item'          => __('View Gallery Post' , 'truethemes_localize'),
		'search_items'       => __('Search Gallery Posts' , 'truethemes_localize'),
		'not_found'          =>  __('No Gallery Posts found' , 'truethemes_localize'),
		'not_found_in_trash' => __('No Gallery Posts found in Trash' , 'truethemes_localize'), 
		'parent_item_colon'  => ''
	  );
	  
	  $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true, 
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title')
	  ); 
	  
	  register_post_type( 'tt-gallery' ,$args );
}
add_action( 'init', 'truethemes_post_type_gallery' );


/*-----------------------------------------------------------------------------------*/
/*	Admin CSS for Custom Post Types + Karma Welcome Screen
/*-----------------------------------------------------------------------------------*/
function truethemes_custom_admin_css(){
	echo '<style>
/*--------------------------------------*/
/* Karma Admin Styles - Post Types
/*--------------------------------------*/
#adminmenu #menu-posts-karma-slider .menu-icon-post div.wp-menu-image:before {
	content: "\f169";
	/* content: "\f181"; */
}
#adminmenu #menu-posts-tt-gallery .menu-icon-post div.wp-menu-image:before {
	content: "\f233";
}
#adminmenu #menu-posts-feedback .menu-icon-post div.wp-menu-image:before {
	content: "\f175";
}
.wp-media-buttons .tt-add-form span.wp-media-buttons-icon:before {
	font: 400 17px/1 dashicons;
	content: "\f175";
	margin-left:-1px;
}
/* Social Media Widget select field */
	.wp-admin #tt-social-widget-dropdown {
	width:95% !important;	
}
/* hide revolution slider notice */
.rs-update-notice-wrap {
	display: none;
}
/*--------------------------------------*/
/* Karma Admin Styles - Welcome Screen
/*--------------------------------------*/
body.appearance_page_karma-welcome .wp-badge {
	background: #FFF url('.get_stylesheet_directory_uri().'/images/_global/karma-welcome-logo.jpg) center center no-repeat !important;
}
.karma_welcome-feature {
	background: #fff none repeat scroll 0 0;
    margin: 20px 0;
    padding: 30px;
}
.karma-feature-section {
	padding-bottom: 30px;
	overflow: auto;
}
.karma-feature-section .three-col > div {
    float: left;
    margin-right: 5%;
    position: relative;
    width: 29.95%;
}
.karma-feature-section .col .last-feature {
    margin-right: 0;
}
.karma_welcome-feature span.dashicons {
	background: #86b946 none repeat scroll 0 0;
    border-radius: 50px;
    color: #fff;
    display: inline-block;
    font-size: 24px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    width: 50px;
}
	</style>';        
}
add_action('admin_head','truethemes_custom_admin_css');


/*-----------------------------------------------------------------------------------*/
/* TGM Plugin Activation (LayerSlider, etc)
/*-----------------------------------------------------------------------------------*/
add_action( 'tgmpa_register', 'truethemes_register_required_plugins' );

function truethemes_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// Include Premium Plugins:
		array(
			'name'     				=> 'Visual Composer', // The plugin name
			'slug'     				=> 'js_composer', // The plugin slug (typically the folder name)
			'source'   				=> 'http://s3.truethemes.net/theme-included-plugins/js_composer.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'     				=> 'Karma Builder', // The plugin name
			'slug'     				=> 'karma_builder', // The plugin slug (typically the folder name)
			'source'   				=> 'http://s3.truethemes.net/theme-included-plugins/karma_builder.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'     				=> 'Karma Demo Content', // The plugin name
			'slug'     				=> 'karma_demo_content', // The plugin slug (typically the folder name)
			'source'   				=> 'http://s3.truethemes.net/theme-included-plugins/karma_demo_content.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'     				=> 'LayerSlider', // The plugin name
			'slug'     				=> 'LayerSlider', // The plugin slug (typically the folder name)
			'source'   				=> 'http://s3.truethemes.net/theme-included-plugins/layersliderwp.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		
		array(
			'name'     				=> 'Revolution Slider', // The plugin name
			'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
			'source'   				=> 'http://s3.truethemes.net/theme-included-plugins/revslider.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'     				=> 'MailChimp', // The plugin name
			'slug'     				=> 'mailchimp', // The plugin slug (typically the folder name)
			'source'   				=> 'http://s3.truethemes.net/theme-included-plugins/mailchimp.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),

		// Include Plugins from the WordPress Plugin Repository:
		
		array(
			'name' 		=> 'WooCommerce',
			'slug' 		=> 'woocommerce',
			'required' 	=> false,
		),

	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'truethemes_localize';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,      // Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                      // Default absolute path to pre-packaged plugins
		'menu'              => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'       => true,                    // Show admin notices or not.
        'dismissable'       => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'       => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic'      => true,                   // Automatically activate plugins after installation or not.
		'message' 			=> '<br /><h3>FAQ</h3><ol style="padding:10px 0;"><li style="padding-bottom:12px;"><strong>How do I install the plugins listed below?</strong><br />Simply hover over each plugin and click <em>Install</em>. <a href="http://vimeopro.com/truethemes/karma-4" target="_blank">Detailed video instructions outlined here.</a></li><li><strong>I\'m receiving an Error when trying to install the LayerSlider or Slider Revolution Plugins?</strong><br />These premium plugins are hosted on our Secure Amazon S3 server. Certain web servers do not allow for direct installation of files from an outside server, resulting in the error. A workaround for this is to use the "Bulk Actions" dropdown below. Simply check the boxes next to all plugins, choose "Install" from the Bulk Actions dropdown and click "Apply".</li></ol><br />',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Plugin Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	if(current_user_can('administrator')){ //do this only for admin and not subscribers
		tgmpa( $plugins, $config );
	}

}


/*-----------------------------------------------------------------------------------*/
/* Miscellaneous Settings
/*-----------------------------------------------------------------------------------*/
//
// ----- Remove rel="category" for HTML5 validation
//
add_filter( 'the_category', 'add_nofollow_cat' ); 
function add_nofollow_cat( $text ) {
$text = str_replace('rel="category tag"', "", $text); return $text;
}
//
// ----- Custom content length for blog page
//
function limit_content($content_length = 250, $allowtags = true, $allowedtags = '') {
global $post;
$content = $post->post_content;
$content = strip_shortcodes($content);
$content = apply_filters('the_content', $content);

if (!$allowtags){
	$allowedtags .= '<style>';
	$content = strip_tags($content, $allowedtags);
}
$wordarray = explode(' ', $content, $content_length + 1);
if(count($wordarray) > $content_length) :
	array_pop($wordarray);
	array_push($wordarray, '...');
	$content = implode(' ', $wordarray);
	$content = force_balance_tags($content);
endif;

echo $content;
}
//
// ----- Modify blog post excerpt length
//
function wp_new_excerpt($text)
{
	if ($text == '')
	{
		$text = get_the_content('');
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text);
		$text = nl2br($text);
		$excerpt_length = apply_filters('excerpt_length', 80);
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, '...');
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_new_excerpt');
//
// ----- Modify Tag Cloud Widget
//
function truethemes_tag_cloud_widget($args) {
	$args['largest']  = 15;
	$args['smallest'] = 12;
	$args['unit']     = 'px';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'truethemes_tag_cloud_widget' );
//
// ----- Hide unnecessary user profile fields
//
add_filter('user_contactmethods','hide_profile_fields',10,1);

function hide_profile_fields( $contactmethods ) {
unset($contactmethods['aim']);
unset($contactmethods['jabber']);
unset($contactmethods['yim']);
return $contactmethods;
}
//walker class for filtered gallery template
class truethemes_gallery_walker extends Walker_Category {
   function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0) {
      extract($args);
      $cat_name = esc_attr( $category->name);
      $cat_name = apply_filters( 'list_cats', $cat_name, $category );
	  $link = '<a href="#" data-filter=".term-'.$category->term_id.'" ';
      if ( $use_desc_for_title == 0 || empty($category->description) )
         $link .= 'title="' . sprintf(__( 'View all items filed under %s' , 'truethemes_localize'), $cat_name) . '"';
      else
         $link .= 'title="' . esc_attr( strip_tags( apply_filters( 'category_description', $category->description, $category ) ) ) . '"';
      $link .= '>';
      // $link .= $cat_name . '</a>';
      $link .= $cat_name;
      if(!empty($category->description)) {
         $link .= ' <span>'.$category->description.'</span>';
      }
      $link .= '</a>';
      if ( (! empty($feed_image)) || (! empty($feed)) ) {
         $link .= ' ';
         if ( empty($feed_image) )
            $link .= '(';
         $link .= '<a href="' . get_category_feed_link($category->term_id, $feed_type) . '"';
         if ( empty($feed) )
            $alt = ' alt="' . sprintf(__( 'Feed for all posts filed under %s' , 'truethemes_localize'), esc_attr( $cat_name ) ) . '"';
         else {
            $title = ' title="' . $feed . '"';
            $alt = ' alt="' . $feed . '"';
            $name = $feed;
            $link .= $title;
         }
         $link .= '>';
         if ( empty($feed_image) )
            $link .= $name;
         else
            $link .= "<img src='" . esc_url( $feed_image ) . "'$alt$title" . ' />';
         $link .= '</a>';
         if ( empty($feed_image) )
            $link .= ')';
      }
      if ( isset($show_count) && $show_count )
         $link .= ' (' . intval($category->count) . ')';
      if ( isset($show_date) && $show_date ) {
         $link .= ' ' . gmdate('Y-m-d', $category->last_update_timestamp);
      }
      if ( isset($current_category) && $current_category )
         $_current_category = get_category( $current_category );
      if ( 'list' == $args['style'] ) {
          $output .= '<li class="segment-'.rand(2, 99).'"';
          $class = 'cat-item cat-item-'.$category->term_id;
          if ( isset($current_category) && $current_category && ($category->term_id == $current_category) )
             $class .=  ' current-cat';
          elseif ( isset($_current_category) && $_current_category && ($category->term_id == $_current_category->parent) )
             $class .=  ' current-cat-parent';
          $output .=  '';
          $output .= ">$link\n";
       } else {
          $output .= "\t$link<br />\n";
       }
   }
}

//
// ----- IE9+ YouTube Video Fix
//
add_filter("embed_oembed_html", "add_wmode");
function add_wmode($html) {
	$html = str_replace("feature=oembed", "feature=oembed&wmode=transparent", $html);
	return $html;
}
/*-----------------------------------------------------------------------------------*/
/* Sticky Menu
/*-----------------------------------------------------------------------------------*/

/*
* function to hook jQuery to footer to activate sticky menu according to site option setting.
*/
function tt_hook_sticky_menu(){
$activate_sticky_menu = get_option('ka_fix_header_and_menubar');
$activate_sticky_menu_2 = get_option('ka_fix_header_and_menubar_2');
$menu_type = 1;

if ($activate_sticky_menu_2 == 'true') {
	$menu_type = 2;
}

	if($activate_sticky_menu == 'true' || $activate_sticky_menu_2 == 'true'){
	wp_enqueue_script( 'scrollwatch', TRUETHEMES_JS .'/scrollWatch.js', array('jquery'),'4.0',$in_footer = true);
	echo "<!--Site Option Activated Sticky Menu-->\n<script type='text/javascript'>jQuery(document).ready(function(){if (jQuery(window).width() > 770) {truethemes_StickyMenu(" . $menu_type . ");}});</script>\n<!--End Sticky Menu Activation-->\n";
	}
}
add_action('wp_footer','tt_hook_sticky_menu');


/*-----------------------------------------------------------------------------------*/
/* Flexslider slide animation RTL css fixes
/* @since 4.0.5 dev 7
/*-----------------------------------------------------------------------------------*/
function tt_flexslider_rtl_slide_animation_css_fixes(){
$css = "\n\n<style type='text/css'>\n";
$css .= ".flex-viewport { direction: ltr; }\n";
$css .= ".flex-viewport .slider-content-main{text-align:right}";
$css .= ".jquery2-slider-wrap .slider-content-sub img, .jquery2-slider-wrap .slider-content-sub-full-width img{margin:10px 0 0 10px !important;}";
$css .= ".jquery2-slider-wrap .slider-content-sub-full-width {margin: 40px 0 0 30px;}";
$css .="</style>\n\n";
echo $css;
}

if(is_rtl()){
	$slide_animation = get_option('ka_karma_jquery_animation_effect');
	if($slide_animation == 'slide'){
	add_action('wp_head','tt_flexslider_rtl_slide_animation_css_fixes',99);
	}
}

/*-----------------------------------------------------------------------------------*/
/* Custom body_class()
/*-----------------------------------------------------------------------------------*/
function tt_add_body_classes( $classes ) {

$disable_indicator_arrows = get_option('ka_nav_indicator_arrows');
$disable_nav_description  = get_option('ka_nav_description');
$disable_dropdown         = get_option('ka_dropdown');
$disable_post_date        = get_option('ka_post_date');
$disable_gradient         = get_option('ka_true_content_gradient');
$body_footer_bottom       = get_option('ka_footer_layout');
$disable_mobile_subs      = get_option('ka_mobile_menu_subs');
$karma_global_flat        = get_option('ka_karma_global_flat');

if($disable_indicator_arrows == 'true'){
	$classes[] = 'karma-menu-no-indicator';
}
if($disable_nav_description == 'true'){
	$classes[] = 'karma-menu-no-description';
}
if($disable_dropdown == 'true'){
	$classes[] = 'karma-menu-no-dropdown';
}
if($disable_post_date == 'true'){
	$classes[] = 'karma-no-post-date';
}
if($body_footer_bottom == 'bottom'){
	$classes[] = 'karma-footer-bottom';
}
if($disable_gradient == 'true'){
	$classes[] = 'karma-no-content-gradient';
}
if($disable_mobile_subs == 'true'){
	$classes[] = 'karma-no-mobile-submenu';
}
if($karma_global_flat == 'true'){
	$classes[] = 'karma-flat-cs';
}
	return $classes;
}
add_filter( 'body_class', 'tt_add_body_classes' );



/**
 * Set the size attribute to 'large' in the gallery shortcode.
 * This function all only be run in add_filter in gallery.php and default-gallery.php
 * original codes from http://wordpress.stackexchange.com/questions/141896/define-size-for-get-post-gallery-images-they-seem-to-have-been-resized-to-150#answer-141907
 */
function tt_shortcode_atts_gallery( $out ){
    remove_filter( current_filter(), __FUNCTION__ );
    $out['size'] = 'large';
    return $out;
}

/*
* Remove first gallery shortcode found in content. For use in gallery.php and default-gallery.php
* original codes from http://wordpress.stackexchange.com/questions/121489/split-content-and-gallery#answer-121508
*/
function tt_strip_shortcode_gallery( $content ) {
    preg_match_all( '/'. get_shortcode_regex() .'/s', $content, $matches, PREG_SET_ORDER );
    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if ($pos !== false)
                    return substr_replace( $content, '', $pos, strlen($shortcode[0]) );
            }
        }
    }
    return $content;
}

//prevents Visual Composer welcome screen.
remove_action( 'vc_activation_hook', 'vc_page_welcome_set_redirect' );
remove_action( 'init', 'vc_page_welcome_redirect' );


//add welcome page.
add_action('admin_menu', 'add_karma_welcome_page');

function add_karma_welcome_page() {
	add_theme_page('Welcome', 'Karma Welcome', 'edit_theme_options', 'karma-welcome', 'karma_render_about_page');
}

function karma_render_about_page(){
require_once(TRUETHEMES_GLOBAL   . '/karma-welcome/karma-welcome.php');
}

//add redirection
function karma_page_welcome_redirect() {
	wp_redirect( admin_url( 'admin.php?page=karma-welcome' ) );
}

//enable redirect on activation.
add_action( 'after_switch_theme', 'karma_page_welcome_redirect' );

//remove tgm plugin notice
add_filter('get_user_metadata','karma_remove_tgm_notice',10,4);
function karma_remove_tgm_notice($val, $object_id, $meta_key, $single){
    if($meta_key === 'tgmpa_dismissed_notice'){
        return true;
    }else{
        return null;
    }
}

// Automatic Updates (http://wp-updates.com/)
require_once('wp-updates-theme.php');
$licence_key = get_option('ka_item_purchase_code');
//uncomment to see license key
//print_r($licence_key);
if(!empty($licence_key)){
new WPUpdatesThemeUpdater_1451( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ), $license_key  );
}
?>