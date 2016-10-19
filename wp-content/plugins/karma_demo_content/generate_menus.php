<?php

	//#message - creating menus
	//code reference from http://wp-snippets.com/pre-fill-a-custom-menu/
	echo '<li>Creating Menus</li>';
	ob_flush();

	//create menus
	$main_menu_id = wp_create_nav_menu( "Main Menu" );
	$footer_menu_id = wp_create_nav_menu( "Footer Menu" );
	$top_toolbar_menu_id = wp_create_nav_menu( "Top Toolbar Menu" );
	$custom_menu_id = wp_create_nav_menu("Custom Menu");
	
	//set them to their respective locations.
	$locations['Primary Navigation'] = $main_menu_id;
	$locations['Footer Navigation'] = $footer_menu_id;
	$locations['Top Toolbar Navigation'] = $top_toolbar_menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );
	

/**
* Start building Main Menu for Primary Navigation
*/


	//Home
	$preset_menu_parent_item_id['home'] = tt_create_custom_links($main_menu_id,'Home',$url=home_url(), $menu_description = 'go to homepage', $menu_parent_item_id = '');
	
	//Home -> Classic 4 Column
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['home'],$preset_menu_item_id['home-classic-4-column']);
	
	//Home -> 3 Column + Contact
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['home'],$preset_menu_item_id['home-3-column-contact']);
	
	//Home -> Video Left
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['home'],$preset_menu_item_id['home-video-left']);
	
	//Home -> Video Right
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['home'],$preset_menu_item_id['home-video-right']);
	
	
	
	
	
	//SLIDERS
	$preset_menu_parent_item_id['sliders'] = tt_create_custom_links($main_menu_id,'SLIDERS',$url='#', $menu_description = 'all things possible', $menu_parent_item_id = '');
	
	
	//SLIDERS -> LayerSlider
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['sliders'],$preset_menu_item_id['layer-slider']);
	
	
	//SLIDERS -> RevolutionSlider
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['sliders'],$preset_menu_item_id['revolution-slider']);


	//SLIDERS -> jQuery 1 Slider
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['sliders'],$preset_menu_item_id['jquery-1-slider']);	


	//SLIDERS -> jQuery 2 Slider
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['sliders'],$preset_menu_item_id['jquery-2-slider']);
	
	
	//SLIDERS -> jQuery 3 Slider
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['sliders'],$preset_menu_item_id['jquery-3-slider']);
	
	
	
	
	
	
	
	
	//PAGES
	$preset_menu_parent_item_id['pages'] = tt_create_custom_links($main_menu_id,'PAGES',$url='#', $menu_description = 'layout templates', $menu_parent_item_id = '');
	
	

	//PAGES -> Gallery + Portfolio
	$preset_menu_parent_item_id['gallery-portfolio'] = tt_create_custom_links($main_menu_id,'Gallery + Portfolio',$url='#', $menu_description = '', $menu_parent_item_id = $preset_menu_parent_item_id['pages']);	


	//PAGES -> Gallery + Portfolio > 1 Column
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['gallery-portfolio'],$preset_menu_item_id['1-column']);
	

	//PAGES -> Gallery + Portfolio > 1 Column Portrait
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['gallery-portfolio'],$preset_menu_item_id['1-column-portrait']);	
	

	//PAGES -> Gallery + Portfolio > 2 Column
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['gallery-portfolio'],$preset_menu_item_id['2-column']);
	
	

	//PAGES -> Gallery + Portfolio > 3 Column
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['gallery-portfolio'],$preset_menu_item_id['3-column']);	
	

	//PAGES -> Gallery + Portfolio > 3 Column Portrait
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['gallery-portfolio'],$preset_menu_item_id['3-column-portrait']);
	
	

	//PAGES -> Gallery + Portfolio > 4 Column
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['gallery-portfolio'],$preset_menu_item_id['4-column']);	
	
	
	//PAGES -> Contact
	$preset_menu_parent_item_id['contact'] = tt_create_custom_links($main_menu_id,'Contact',$url='#', $menu_description = '', $menu_parent_item_id = $preset_menu_parent_item_id['pages']);
	

	//PAGES -> Contact > Smart Phone
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['contact'],$preset_menu_item_id['smart-phone']);	
	
			

	//PAGES -> Contact > Google Map
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['contact'],$preset_menu_item_id['google-map']);			
	


	//PAGES -> Utility
	$preset_menu_parent_item_id['utility'] = tt_create_custom_links($main_menu_id,'Utility',$url='#', $menu_description = '', $menu_parent_item_id = $preset_menu_parent_item_id['pages']);
	
	

	//PAGES -> Utility > Site Map
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['utility'],$preset_menu_item_id['sitemap']);		
	
	

	//PAGES -> Utility > Site Map 2
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['utility'],$preset_menu_item_id['sitemap-2']);			
	

	
	//PAGES -> Utility -> 404
	tt_create_custom_links($main_menu_id,'404',$url=home_url('?p=9999'), $menu_description = '', $menu_parent_item_id = $preset_menu_parent_item_id['utility']);
	
	
	//PAGES -> FAQ
	$preset_menu_parent_item_id['faq'] = tt_create_custom_links($main_menu_id,'FAQ',$url='#', $menu_description = '', $menu_parent_item_id = $preset_menu_parent_item_id['pages']);
	
	//PAGES -> FAQ - 1
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['faq'],$preset_menu_item_id['faq-1']);
	
	//PAGES -> FAQ - 2
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['faq'],$preset_menu_item_id['faq-2']);

	//PAGES -> Team Members
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['team-members']);

	//PAGES -> Full Width
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['full-width']);

	//PAGES -> Horizontal Nav
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['horizontal-nav']);	

	//PAGES -> Left Sidebar
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['left-sidebar']);		

	//PAGES -> Left Nav
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['left-nav']);
	
	//PAGES -> Left Nav + Sidebar
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['leftnav-sidebar']);

	//PAGES -> Right Sidebar
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['right-sidebar']);

	//PAGES -> Right Nav
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['right-nav']);

	//PAGES -> Right Nav + Sidebar
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['rightnav-sidebar']);
	
	//PAGES -> Video Left
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['video-left']);

	//PAGES -> Video Right
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['video-right']);

	//PAGES -> Sample - Side Nav + Image Frames
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['sample-sidenav-image-frames']);

	//PAGES -> Pricing Page
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['pages'],$preset_menu_item_id['pricing-page']);
	
	

	//Shortcodes
	$preset_menu_parent_item_id['shortcodes'] = tt_create_custom_links($main_menu_id,'ELEMENTS',$url='#', $menu_description = 'visual composer', $menu_parent_item_id = '');

	


	/*****************************************
	* Start new Karma Builder Shortcode Pages.
	/*****************************************/		


	//Shortcodes ->Accordions
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['accordions']);
	
	//Shortcodes -> Alert Boxes
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['alert-boxes']);	

	//Shortcodes -> Animated Services List
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['animated-services-list']);		

	//Shortcodes -> Animated Features List
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['animated-features-list']);	
	
	//Shortcodes -> Business Contact
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['business-contact']);		
	
	//Shortcodes -> Buttons
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['buttons']);	

	//Shortcodes -> Callout Boxes
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['callout-boxes']);

	//Shortcodes -> Circle Loaders
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['circle-loaders']);

	//Shortcodes -> Circle Loader Icon
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['circle-loader-icon']);

	//Shortcodes -> Content Boxes
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['content-boxes']);

	//Shortcodes -> Dropcaps
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['dropcaps']);

	//Shortcodes -> Icon Boxes
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['icon-boxes']);	

	//Shortcodes -> Icon PNG
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['icon-png']);

	//Shortcodes -> Icon + Text
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['icon-text']);
	
	//Shortcodes -> Image Box Round
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['image-box-round']);	

	//Shortcodes -> Image Box Square
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['image-box-square']);

	//Shortcodes -> Latest Blog Posts
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['latest-blog-posts']);

	//Shortcodes -> Lists
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['lists']);
	
	//Shortcodes -> Number Counters
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['number-counters']);	
	
	//Shortcodes -> Pricing Boxes
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['pricing-boxes']);
			
	//Shortcodes -> Progress Bars
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['progress-bars']);
	
	//Shortcodes -> Progress Bars (vertical)
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['progress-bars-vertical']);
	
	//Shortcodes -> Social Icons
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['social-icons']);	
	
	//Shortcodes -> Tabs (4 styles)
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['tabs-4-styles']);
	
	//Shortcodes -> Testimonials 1
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['testimonials-1']);
	
	//Shortcodes -> Testimonials 2 + 3
	tt_create_menu_links($main_menu_id,$preset_menu_parent_item_id['shortcodes'],$preset_menu_item_id['testimonials-2-3']);		
	


	/*****************************************
	* End new Karma Builder Shortcode Pages.
	/*****************************************/	


/**
* End building Main Menu for Primary Navigation
*/		



/**
* Start building Custom Menu for page template that uses horizontal nav, left nav or right nav.
*/	
	

	//PAGES -> Horizontal Nav
	tt_create_menu_links($custom_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['horizontal-nav']);	



	//PAGES -> Left Sidebar
	tt_create_menu_links($custom_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['left-sidebar']);

	
	
	//PAGES -> Left Nav
	tt_create_menu_links($custom_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['left-nav']);	
	

		
	//PAGES -> Left Nav + Sidebar
	tt_create_menu_links($custom_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['leftnav-sidebar']);
	
	
	
	//PAGES -> Right Sidebar
	tt_create_menu_links($custom_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['right-sidebar']);

	
	
	//PAGES -> Right Nav
	tt_create_menu_links($custom_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['right-nav']);		
	


	//PAGES -> Right Nav + Sidebar
	tt_create_menu_links($custom_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['rightnav-sidebar']);	
	
	
	
	//PAGES -> Sample - Side Nav + Image Frames
	tt_create_menu_links($custom_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['sample-sidenav-image-frames'],$menu_description = '',$menu_item_title='Side Nav + Image Frames');
	
	

/**
* End building Custom Menu
*/


/*
* Start Building Top Toolbar Menu
*/

	//Home
	tt_create_custom_links($top_toolbar_menu_id,'Home',$url=home_url(), $menu_description = '', $menu_parent_item_id = '');
	

	//BLOG
	tt_create_menu_links($top_toolbar_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['blog'],$menu_description = '');		
		
/*
* End Building Top Toolbar Menu
*/



/*
* Start Building Top Footer Menu
*/

	//Home
	tt_create_custom_links($footer_menu_id,'Home',$url=home_url(), $menu_description = '', $menu_parent_item_id = '');
	
		
	//BLOG
	tt_create_menu_links($footer_menu_id,$preset_menu_parent_item_id='',$preset_menu_item_id['blog'],$menu_description = '');		
		
/*
* End Building Footer Menu
*/
?>