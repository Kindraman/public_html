<?php
/*---------------------------------------------------------------------------------------------------
Developer Note:

Last number used was: $page_post_meta1026

start with $page_post_meta1026 for any newly added pages.

Introduce helper function tt_get_all_shortcode_attributes() to grab css attributes of vc_row shortcode
and update it's value to post meta key '_wpb_shortcodes_custom_css' for vc_row's custom css 
-----------------------------------------------------------------------------------------------------*/



/*
* This file automatically generates pages..
*/

	//#message - generating pages
	echo '<li>Creating Pages</li>';
	ob_flush();
	
//Create Homepage
	//notice $page_data1 and $page_id1 variable names, to avoid crashing with later pages.	
	$page_data1 = array(
  		'post_title'    => 'Home',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		'post_content' => '[vc_row full_width="stretch_row" css=".vc_custom_1435428881175{padding-top: 50px !important;padding-bottom: 20px !important;background-color: #ffffff !important;}"][vc_column width="1/3"][karma_builder_icon_content icon_fontawesome="fa fa-cog" icon_color="#ffffff" icon_bg_color="#86b946"]<strong>Page Builder
</strong>

All new Karma Builder plugin comes with 100+ Visual Composer elements.[/karma_builder_icon_content][/vc_column][vc_column width="1/3"][karma_builder_icon_content icon_fontawesome="fa fa-question" icon_color="#ffffff" icon_bg_color="#5599d1"]<strong>Top-notch Support
</strong>

A dedicated support staff and extensive knowledgebase of solutions.[/karma_builder_icon_content][/vc_column][vc_column width="1/3"][karma_builder_icon_content icon_fontawesome="fa fa-check" icon_color="#ffffff" icon_bg_color="#7bb3ba"]<strong>Free Premium Plugins
</strong>

Visual Composer, Karma Builder, LayerSlider and Revolution Slider.[/karma_builder_icon_content][/vc_column][/vc_row][vc_row css=".vc_custom_1437096844452{padding-top: 100px !important;padding-bottom: 40px !important;}"][vc_column][vc_column_text]
<h3 style="text-align: center; color: #363636; font-size: 30px;">Get Started with Karma</h3>
<p style="text-align: center; color: #555; font-size: 16px;">Create stunning and unique websites every time with Karma, coding is not required</p>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1437059547048{padding-top: 30px !important;padding-bottom: 80px !important;}"][vc_column width="1/3"][karma_builder_imagebox_2 icon_fontawesome="fa fa-paper-plane" box_bg_color="#ffffff" icon_bg_color="#e08121" icon_color="#ffffff" link_color="#e08121" icon="fa-video-camera" attachment_id="10189" custom_css_class="box-1" url="url:http%3A%2F%2Fthemes.truethemes.net%2FKarma-4.0%2Ffeatures%2F||" link_text="Click to learn more"]
<h2>Theme Features</h2>
Responsive Design, Visual Composer, Karma Builder Extension, Automatic Theme Updates and many more premium features.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/3"][karma_builder_imagebox_2 icon_fontawesome="fa fa-eye" box_bg_color="#ffffff" icon_bg_color="#86b946" icon_color="#ffffff" link_color="#86b946" icon="fa-camera" attachment_id="10190" custom_css_class="box-2" url="url:http%3A%2F%2Fthemes.truethemes.net%2FKarma-4.0%2Fdesign%2F||" link_text="Click to learn more"]
<h2>Design Options</h2>
Unique Design, 30 Color Schemes and color-picker, Multiple Headers, 3 Logo Positions, Unique per-page Styling and much more.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/3"][karma_builder_imagebox_2 icon_fontawesome="fa fa-leaf" box_bg_color="#ffffff" icon_bg_color="#5599d1" icon_color="#ffffff" link_color="#5599d1" icon="fa-play" custom_css_class="box-3" url="url:%23||" attachment_id="10191" link_text="Preview this site"]
<h2>Page Templates</h2>
16 Page Templates, Drag-and-Drop Page Building, Side Nav Templates, Extensive Customization Options for every page and much more.[/karma_builder_imagebox_2][/vc_column][/vc_row]',
		
	);

	//Required to pull in Visual Composer styles (ie. row styling)
	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1 = array(
		//set the page-template
		'_wp_page_template'=>'template-page-builder.php',

		//css row settings for VC
		'_wpb_shortcodes_custom_css' => $row_css,
	);

	$preset_menu_item_id['home'] = tt_create_pages($page_data1,$page_post_meta1);
	
	
	
	//Set static page - WordPress admin > Settings > Reading ->  a static page
	update_option('show_on_front','page');
	//Set front page -  WordPress admin > Settings > Reading
	update_option('page_on_front',$preset_menu_item_id['home']);
	
	
	
	
	


//Homepage - Classic 4 Column
	$page_data105 = array(
  		'post_title'    => 'Classic 4 Column',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type'     => 'page',
		'post_parent'   => $preset_menu_parent_item_id['home'],
		'post_content'  => '[callout1]Please check out the <a href="http://vimeopro.com/truethemes/karma-4/page/2">Karma Training Videos</a> for complete details on setting up a LayerSlider or RevolutionSlider on this page. Cheers :)[/callout1][gap size="20px"]
		
		[callout1]With Karma 4.0 Homepage Templates are a thing of the past. You can now effectively build/create your own homepage using the page templates we have provided. Combine that with the super awesome shortcodes included with the theme and the possibilities are virtually endless. Have Fun &amp; Happy Creating![/callout1]

[gap size="20px"]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
<h4>Compatible</h4>
<a href="http://codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703?ref=TrueThemes" target="_blank">UberMenu</a>, <a href="http://www.gravityforms.com/" target="_blank">Gravity Forms</a>, and <a href="http://wordpress.org/plugins/mailchimp/" target="_blank">MailChimp</a> Plugins are just some of the <strong>premium</strong> plugins that work seamlessly with Karma.

[/one_fourth]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
<h4>Dependable</h4>
Karma is built on highly <strong>optimized</strong> code that’s already powering over 21,000 amazing websites. Dependable!

[/one_fourth]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
<h4>Flexible</h4>
<strong>Personalize</strong> your website by choosing from 30 preset color schemes, 7 gorgeous overlay patterns and so much more.
[/one_fourth]

[one_fourth_last]
[frame style="shadow" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
<h4>Responsive</h4>
<strong>100% Responsive</strong> and beautiful rendering on every Mobile Device. Karma\'s interface is sharply crisp on retina displays.

[/one_fourth_last]

[heading_horizontal type="h6" margin_top="50px" margin_bottom="30px"]our customers say it best:[/heading_horizontal]

[testimonial_wrap]

[testimonial]I have downloaded 8 themes from themeforest. This has been the easiest to customize out of them all. I’ve never turned a website around so fast! I’ll be looking for more themes from TrueThemes in the future. Thanks![client_name]TrueThemes Customer[/client_name][/testimonial]

[testimonial]I have purchased the Karma Theme and can completely recommend it. The training videos are wonderful, very clear and concise with detailed instructions and demonstration. The Technical Support has also been wonderful, the response time on a issue I had was phenomenal, plus the solution to my issue was provided in a very clear manner. I will be using Karma on my next project as well.[client_name]Janet[/client_name][/testimonial]

[testimonial]We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you![client_name]TrueThemes Customer[/client_name][/testimonial]

[/testimonial_wrap]',
		
	);

	$page_post_meta105 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',	
						
					//Page settings
    				'slider_disable_toolbar'=>'true',
	
	);

	$preset_menu_item_id['home-classic-4-column'] = tt_create_pages($page_data105,$page_post_meta105);
	
	
	



//Homepage - 3 Column + Contact
	$page_data106 = array(
  		'post_title'    => '3 Column + Contact',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type'     => 'page',
		'post_parent'   => $preset_menu_parent_item_id['home'],
		'post_content'  => '[callout1]Please check out the <a href="http://vimeopro.com/truethemes/karma-4/page/2">Karma Training Videos</a> for complete details on setting up a LayerSlider or RevolutionSlider on this page. Cheers :)[/callout1][gap size="20px"]
		
[gap size="20px"]

[callout1]With Karma 4.0 Homepage Templates are a thing of the past. You can now effectively build/create your own homepage using the page templates we have provided. Combine that with the super awesome shortcodes included with the theme and the possibilities are virtually endless. Have Fun &amp; Happy Creating![/callout1]

[gap size="25px"]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Compatible</h4>
<a href="http://codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703?ref=TrueThemes" target="_blank">UberMenu</a>, <a href="http://www.gravityforms.com/" target="_blank">Gravity Forms</a>, and <a href="http://wordpress.org/plugins/mailchimp/" target="_blank">MailChimp</a> Plugins are just some of the <strong>premium</strong> plugins that work seamlessly with Karma.
[/one_third]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Dependable</h4>
Karma is built on highly <strong>optimized</strong> code that\'s already powering more than 20,000 websites. You can depend on this theme.
[/one_third]

[one_third_last]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Flexible</h4>
<strong>Personalize</strong> your website by choosing from 30 preset color schemes, 7 gorgeous overlay patterns and so much more.
[/one_third_last]

[gap size="40px"]

[heading_horizontal type="h6" margin_top="20px" margin_bottom="0px"]Contact Us:[/heading_horizontal]

[gap size="40px"]

[one_half]
<h4>Contact Form Shortcode:</h4>
[raw][contact-form subject="Subject Line to Email Here" to="hello@truethemes.net"]
[contact-field label="Name" type="name" required="true" /]
[contact-field label="Email" type="email" required="true" /]
[contact-field label="Comment" type="textarea" required="true" /]
[/contact-form][/raw]

[/one_half]

[one_half_last]
<h4>Tabs Shortcode:</h4>
[tabset tab1="Testimonials" tab2="Lets Socialize"]
[tab]

[testimonial_wrap]

[testimonial]I have downloaded 8 themes from themeforest. This has been the easiest to customize out of them all. I’ve never turned a website around so fast! I’ll be looking for more themes from TrueThemes in the future. Thanks![client_name]TrueThemes Customer[/client_name][/testimonial]

[testimonial]I have purchased the Karma Theme and can completely recommend it. The training videos are wonderful, very clear and concise with detailed instructions and demonstration. The Technical Support has also been wonderful, the response time on a issue I had was phenomenal, plus the solution to my issue was provided in a very clear manner. I will be using Karma on my next project as well.[client_name]Janet[/client_name][/testimonial]

[testimonial]We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you![client_name]TrueThemes Customer[/client_name][/testimonial]

[/testimonial_wrap]

[/tab]

[tab][social style="vector" show_title="true" target="_self" rss="#" twitter="#" facebook="#" email="" flickr="" youtube="#" linkedin="#" pinterest="#" instagram="#" foursquare="" delicious="" digg="" google="#" dribbble="" skype="#" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="YouTube" linkedin_title="Linkedin" pinterest_title="Pinterest" instagram_title="Instagram" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype"][/tab]
[/tabset]
[/one_half_last]',
		
	);

	$page_post_meta106 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',	
						
					//Page settings
    				'slider_disable_toolbar'=>'true',
	
	);

	$preset_menu_item_id['home-3-column-contact'] = tt_create_pages($page_data106,$page_post_meta106);
	
	
	
//Homepage - Video Left
	$page_data107 = array(
  		'post_title'    => 'Video Left',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type'     => 'page',
		'post_parent'   => $preset_menu_parent_item_id['home'],
		'post_content'  => '[video_left][video_frame]
[iframe url="//player.vimeo.com/video/49312337" width="572" height="312"]
[/video_frame]

[video_text]
[h2]Welcome To Karma[/h2]
Use this section to talk about your company, products or services. Display a friendly video or static image to show your customers that you respect and appreciate them. Absolutely everything is possible with Karma 4.0

[button url="http://themes.truethemes.net/Karma-4.0/design/" target="" size="medium" style="black" icon="" popup="" title="View Karma\'s Design Options"]Theme Design Options[/button]

[/video_text][/video_left]

[gap size="10px"]

[hr]

[gap size="5px"]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
<h4>Compatible</h4>
<a href="http://codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703?ref=TrueThemes" target="_blank">UberMenu</a>, <a href="http://www.gravityforms.com/" target="_blank">Gravity Forms</a>, and <a href="http://wordpress.org/plugins/mailchimp/" target="_blank">MailChimp</a> Plugins are just some of the <strong>premium</strong> plugins that work seamlessly with Karma.

[/one_fourth]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
<h4>Dependable</h4>
Karma is built on highly <strong>optimized</strong> code that’s already powering over 21,000 amazing websites. Dependable!

[/one_fourth]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
<h4>Flexible</h4>
<strong>Personalize</strong> your website by choosing from 30 preset color schemes, 7 gorgeous overlay patterns and so much more.
[/one_fourth]

[one_fourth_last]
[frame style="shadow" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
<h4>Responsive</h4>
<strong>100% Responsive</strong> and beautiful rendering on every Mobile Device. Karma\'s interface is sharply crisp on retina displays.

[/one_fourth_last]

[gap size="10px"]

[callout1]With Karma 4.0 Homepage Templates are a thing of the past. You can now effectively build/create your own homepage using the page templates we have provided. Combine that with the super awesome shortcodes included with the theme and the possibilities are virtually endless. Have Fun &amp; Happy Creating![/callout1]

[gap size="30px"]
[one_half]
<h4>Contact us Today:</h4>
[raw][contact-form subject="Subject Line to Email Here" to="hello@truethemes.net"]
[contact-field label="Name" type="name" required="true" /]
[contact-field label="Email" type="email" required="true" /]
[contact-field label="Comment" type="textarea" required="true" /]
[/contact-form][/raw]

[/one_half]

[one_half_last]
<h4>Here\'s a Blogpost Shortcode:</h4>
[blog_posts count="3" post_category="" title="" link_text="Read More" character_count="90" layout="default"]

[/one_half_last]',
		
	);

	$page_post_meta107 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',	
						
					//Page settings
    				'slider_disable_toolbar'=>'true',
	
	);

	$preset_menu_item_id['home-video-left'] = tt_create_pages($page_data107,$page_post_meta107);
	
	
//Homepage - Video Right
	$page_data108 = array(
  		'post_title'    => 'Video Right',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type'     => 'page',
		'post_parent'   => $preset_menu_parent_item_id['home'],
		'post_content'  => '[video_right][video_frame]
[iframe url="//player.vimeo.com/video/34604227" width="572" height="312"]
[/video_frame]

[video_text]
[h2]Welcome To Karma[/h2]
Use this section to talk about your company, products or services. Display a friendly video or static image to show your customers that you respect and appreciate them. Absolutely everything is possible with Karma 4.0.

[button url="http://themes.truethemes.net/Karma-4.0/design/" target="" size="medium" style="black" icon="" popup="" title="View Karma\'s Design Options"]Theme Design Options[/button]

[/video_text][/video_right]

[callout1]With Karma 4.0 Homepage Templates are a thing of the past. You can now effectively build/create your own homepage using the page templates we have provided. Combine that with the super awesome shortcodes included with the theme and the possibilities are virtually endless. Have Fun &amp; Happy Creating![/callout1]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Compatible</h4>
<a href="http://codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703?ref=TrueThemes" target="_blank">UberMenu</a>, <a href="http://www.gravityforms.com/" target="_blank">Gravity Forms</a>, and <a href="http://wordpress.org/plugins/mailchimp/" target="_blank">MailChimp</a> Plugins are just some of the <strong>premium</strong> plugins that work seamlessly with Karma.
[/one_third]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Dependable</h4>
Karma is built on highly <strong>optimized</strong> code that\'s already powering more than 20,000 websites. You can depend on this theme.
[/one_third]

[one_third_last]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Flexible</h4>
<strong>Personalize</strong> your website by choosing from 30 preset color schemes, 7 gorgeous overlay patterns and so much more.
[/one_third_last]

[gap size="40px"]
[heading_horizontal type="h6" margin_top="0px" margin_bottom="0px"]our customers say it best:[/heading_horizontal]
[gap size="20px"]

[testimonial_wrap]

[testimonial]I have downloaded 8 themes from themeforest. This has been the easiest to customize out of them all. I’ve never turned a website around so fast! I’ll be looking for more themes from TrueThemes in the future. Thanks![client_name]TrueThemes Customer[/client_name][/testimonial]

[testimonial]I have purchased the Karma Theme and can completely recommend it. The training videos are wonderful, very clear and concise with detailed instructions and demonstration. The Technical Support has also been wonderful, the response time on a issue I had was phenomenal, plus the solution to my issue was provided in a very clear manner. I will be using Karma on my next project as well.[client_name]Janet[/client_name][/testimonial]

[testimonial]We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you![client_name]TrueThemes Customer[/client_name][/testimonial]

[/testimonial_wrap]',
		
	);

	$page_post_meta108 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',	
						
					//Page settings
    				'slider_disable_toolbar'=>'true',
	
	);

	$preset_menu_item_id['home-video-right'] = tt_create_pages($page_data108,$page_post_meta108);
	
	
	


	
	
//create blog page
	$page_data2 = array(
  		'post_title'    => 'Blog',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		
	);

	$page_post_meta2 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'default',	
						

	);
	$preset_menu_item_id['blog'] = tt_create_pages($page_data2,$page_post_meta2);
	//set blog posts - WordPress admin > Settings >  Reading
	update_option('page_for_posts',$preset_menu_item_id['blog']);
	
		


//jQuery 1 slider
	//notice $page_data3 and $page_id3 variable names, to avoid crashing with later pages.	
	$page_data3 = array(
  		'post_title'    => 'Karma jQuery 1 Slider',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		'post_parent' => $preset_menu_parent_item_id['sliders'],
		'post_content' => '[callout1]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Praesent commodo cursus magna.[/callout1]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Compatible</h4>
<a href="http://codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703?ref=TrueThemes" target="_blank">UberMenu</a>, <a href="http://www.gravityforms.com/" target="_blank">Gravity Forms</a>, and <a href="http://wordpress.org/plugins/mailchimp/" target="_blank">MailChimp</a> Plugins are just some of the premium plugins that work seamlessly with Karma.
[/one_third]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Dependable</h4>
Karma is built on highly optimized code that\'s already powering more than 20,000 websites. You can depend on this theme.
[/one_third]

[one_third_last]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Personalized</h4>
Personalize your website by choosing from 30 preset color schemes, 7 gorgeous overlay patterns and so much more.
[/one_third_last]

[heading_horizontal type="h5" margin_top="35px" margin_bottom="35px"]Our Clients Say it Best[/heading_horizontal]

[testimonial_wrap]

[testimonial]I have downloaded 8 themes from themeforest. This has been the easiest to customize out of them all. I’ve never turned a website around so fast! I’ll be looking for more themes from TrueThemes in the future. Thanks![client_name]TrueThemes Customer[/client_name][/testimonial]

[testimonial]I have purchased the Karma Theme and can completely recommend it. The training videos are wonderful, very clear and concise with detailed instructions and demonstration. The Technical Support has also been wonderful, the response time on a issue I had was phenomenal, plus the solution to my issue was provided in a very clear manner. I will be using Karma on my next project as well.[client_name]Janet[/client_name][/testimonial]

[testimonial]We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you![client_name]TrueThemes Customer[/client_name][/testimonial]

[/testimonial_wrap]',
		
	);

	$page_post_meta3 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',	
						
					//Page settings
    				'slider_disable_toolbar'=>'true',	
	
					//Slider settings
					'karma_slider_type'=>'karma-custom-jquery-1',
					'tt_karma_slider_category'=> $jquery_one_category_term_id, //found in generate_slider_posts.php
	);

	$preset_menu_item_id['jquery-1-slider'] = tt_create_pages($page_data3,$page_post_meta3);	
	







//jQuery 2 slider
	//notice $page_data4 and $page_id4 variable names, to avoid crashing with later pages.	
	$page_data4 = array(
  		'post_title'    => 'Karma jQuery 2 Slider',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		'post_parent' => $preset_menu_parent_item_id['sliders'],
		'post_content' => '[callout1]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Praesent commodo cursus magna.[/callout1]

[one_fourth]
[frame style="modern" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/one_fourth]

[one_fourth]
[frame style="modern" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/one_fourth]

[one_fourth]
[frame style="modern" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/one_fourth]

[one_fourth_last]
[frame style="modern" image_path="http://placehold.it/190x111" link_to_page="#" target="" description="" size="four_col_large"]
Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
[/one_fourth_last]

&nbsp;

[hr]

[one_half]
<h5>Latest from the Blog</h5>
[blog_posts count="2" post_category="" title="" link_text="Read More" character_count="115" layout="default"]
[/one_half]

[one_half_last]
<h5>Awesome Content Here</h5>
Sed posuere consectetur est at lobortis. Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.

[/one_half_last]

[heading_horizontal type="h6" margin_top="20px" margin_bottom="35px"]Our Clients Say it Best[/heading_horizontal]

[testimonial_wrap]
[testimonial]This is a testimonial Slider. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus, arcu non blandit tempus, elit diam congue velit, ac porttitor enim purus sed ante. In feugiat, velit eleifend placerat scelerisque, tortor felis hendrerit neque, sit amet semper turpis velit fringilla risus. Mauris tempus risus non tortor mollis si[client_name]John Doe, Truethemes[/client_name][/testimonial]
[testimonial]This testimonial is created using shortcode. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus, arcu non blandit tempus, elit diam congue velit, ac porttitor enim purus sed ante. In feugiat, velit eleifend placerat scelerisque, tortor felis hendrerit neque, sit amet semper turpis velit fringilla risus. Mauris tempus risus non tortor mollis si[client_name]John Doe,Themeforest[/client_name][/testimonial]
[testimonial]You can add any amount of slide here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus, arcu non blandit tempus, elit diam congue velit, ac porttitor enim purus sed ante. In feugiat, velit eleifend placerat scelerisque, tortor felis hendrerit neque, sit amet semper turpis velit fringilla risus. Mauris tempus risus non tortor mollis si[client_name]John Doe, Truethemes[/client_name][/testimonial]
[/testimonial_wrap]',
		
	);

	$page_post_meta4 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',	
						
					//Page settings
    				'slider_disable_toolbar'=>'true',	
	
					//Slider settings
					'karma_slider_type'=>'karma-custom-jquery-2',
					'tt_karma_slider_category'=> $jquery_two_category_term_id, //found in generate_slider_posts.php
	);

	$preset_menu_item_id['jquery-2-slider'] = tt_create_pages($page_data4,$page_post_meta4);
	
	
	
	
	
//jQuery 3 slider
	//notice $page_data(x) and $page_id(x) variable names, to avoid crashing with later pages.	
	$page_data99 = array(
  		'post_title'    => 'Karma jQuery 3 Slider',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		'post_parent' => $preset_menu_parent_item_id['sliders'],
		'post_content' => '[callout1]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Praesent commodo cursus magna.[/callout1]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Compatible</h4>
<a href="http://codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703?ref=TrueThemes" target="_blank">UberMenu</a>, <a href="http://www.gravityforms.com/" target="_blank">Gravity Forms</a>, and <a href="http://wordpress.org/plugins/mailchimp/" target="_blank">MailChimp</a> Plugins are just some of the premium plugins that work seamlessly with Karma.
[/one_third]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Dependable</h4>
Karma is built on highly optimized code that\'s already powering more than 20,000 websites. You can depend on this theme.
[/one_third]

[one_third_last]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Personalized</h4>
Personalize your website by choosing from 30 preset color schemes, 7 gorgeous overlay patterns and so much more.
[/one_third_last]

[heading_horizontal type="h5" margin_top="35px" margin_bottom="35px"]Our Clients Say it Best[/heading_horizontal]

[testimonial_wrap]

[testimonial]I have downloaded 8 themes from themeforest. This has been the easiest to customize out of them all. I’ve never turned a website around so fast! I’ll be looking for more themes from TrueThemes in the future. Thanks![client_name]TrueThemes Customer[/client_name][/testimonial]

[testimonial]I have purchased the Karma Theme and can completely recommend it. The training videos are wonderful, very clear and concise with detailed instructions and demonstration. The Technical Support has also been wonderful, the response time on a issue I had was phenomenal, plus the solution to my issue was provided in a very clear manner. I will be using Karma on my next project as well.[client_name]Janet[/client_name][/testimonial]

[testimonial]We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you![client_name]TrueThemes Customer[/client_name][/testimonial]

[/testimonial_wrap]',
		
	);

	$page_post_meta99 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',	
						
					//Page settings
    				'slider_disable_toolbar'=>'true',	
	
					//Slider settings
					'karma_slider_type'=>'karma-custom-jquery-3',
					'tt_karma_slider_category'=> $jquery_two_category_term_id, //found in generate_slider_posts.php
	);

	$preset_menu_item_id['jquery-3-slider'] = tt_create_pages($page_data99,$page_post_meta99);
	
	
	
	
	
	
	
	
//LayerSlider
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data100 = array(
  		'post_title'    => 'LayerSlider',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '<h1 style="text-align: center;">LayerSlider:</h1>
[callout1]Please check out the <a href="http://vimeopro.com/truethemes/karma-4/">Karma Training Videos</a> for complete details on setting up this page. Cheers :)[/callout1]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Compatible</h4>
<a href="http://codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703?ref=TrueThemes" target="_blank">UberMenu</a>, <a href="http://www.gravityforms.com/" target="_blank">Gravity Forms</a>, and <a href="http://wordpress.org/plugins/mailchimp/" target="_blank">MailChimp</a> Plugins are just some of the premium plugins that work seamlessly with Karma.
[/one_third]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Dependable</h4>
Karma is built on highly optimized code that\'s already powering more than 20,000 websites. You can depend on this theme.
[/one_third]

[one_third_last]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Personalized</h4>
Personalize your website by choosing from 30 preset color schemes, 7 gorgeous overlay patterns and so much more.
[/one_third_last]

[heading_horizontal type="h5" margin_top="35px" margin_bottom="35px"]Our Clients Say it Best[/heading_horizontal]

[testimonial_wrap]

[testimonial]I have downloaded 8 themes from themeforest. This has been the easiest to customize out of them all. I’ve never turned a website around so fast! I’ll be looking for more themes from TrueThemes in the future. Thanks![client_name]TrueThemes Customer[/client_name][/testimonial]

[testimonial]I have purchased the Karma Theme and can completely recommend it. The training videos are wonderful, very clear and concise with detailed instructions and demonstration. The Technical Support has also been wonderful, the response time on a issue I had was phenomenal, plus the solution to my issue was provided in a very clear manner. I will be using Karma on my next project as well.[client_name]Janet[/client_name][/testimonial]

[testimonial]We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you![client_name]TrueThemes Customer[/client_name][/testimonial]

[/testimonial_wrap]',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta100 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					
					//Page settings
    				'slider_disable_toolbar'=>'true',

	);

	$preset_menu_item_id['layer-slider'] = tt_create_pages($page_data100,$page_post_meta100);	
	
	








//LayerSlider
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data101 = array(
  		'post_title'    => 'Revolution Slider',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '<h1 style="text-align: center;">Revolution Slider:</h1>
[callout1]Please check out the <a href="http://vimeopro.com/truethemes/karma-4/">Karma Training Videos</a> for complete details on setting up this page. Cheers :)[/callout1]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Compatible</h4>
<a href="http://codecanyon.net/item/ubermenu-wordpress-mega-menu-plugin/154703?ref=TrueThemes" target="_blank">UberMenu</a>, <a href="http://www.gravityforms.com/" target="_blank">Gravity Forms</a>, and <a href="http://wordpress.org/plugins/mailchimp/" target="_blank">MailChimp</a> Plugins are just some of the premium plugins that work seamlessly with Karma.
[/one_third]

[one_third]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Dependable</h4>
Karma is built on highly optimized code that\'s already powering more than 20,000 websites. You can depend on this theme.
[/one_third]

[one_third_last]
[frame style="modern" image_path="http://placehold.it/275x145" link_to_page="#" target="" description="" size="three_col_large"]
<h4>Personalized</h4>
Personalize your website by choosing from 30 preset color schemes, 7 gorgeous overlay patterns and so much more.
[/one_third_last]

[heading_horizontal type="h5" margin_top="35px" margin_bottom="35px"]Our Clients Say it Best[/heading_horizontal]

[testimonial_wrap]

[testimonial]I have downloaded 8 themes from themeforest. This has been the easiest to customize out of them all. I’ve never turned a website around so fast! I’ll be looking for more themes from TrueThemes in the future. Thanks![client_name]TrueThemes Customer[/client_name][/testimonial]

[testimonial]I have purchased the Karma Theme and can completely recommend it. The training videos are wonderful, very clear and concise with detailed instructions and demonstration. The Technical Support has also been wonderful, the response time on a issue I had was phenomenal, plus the solution to my issue was provided in a very clear manner. I will be using Karma on my next project as well.[client_name]Janet[/client_name][/testimonial]

[testimonial]We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you![client_name]TrueThemes Customer[/client_name][/testimonial]

[/testimonial_wrap]',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta101 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					
					//Page settings
    				'slider_disable_toolbar'=>'true',

	);

	$preset_menu_item_id['revolution-slider'] = tt_create_pages($page_data101,$page_post_meta101);
	




	



//portfolio one column using filterable gallery template and tags as submenu item to portfolio + gallery custom menu link
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data8 = array(
  		'post_title'    => '1 Column',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		
	);

	$page_post_meta8 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-filterable-gallery.php',	
						
					'meta_truethemes_gallery_layout'=>'tt-1-col',
					'meta_truethemes_gallery_framestyle'=>'modern',	
					'meta_truethemes_gallery_title_check'=>'yes',
					'meta_truethemes_gallery_description_check'=>'yes',
						
						//gparent_term_id from generate_gallery_posts.php, the metabox script accepts this value as an array, 
						//therefore need to convert before saving into meta_truethemes_gallery_category
					'meta_truethemes_gallery_category'=>$gparent_term_id,	
					'meta_truethemes_gallery_filter_linktext'=>'All',
					'meta_truethemes_gallery_itemcount'=>'',
	);

	$preset_menu_item_id['1-column'] = tt_create_pages($page_data8,$page_post_meta8);




//portfolio one column portrait 	
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data9 = array(
  		'post_title'    => '1 Column Portrait',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		
	);

	$page_post_meta9 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-filterable-gallery.php',	
						
					'meta_truethemes_gallery_layout'=>'tt-1-col-portrait',
					'meta_truethemes_gallery_framestyle'=>'modern',	
					'meta_truethemes_gallery_title_check'=>'yes',
					'meta_truethemes_gallery_description_check'=>'yes',
						
						//gparent_term_id from generate_gallery_posts.php, the metabox script accepts this value as an array, 
						//therefore need to convert before saving into meta_truethemes_gallery_category
					'meta_truethemes_gallery_category'=>$gparent_term_id,	
					'meta_truethemes_gallery_filter_linktext'=>'All',
					'meta_truethemes_gallery_itemcount'=>'',
	);

	$preset_menu_item_id['1-column-portrait'] = tt_create_pages($page_data9,$page_post_meta9);



//portfolio 2 column
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data10 = array(
  		'post_title'    => '2 Column',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		
	);

	$page_post_meta10 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-filterable-gallery.php',	
						
					'meta_truethemes_gallery_layout'=>'tt-2-col',
					'meta_truethemes_gallery_framestyle'=>'shadow',	
					'meta_truethemes_gallery_title_check'=>'yes',
					'meta_truethemes_gallery_description_check'=>'yes',
						
						//gparent_term_id from generate_gallery_posts.php, the metabox script accepts this value as an array, 
						//therefore need to convert before saving into meta_truethemes_gallery_category
					'meta_truethemes_gallery_category'=>$gparent_term_id,	
					'meta_truethemes_gallery_filter_linktext'=>'All',
					'meta_truethemes_gallery_itemcount'=>'',
	);

	$preset_menu_item_id['2-column'] = tt_create_pages($page_data10,$page_post_meta10);
	
	
	
	
//portfolio 3 column
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data11 = array(
  		'post_title'    => '3 Column',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		
	);

	$page_post_meta11 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-filterable-gallery.php',	
						
					'meta_truethemes_gallery_layout'=>'tt-3-col',
					'meta_truethemes_gallery_framestyle'=>'shadow',	
					'meta_truethemes_gallery_title_check'=>'yes',
					'meta_truethemes_gallery_description_check'=>'yes',
						
						//gparent_term_id from generate_gallery_posts.php, the metabox script accepts this value as an array, 
						//therefore need to convert before saving into meta_truethemes_gallery_category
					'meta_truethemes_gallery_category'=>$gparent_term_id,	
					'meta_truethemes_gallery_filter_linktext'=>'All',
					'meta_truethemes_gallery_itemcount'=>'',
	);

	$preset_menu_item_id['3-column'] = tt_create_pages($page_data11,$page_post_meta11);
	
	
	
		
//portfolio 3 column portrait
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data12 = array(
  		'post_title'    => '3 Column Portrait',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		
	);

	$page_post_meta12 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-filterable-gallery.php',	
						
					'meta_truethemes_gallery_layout'=>'tt-3-col-portrait',
					'meta_truethemes_gallery_framestyle'=>'shadow',	
					'meta_truethemes_gallery_title_check'=>'yes',
					'meta_truethemes_gallery_description_check'=>'yes',
						
						//gparent_term_id from generate_gallery_posts.php, the metabox script accepts this value as an array, 
						//therefore need to convert before saving into meta_truethemes_gallery_category
					'meta_truethemes_gallery_category'=>$gparent_term_id,	
					'meta_truethemes_gallery_filter_linktext'=>'All',
					'meta_truethemes_gallery_itemcount'=>'',
	);

	$preset_menu_item_id['3-column-portrait'] = tt_create_pages($page_data12,$page_post_meta12);	
	
	
	
//portfolio 4 column
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data13 = array(
  		'post_title'    => '4 Column',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		
	);

	$page_post_meta13 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-filterable-gallery.php',	
						
					'meta_truethemes_gallery_layout'=>'tt-4-col',
					'meta_truethemes_gallery_framestyle'=>'modern',	
					'meta_truethemes_gallery_title_check'=>'yes',
					'meta_truethemes_gallery_description_check'=>'yes',
						
						//gparent_term_id from generate_gallery_posts.php, the metabox script accepts this value as an array, 
						//therefore need to convert before saving into meta_truethemes_gallery_category
					'meta_truethemes_gallery_category'=>$gparent_term_id,	
					'meta_truethemes_gallery_filter_linktext'=>'All',
					'meta_truethemes_gallery_itemcount'=>'',
	);

	$preset_menu_item_id['4-column'] = tt_create_pages($page_data13,$page_post_meta13);	
	
	
	
//contact Smart Phone
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data14 = array(
  		'post_title'    => 'Smartphone',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '<h3 dir="ltr">We want to hear from you.</h3>
<p dir="ltr">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
[raw][contact-form subject="Subject Line to Email Here" to="sean@truethemes.net"]
[contact-field label="Name" type="name" required="true" /]
[contact-field label="Email" type="email" required="true" /]
[contact-field label="Website" type="url" /]
[contact-field label="Comment" type="textarea" required="true" /]
[/contact-form][/raw]

&nbsp;',
		'post_type' => 'page',
		
	);

	$page_post_meta14 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_contact_iphone.php',	
						

	);

	$preset_menu_item_id['smart-phone'] = tt_create_pages($page_data14,$page_post_meta14);
	
	
	
	

//contact google map
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data15 = array(
  		'post_title'    => 'Google Map',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[one_third]

[tt_vector_box icon="fa-calendar" size="fa-4x" color="#7D60A9" link_to_page="" target="" description=""]
<h3>Event Calendar</h3>
Use Karma\'s vector icon box shortcodes to link users to important areas on your website.

[/tt_vector_box]
[/one_third]

[one_third]

[tt_vector_box icon="fa-clock-o " size="fa-4x" color="#87C442" link_to_page="" target="" description=""]
<h3>Meeting Times</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.

[/tt_vector_box]

[/one_third]

[one_third_last]

[tt_vector_box icon="fa-rss" size="fa-4x" color="#FF8300" link_to_page="" target="" description=""]
<h3>RSS Feed</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.

[/tt_vector_box]

&nbsp;

[/one_third_last]
[heading_horizontal type="h5" margin_top="30px" margin_bottom="30px"]Contact Form[/heading_horizontal]

[callout2]The contact form below was created in less than 2 minutes using Karma\'s powerful Form Builder. Contact forms can be inserted into any area of your website including pages, posts, footer and sidebar regions. This form below is for demo purposes only and will mail out to our auto-response system.[/callout2]

[two_thirds]

[raw][contact-form subject="Subject Line to Email Here" to="hello@truethemes.net"]
[contact-field label="Name" type="name" required="true" /]
[contact-field label="Email" type="email" required="true" /]
[contact-field label="Website" type="url" /]
[contact-field label="Comment" type="textarea" required="true" /]
[/contact-form][/raw]

[/two_thirds]

[one_third_last]
<h3>Lets Socialize:</h3>
[social style="vector_color" show_title="false" rss="#" twitter="#" facebook="#" email="#" flickr="#" youtube="#" linkedin="#" pinterest="#" foursquare="#" delicious="#" digg="#" google="#" dribbble="#" skype="#" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="YouTube" linkedin_title="Linkedin" pinterest_title="Pinterest" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype"]
<h3>Talk to us:</h3>
[business_contact
phone_number="123-456-7890"
fax_number="123-456-7890"
skype_username="your-username-here"
skype_label="Skype"
email_address="hello@truethemes.net"
directions_url="http://goo.gl/maps/996Zi"
directions_label="get driving directions"]

[/one_third_last]',
		'post_type' => 'page',
		
	);

	$page_post_meta15 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_contact_googlemap.php',	
						

	);

	$preset_menu_item_id['google-map'] = tt_create_pages($page_data15,$page_post_meta15);		
	
			

//utility sitemap
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data16 = array(
  		'post_title'    => 'Site Map',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '',
  		'post_type' => 'page',
		
	);

	$page_post_meta16 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_sitemap.php',	
						

	);

	$preset_menu_item_id['sitemap'] = tt_create_pages($page_data16,$page_post_meta16);
	
	
	
	
	
//utility sitemap2
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data17 = array(
  		'post_title'    => 'Site Map 2',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '',
  		'post_type' => 'page',
		
	);

	$page_post_meta17 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_sitemap-2.php',	
						

	);

	$preset_menu_item_id['sitemap-2'] = tt_create_pages($page_data17,$page_post_meta17);

	
	

//team members
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data18 = array(
  		'post_title'    => 'Team Members',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[team_member style="modern" image_path="http://placehold.it/190x180" members_name="John Doe" members_title="CEO and Producer" link_to_page="" description="" last_item=""]

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam.

[social style="vector" show_title="true" target="_self" rss="" twitter="#" facebook="#" email="#" flickr="" youtube="" linkedin="#" pinterest="" foursquare="" delicious="" digg="" google="#" dribbble="#" skype="#" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="YouTube" linkedin_title="Linkedin" pinterest_title="Pinterest" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype"]

[/team_member]

[team_member style="shadow" image_path="http://placehold.it/190x180" members_name="Jane Doe" members_title="Head of Marketing" link_to_page="" description="" last_item=""]

<strong>This example shows the shadow image frame and colored social icons. Setting both is an absolute breeze.</strong>

Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

[social style="vector_color" show_title="true" target="_self" rss="" twitter="#" facebook="#" email="#" flickr="" youtube="" linkedin="#" pinterest="" foursquare="" delicious="" digg="" google="#" dribbble="#" skype="" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="YouTube" linkedin_title="Linkedin" pinterest_title="Pinterest" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype"]

[/team_member]

[team_member style="modern" image_path="http://placehold.it/190x180" members_name="Chuck Norris" members_title="Head of Security" link_to_page="" description="" last_item="true"]

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras justo odio, dapibus ac facilisis in, egestas eget quam.

[social style="vector" show_title="true" target="_self" rss="" twitter="#" facebook="#" email="#" flickr="" youtube="" linkedin="#" pinterest="" foursquare="" delicious="" digg="" google="#" dribbble="#" skype="#" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="YouTube" linkedin_title="Linkedin" pinterest_title="Pinterest" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype"]

[/team_member]

[heading_horizontal type="h6" margin_top="40px" margin_bottom="40px"]Lets get started...[/heading_horizontal]

[one_third]

[button size="medium" style="royalblue" url="#" target="" icon="icon-cloud-download" popup="" title=""]Download Media Kit[/button]

[/one_third]

[one_third]

[button size="medium" style="skyblue" url="#" target="" icon="icon-skype" popup="" title=""]Call us on Skype[/button]

[/one_third]

[one_third_last]

[button size="medium" style="buoyred" url="#" target="" icon="icon-calendar-empty" popup="" title=""]View our Calendar[/button]

[/one_third_last]',
  		'post_type' => 'page',
		
	);

	$page_post_meta18 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-full-width.php',
					'truethemes_page_checkbox' => 'on',	
						

	);

	$preset_menu_item_id['team-members'] = tt_create_pages($page_data18,$page_post_meta18);
	
	





	





//FAQ -1 
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data19 = array(
  		'post_title'    => 'FAQ - 1',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[one_third]

[tt_vector_box icon="fa-gear" size="fa-4x" color="#2EC6C8" link_to_page="" target="" description=""]
<h3>General</h3>
Karma Wordpress Theme

[/tt_vector_box]
[/one_third]

[two_thirds_last]

[accordion class=\'accord1\']
[slide name="Can I really use a slider on any page layout?"]Yes. Karma now offers the ability to insert a slider on every page template. When creating a page you\'ll simply use Karma\'s custom \'Slider Settings\' section of the Page Editing screen to customize and insert your Slider. We\'ve made sure to stay true to the default Wordpress interface so absolutely nothing new to learn. Gone are the days of being locked down to a "homepage template". Boo-yah! [/slide]

[slide name="Is it true I can have unlimited Gallery Pages?"]Indeed it is. In Karma 4.0 we have made it possible to create unlimited Gallery Pages using Parent and Child Categories. First you will go to Gallery Posts &gt; Categories in the Wordpress backend, then create a Category, by default it will be a Parent. Now any category you create after just select that previous category as a parent. Each Parent Category represents its own gallery. So now all you have to do is choose the parent category in the page editor for the page you wish to display the gallery on. [/slide]

[slide name="Can I use Shortcodes in a Blog Post?"]Yes you can. We have taken the liberty of putting together some recommended shortcodes for the blog. For recommended Columns <a title="Recommended Columns for Blog" href="http://themes.truethemes.net/Karma-4.0/shortcodes-in-the-blog/" target="_blank">Click Here</a>. And for other Shortcode examples <a title="Shortcodes in the Blog" href="http://themes.truethemes.net/Karma-4.0/shortcodes-in-the-blog-pt-2/" target="_blank">Click Here.</a>[/slide]

[slide name="How is it I can build my own homepage?"]We won\'t get into all the technical jargen. We will however say it is as easy as riding a bike. In Karma 4.0 there is no set homepage layout. We have given you the option to use any of the layout templates (Left Sidebar, Right Nav + Sidebar, ect.) as your homepage layout. Also in the Page Editor we have allowed you to turn off certain elements such as the Title Bar to better suit your homepage needs. Combine that with being able to put a slider on any page and VOILA, you get to make your own homepage. Once again, Have Fun! [/slide]

[slide name="Can I use Google Fonts with Karma 4.0?"]You bet you can. Just travel on over to the custom Site Options Panel (Appearance &gt; Site Options &gt; Fonts). When there you will have the ability to choose from 11 preset samples we have provided for the Google Fonts. Or you have the option to enter your own custom font. Cheers![/slide]
[/accordion]

[/two_thirds_last]

[gap size="20px"]

[one_third]

[tt_vector_box icon="fa-desktop" size="fa-4x" color="#34BBEA" link_to_page="" target="" description=""]
<h3>Design</h3>
Beautifully crafted

[/tt_vector_box]
[/one_third]

[two_thirds_last]

[accordion class=\'accord2\']
[slide name="Is it possible to customize the layout and design of my website\'s Header area?"]Yes indeed. Karma offers a variety of super easy-to-use styling options for a fully custom Header design. Toggle the top-toolbar, adjust the header height, add widgets, select a custom pattern overlay image and more. You can also use Karma\'s powerful logo options to position your company\'s logo to the left, right or center. [/slide]

[slide name="What are some of the color scheme options that come with this theme?"]Karma was designed by an award-winning graphic design team. It comes packed with 30 gorgeous color schemes making Karma the perfect WordPress theme for every type of business. Powerful administration options also enable you to build your very own custom color scheme. Oh and you can also choose a color scheme on a per-page basis allowing for a different color scheme on each and every page of your website.[/slide]

[slide name="Does Karma display nicely on Retina display?"]Yes indeed. Over 90% of the Karma theme is completely retina-ready right out of the box. The image frame shortcodes are one of the only non-retina items however they still look super-duper gorgeous. Uploading a Retina-ready logo is only a mouse click away. Fire up your retina display and go have a look - you won\'t be disappointed.[/slide]

[slide name="Any other design customizations I should know about?"]Yes. There are an absolute abundant amount of design and customization options available in this theme. The even cooler part is that we\'ve spent an incredible amount of time in the planning and implementation of these options ensuring that every option baked into Karma is only a few mouse clicks away. Be sure to check out the Design section of this demo site for a more in-depth look.[/slide]

[/accordion]
[/two_thirds_last]

[gap size="20px"]

[one_third]

[tt_vector_box icon="fa-gift" size="fa-4x" color="#9F86D2" link_to_page="" target="" description=""]
<h3>Features</h3>
Built for the future

[/tt_vector_box]

[/one_third]

[two_thirds_last]

[accordion class=\'accord3\']

[slide name="Does this theme come pre-translated into any other Languages?"]Yes. Karma comes translated in over 10 international languages. We\'ve invested time and money to ensure that you can translate your website with the utmost ease. Languages include: English, Čeština, Deutsch, Español, Français, Italiano, Chinese, Nederlands, Polski, Português, Русский, Türkçe, Japanese.[/slide]
[slide name="I see that Karma is Accessibility Compliant. What is Accessibility and why it is important?"]Web accessibility means that people with disabilities can use and access your website. More specifically, Web accessibility means that people with disabilities can perceive, understand, navigate, and interact with the Web, and that they can contribute to the Web. During the re-build of Karma we teamed up with an Accessibility Expert to audit the theme and provide guidance about where to improve the theme for greater accessibility.[/slide]

[slide name="Does Karma freely include popular plugins such as LayerSlider and Revolution Slider?"]Yes. We\'ve invested a nice chunk of money to provide you with the highly popular LayerSlider, Slider Revolution and 3D CU3ER Slider Plugins. Karma is fully optimized, seamlessly integrated and ready to rock-and-roll right out of the box. All plugins are kept entirely up to date so that you can keep your money in your pocket and add amazing functionality to your website.[/slide]

[slide name="Do you offer free customer support with the Karma theme?"]You betchya! In many ways you could say that our main product is outstanding theme support. It\'s what we work on the hardest. 90% of our staff is in some way dedicated to this process. Purchase this theme with confidence in knowing that you will be fully backed by a dedicated team of amazingly friendly website professionals.[/slide]

[slide name="Any other features I should know about?"]Yes. There is an absolute boatload of additional features included in this theme. The most important feature is that Karma is actually usable. We\'ve got a combined 10 years working in the trenches at high-cost marketing firms so we absolutely know what it takes to build a successful and usable website. We continue to get repeat customers because Karma is just so darn easy to use. Please be sure to check out the Features section of this demo site for a more in-depth look.[/slide]

[/accordion]

[/two_thirds_last]',
  		'post_type' => 'page',
		
	);

	$page_post_meta19 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-full-width.php',	
					'truethemes_page_checkbox' => 'on',
						

	);

	$preset_menu_item_id['faq-1'] = tt_create_pages($page_data19,$page_post_meta19);
	
	
	
	

	
	
	
	
	//FAQ - 2
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data103 = array(
  		'post_title'    => 'FAQ - 2',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '<h4>General</h4>
[accordion class=\'accord1\']
[slide name="Can I really use a slider on any page layout?"]Yes. Karma now offers the ability to insert a slider on every page template. When creating a page you\'ll simply use Karma\'s custom \'Slider Settings\' section of the Page Editing screen to customize and insert your Slider. We\'ve made sure to stay true to the default Wordpress interface so absolutely nothing new to learn. Gone are the days of being locked down to a "homepage template". Boo-yah! [/slide]

[slide name="Is it true I can have unlimited Gallery Pages?"]Indeed it is. In Karma 4.0 we have made it possible to create unlimited Gallery Pages using Parent and Child Categories. First you will go to Gallery Posts &gt; Categories in the Wordpress backend, then create a Category, by default it will be a Parent. Now any category you create after just select that previous category as a parent. Each Parent Category represents its own gallery. So now all you have to do is choose the parent category in the page editor for the page you wish to display the gallery on. [/slide]

[slide name="Can I use Shortcodes in a Blog Post?"]Yes you can. We have taken the liberty of putting together some recommended shortcodes for the blog. For recommended Columns <a title="Recommended Columns for Blog" href="http://themes.truethemes.net/Karma-4.0/shortcodes-in-the-blog/" target="_blank">Click Here</a>. And for other Shortcode examples <a title="Shortcodes in the Blog" href="http://themes.truethemes.net/Karma-4.0/shortcodes-in-the-blog-pt-2/" target="_blank">Click Here.</a>[/slide]

[slide name="How is it I can build my own homepage?"]We won\'t get into all the technical jargen. We will however say it is as easy as riding a bike. In Karma 4.0 there is no set homepage layout. We have given you the option to use any of the layout templates (Left Sidebar, Right Nav + Sidebar, ect.) as your homepage layout. Also in the Page Editor we have allowed you to turn off certain elements such as the Title Bar to better suit your homepage needs. Combine that with being able to put a slider on any page and VOILA, you get to make your own homepage. Once again, Have Fun! [/slide]

[slide name="Can I use Google Fonts with Karma 4.0?"]You bet you can. Just travel on over to the custom Site Options Panel (Appearance &gt; Site Options &gt; Fonts). When there you will have the ability to choose from 11 preset samples we have provided for the Google Fonts. Or you have the option to enter your own custom font. Cheers![/slide]
[/accordion]
<h4>Design</h4>
[accordion class=\'accord2\']
[slide name="Is it possible to customize the layout and design of my website\'s Header area?"]Yes indeed. Karma offers a variety of super easy-to-use styling options for a fully custom Header design. Toggle the top-toolbar, adjust the header height, add widgets, select a custom pattern overlay image and more. You can also use Karma\'s powerful logo options to position your company\'s logo to the left, right or center. [/slide]

[slide name="What are some of the color scheme options that come with this theme?"]Karma was designed by an award-winning graphic design team. It comes packed with 30 gorgeous color schemes making Karma the perfect WordPress theme for every type of business. Powerful administration options also enable you to build your very own custom color scheme. Oh and you can also choose a color scheme on a per-page basis allowing for a different color scheme on each and every page of your website.[/slide]

[slide name="Does Karma display nicely on Retina display?"]Yes indeed. Over 90% of the Karma theme is completely retina-ready right out of the box. The image frame shortcodes are one of the only non-retina items however they still look super-duper gorgeous. Uploading a Retina-ready logo is only a mouse click away. Fire up your retina display and go have a look - you won\'t be disappointed.[/slide]

[slide name="Any other design customizations I should know about?"]Yes. There are an absolute abundant amount of design and customization options available in this theme. The even cooler part is that we\'ve spent an incredible amount of time in the planning and implementation of these options ensuring that every option baked into Karma is only a few mouse clicks away. Be sure to check out the Design section of this demo site for a more in-depth look.[/slide]

[/accordion]
<h4>Features</h4>
[accordion class=\'accord3\']

[slide name="Does this theme come pre-translated into any other Languages?"]Yes. Karma comes translated in over 10 international languages. We\'ve invested time and money to ensure that you can translate your website with the utmost ease. Languages include: English, Čeština, Deutsch, Español, Français, Italiano, Chinese, Nederlands, Polski, Português, Русский, Türkçe, Japanese.[/slide]
[slide name="I see that Karma is Accessibility Compliant. What is Accessibility and why it is important?"]Web accessibility means that people with disabilities can use and access your website. More specifically, Web accessibility means that people with disabilities can perceive, understand, navigate, and interact with the Web, and that they can contribute to the Web. During the re-build of Karma we teamed up with an Accessibility Expert to audit the theme and provide guidance about where to improve the theme for greater accessibility.[/slide]

[slide name="Does Karma freely include popular plugins such as LayerSlider and Revolution Slider?"]Yes. We\'ve invested a nice chunk of money to provide you with the highly popular LayerSlider, Slider Revolution and 3D CU3ER Slider Plugins. Karma is fully optimized, seamlessly integrated and ready to rock-and-roll right out of the box. All plugins are kept entirely up to date so that you can keep your money in your pocket and add amazing functionality to your website.[/slide]

[slide name="Do you offer free customer support with the Karma theme?"]You betchya! In many ways you could say that our main product is outstanding theme support. It\'s what we work on the hardest. 90% of our staff is in some way dedicated to this process. Purchase this theme with confidence in knowing that you will be fully backed by a dedicated team of amazingly friendly website professionals.[/slide]

[slide name="Any other features I should know about?"]Yes. There is an absolute boatload of additional features included in this theme. The most important feature is that Karma is actually usable. We\'ve got a combined 10 years working in the trenches at high-cost marketing firms so we absolutely know what it takes to build a successful and usable website. We continue to get repeat customers because Karma is just so darn easy to use. Please be sure to check out the Features section of this demo site for a more in-depth look.[/slide]

[/accordion]
<h4>Top Secret</h4>
[accordion class=\'accord4\']

[slide name="Is it true that TrueThemes has a Child Prodigy on staff?"]I\'m sorry, I don\'t understand the question.[/slide]

[/accordion]',
  		'post_type' => 'page',
		
	);

	$page_post_meta103 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_rightsidebar_horizontalnav.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'truethemes_page_checkbox'=>'on',
					'sbg_selected_sidebar' => array(0 => '0'),
					'sbg_selected_sidebar_replacement' => array(0 => 'Blog Sidebar'),
						

	);

	$preset_menu_item_id['faq-2'] = tt_create_pages($page_data103,$page_post_meta103);











//Full width
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data20 = array(
  		'post_title'    => 'Full Width',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[frame style="shadow" image_path="http://placehold.it/922x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_full"]

[one_third]
<h4>Built</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_third]

[one_third]
<h4>With</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_third]

[one_third_last]
<h4>Love</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_third_last]

[heading_horizontal type="h6" margin_top="20px" margin_bottom="40px"]services we offer:[/heading_horizontal]

[one_fourth]
[tt_vector_box icon="fa-thumbs-o-up" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 1</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.

[/one_fourth]

[one_fourth]
[tt_vector_box icon="fa-font" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 2</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth]

[one_fourth]
[tt_vector_box icon="fa-user" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 3</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth]

[one_fourth_last]
[tt_vector_box icon="fa-users" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 4</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth_last]


[gap size="30px"]
[hr]
[gap size="20px"]
[one_half]
<h5>Tabs Shortcode:</h5>
[tabset tab1="Tabs" tab2="are" tab3="completely" tab4="flexible"]
[tab]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.[/tab]
[tab]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.[/tab]
[tab]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.[/tab]

[tab]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.[/tab][/tabset]

[/one_half]

[one_half_last]
<h5>Blogpost Shortcode:</h5>
[blog_posts count="2" post_category="" title="" link_text="Read More" character_count="90" layout="default"]

[/one_half_last]',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta20 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-full-width.php',	
					'truethemes_page_checkbox' => 'on',
						

	);

	$preset_menu_item_id['full-width'] = tt_create_pages($page_data20,$page_post_meta20);	
	
	
	
	

//Horizontal Nav
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data21 = array(
  		'post_title'    => 'Horizontal Nav',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.

Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

[one_half]
<h4>1/2</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_half]

[one_half_last]
<h4>1/2</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_half_last]

[one_third]
<h4>1/3</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_third]

[one_third]
<h4>1/3</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_third]

[one_third_last]
<h4>1/3</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_third_last]

[one_fourth]
<h4>1/4</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_fourth]

[one_fourth]
<h4>1/4</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_fourth]

[one_fourth]
<h4>1/4</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_fourth]

[one_fourth_last]
<h4>1/4</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.

[/one_fourth_last]',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta21 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-full-width.php',
					'truethemes_custom_sub_menu' => 'custom-menu',
						

	);

	$preset_menu_item_id['horizontal-nav'] = tt_create_pages($page_data21,$page_post_meta21);	
	
	
	
	
	
//Left Sidebar
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data22 = array(
  		'post_title'    => 'Left Sidebar',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

[one_half]
[frame style="modern" image_path="http://placehold.it/324x180" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="two_col_small"]

[/one_half]

[one_half_last]
[frame style="modern" image_path="http://placehold.it/324x180" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="two_col_small"]

[/one_half_last]

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta22 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_leftsidebar_horizontalnav.php',
					'truethemes_page_checkbox'=>'on',
					'sbg_selected_sidebar' => array(0 => '0'),
					'sbg_selected_sidebar_replacement' => array(0 => 'Blog Sidebar'),
						

	);

	$preset_menu_item_id['left-sidebar'] = tt_create_pages($page_data22,$page_post_meta22);	
	
	
	
	
	
//Left Nav
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data23 = array(
  		'post_title'    => 'Left Nav',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[frame style="modern" image_path="http://placehold.it/703x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_regular"]

Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui.

Donec ullamcorper nulla non metus auctor fringilla. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.

Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta23 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_leftnav.php',
					'truethemes_page_checkbox'=>'on',
					'truethemes_custom_sub_menu' => 'custom-menu',
						

	);

	$preset_menu_item_id['left-nav'] = tt_create_pages($page_data23,$page_post_meta23);	
	
	
	
	
	
//Left Nav + Sidebar
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data24 = array(
  		'post_title'    => 'Left Nav + Sidebar',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[frame style="shadow" image_path="http://placehold.it/493x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_small"]

Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum.

Sed posuere consectetur est at lobortis. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta24 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_leftnav_sidebar.php',
					'truethemes_custom_sub_menu' => 'custom-menu',
					'truethemes_page_checkbox'=>'on',
					'sbg_selected_sidebar' => array(0 => '0'),
					'sbg_selected_sidebar_replacement' => array(0 => 'Blog Sidebar'),
						

	);

	$preset_menu_item_id['leftnav-sidebar'] = tt_create_pages($page_data24,$page_post_meta24);	
		





//Right Sidebar
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data25 = array(
  		'post_title'    => 'Right Sidebar',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[frame style="modern" image_path="http://placehold.it/703x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_regular"]

Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.

Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta25 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_rightsidebar_horizontalnav.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'truethemes_page_checkbox'=>'on',
					'sbg_selected_sidebar' => array(0 => '0'),
					'sbg_selected_sidebar_replacement' => array(0 => 'Blog Sidebar'),
						
						

	);

	$preset_menu_item_id['right-sidebar'] = tt_create_pages($page_data25,$page_post_meta25);	
	
	
	
	
	
//Right Nav
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data26 = array(
  		'post_title'    => 'Right Nav',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[frame style="modern" image_path="http://placehold.it/703x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_regular"]

Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur.

Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus.

&nbsp;',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta26 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_rightnav.php',
					'truethemes_custom_sub_menu' => 'custom-menu',
					'truethemes_page_checkbox'=>'on',
					//'sbg_selected_sidebar' => array(0 => '0'),
					//'sbg_selected_sidebar_replacement' => array(0 => 'Blog Sidebar'),
						
						

	);

	$preset_menu_item_id['right-nav'] = tt_create_pages($page_data26,$page_post_meta26);	






//Right Nav + Sidebar
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data27 = array(
  		'post_title'    => 'Right Nav + Sidebar',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => '[frame style="modern" image_path="http://placehold.it/493x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_small"]

Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum.

Sed posuere consectetur est at lobortis. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta27 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_rightnav_sidebar.php',
					'truethemes_custom_sub_menu' => 'custom-menu',
					'truethemes_page_checkbox'=>'on',
					'sbg_selected_sidebar' => array(0 => '0'),
					'sbg_selected_sidebar_replacement' => array(0 => 'Blog Sidebar'),
						
						

	);

	$preset_menu_item_id['rightnav-sidebar'] = tt_create_pages($page_data27,$page_post_meta27);
	
	
	
	



//Video Left
	//notice $page_data5 and $page_id5 variable names, to avoid crashing with later pages.	
	$page_data5 = array(
  		'post_title'    => 'Video Left',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		'post_parent' => $preset_menu_parent_item_id['pages'],
		'post_content' => '[video_left][video_frame]
[iframe url="http://www.youtube.com/embed/rV6wRZRDci0" width="572" height="312"]
[/video_frame]

[video_text]
[h2]Video Layout Shortcode[/h2]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla.

[button url="http://themeforest.net/item/karma-clean-and-modern-wordpress-theme/168737?ref=TrueThemes" target="_self" size="medium" style="saffronblue" icon="" popup="" title=""]Buy this theme[/button]

[/video_text][/video_left]

[heading_horizontal type="h6" margin_top="20px" margin_bottom="40px"]services we offer:[/heading_horizontal]

[one_fourth]
[tt_vector_box icon="fa-thumbs-o-up" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 1</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.

[/one_fourth]

[one_fourth]
[tt_vector_box icon="fa-font" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 2</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth]

[one_fourth]
[tt_vector_box icon="fa-user" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 3</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth]

[one_fourth_last]
[tt_vector_box icon="fa-users" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 4</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth_last]

[gap size="30px"]

[callout1]Use this text block to engage your customers and promote a rewarding call to action. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a quam id sem pharetra porttitor. Nulla vitae elit libero, a pharetra augue.[/callout1]

[gap size="30px"]
[one_half]
<h5>Tabs Shortcode:</h5>
[tabset tab1="Tabs" tab2="are" tab3="completely" tab4="flexible"]
[tab]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.[/tab]
[tab]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.[/tab]
[tab]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.[/tab]

[tab]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis sem nibh. Proin fringilla, lectus vitae vestibulum facilisis, est justo tempus orci, vel laoreet diam eros placerat elit. Pellentesque facilisis tempus velit sit amet porttitor. Proin nibh magna, porttitor accumsan malesuada non, auctor id tortor.[/tab][/tabset]

[/one_half]

[one_half_last]
<h5>Blogpost Shortcode:</h5>
[blog_posts count="2" post_category="" title="" link_text="Read More" character_count="90" layout="default"]

[/one_half_last]',
		
	);

	$page_post_meta5 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-full-width.php',
					'truethemes_page_checkbox' => 'on',
						
					//Page settings
    				'slider_disable_toolbar'=>'true',	
	

	);

	$preset_menu_item_id['video-left'] = tt_create_pages($page_data5,$page_post_meta5);	
	
	







//Video Right
	//notice $page_data6 and $page_id6 variable names, to avoid crashing with later pages.	
	$page_data6 = array(
  		'post_title'    => 'Video Right',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'page',
		'post_parent' => $preset_menu_parent_item_id['pages'],
		'post_content' => '[video_right][video_frame]
[iframe url="http://www.youtube.com/embed/rV6wRZRDci0" width="572" height="312"]
[/video_frame]

[video_text]
[h2]Video Layout Shortcode[/h2]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla.

[button url="http://themeforest.net/item/karma-clean-and-modern-wordpress-theme/168737?ref=TrueThemes" target="_self" size="medium" style="saffronblue" icon="" popup="" title=""]Buy this theme[/button]

[/video_text][/video_right]

[heading_horizontal type="h6" margin_top="20px" margin_bottom="40px"]services we offer:[/heading_horizontal]

[one_fourth]
[tt_vector_box icon="fa-thumbs-o-up" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 1</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.

[/one_fourth]

[one_fourth]
[tt_vector_box icon="fa-font" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 2</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth]

[one_fourth]
[tt_vector_box icon="fa-user" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 3</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth]

[one_fourth_last]
[tt_vector_box icon="fa-users" size="fa-4x" color="" link_to_page="" target="" description=""]
<h4>Service 4</h4>
[/tt_vector_box]

Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
[/one_fourth_last]

[gap size="30px"]

[callout1]The contact form below was created in less than 2 minutes using Karma\'s powerful Form Builder. Contact forms can be inserted into any area of your website including pages, posts, footer and sidebar regions. This form below is for demo purposes only and will mail out to our auto-response system.[/callout1]

[gap size="30px"]
[one_half]
<h4>Contact Form Shortcode:</h4>
[raw][contact-form subject="Subject Line to Email Here" to="hello@truethemes.net"]
[contact-field label="Name" type="name" required="true" /]
[contact-field label="Email" type="email" required="true" /]
[contact-field label="Comment" type="textarea" required="true" /]
[/contact-form][/raw]

[/one_half]

[one_half_last]
<h4>Blogpost Shortcode:</h4>
[blog_posts count="3" post_category="" title="" link_text="Read More" character_count="90" layout="default"]

[/one_half_last]',
		
	);

	$page_post_meta6 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-full-width.php',
					'truethemes_page_checkbox' => 'on',
						
					//Page settings
    				'slider_disable_toolbar'=>'true',	
	

	);

	$preset_menu_item_id['video-right'] = tt_create_pages($page_data6,$page_post_meta6);		
	
	
	
		


	
	



	
	//Page sample
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data28 = array(
  		'post_title'    => 'Sample - Side Nav + Image Frames',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content' => 'Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras mattis consectetur purus sit amet fermentum.

[heading_horizontal type="h6" margin_top="20px" margin_bottom="60px"]Modern Image Frames[/heading_horizontal]

[one_half]
[frame style="modern" image_path="http://placehold.it/324x180" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="two_col_small"]

[/one_half]

[one_half_last]
[frame style="modern" image_path="http://placehold.it/324x180" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="two_col_small"]

[/one_half_last]

[one_third]
[frame style="modern" image_path="http://placehold.it/202x113" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="three_col_small"]

[/one_third]

[one_third]
[frame style="modern" image_path="http://placehold.it/202x113" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="three_col_small"]

[/one_third]

[one_third_last]
[frame style="modern" image_path="http://placehold.it/202x113" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="three_col_small"]

[/one_third_last]

[one_fourth]
[frame style="modern" image_path="http://placehold.it/135x76" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="four_col_small"]

[/one_fourth]

[one_fourth]
[frame style="modern" image_path="http://placehold.it/135x76" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="four_col_small"]

[/one_fourth]

[one_fourth]
[frame style="modern" image_path="http://placehold.it/135x76" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="four_col_small"]

[/one_fourth]

[one_fourth_last]
[frame style="modern" image_path="http://placehold.it/135x76" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="four_col_small"]

[/one_fourth_last]

[frame style="modern" image_path="http://placehold.it/703x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_regular"]

[frame style="modern" image_path="http://placehold.it/493x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_small"]

[frame style="modern" image_path="http://placehold.it/190x180" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="square"]

[heading_horizontal type="h6" margin_top="60px" margin_bottom="60px"]Shadow Image Frames[/heading_horizontal]

[one_half]
[frame style="shadow" image_path="http://placehold.it/324x180" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="two_col_small"]

[/one_half]

[one_half_last]
[frame style="shadow" image_path="http://placehold.it/324x180" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="two_col_small"]

[/one_half_last]

[one_third]
[frame style="shadow" image_path="http://placehold.it/202x113" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="three_col_small"]

[/one_third]

[one_third]
[frame style="shadow" image_path="http://placehold.it/202x113" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="three_col_small"]

[/one_third]

[one_third_last]
[frame style="shadow" image_path="http://placehold.it/202x113" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="three_col_small"]

[/one_third_last]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/135x76" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="four_col_small"]

[/one_fourth]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/135x76" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="four_col_small"]

[/one_fourth]

[one_fourth]
[frame style="shadow" image_path="http://placehold.it/135x76" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="four_col_small"]

[/one_fourth]

[one_fourth_last]
[frame style="shadow" image_path="http://placehold.it/135x76" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="four_col_small"]

[/one_fourth_last]

[frame style="shadow" image_path="http://placehold.it/703x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_regular"]

[frame style="shadow" image_path="http://placehold.it/493x201" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="banner_small"]

[frame style="shadow" image_path="http://placehold.it/190x180" description="" link_to_page="" target="" float="" lightbox="#" lightbox_group="" size="square"]',  		
  		'post_type' => 'page',
		
	);

	$page_post_meta28 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template_leftnav.php',
					'truethemes_custom_sub_menu' => 'custom-menu',
					'truethemes_page_checkbox'=>'on',

						

	);

	$preset_menu_item_id['sample-sidenav-image-frames'] = tt_create_pages($page_data28,$page_post_meta28);
		
	





//Pricing Page
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1026 = array(
  		'post_title'    => 'Pricing',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="stretch_row" css=".vc_custom_1435439528413{padding-top: 90px !important;padding-bottom: 90px !important;background: #244a5d url(http://localhost.local/Karma/wp-content/uploads/2014/03/karma-demo-blur-bg.jpg?id=1045);}" parallax="content-moving-fade"][vc_column width="1/3"][karma_builder_pricing_box style="style-2" color="politicalblue" button_color="politicalblue" price="29" currency="$" plan="Basic" term="per month" button_label="Sign Up" button_size="small"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/3"][karma_builder_pricing_box style="style-2" color="frenchgreen" button_color="frenchgreen" price="39" currency="$" plan="Pro" term="per month" button_label="Sign Up" button_size="small"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>50GB</strong> of Storage</li>
	<li><strong>10</strong> Domains</li>
	<li><strong>20</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/3"][karma_builder_pricing_box style="style-2" color="politicalblue" button_color="politicalblue" price="49" currency="$" plan="Premium" term="per month" button_label="Sign Up" button_size="small"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>Unlimited</strong> Storage</li>
	<li><strong>Unlimited</strong> Domains</li>
	<li><strong>Unlimited</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][/vc_row][vc_row css=".vc_custom_1435333394562{padding-top: 80px !important;}"][vc_column width="1/1"][karma_builder_heading heading_text="Questions &amp; Answers" heading_color="#58837c" sub_heading_color="#555555" margin_top="20px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px" margin_bottom="0px"][/vc_column][/vc_row][vc_row css=".vc_custom_1435333672416{padding-top: 70px !important;padding-bottom: 100px !important;}"][vc_column width="1/2"][vc_column_text css=".vc_custom_1435333018402{padding-bottom: 10px !important;}"]
<h4>When will I be billed?</h4>
Lorem Ipsum faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.[/vc_column_text][vc_column_text css=".vc_custom_1435333025419{padding-bottom: 10px !important;}"]
<h4>Do you offer discounts?</h4>
Lorem Ipsum faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.[/vc_column_text][vc_column_text]
<h4>How do I upgrade my account?</h4>
Lorem Ipsum faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text css=".vc_custom_1435333032653{padding-bottom: 10px !important;}"]
<h4>Can I change my plan?</h4>
Lorem Ipsum faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.[/vc_column_text][vc_column_text css=".vc_custom_1435333039115{padding-bottom: 10px !important;}"]
<h4>Can I get a refund?</h4>
Lorem Ipsum faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.[/vc_column_text][vc_column_text]
<h4>How do I pay for Karma?</h4>
Lorem Ipsum faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1435334205727{padding-bottom: 100px !important;}"][vc_column width="1/1"][karma_builder_button size="medium" style="frenchgreen" add_icon="yes" type="fontawesome" icon_fontawesome="fa fa-arrow-right" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" alignment="center"]Get Started[/karma_builder_button][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);


	//Required to pull in Visual Composer styles (ie. row styling)
	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1026['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1026 = array(
		//set the page-template
		'_wp_page_template'=>'template-page-builder.php',

		//css row settings for VC
		'_wpb_shortcodes_custom_css' => $row_css,
	);


	$preset_menu_item_id['pricing-page'] = tt_create_pages($page_data1026,$page_post_meta1026);










/*****************************************
* Start new Karma Builder Shortcode Pages.
/*****************************************/	
	
	
//New Accordion
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1000 = array(
  		'post_title'    => 'Accordion',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][heading_horizontal type="h5" margin_top="20px" margin_bottom="20px"]Accordion 1[/heading_horizontal][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_accordion panel_padding="20px" gradient_top="#ffffff" gradient_bottom="#efefef" panel_border="#e1e1e1" title_color="#666666" title_color_active="#88bbc8"][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 1"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 2"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 3"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][/karma_builder_accordion][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/2"][karma_builder_accordion panel_padding="20px" gradient_top="#ffffff" gradient_bottom="#efefef" panel_border="#e1e1e1" title_color="#666666" title_color_active="#88bbc8"][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 1"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 2"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 3"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][/karma_builder_accordion][/vc_column][vc_column width="1/2"][karma_builder_accordion panel_padding="20px" gradient_top="#ffffff" gradient_bottom="#efefef" panel_border="#e1e1e1" title_color="#666666" title_color_active="#88bbc8"][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 1"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 2"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][karma_builder_accordion_panel panel_active="false" title="Accordion Sample 3"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.[/karma_builder_accordion_panel][/karma_builder_accordion][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][heading_horizontal type="h5" margin_top="70px" margin_bottom="20px"]Accordion 2[/heading_horizontal][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][accordion class="accordion1"][slide name="Accordion Sample 1"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][slide name="Accordion Sample 2"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][slide name="Accordion Sample 3"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][/accordion][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="2/3"][accordion class="accordion2"][slide name="Accordion Sample 1"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][slide name="Accordion Sample 2"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][slide name="Accordion Sample 3"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][/accordion][/vc_column][vc_column width="1/3"][accordion class="accordion3"][slide name="Accordion Sample 1"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][slide name="Accordion Sample 2"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][slide name="Accordion Sample 3"]
<h3>Heading</h3>
Lorem ipsum dolor ante venenatis dapibus posuere. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.

Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.[/slide][/accordion][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1000['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1000 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['accordions'] = tt_create_pages($page_data1000,$page_post_meta1000);	
	



//new alert boxes
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1001 = array(
  		'post_title'    => 'Alert Boxes',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][heading_horizontal type="h5" margin_top="70px" margin_bottom="20px"]Alert Boxes[/heading_horizontal][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/2"][notify_box style="success" font_size="12px" closeable="true"]I\'m a Karma Alert Box. Edit this text with a custom message.[/notify_box][/vc_column][vc_column width="1/2"][notify_box style="error" font_size="12px" closeable="true"]I\'m a Karma Alert Box. Edit this text with a custom message.[/notify_box][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/2"][notify_box style="warning" font_size="12px" closeable="true"]I\'m a Karma Alert Box. Edit this text with a custom message.[/notify_box][/vc_column][vc_column width="1/2"][notify_box style="tip" font_size="12px" closeable="true"]I\'m a Karma Alert Box. Edit this text with a custom message.[/notify_box][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1001['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1001 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['alert-boxes'] = tt_create_pages($page_data1001,$page_post_meta1001);
	
	
//Animated Services List
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1002 = array(
  		'post_title'    => 'Animated Services List',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Services" sub_heading_text="5 Animation Styles. Stunning Vector Icons. Fully Scalable and Customizable." heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][karma_builder_services animate="in_from_left" icon="fa-fire" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#a2dce2" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h4>Research</h4>
Aenean lacinia bibendum nulla sed dolor consectetur.[/karma_builder_services][/vc_column][vc_column width="1/4"][karma_builder_services animate="in_from_center" icon="fa-bolt" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#a2dce2" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h4>Design</h4>
Aenean lacinia bibendum nulla sed dolor consectetur.[/karma_builder_services][/vc_column][vc_column width="1/4"][karma_builder_services animate="in_from_center" icon="fa-html5" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#a2dce2" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h4>Development</h4>
Aenean lacinia bibendum nulla sed dolor consectetur.[/karma_builder_services][/vc_column][vc_column width="1/4"][karma_builder_services animate="in_from_right" icon="fa-life-ring" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#a2dce2" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h4>Support</h4>
Aenean lacinia bibendum nulla sed dolor consectetur.[/karma_builder_services][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][gap size="50px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Custom Colors" sub_heading_text="Easily define a custom border color, icon color and hover color" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_services animate="in_from_left" icon="fa-fire" icon_color="#f05f3b" icon_color_hover="#ffffff" border_width="2px" border_color="#55acaa" bg_color="#f4f4f2" bg_color_hover="#55acaa" custom_css_class="service-1" type="fontawesome" icon_fontawesome="fa fa-search" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]
<h4>Research</h4>
Lorem ipsum dolor enean lacinia bibendum nulla sed dolor consectetur.[/karma_builder_services][/vc_column][vc_column width="1/3"][karma_builder_services animate="in_from_center" icon="fa-bolt" icon_color="#f05f3b" icon_color_hover="#ffffff" border_width="2px" border_color="#55acaa" bg_color="#f4f4f2" bg_color_hover="#55acaa" custom_css_class="service-1" type="fontawesome" icon_fontawesome="fa fa-bolt" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]
<h4>Design</h4>
Lorem ipsum dolor enean lacinia bibendum nulla sed dolor consectetur.[/karma_builder_services][/vc_column][vc_column width="1/3"][karma_builder_services animate="in_from_right" icon="fa-html5" icon_color="#f05f3b" icon_color_hover="#ffffff" border_width="2px" border_color="#55acaa" bg_color="#f4f4f2" bg_color_hover="#55acaa" custom_css_class="service-1" type="fontawesome" icon_fontawesome="fa fa-html5" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]
<h4>Development</h4>
Lorem ipsum dolor enean lacinia bibendum nulla sed dolor consectetur.[/karma_builder_services][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1002['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1002 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['animated-services-list'] = tt_create_pages($page_data1002,$page_post_meta1002);	




//Animated Features List
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1003 = array(
  		'post_title'    => 'Animated Features List',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Features" sub_heading_text="5 Animation Styles. Stunning Vector Icons. Fully Scalable and Customizable." heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/3"][karma_builder_features animate="in_from_left" type="fontawesome" icon_fontawesome="fa fa-fire" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_center" type="fontawesome" icon_fontawesome="fa fa-html5" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_right" type="fontawesome" icon_fontawesome="fa fa-rocket" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/3"][karma_builder_features animate="in_from_left" type="fontawesome" icon_fontawesome="fa fa-bolt" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_center" type="fontawesome" icon_fontawesome="fa fa-leaf" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_right" type="fontawesome" icon_fontawesome="fa fa-star" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/3"][karma_builder_features animate="in_from_left" type="fontawesome" icon_fontawesome="fa fa-flag" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_center" type="fontawesome" icon_fontawesome="fa fa-paper-plane" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_right" type="fontawesome" icon_fontawesome="fa fa-maxcdn" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" icon_color_hover="#ffffff" border_width="2px" border_color="#1e6f92" bg_color="#f4f4f2" bg_color_hover="#a2dce2"]
<h3>Feature</h3>
Lorem ipsum dolor sit amet sed posuere consectetur[/karma_builder_features][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][gap size="100px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Customize" sub_heading_text="100% complete design control. No coding required." heading_color="#363636" sub_heading_color="#555555" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px" margin_top="20px" margin_bottom="50px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_features animate="in_from_left" icon="fa-fire" icon_color="#9ccc65" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#9ccc65"]
<div class="vision-description tt-anim-headline">
<h4>Authentic</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_center" icon="fa-magnet" icon_color="#ff7300" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#ff7300"]
<div class="vision-description tt-anim-headline">
<h4>Dependable</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_right" icon="fa-check" icon_color="#ec407a" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#ec407a"]
<div class="vision-description tt-anim-headline">
<h4>Honest</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_features animate="in_from_left" icon="fa-flag" icon_color="#78909c" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#78909c"]
<div class="vision-description tt-anim-headline">
<h4>Guaranteed</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_center" icon="fa-info" icon_color="#29b6f6" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#29b6f6"]
<div class="vision-description tt-anim-headline">
<h4>Flexible</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_right" icon="fa-leaf" icon_color="#9575cd" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#9575cd"]
<div class="vision-description tt-anim-headline">
<h4>Proven</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_features animate="in_from_left" icon="fa-cube" icon_color="#e84e40" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#e84e40" custom_css_class="feature-gold"]
<div class="vision-description tt-anim-headline">
<h4>Value</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_center" icon="fa-cloud-upload" icon_color="#26a69a" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#26a69a" custom_css_class="feature-gold"]
<div class="vision-description tt-anim-headline">
<h4>Premium</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][vc_column width="1/3"][karma_builder_features animate="in_from_right" icon="fa-star" icon_color="#ffca28" icon_color_hover="#ffffff" border_width="2px" border_color="#cccccc" bg_color="#ffffff" bg_color_hover="#ffca28" custom_css_class="feature-gold"]
<div class="vision-description tt-anim-headline">
<h4>Awesome</h4>
Sed posuere consectetur est at lobortis.

</div>
[/karma_builder_features][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1003['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1003 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['animated-features-list'] = tt_create_pages($page_data1003,$page_post_meta1003);


//Business Contact
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1004 = array(
  		'post_title'    => 'Business Contact',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[business_contact
phone_number="123-456-7890"
fax_number="123-456-7890"
skype_username="your-username-here"
skype_label="Skype"
email_address="hello@truethemes.net"
directions_url="http://goo.gl/maps/996Zi"
directions_label="get driving directions"]

[get_the_code]
[business_contact
phone_number="123-456-7890"
fax_number="123-456-7890"
skype_username="your-username-here"
skype_label="Skype"
email_address="hello@truethemes.net"
directions_url="http://goo.gl/maps/996Zi"
directions_label="get driving directions"]
[/get_the_code]

[hr]

[business_contact
phone_number="123-456-7890"
fax_number="123-456-7890"
skype_username="your-username-here"
skype_label="Skype"
email_address="hello@truethemes.net"
directions_url="http://goo.gl/maps/996Zi"
directions_label="get driving directions"]

[get_the_code]
[business_contact
phone_number="123-456-7890"
fax_number="123-456-7890"
skype_username="your-username-here"
skype_label="Skype"
email_address="hello@truethemes.net"
directions_url="http://goo.gl/maps/996Zi"
directions_label="get driving directions"]
[/get_the_code]]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1004['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1004 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['business-contact'] = tt_create_pages($page_data1004,$page_post_meta1004);

//Buttons
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1005 = array(
  		'post_title'    => 'Buttons',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/4"][vc_column_text css=".vc_custom_1433187634855{margin-bottom: 15px !important;}"]
<h6>Royal Blue</h6>
[/vc_column_text][karma_builder_button size="small" style="royalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="royalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="royalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css_animation="" css=".vc_custom_1433072701744{margin-bottom: 15px !important;}"]
<h6>Political Blue</h6>
[/vc_column_text][karma_builder_button size="small" style="politicalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="politicalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="politicalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css_animation="" css=".vc_custom_1433072781244{margin-bottom: 15px !important;}"]
<h6>Cool Blue</h6>
[/vc_column_text][karma_builder_button size="small" style="coolblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="coolblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="coolblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css_animation="" css=".vc_custom_1433072892117{margin-bottom: 15px !important;}"]
<h6>Sky Blue</h6>
[/vc_column_text][karma_builder_button size="small" style="skyblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="skyblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="skyblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/4"][vc_column_text css=".vc_custom_1433072974377{margin-bottom: 15px !important;}"]
<h6>Vista Blue</h6>
[/vc_column_text][karma_builder_button size="small" style="vistablue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="vistablue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="vistablue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433073063031{margin-bottom: 15px !important;}"]
<h6>Black</h6>
[/vc_column_text][karma_builder_button size="small" style="black" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="black" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="black" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433073103719{margin-bottom: 15px !important;}"]
<h6>Teal Grey</h6>
[/vc_column_text][karma_builder_button size="small" style="tealgrey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="tealgrey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="tealgrey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433073154863{margin-bottom: 15px !important;}"]
<h6>Grey</h6>
[/vc_column_text][karma_builder_button size="small" style="grey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="grey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="grey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/4"][vc_column_text css=".vc_custom_1433073249144{margin-bottom: 15px !important;}"]
<h6>Blue Grey</h6>
[/vc_column_text][karma_builder_button size="small" style="bluegrey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="bluegrey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="bluegrey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433073306615{margin-bottom: 15px !important;}"]
<h6>Saffron Blue</h6>
[/vc_column_text][karma_builder_button size="small" style="saffronblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="saffronblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="saffronblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433073371779{margin-bottom: 15px !important;}"]
<h6>Steel Green</h6>
[/vc_column_text][karma_builder_button size="small" style="steelgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="steelgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="steelgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433073412139{margin-bottom: 15px !important;}"]
<h6>Tuf Green</h6>
[/vc_column_text][karma_builder_button size="small" style="tufgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="tufgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="tufgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/4"][vc_column_text css=".vc_custom_1433074826390{margin-bottom: 15px !important;}"]
<h6>Silver</h6>
[/vc_column_text][karma_builder_button size="small" style="silver" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="silver" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="silver" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433074879407{margin-bottom: 15px !important;}"]
<h6>Coffee</h6>
[/vc_column_text][karma_builder_button size="small" style="coffee" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="coffee" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="coffee" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433074904972{margin-bottom: 15px !important;}"]
<h6>Autumn</h6>
[/vc_column_text][karma_builder_button size="small" style="autumn" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="autumn" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="autumn" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433074918665{margin-bottom: 15px !important;}"]
<h6>Teal</h6>
[/vc_column_text][karma_builder_button size="small" style="teal" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="teal" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="teal" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075079288{margin-bottom: 15px !important;}"]
<h6>Alpha Green</h6>
[/vc_column_text][karma_builder_button size="small" style="alphagreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="alphagreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="alphagreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075091023{margin-bottom: 15px !important;}"]
<h6>French Green</h6>
[/vc_column_text][karma_builder_button size="small" style="frenchgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="frenchgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="frenchgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075103532{margin-bottom: 15px !important;}"]
<h6>Yogi Green</h6>
[/vc_column_text][karma_builder_button size="small" style="yogigreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="yogigreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="yogigreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075114254{margin-bottom: 15px !important;}"]
<h6>Forest Green</h6>
[/vc_column_text][karma_builder_button size="small" style="forestgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="forestgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="forestgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075286052{margin-bottom: 15px !important;}"]
<h6>Lime Green</h6>
[/vc_column_text][karma_builder_button size="small" style="limegreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="limegreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="limegreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075294247{margin-bottom: 15px !important;}"]
<h6>Golden</h6>
[/vc_column_text][karma_builder_button size="small" style="golden" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="golden" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="golden" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075302869{margin-bottom: 15px !important;}"]
<h6>Orange</h6>
[/vc_column_text][karma_builder_button size="small" style="orange" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="orange" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="orange" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075311037{margin-bottom: 15px !important;}"]
<h6>Fire</h6>
[/vc_column_text][karma_builder_button size="small" style="fire" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="fire" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="fire" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075481641{margin-bottom: 15px !important;}"]
<h6>Buoy Red</h6>
[/vc_column_text][karma_builder_button size="small" style="buoyred" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="buoyred" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="buoyred" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075490172{margin-bottom: 15px !important;}"]
<h6>Cherry</h6>
[/vc_column_text][karma_builder_button size="small" style="cherry" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="cherry" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="cherry" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075500405{margin-bottom: 15px !important;}"]
<h6>Purple</h6>
[/vc_column_text][karma_builder_button size="small" style="purple" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="purple" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="purple" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075508837{margin-bottom: 15px !important;}"]
<h6>Pink</h6>
[/vc_column_text][karma_builder_button size="small" style="pink" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="pink" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="pink" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075720449{margin-bottom: 15px !important;}"]
<h6>Periwinkle</h6>
[/vc_column_text][karma_builder_button size="small" style="periwinkle" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="periwinkle" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="periwinkle" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][vc_column_text css=".vc_custom_1433075733827{margin-bottom: 15px !important;}"]
<h6>Violet</h6>
[/vc_column_text][karma_builder_button size="small" style="violet" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Small Button[/karma_builder_button][karma_builder_button size="medium" style="violet" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Medium Button[/karma_builder_button][karma_builder_button size="large" style="violet" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]Large Button[/karma_builder_button][/vc_column][vc_column width="1/4"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$page_post_meta1005 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css'=>'',
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['buttons'] = tt_create_pages($page_data1005,$page_post_meta1005);	
	
	
//Callout Boxes
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1006 = array(
  		'post_title'    => 'Callout Boxes',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][heading_horizontal type="h5" margin_top="70px" margin_bottom="20px"]Callout Boxes[/heading_horizontal][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/2"][callout style="royalblue" font_size="13px"]
<h6>Royal Blue</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="coolblue" font_size="13px"]
<h6>Cool Blue</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="vistablue" font_size="13px"]
<h6>Vista Blue</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="tealgrey" font_size="13px"]
<h6>Teal Grey</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="bluegrey" font_size="13px"]
<h6>Blue Grey</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="steelgreen" font_size="13px"]
<h6>Steel Green</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="silver" font_size="13px"]
<h6>Silver</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="autumn" font_size="13px"]
<h6>Autumn</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="alphagreen" font_size="13px"]
<h6>Alpha Green</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="yogigreen" font_size="13px"]
<h6>Yogi Green</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="limegreen" font_size="13px"]
<h6>Lime Green</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="orange" font_size="13px"]
<h6>Orange</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="buoyred" font_size="13px"]
<h6>Buoy Red</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="purple" font_size="13px"]
<h6>Purple</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="periwinkle" font_size="13px"]
<h6>Periwinkle</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][/vc_column][vc_column width="1/2"][callout style="politicalblue" font_size="13px"]
<h6>Political Blue</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="skyblue" font_size="13px"]
<h6>Sky Blue</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="black" font_size="13px"]
<h6>Black</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="grey" font_size="13px"]
<h6>Grey</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="saffronblue" font_size="13px"]
<h6>Saffron Blue</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="tufgreen" font_size="13px"]
<h6>Tuf Green</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="coffee" font_size="13px"]
<h6>Coffee</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="teal" font_size="13px"]
<h6>Teal</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="frenchgreen" font_size="13px"]
<h6>French Green</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="forestgreen" font_size="13px"]
<h6>Forest Green</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="golden" font_size="13px"]
<h6>Golden</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="fire" font_size="13px"]
<h6>Fire</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="cherry" font_size="13px"]
<h6>Cherry</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="pink" font_size="13px"]
<h6>Pink</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][callout style="violet" font_size="13px"]
<h6>Violet</h6>
Lorem ipsum dolor sit amet. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis consectetur purus sit amet.[/callout][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1006['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1006 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['callout-boxes'] = tt_create_pages($page_data1006,$page_post_meta1006);	
	

//Circle Loaders
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1007 = array(
  		'post_title'    => 'Circle Loaders',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Circle Loaders" sub_heading_text="Fully customizable colors. Round and square styles. Truly endless options" heading_color="#363636" sub_heading_color="#555555" margin_top="30px" margin_bottom="40px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/3"][karma_builder_circle_loader number="50" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#a0dbe1" style="square" bar_width="10"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][vc_column width="1/3"][karma_builder_circle_loader number="70" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#a0dbe1" style="square" bar_width="10"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][vc_column width="1/3"][karma_builder_circle_loader number="82" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#a0dbe1" style="square" bar_width="10"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][gap size="60px"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1434553573540{padding-top: 130px !important;padding-bottom: 130px !important;background-color: #ffffff !important;}"][vc_column width="1/4"][karma_builder_circle_loader number="63" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#86b946" style="round" bar_width="10"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][vc_column width="1/4"][karma_builder_circle_loader number="50" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#86b946" style="round" bar_width="10"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][vc_column width="1/4"][karma_builder_circle_loader number="86" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#86b946" style="round" bar_width="10"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][vc_column width="1/4"][karma_builder_circle_loader number="44" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#86b946" style="round" bar_width="10"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][gap size="60px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/3"][karma_builder_circle_loader number="50" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#a0dbe1" style="round" bar_width="5"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][vc_column width="1/3"][karma_builder_circle_loader number="70" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#a0dbe1" style="round" bar_width="5"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][vc_column width="1/3"][karma_builder_circle_loader number="82" symbol="%" number_color="#000000" track_color="#eeeeee" bar_color="#a0dbe1" style="round" bar_width="5"]
<h3>Heading</h3>
This content is displayed below the circle loader.[/karma_builder_circle_loader][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1007['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1007 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['circle-loaders'] = tt_create_pages($page_data1007,$page_post_meta1007);
	
//Circle Loader Icon
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1008 = array(
  		'post_title'    => 'Circle Loader Icon',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Circle Loader Icon" sub_heading_text="Same awesome features as the circle loaders with stunning vector icons" heading_color="#363636" sub_heading_color="#555555" margin_top="30px" margin_bottom="40px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/3"][karma_builder_circle_loader_icon number="65" type="fontawesome" icon_fontawesome="fa fa-paper-plane" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" track_color="#e8e8e8" bar_color="#a0dbe1" style="round" bar_width="10"]
<h3>Heading</h3>
Lorem ipsum dolor sit amet.[/karma_builder_circle_loader_icon][/vc_column][vc_column width="1/3"][karma_builder_circle_loader_icon number="50" type="fontawesome" icon_fontawesome="fa fa-clock-o" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" track_color="#e8e8e8" bar_color="#a0dbe1" style="round" bar_width="10"]
<h3>Heading</h3>
Lorem ipsum dolor sit amet.[/karma_builder_circle_loader_icon][/vc_column][vc_column width="1/3"][karma_builder_circle_loader_icon number="83" type="fontawesome" icon_fontawesome="fa fa-leaf" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#d3565a" track_color="#e8e8e8" bar_color="#a0dbe1" style="round" bar_width="10"]
<h3>Heading</h3>
Lorem ipsum dolor sit amet.[/karma_builder_circle_loader_icon][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][gap size="100px"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1434555003306{padding-top: 130px !important;padding-bottom: 130px !important;background-color: #ffffff !important;}"][vc_column width="1/3"][karma_builder_circle_loader_icon number="65" type="fontawesome" icon_fontawesome="fa fa-pie-chart" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#304343" track_color="#eeeeee" bar_color="#86b946" style="round" bar_width="6"]
<h3>Heading</h3>
Lorem ipsum dolor sit amet.[/karma_builder_circle_loader_icon][/vc_column][vc_column width="1/3"][karma_builder_circle_loader_icon number="58" type="fontawesome" icon_fontawesome="fa fa-bolt" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#304343" track_color="#eeeeee" bar_color="#86b946" style="round" bar_width="6"]
<h3>Heading</h3>
Lorem ipsum dolor sit amet.[/karma_builder_circle_loader_icon][/vc_column][vc_column width="1/3"][karma_builder_circle_loader_icon number="46" type="fontawesome" icon_fontawesome="fa fa-anchor" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_color="#304343" track_color="#eeeeee" bar_color="#86b946" style="round" bar_width="6"]
<h3>Heading</h3>
Lorem ipsum dolor sit amet.[/karma_builder_circle_loader_icon][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);
	
	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1008['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1008 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['circle-loader-icon'] = tt_create_pages($page_data1008,$page_post_meta1008);	


//Content Boxes
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1009 = array(
  		'post_title'    => 'Content Boxes',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Content Boxes" sub_heading_text="Stylish boxes. Completely Flexible. 30 Perfect Color Schemes" heading_color="#363636" sub_heading_color="#555555" margin_top="30px" margin_bottom="40px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/2"][karma_builder_content_box style="royalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Royal Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="coolblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Cool Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="vistablue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Vista Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="tealgrey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Teal Grey"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="bluegrey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Blue Grey"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="steelgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Steel Green"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="silver" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Silver"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="autumn" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Autumn"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="alphagreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Alpha Green"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="yogigreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Yogi Green"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="limegreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Lime Green"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="orange" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Orange"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="buoyred" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Buoy Red"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="purple" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Purple"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="periwinkle" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Periwinkle"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][/vc_column][vc_column width="1/2"][karma_builder_content_box style="politicalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Political Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="skyblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Sky Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="black" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Black"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="grey" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Grey"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="saffronblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Saffron Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="tufgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Tuf Green"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="coffee" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Coffee"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="teal" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Teal"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="frenchgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="French Green"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="forestgreen" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Forest Green"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="golden" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Golden"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="fire" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Fire"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="cherry" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Cherry"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="pink" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Pink"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][karma_builder_content_box style="violet" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Violet"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_content_box][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][heading_horizontal type="h5" margin_top="70px" margin_bottom="20px"]Flexible Width[/heading_horizontal][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/3"][karma_builder_content_box style="royalblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Royal Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.[/karma_builder_content_box][/vc_column][vc_column width="1/3"][karma_builder_content_box style="coolblue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Cool Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.[/karma_builder_content_box][/vc_column][vc_column width="1/3"][karma_builder_content_box style="vistablue" add_icon="" type="fontawesome" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Vista Blue"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.[/karma_builder_content_box][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][heading_horizontal type="h5" margin_top="70px" margin_bottom="20px"]Titles with Icon[/heading_horizontal][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/3"][karma_builder_content_box style="buoyred" add_icon="yes" type="fontawesome" icon_fontawesome="fa fa-star" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Buoy Red"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.[/karma_builder_content_box][/vc_column][vc_column width="1/3"][karma_builder_content_box style="orange" add_icon="yes" type="fontawesome" icon_fontawesome="fa fa-signal" icon_openiconic="vc-oi vc-oi-signal" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Orange"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.[/karma_builder_content_box][/vc_column][vc_column width="1/3"][karma_builder_content_box style="limegreen" add_icon="yes" type="fontawesome" icon_fontawesome="fa fa-refresh" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" title="Lime Green"]<strong>Content Box</strong>

Lorem ipsum dolor quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.[/karma_builder_content_box][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1009['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1009 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['content-boxes'] = tt_create_pages($page_data1009,$page_post_meta1009);
	
	
//Dropcaps
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1010 = array(
  		'post_title'    => 'Dropcaps',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Dropcaps" sub_heading_text="Stunning Dropcaps in 3 Design Styles and 30 Gorgeous Color Schemes" heading_color="#363636" sub_heading_color="#555555" margin_top="30px" margin_bottom="40px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/3"][karma_builder_dropcap color="alphagreen" style="round" dropcap="1"]<strong>Alpha Green</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="bluegrey" style="round" dropcap="1"]<strong>Blue Grey
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="coffee" style="round" dropcap="1"]<strong>Coffee
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="forestgreen" style="round" dropcap="1"]<strong>Forest Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="grey" style="round" dropcap="1"]<strong>Grey
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="periwinkle" style="round" dropcap="1"]<strong>Periwinkle
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="purple" style="round" dropcap="1"]<strong>Purple
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="silver" style="round" dropcap="1"]<strong>Silver
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="teal" style="round" dropcap="1"]<strong>Teal
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="violet" style="round" dropcap="1"]<strong>Violet
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][vc_column width="1/3"][karma_builder_dropcap color="autumn" style="round" dropcap="1"]<strong>Autumn</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="buoyred" style="round" dropcap="1"]<strong>Buoy Red
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="coolblue" style="round" dropcap="1"]<strong>Cool Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="frenchgreen" style="round" dropcap="1"]<strong>French Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="limegreen" style="round" dropcap="1"]<strong>Lime Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="pink" style="round" dropcap="1"]<strong>Pink
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="royalblue" style="round" dropcap="1"]<strong>Royal Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="skyblue" style="round" dropcap="1"]<strong>Sky Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="tealgrey" style="round" dropcap="1"]<strong>Teal Grey
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="vistablue" style="round" dropcap="1"]<strong>Vista Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][vc_column width="1/3"][karma_builder_dropcap color="black" style="round" dropcap="1"]<strong>Black</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="cherry" style="round" dropcap="1"]<strong>Cherry</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="fire" style="round" dropcap="1"]<strong>Fire</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="golden" style="round" dropcap="1"]<strong>Golden
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="orange" style="round" dropcap="1"]<strong>Orange
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="politicalblue" style="round" dropcap="1"]<strong>Political Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="saffronblue" style="round" dropcap="1"]<strong>Saffron Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="steelgreen" style="round" dropcap="1"]<strong>Steel Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="tufgreen" style="round" dropcap="1"]<strong>Tuf Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="yogigreen" style="round" dropcap="1"]<strong>Yogi Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][heading_horizontal type="h5" margin_top="20px" margin_bottom="20px"]Dropcap - Square[/heading_horizontal][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/3"][karma_builder_dropcap color="alphagreen" style="square" dropcap="1"]<strong>Alpha Green</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="bluegrey" style="square" dropcap="1"]<strong>Blue Grey</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="coffee" style="square" dropcap="1"]<strong>Coffee
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="forestgreen" style="square" dropcap="1"]<strong>Forest Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="grey" style="square" dropcap="1"]<strong>Grey
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="periwinkle" style="square" dropcap="1"]<strong>Periwinkle
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="purple" style="square" dropcap="1"]<strong>Purple
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="silver" style="square" dropcap="1"]<strong>Silver
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="teal" style="square" dropcap="1"]<strong>Teal
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="violet" style="square" dropcap="1"]<strong>Violet
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][vc_column width="1/3"][karma_builder_dropcap color="autumn" style="square" dropcap="1"]<strong>Autumn</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="buoyred" style="square" dropcap="1"]<strong>Buoy Red</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="coolblue" style="square" dropcap="1"]<strong>Cool Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="frenchgreen" style="square" dropcap="1"]<strong>French Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="limegreen" style="square" dropcap="1"]<strong>Lime Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="pink" style="square" dropcap="1"]<strong>Pink
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="royalblue" style="square" dropcap="1"]<strong>Royal Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="skyblue" style="square" dropcap="1"]<strong>Sky Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="tealgrey" style="square" dropcap="1"]<strong>Teal Grey
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="vistablue" style="square" dropcap="1"]<strong>Vista Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][vc_column width="1/3"][karma_builder_dropcap color="black" style="square" dropcap="1"]<strong>Black</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="cherry" style="square" dropcap="1"]<strong>Cherry</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="fire" style="square" dropcap="1"]<strong>Fire</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="golden" style="square" dropcap="1"]<strong>Golden</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="orange" style="square" dropcap="1"]<strong>Orange</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="politicalblue" style="square" dropcap="1"]<strong>Political Blue</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="saffronblue" style="square" dropcap="1"]<strong>Saffron Blue</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="steelgreen" style="square" dropcap="1"]<strong>Steel Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="tufgreen" style="square" dropcap="1"]<strong>Tuf Green</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="yogigreen" style="square" dropcap="1"]<strong>Yogi Green</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][heading_horizontal type="h5" margin_top="20px" margin_bottom="20px"]Dropcap - Text[/heading_horizontal][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/3"][karma_builder_dropcap color="alphagreen" style="text" dropcap="1"]<strong>Alpha Green</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="bluegrey" style="text" dropcap="1"]<strong>Blue Grey</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="coffee" style="text" dropcap="1"]<strong>Coffee
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="forestgreen" style="text" dropcap="1"]<strong>Forest Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="grey" style="text" dropcap="1"]<strong>Grey
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="periwinkle" style="text" dropcap="1"]<strong>Periwinkle
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="purple" style="text" dropcap="1"]<strong>Purple
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="silver" style="text" dropcap="1"]<strong>Silver
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="teal" style="text" dropcap="1"]<strong>Teal
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="violet" style="text" dropcap="1"]<strong>Violet
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][vc_column width="1/3"][karma_builder_dropcap color="autumn" style="text" dropcap="1"]<strong>Autumn</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="buoyred" style="text" dropcap="1"]<strong>Buoy Red</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="coolblue" style="text" dropcap="1"]<strong>Cool Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="frenchgreen" style="text" dropcap="1"]<strong>French Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="limegreen" style="text" dropcap="1"]<strong>Lime Green
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="pink" style="text" dropcap="1"]<strong>Pink
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="royalblue" style="text" dropcap="1"]<strong>Royal Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="skyblue" style="text" dropcap="1"]<strong>Sky Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="tealgrey" style="text" dropcap="1"]<strong>Teal Grey
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="vistablue" style="text" dropcap="1"]<strong>Vista Blue
</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][vc_column width="1/3"][karma_builder_dropcap color="black" style="text" dropcap="1"]<strong>Black</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="cherry" style="text" dropcap="1"]<strong>Cherry</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="fire" style="text" dropcap="1"]<strong>Fire</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="golden" style="text" dropcap="1"]<strong>Golden</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="orange" style="text" dropcap="1"]<strong>Orange</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="politicalblue" style="text" dropcap="1"]<strong>Political Blue</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="saffronblue" style="text" dropcap="1"]<strong>Saffron Blue</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="steelgreen" style="text" dropcap="1"]<strong>Steel Green</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="tufgreen" style="text" dropcap="1"]<strong>Tuf Green</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][karma_builder_dropcap color="yogigreen" style="text" dropcap="1"]<strong>Yogi Green</strong>

Lorem ipsum dolor sit amet.[/karma_builder_dropcap][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1010['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1010= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['dropcaps'] = tt_create_pages($page_data1010,$page_post_meta1010);	


//Icon Boxes
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1011 = array(
  		'post_title'    => 'Icon Boxes',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Icon Boxes" sub_heading_text="Vector Icon boxes that are Fully Scalable and Easily Linkable." heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][tt_vector_box icon="fa-file-text-o" size="fa-4x" color="#B83435" icon_bg_color="#b83435" custom_css_class="box-pdf" type="fontawesome" icon_fontawesome="fa fa-file-text-o" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_size="fa-3x" box_bg_color="#ffffff" icon_color="#ffffff"]
<h3>PDF Download</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula.[/tt_vector_box][/vc_column][vc_column width="1/2"][tt_vector_box icon="fa-clock-o " size="fa-4x" icon_bg_color="#86B946" custom_css_class="box-meeting"]
<h3>Meeting Times</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][/vc_row][vc_row][vc_column width="1/2"][tt_vector_box icon="fa-calendar" size="fa-4x" icon_bg_color="#7D60A9" custom_css_class="box-event"]
<h3>Event Calendar</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula.[/tt_vector_box][/vc_column][vc_column width="1/2"][tt_vector_box icon="fa-globe" size="fa-4x" icon_bg_color="#196588" custom_css_class="box-global"]
<h3>Global Impact</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Flexible and Clickable" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="40px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px" sub_heading_text="Easily link the boxes to your favorite URL or LightBox"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][tt_vector_box icon="fa-cube" size="fa-4x" icon_bg_color="#139496" custom_css_class="box-product" type="fontawesome" icon_fontawesome="fa fa-cube" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_size="fa-3x" box_bg_color="#ffffff" icon_color="#ffffff" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png"]
<h3>Products</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][vc_column width="1/3"][tt_vector_box icon="fa-check" size="fa-4x" icon_bg_color="#ef7b48" custom_css_class="box-service" type="fontawesome" icon_fontawesome="fa fa-check" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_size="fa-3x" box_bg_color="#ffffff" icon_color="#ffffff" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png"]
<h3>Services</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][vc_column width="1/3"][tt_vector_box icon="fa-wrench" size="fa-4x" icon_bg_color="#6e4d78" custom_css_class="box-support" type="fontawesome" icon_fontawesome="fa fa-wrench" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart" icon_size="fa-3x" box_bg_color="#ffffff" icon_color="#ffffff" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png"]
<h3>Support</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Endless Options..." heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="40px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][tt_vector_box icon="fa-twitter" size="fa-4x" icon_bg_color="#00ACED" custom_css_class="box-twitter"]
<h3>Twitter</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][vc_column width="1/3"][tt_vector_box icon="fa-facebook" size="fa-4x" icon_bg_color="#3B5998" custom_css_class="box-facebook"]
<h3>Facebook</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][vc_column width="1/3"][tt_vector_box icon="fa-pinterest" size="fa-4x" icon_bg_color="#CB2027" custom_css_class="box-pinterest"]
<h3>Pinterest</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][vc_column width="1/3"][tt_vector_box icon="fa-google-plus" size="fa-4x" icon_bg_color="#D14836" custom_css_class="box-google"]
<h3>Google+</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][vc_column width="1/3"][tt_vector_box icon="fa-rss" size="fa-4x" icon_bg_color="#FF8300" custom_css_class="box-rss"]
<h3>RSS</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][vc_column width="1/3"][tt_vector_box icon="fa-skype" size="fa-4x" icon_bg_color="#00AFF0" custom_css_class="box-skype"]
<h3>Skype</h3>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.[/tt_vector_box][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1011['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1011= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['icon-boxes'] = tt_create_pages($page_data1011,$page_post_meta1011);	


//Icon PNG
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1012 = array(
  		'post_title'    => 'Icon PNG',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Icon PNG" sub_heading_text="65 Professionally designed Icons" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="20px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_icon_png style="icon-alarm" url="#" target="_self" icon="icon-alarm"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-arrow-down-a" target="_self" icon="icon-arrow-down-a"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-arrow-down-b" target="_self" icon="icon-arrow-down-b"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-globe" target="_self" icon="icon-globe"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-checklist" target="_self" icon="icon-calculator"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-calculator" target="_self" icon="icon-checklist"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-checkmark" target="_self" icon="icon-checkmark"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-clock" target="_self" icon="icon-clock"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-contacts" target="_self" icon="icon-contacts"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-crate" target="_self" icon="icon-crate"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-database" target="_self" icon="icon-database"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-hdtv" target="_self" icon="icon-hdtv"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-heart" target="_self" icon="icon-heart"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-support" target="_self" icon="icon-support"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-history" target="_self" icon="icon-history"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-home" target="_self" icon="icon-home"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-network" target="_self" icon="icon-network"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-news" target="_self" icon="icon-news"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-notebook" target="_self" icon="icon-notebook"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-photos" target="_self" icon="icon-news"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-vcard" target="_self" icon="icon-vcard"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][/vc_column][vc_column width="1/3"][karma_builder_icon_png style="icon-bookmark" target="_self" icon="icon-history"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-cellphone" target="_self" icon="icon-cellphone"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-chart" target="_self" icon="icon-chart"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-chat" target="_self" icon="icon-chat"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-chat-2" target="_self" icon="icon-chat-2"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-calendar-day" target="_self" icon="icon-calendar-day"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-globe-upload" target="_self" icon="icon-globe-upload"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-drive" target="_self" icon="icon-drive"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-dvd" target="_self" icon="icon-dvd"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-email-send" target="_self" icon="icon-email-send"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-flag" target="_self" icon="icon-flag"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-info" target="_self" icon="icon-info"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-laptop" target="_self" icon="icon-laptop"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-light-on" target="_self" icon="icon-light-on"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-lock-closed" target="_self" icon="icon-lock-closed"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-magnify" target="_self" icon="icon-magnify"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-refresh" target="_self" icon="icon-refresh"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-rss" target="_self" icon="icon-rss"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-shield-blue" target="_self" icon="icon-shield-blue"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-shield-green" target="_self" icon="icon-shield-green"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-star" target="_self" icon="icon-star"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][/vc_column][vc_column width="1/3"][karma_builder_icon_png style="icon-calendar-month" target="_self" icon="icon-calendar-month"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-camera" target="_self" icon="icon-camera"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-cart-add" target="_self" icon="icon-cart-add"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-caution" target="_self" icon="icon-caution"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-arrow-up-a" target="_self" icon="icon-arrow-up-a"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-arrow-up-b" target="_self" icon="icon-arrow-up-b"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-games" target="_self" icon="icon-games"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-gear" target="_self" icon="icon-gear"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-globe-download" target="_self" icon="icon-globe-download"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-document-edit" target="_self" icon="icon-document-edit"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-clipboard" target="_self" icon="icon-clipboard"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-megaphone" target="_self" icon="icon-megaphone"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-money" target="_self" icon="icon-money"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-movie" target="_self" icon="icon-movie"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-mp3" target="_self" icon="icon-mp3"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-music" target="_self" icon="icon-music"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-smart-phone" target="_self" icon="icon-smart-phone"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-tools" target="_self" icon="icon-tools"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-user-group" target="_self" icon="icon-user-group"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-video-camera" target="_self" icon="icon-video-camera"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][karma_builder_icon_png style="icon-x" target="_self" icon="icon-x"]Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/karma_builder_icon_png][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1012['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1012= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['icon-png'] = tt_create_pages($page_data1012,$page_post_meta1012);		



//Icon + Text
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1013 = array(
  		'post_title'    => 'Icon + Text',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Icon + Text" sub_heading_text="Stunning vector icons with fully customizable colors" heading_color="#363636" sub_heading_color="#555555" margin_top="30px" margin_bottom="40px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][karma_builder_icon_content icon="fa-check" icon_color="#ffffff" icon_bg_color="#3b86c4" type="fontawesome" icon_fontawesome="fa fa-fire" icon_openiconic="vc-oi vc-oi-moon-inv" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Powerful</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-flag" icon_color="#ffffff" icon_bg_color="#3b86c4" type="fontawesome" icon_fontawesome="fa fa-check" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Flexible</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-paper-plane" icon_color="#ffffff" icon_bg_color="#3b86c4" type="fontawesome" icon_fontawesome="fa fa-twitter" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Dependable</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-cog" icon_color="#ffffff" icon_bg_color="#3b86c4" type="fontawesome" icon_fontawesome="fa fa-paper-plane" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Honest
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1434566233740{margin-top: 100px !important;padding-top: 130px !important;padding-bottom: 130px !important;background-color: #ffffff !important;}"][vc_column width="1/3"][karma_builder_icon_content icon="fa-fire" icon_color="#ffffff" icon_bg_color="#d14836" custom_css_class="icon-2" type="fontawesome" icon_fontawesome="fa fa-fire" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Lorem Ipsum
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue.[/karma_builder_icon_content][/vc_column][vc_column width="1/3"][karma_builder_icon_content icon="fa-bolt" icon_color="#ffffff" icon_bg_color="#d14836" custom_css_class="icon-2" type="fontawesome" icon_fontawesome="fa fa-leaf" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong><strong>Lorem Ipsum</strong></strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue.[/karma_builder_icon_content][/vc_column][vc_column width="1/3"][karma_builder_icon_content icon="fa-check" icon_color="#ffffff" icon_bg_color="#d14836" custom_css_class="icon-2" type="fontawesome" icon_fontawesome="fa fa-paper-plane" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong><strong>Lorem Ipsum</strong></strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue.[/karma_builder_icon_content][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Easily Stackable..." heading_color="#363636" sub_heading_color="#555555" margin_top="90px" margin_bottom="40px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][karma_builder_icon_content icon="fa-fire" icon_color="#ffffff" icon_bg_color="#86b946" custom_css_class="icon-3" type="fontawesome" icon_fontawesome="fa fa-cog" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Authentic
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-bolt" icon_color="#ffffff" icon_bg_color="#86b946" custom_css_class="icon-3" type="fontawesome" icon_fontawesome="fa fa-html5" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Flexible
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-check" icon_color="#ffffff" icon_bg_color="#86b946" custom_css_class="icon-3" type="fontawesome" icon_fontawesome="fa fa-check" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Proven
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-cube" icon_color="#ffffff" icon_bg_color="#86b946" custom_css_class="icon-3" type="fontawesome" icon_fontawesome="fa fa-bolt" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Dependable
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][/vc_row][vc_row][vc_column width="1/4"][karma_builder_icon_content icon="fa-shield" icon_color="#ffffff" icon_bg_color="#86b946" custom_css_class="icon-3" type="fontawesome" icon_fontawesome="fa fa-paper-plane" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Premium
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-paper-plane" icon_color="#ffffff" icon_bg_color="#86b946" custom_css_class="icon-3" type="fontawesome" icon_fontawesome="fa fa-flag-o" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Value
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-flag" icon_color="#ffffff" icon_bg_color="#86b946" custom_css_class="icon-3" type="fontawesome" icon_fontawesome="fa fa-apple" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Guaranteed
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][vc_column width="1/4"][karma_builder_icon_content icon="fa-lock" icon_color="#ffffff" icon_bg_color="#86b946" custom_css_class="icon-3" type="fontawesome" icon_fontawesome="fa fa-leaf" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]<strong>Awesome
</strong>

Lorem ipsum dolor sit amet. Nullam quis risus eget urna mollis ornare vel eu leo.[/karma_builder_icon_content][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1013['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1013 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['icon-text'] = tt_create_pages($page_data1013,$page_post_meta1013);	
	

//Image Box - round
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1014 = array(
  		'post_title'    => 'Image Box - round',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Image Box - round" sub_heading_text="Stunning image boxes that are fully responsive and super easy to customize" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-video-camera" box_bg_color="#ffffff" icon_bg_color="#e08121" icon_color="#ffffff" link_color="#e08121" attachment_id="697" custom_css_class="box-1" url="|title:Orbit%20by%20TrueThemes|"]
<h2>Explore</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-camera" box_bg_color="#ffffff" icon_bg_color="#86b946" icon_color="#ffffff" link_color="#86b946" attachment_id="698" custom_css_class="box-2" url="||"]
<h2>Discover</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-play" box_bg_color="#ffffff" icon_bg_color="#5599d1" icon_color="#ffffff" link_color="#5599d1" attachment_id="699" custom_css_class="box-3" url="||"]
<h2>Imagine</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_2][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Vector Icons" sub_heading_text="Choose from nearly 1,000 vector icons and customize the colors with ease" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-leaf" box_bg_color="#ffffff" icon_bg_color="#7cae7b" icon_color="#ffffff" link_color="#7cae7b" attachment_id="700" custom_css_class="box-4" url="url:%23|title:Orbit%20by%20TrueThemes|" link_text="Click to learn more"]
<h2>Prosper</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis dolor.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-lightbulb-o" box_bg_color="#ffffff" icon_bg_color="#7e98b1" icon_color="#ffffff" link_color="#7e98b1" attachment_id="701" custom_css_class="box-5" url="url:%23|title:Orbit%20by%20TrueThemes|" link_text="Click to learn more"]
<h2>Create</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis dolor.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-futbol-o" box_bg_color="#ffffff" icon_bg_color="#8e352f" icon_color="#ffffff" link_color="#8e352f" attachment_id="702" custom_css_class="box-6" url="url:%23|title:Orbit%20by%20TrueThemes|" link_text="Click to learn more"]
<h2>Sparkle</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis dolor.[/karma_builder_imagebox_2][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Flexible" sub_heading_text="Built on bootstrap with a fully responsive design. Choose between 1 and 5 columns" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][karma_builder_imagebox_2 icon="fa-leaf" box_bg_color="#ffffff" icon_bg_color="#5998af" icon_color="#ffffff" link_color="#ff937c" attachment_id="703" custom_css_class="box-7" url="||"]
<h2>Innovate</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis dolor. Duis mollis, est non commodo luctus nisi.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/2"][karma_builder_imagebox_2 icon="fa-lightbulb-o" box_bg_color="#ffffff" icon_bg_color="#6b7f6a" icon_color="#ffffff" link_color="#7d6874" attachment_id="704" custom_css_class="box-8" url="||"]
<h2>Collaborate</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis dolor. Duis mollis, est non commodo luctus nisi.[/karma_builder_imagebox_2][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Linkable..." sub_heading_text="All Boxes are easily linkable to a lightbox or URL" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][karma_builder_imagebox_2 icon="fa-leaf" box_bg_color="#ffffff" icon_bg_color="#5998af" icon_color="#ffffff" link_color="#ff937c" attachment_id="703" custom_css_class="box-7" url="||" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png" lightbox_description="Karma - Premium WordPress Theme by TrueThemes"]
<h2>Lightbox</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet consectetur.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/4"][karma_builder_imagebox_2 icon="fa-video-camera" box_bg_color="#ffffff" icon_bg_color="#e08121" icon_color="#ffffff" link_color="#e08121" attachment_id="697" custom_css_class="box-1" url="|title:Orbit%20by%20TrueThemes|" lightbox_description="Karma - Premium WordPress Theme by TrueThemes" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png"]
<h2>Lightbox</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet consectetur.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/4"][karma_builder_imagebox_2 icon="fa-camera" box_bg_color="#ffffff" icon_bg_color="#86b946" icon_color="#ffffff" link_color="#86b946" attachment_id="698" custom_css_class="box-2" url="||" lightbox_description="Karma - Premium WordPress Theme by TrueThemes" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png"]
<h2>Lightbox</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet consectetur.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/4"][karma_builder_imagebox_2 icon="fa-play" box_bg_color="#ffffff" icon_bg_color="#5599d1" icon_color="#ffffff" link_color="#5599d1" attachment_id="699" custom_css_class="box-3" url="||" lightbox_description="Karma - Premium WordPress Theme by TrueThemes" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png"]
<h2>Lightbox</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet consectetur.[/karma_builder_imagebox_2][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Minimal" sub_heading_text="Super clean image-free minimal style :)" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-video-camera" box_bg_color="#ffffff" icon_bg_color="#e08121" icon_color="#ffffff" link_color="#e08121" custom_css_class="box-1" url="url:%23|title:Orbit%20by%20TrueThemes|" link_text="Lorem ipsum dolor"]
<h2>Explore</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-camera" box_bg_color="#ffffff" icon_bg_color="#86b946" icon_color="#ffffff" link_color="#86b946" custom_css_class="box-2" url="url:%23||" link_text="Lorem ipsum dolor"]
<h2>Discover</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_2][/vc_column][vc_column width="1/3"][karma_builder_imagebox_2 icon="fa-play" box_bg_color="#ffffff" icon_bg_color="#5599d1" icon_color="#ffffff" link_color="#5599d1" custom_css_class="box-3" url="url:%23||" link_text="Lorem ipsum dolor"]
<h2>Imagine</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_2][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1014['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1014= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['image-box-round'] = tt_create_pages($page_data1014,$page_post_meta1014);	


//Image Box - square
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1015 = array(
  		'post_title'    => 'Image Box - square',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Image Box - square" sub_heading_text="Stunning image boxes that are fully responsive and super easy to customize" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Refresh" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#86b946" main_title_color="#86b946" attachment_id="685" custom_css_class="box-2"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Discover" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#ab5047" main_title_color="#ab5047" attachment_id="686" custom_css_class="box-3"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Explore" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#784d80" main_title_color="#784d80" attachment_id="687" custom_css_class="box-5"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Flexible" sub_heading_text="Built on bootstrap with a fully responsive design. Choose between 1 and 5 columns" heading_color="#363636" sub_heading_color="#555555" margin_top="120px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][karma_builder_imagebox_1 main_title="Refresh" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#86b946" main_title_color="#86b946" attachment_id="688" custom_css_class="box-2"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/2"][karma_builder_imagebox_1 main_title="Discover" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#ab5047" main_title_color="#ab5047" attachment_id="689" custom_css_class="box-3"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="4 Columns" sub_heading_text="Here\'s just a sample of a four column layout" heading_color="#363636" sub_heading_color="#555555" margin_top="120px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][karma_builder_imagebox_1 main_title="Refresh" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="6px" img_border_color="#dba80f" main_title_color="#dba80f" attachment_id="693" custom_css_class="box-9"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis natoque ipsum dolor.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/4"][karma_builder_imagebox_1 main_title="Believe" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="6px" img_border_color="#9ab23b" main_title_color="#9ab23b" attachment_id="694" custom_css_class="box-10"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis natoque ipsum dolor.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/4"][karma_builder_imagebox_1 main_title="Imagine" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="6px" img_border_color="#8c6eac" main_title_color="#8c6eac" attachment_id="695" custom_css_class="box-11"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis natoque ipsum dolor.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/4"][karma_builder_imagebox_1 main_title="Prosper" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="6px" img_border_color="#5998af" main_title_color="#5998af" attachment_id="696" custom_css_class="box-12"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit cum sociis natoque ipsum dolor.[/karma_builder_imagebox_1][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Linkable..." sub_heading_text="All Boxes are easily linkable to a lightbox or URL" heading_color="#363636" sub_heading_color="#555555" margin_top="120px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Lightbox" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#86b946" main_title_color="#86b946" attachment_id="690" custom_css_class="box-2" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png" lightbox_description="Karma - Premium WordPress Theme by TrueThemes"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Lightbox" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#a5bace" main_title_color="#a5bace" attachment_id="691" custom_css_class="box-sc" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png" lightbox_description="Karma - Premium WordPress Theme by TrueThemes"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Lightbox" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#784d80" main_title_color="#784d80" attachment_id="692" custom_css_class="box-5" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png" lightbox_description=" Karma - Premium WordPress Theme by TrueThemes"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Minimal" sub_heading_text="Super clean image-free minimal style :)" heading_color="#363636" sub_heading_color="#555555" margin_top="120px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Refresh" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#86b946" main_title_color="#86b946" custom_css_class="box-2" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png" lightbox_description="Karma - Premium WordPress Theme by TrueThemes"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Discover" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#a5bace" main_title_color="#a5bace" custom_css_class="box-sc" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png" lightbox_description="Karma - Premium WordPress Theme by TrueThemes"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][vc_column width="1/3"][karma_builder_imagebox_1 main_title="Explore" sub_title="Sub Title" box_bg_color="#ffffff" img_border_width="8px" img_border_color="#784d80" main_title_color="#784d80" custom_css_class="box-5" lightbox_content="http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-premium-wordpress-lightbox.png" lightbox_description=" Karma - Premium WordPress Theme by TrueThemes"]Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.[/karma_builder_imagebox_1][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1015['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1015= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['image-box-square'] = tt_create_pages($page_data1015,$page_post_meta1015);	

//Latest Blog Posts
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1016 = array(
  		'post_title'    => 'Latest Blog Posts',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[heading_horizontal type="h6" margin_top="20px" margin_bottom="50px"]Small Thumbs[/heading_horizontal]

[one_half]

[blog_posts count="3" post_category="" title="" link_text="Read More" character_count="115" layout="default"]

[/one_half]

[one_half_last]

[blog_posts count="3" post_category="" title="" link_text="Read More" character_count="115" layout="default"]

[/one_half_last]

[heading_horizontal type="h6" margin_top="50px" margin_bottom="50px"]Modern - 2 column[/heading_horizontal]

[blog_posts count="2" post_category="" title="" link_text="Read More" character_count="115" layout="two_col_large" style="modern"]

[heading_horizontal type="h6" margin_top="50px" margin_bottom="50px"]Modern - 3 column[/heading_horizontal]

[blog_posts count="3" post_category="" title="" link_text="Read More" character_count="115" layout="three_col_large" style="modern"]

[heading_horizontal type="h6" margin_top="50px" margin_bottom="50px"]Modern - 4 column[/heading_horizontal]

[blog_posts count="4" post_category="" title="" link_text="Read More" character_count="115" layout="four_col_large" style="modern"]

[heading_horizontal type="h6" margin_top="50px" margin_bottom="50px"]Shadow - 2 column[/heading_horizontal]

[blog_posts count="2" post_category="" title="" link_text="Read More" character_count="115" layout="two_col_large" style="shadow"]

[heading_horizontal type="h6" margin_top="50px" margin_bottom="50px"]Shadow - 3 column[/heading_horizontal]

[blog_posts count="3" post_category="" title="" link_text="Read More" character_count="115" layout="three_col_large" style="shadow"]

[heading_horizontal type="h6" margin_top="50px" margin_bottom="50px"]Shadow - 4 column[/heading_horizontal]

[blog_posts count="4" post_category="" title="" link_text="Read More" character_count="115" layout="four_col_large" style="shadow"]
',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1016['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1016= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['latest-blog-posts'] = tt_create_pages($page_data1016,$page_post_meta1016);	

//Lists
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1017 = array(
  		'post_title'    => 'Lists',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Lists" sub_heading_text="5 Icon Libraries. Nearly 1,000 icons. Easily customizable" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/2"][vc_column_text]
<h3 style="text-align: center;"><strong>FontAwesome</strong></h3>
[/vc_column_text][karma_list][karma_list_item type="fontawesome" icon_fontawesome="fa fa-check-circle" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-check" icon_linecons="vc_li vc_li-heart" custom_color="#669900"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][karma_list_item type="fontawesome" icon_fontawesome="fa fa-check-circle" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-check" icon_linecons="vc_li vc_li-heart" custom_color="#669900"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][/karma_list][/vc_column][vc_column width="1/2"][vc_column_text]
<h3 style="text-align: center;"><strong>Entypo</strong></h3>
[/vc_column_text][karma_list][karma_list_item type="entypo" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-plus-circled" icon_linecons="vc_li vc_li-heart" custom_color="#5599d1"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][karma_list_item type="entypo" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-plus-circled" icon_linecons="vc_li vc_li-heart" custom_color="#5599d1"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][/karma_list][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/2"][vc_column_text]
<h3 style="text-align: center;"><strong>Open Iconic
</strong></h3>
[/vc_column_text][karma_list][karma_list_item type="openiconic" icon_fontawesome="fa fa-check-circle" icon_openiconic="vc-oi vc-oi-right" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-check" icon_linecons="vc_li vc_li-heart" custom_color="#e08121"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][karma_list_item type="openiconic" icon_fontawesome="fa fa-check-circle" icon_openiconic="vc-oi vc-oi-right" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-check" icon_linecons="vc_li vc_li-heart" custom_color="#e08121"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][/karma_list][/vc_column][vc_column width="1/2"][vc_column_text]
<h3 style="text-align: center;"><strong>Typicons</strong></h3>
[/vc_column_text][karma_list][karma_list_item type="typicons" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-check" icon_linecons="vc_li vc_li-heart" custom_color="#8c6eac"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][karma_list_item type="typicons" icon_fontawesome="fa fa-adjust" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-check" icon_linecons="vc_li vc_li-heart" custom_color="#8c6eac"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][/karma_list][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/2"][vc_column_text]
<h3 style="text-align: center;"><strong>Linecons
</strong></h3>
[/vc_column_text][karma_list][karma_list_item type="linecons" icon_fontawesome="fa fa-check-circle" icon_openiconic="vc-oi vc-oi-right" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-check" icon_linecons="vc_li vc_li-star" custom_color="#669900"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][karma_list_item type="linecons" icon_fontawesome="fa fa-check-circle" icon_openiconic="vc-oi vc-oi-right" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-check" icon_linecons="vc_li vc_li-star" custom_color="#669900"]Lorem ipsum dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur.[/karma_list_item][/karma_list][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1017['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1017= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['lists'] = tt_create_pages($page_data1017,$page_post_meta1017);	

//Number Counters
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1018 = array(
  		'post_title'    => 'Number Counters',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Counters" sub_heading_text="A unique way to display your company\'s stats" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="35px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][karma_builder_number_counter number="160" divider_height="4px" title="Employees" number_color="#000000" divider_color="#e1e1e1" title_color="#000000"][/vc_column][vc_column width="1/4"][karma_builder_number_counter number="75" divider_height="4px" title="Clients" number_color="#000000" divider_color="#e1e1e1" title_color="#000000"][/vc_column][vc_column width="1/4"][karma_builder_number_counter number="100" divider_height="4px" title="Satisfaction" number_color="#000000" divider_color="#e1e1e1" title_color="#000000"][/vc_column][vc_column width="1/4"][karma_builder_number_counter number="96" divider_height="4px" title="Products" number_color="#000000" divider_color="#e1e1e1" title_color="#000000"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1434566619223{padding-top: 130px !important;padding-bottom: 130px !important;background-color: #ffffff !important;}"][vc_column width="1/4"][karma_builder_number_counter number="205" divider_height="2px" title="Lorem Ipsum" number_color="#555555" divider_color="#e1e1e1" title_color="#86b946" custom_css_class="number-2"][/vc_column][vc_column width="1/4"][karma_builder_number_counter number="57" divider_height="2px" title="Lorem Ipsum" number_color="#555555" divider_color="#e1e1e1" title_color="#86b946" custom_css_class="number-2"][/vc_column][vc_column width="1/4"][karma_builder_number_counter number="90" divider_height="2px" title="Lorem Ipsum" number_color="#555555" divider_color="#e1e1e1" title_color="#86b946" custom_css_class="number-2"][/vc_column][vc_column width="1/4"][karma_builder_number_counter number="25" divider_height="2px" title="Lorem Ipsum" number_color="#555555" divider_color="#e1e1e1" title_color="#86b946" custom_css_class="number-2"][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1018['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1018 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['number-counters'] = tt_create_pages($page_data1018,$page_post_meta1018);	
	
	
//Pricing Boxes
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1019 = array(
  		'post_title'    => 'Pricing Boxes',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Pricing Boxes" sub_heading_text="Pricing Boxes come in 2 design styles, 30 color variations, and 1-5 columns" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/3"][karma_builder_pricing_box style="style-1" color="politicalblue" button_color="politicalblue" price="29" currency="$" plan="Basic" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/3"][karma_builder_pricing_box style="style-1" color="orange" button_color="orange" price="39" currency="$" plan="Pro" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/3"][karma_builder_pricing_box style="style-1" color="politicalblue" price="49" currency="$" plan="Premium" term="per month" button_label="Sign Up" button_color="politicalblue" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Flexible" sub_heading_text="Spans perfectly inside all Visual Composer columns" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/4"][karma_builder_pricing_box style="style-1" color="politicalblue" button_color="politicalblue" price="29" currency="$" plan="Basic" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/4"][karma_builder_pricing_box style="style-1" color="orange" button_color="orange" price="39" currency="$" plan="Pro" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/4"][karma_builder_pricing_box style="style-1" color="politicalblue" button_color="politicalblue" price="49" currency="$" plan="Premium" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/4"][karma_builder_pricing_box style="style-1" color="politicalblue" button_color="politicalblue" price="59" currency="$" plan="Super" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Colors" sub_heading_text="Pricing Boxes available in all 30 Color Schemes. Buttons customizable too" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1433194927543{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #dddddd !important;}"][vc_column width="1/3"][karma_builder_pricing_box style="style-1" color="grey" button_color="grey" price="29" currency="$" plan="Basic" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/3"][karma_builder_pricing_box style="style-1" color="buoyred" button_color="buoyred" price="39" currency="$" plan="Pro" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/3"][karma_builder_pricing_box style="style-1" color="grey" button_color="grey" price="49" currency="$" plan="Premium" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Style 2" sub_heading_text="Same amazing options, slightly different layout" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/3"][karma_builder_pricing_box style="style-2" color="politicalblue" button_color="politicalblue" price="29" currency="$" plan="Basic" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/3"][karma_builder_pricing_box style="style-2" color="orange" button_color="orange" price="39" currency="$" plan="Pro" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][vc_column width="1/3"][karma_builder_pricing_box style="style-2" color="politicalblue" button_color="politicalblue" price="49" currency="$" plan="Premium" term="per month" button_label="Sign Up" button_size="medium"]
<ul>
	<li><strong>Full</strong> Email Support</li>
	<li><strong>25GB</strong> of Storage</li>
	<li><strong>5</strong> Domains</li>
	<li><strong>10</strong> Email Addresses</li>
</ul>
[/karma_builder_pricing_box][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1019['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1019 = array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['pricing-boxes'] = tt_create_pages($page_data1019,$page_post_meta1019);		


//Progress Bars
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1020 = array(
  		'post_title'    => 'Progress Bars',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Progress Bars" sub_heading_text="Fully flexbile, custom colors, endless opportunities" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row css=".vc_custom_1433265765424{padding-bottom: 70px !important;}"][vc_column width="1/1"][karma_builder_progress_bar title="Thailand" number="50" symbol="$" track_color="#e1e1e1" bar_color="#11495f" title_color="#000000" number_color="#000000" custom_css_class="bar1" rounded_progress="" progress_height="20px"][karma_builder_progress_bar title="Africa" number="40" symbol="$" track_color="#e1e1e1" bar_color="#3c8fb7" title_color="#000000" number_color="#000000" custom_css_class="bar2" progress_height="20px" rounded_progress=""][karma_builder_progress_bar title="India" number="70" symbol="$" track_color="#e1e1e1" bar_color="#99ccd4" title_color="#000000" number_color="#000000" custom_css_class="bar3" progress_height="20px" rounded_progress=""][karma_builder_progress_bar title="Philippines" number="40" symbol="$" track_color="#e1e1e1" bar_color="#f5ac40" title_color="#000000" number_color="#000000" custom_css_class="bar4" progress_height="20px" rounded_progress=""][karma_builder_progress_bar title="USA" number="90" symbol="$" track_color="#e1e1e1" bar_color="#db7f3c" title_color="#000000" number_color="#000000" custom_css_class="bar5" progress_height="20px" rounded_progress=""][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1433265658026{padding-top: 110px !important;padding-bottom: 130px !important;background-color: #ffffff !important;}"][vc_column width="1/1"][karma_builder_heading heading_text="Customize" sub_heading_text="Easily define custom height and colors" heading_color="#363636" sub_heading_color="#555555" margin_top="0px" margin_bottom="60px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][karma_builder_progress_bar title="Development" number="60" symbol="%" progress_height="6px" rounded_progress="" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1"][karma_builder_progress_bar title="Branding" number="40" symbol="%" progress_height="6px" rounded_progress="" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1"][karma_builder_progress_bar title="Marketing" number="78" symbol="%" progress_height="6px" rounded_progress="" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1"][karma_builder_progress_bar title="Photography" number="92" symbol="%" progress_height="6px" rounded_progress="" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1"][/vc_column][/vc_row][vc_row][vc_column][karma_builder_heading heading_text="Rounded" sub_heading_text="Rounded style bars with a click of the mouse" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_progress_bar title="Photoshop" number="70" symbol="%" track_color="#e1e1e1" bar_color="#0076bc" title_color="#000000" number_color="#000000" custom_css_class="bar6" progress_height="15px" rounded_progress="true-progress-rounded"][karma_builder_progress_bar title="Fireworks" number="90" symbol="%" track_color="#e1e1e1" bar_color="#dcad39" title_color="#000000" number_color="#000000" custom_css_class="bar7" progress_height="15px" rounded_progress="true-progress-rounded"][karma_builder_progress_bar title="InDesign" number="60" symbol="%" track_color="#e1e1e1" bar_color="#ba4c7c" title_color="#000000" number_color="#000000" custom_css_class="bar8" progress_height="15px" rounded_progress="true-progress-rounded"][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1020['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1020= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['progress-bars'] = tt_create_pages($page_data1020,$page_post_meta1020);		
	
	
//Progress Bars (verical)
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1021 = array(
  		'post_title'    => 'Progress Bars (vertical)',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Progress Bars" sub_heading_text="Fully flexbile, custom colors, endless opportunities" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="45" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="74" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="52" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="45" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="86" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="92" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Flexible" sub_heading_text="Completely Flexible width" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/4"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="45" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][vc_column width="1/4"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="74" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][vc_column width="1/4"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="52" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][vc_column width="1/4"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="45" symbol="%" title_color="#000000" number_color="#000000" bar_color="#86b946" track_color="#e1e1e1" custom_css_class="bar-green"][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Customize" sub_heading_text="Endless customization options" heading_color="#363636" sub_heading_color="#555555" margin_top="110px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="50" symbol="%" title_color="#000000" number_color="#000000" bar_color="#a2dce2" track_color="#e1e1e1"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="65" symbol="%" title_color="#000000" number_color="#000000" bar_color="#a2dce2" track_color="#e1e1e1"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="46" symbol="%" title_color="#000000" number_color="#000000" bar_color="#a2dce2" track_color="#e1e1e1"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="77" symbol="%" title_color="#000000" number_color="#000000" bar_color="#a2dce2" track_color="#e1e1e1"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="60" symbol="%" title_color="#000000" number_color="#000000" bar_color="#a2dce2" track_color="#e1e1e1"][/vc_column][vc_column width="1/6"][karma_builder_progress_bar_vertical title="Lorem Ipsum" number="85" symbol="%" title_color="#000000" number_color="#000000" bar_color="#a2dce2" track_color="#e1e1e1"][/vc_column][/vc_row]]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1021['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1021= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['progress-bars-vertical'] = tt_create_pages($page_data1021,$page_post_meta1021);		
	


//Social Icons
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1022 = array(
  		'post_title'    => 'Social Icons',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][heading_horizontal type="h6" margin_top="20px" margin_bottom="40px"]Vector + Title[/heading_horizontal][social style="vector" show_title="true" target="_self" rss="http://localhost.local/Karma/feed/rss/" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="Youtube" linkedin_title="Linkedin" pinterest_title="Pinterest" instagram_title="Instagram" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype" twitter="#" facebook="#" email="#" flickr="#" youtube="#" linkedin="#" pinterest="#" instagram="#" foursquare="#" delicious="#" digg="#" google="#" dribbble="#" skype="#"][heading_horizontal type="h6" margin_top="65px" margin_bottom="40px"]Vector + No Title[/heading_horizontal][social style="vector" show_title="false" target="_self" rss="http://localhost.local/Karma/feed/rss/" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="Youtube" linkedin_title="Linkedin" pinterest_title="Pinterest" instagram_title="Instagram" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype" twitter="#" facebook="#" email="#" flickr="#" youtube="#" linkedin="#" pinterest="#" instagram="#" foursquare="#" delicious="#" digg="#" google="#" dribbble="#" skype="#"][heading_horizontal type="h6" margin_top="65px" margin_bottom="40px"]Vector Color + Title[/heading_horizontal][social style="vector_color" show_title="true" target="_self" rss="http://localhost.local/Karma/feed/rss/" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="Youtube" linkedin_title="Linkedin" pinterest_title="Pinterest" instagram_title="Instagram" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype" twitter="#" facebook="#" email="#" flickr="#" youtube="#" linkedin="#" pinterest="#" instagram="#" foursquare="#" delicious="#" digg="#" google="#" dribbble="#" skype="#"][heading_horizontal type="h6" margin_top="65px" margin_bottom="40px"]Vector Color + No Title[/heading_horizontal][social style="vector_color" show_title="false" target="_self" rss="http://localhost.local/Karma/feed/rss/" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="Youtube" linkedin_title="Linkedin" pinterest_title="Pinterest" instagram_title="Instagram" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype" twitter="#" facebook="#" email="#" flickr="#" youtube="#" linkedin="#" pinterest="#" instagram="#" foursquare="#" delicious="#" digg="#" google="#" dribbble="#" skype="#"][heading_horizontal type="h6" margin_top="65px" margin_bottom="40px"]PNG Images[/heading_horizontal][social style="image" show_title="false" target="_self" rss="http://localhost.local/Karma/feed/rss/" rss_title="RSS" twitter_title="Twitter" facebook_title="Facebook" email_title="Email" flickr_title="Flickr" youtube_title="Youtube" linkedin_title="Linkedin" pinterest_title="Pinterest" instagram_title="Instagram" foursquare_title="FourSquare" delicious_title="Delicious" digg_title="Digg" google_title="Google +" dribbble_title="Dribbble" skype_title="Skype" twitter="#" facebook="#" email="#" flickr="#" youtube="#" linkedin="#" pinterest="#" instagram="#" foursquare="#" delicious="#" digg="#" google="#" dribbble="#" skype="#"][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1022['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1022= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['social-icons'] = tt_create_pages($page_data1022,$page_post_meta1022);		
	

//Tabs (4 styles)
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1023 = array(
  		'post_title'    => 'Tabs (4 styles)',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_heading heading_text="Tabs 1" sub_heading_text="30 color schemes. 5 Vector font-libraries. Unlimited possibilities" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][karma_builder_tab_1 color_scheme="politicalblue"][karma_builder_tab_1_content tab_active="yes" nav_tab_title="Karma Wordpress" type="fontawesome" icon_fontawesome="fa fa-star" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]
<h2>Heading</h2>
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.[/karma_builder_tab_1_content][karma_builder_tab_1_content tab_active="no" nav_tab_title="Amazing Theme" type="fontawesome" icon_fontawesome="fa fa-fire" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-adjust-brightness" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]
<h2>Heading 2</h2>
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.[/karma_builder_tab_1_content][/karma_builder_tab_1][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][gap size="50px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_tab_1 color_scheme="orange"][karma_builder_tab_1_content tab_active="no" nav_tab_title="Products" type="typicons" icon_fontawesome="fa fa-star" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-lightbulb" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]
<h2>Products</h2>
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.[/karma_builder_tab_1_content][karma_builder_tab_1_content tab_active="yes" nav_tab_title="Services" type="typicons" icon_fontawesome="fa fa-fire" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-tick-outline" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]
<h2>Services</h2>
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.[/karma_builder_tab_1_content][karma_builder_tab_1_content tab_active="no" nav_tab_title="Solutions" type="typicons" icon_fontawesome="fa fa-fire" icon_openiconic="vc-oi vc-oi-dial" icon_typicons="typcn typcn-flash" icon_entypo="entypo-icon entypo-icon-note" icon_linecons="vc_li vc_li-heart"]
<h2>Solutions</h2>
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.[/karma_builder_tab_1_content][/karma_builder_tab_1][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1433278235774{padding-top: 110px !important;padding-bottom: 130px !important;background-color: #ffffff !important;}"][vc_column width="1/1"][karma_builder_heading heading_text="Tabs 2" sub_heading_text="Super Clean. Unlimited Tabs. Custom Link Color" heading_color="#363636" sub_heading_color="#555555" margin_top="10px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px" margin_bottom="110px"][karma_builder_tab_2 color_scheme="#fda41e"][karma_builder_tab_2_content tab_active="yes" nav_tab_title="Karma"]
<h2>Karma</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit.[/karma_builder_tab_2_content][karma_builder_tab_2_content tab_active="no" nav_tab_title="Wordpress"]
<h2>Wordpress</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit.[/karma_builder_tab_2_content][karma_builder_tab_2_content tab_active="no" nav_tab_title="Theme"]
<h2>Theme</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit.[/karma_builder_tab_2_content][karma_builder_tab_2_content tab_active="no" nav_tab_title="Perfect"]
<h2>Perfect</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit.[/karma_builder_tab_2_content][karma_builder_tab_2_content tab_active="no" nav_tab_title="Solution"]
<h2>Solution</h2>
Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit.[/karma_builder_tab_2_content][/karma_builder_tab_2][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Tabs 3" sub_heading_text="Vertical Tabs. Vector Icons. Custom Colors. Truly Sensational" heading_color="#363636" sub_heading_color="#555555" margin_top="60px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_tab_3 color_scheme="#009999"][karma_builder_tab_3_content tab_active="no" icon="fa-check" nav_tab_title="Easy to Customize"]
<h3>Lorem Ipsum</h3>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod.[/karma_builder_tab_3_content][karma_builder_tab_3_content tab_active="yes" icon="fa-mobile" nav_tab_title="Responsive Design"]
<h3>Lorem Ipsum</h3>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod.

Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum.[/karma_builder_tab_3_content][karma_builder_tab_3_content tab_active="no" icon="fa-html5" nav_tab_title="420 Vector Icons"]
<h3>Lorem Ipsum</h3>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
<ol>
	<li>Pharetra Cursus Dapibus</li>
	<li>Commodo Ipsum Pellentesque</li>
	<li>Dapibus Ultricies Porta</li>
</ol>
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/karma_builder_tab_3_content][karma_builder_tab_3_content tab_active="no" icon="fa-paper-plane" nav_tab_title="Stunning Design"]
<h3>Lorem Ipsum</h3>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
<h4>Malesuada Consectetur</h4>
Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.[/karma_builder_tab_3_content][/karma_builder_tab_3][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Tabs 4" sub_heading_text="Super clean tabs that perfectly match your theme" heading_color="#363636" sub_heading_color="#555555" margin_top="130px" margin_bottom="45px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/2"][tabset tab_labels="Karma, TrueThemes, Premium, Wordpress"][tab]Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/tab][tab]Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/tab][tab]Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/tab][tab]Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/tab][/tabset][/vc_column][vc_column width="1/2"][tabset tab_labels="Karma, TrueThemes, Premium, Wordpress"][tab]Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/tab][tab]Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/tab][tab]Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/tab][tab]Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.[/tab][/tabset][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1023['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1023= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['tabs-4-styles'] = tt_create_pages($page_data1023,$page_post_meta1023);	
	
	
	
//Testimonials 1
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1024 = array(
  		'post_title'    => 'Testimonials 1',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Testimonial Slider 1" sub_heading_text="Amazing testimonial slider, built on bootstrap, fully responsive and super easy to customize" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row css=".vc_custom_1433281103548{padding-right: 21% !important;padding-left: 21% !important;}"][vc_column width="1/1" el_class="orbit-col-testimonial-1"][karma_builder_testimonial_1 custom_css_class="slider-1"][karma_builder_testimonial_1_slide banner_image_attachment_id="711" client_headshot_image_attachment_id="712" client_name="Jerry Nice" testimonial_text="Karma is the most Amazing Theme!! lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][karma_builder_testimonial_1_slide client_headshot_image_attachment_id="706" client_name="Haroon Dal" testimonial_text="Karma Wordpress is super flexible! lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla." banner_image_attachment_id="705"][karma_builder_testimonial_1_slide banner_image_attachment_id="707" client_headshot_image_attachment_id="708" client_name="Adam Conly" testimonial_text="Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum."][karma_builder_testimonial_1_slide banner_image_attachment_id="709" client_headshot_image_attachment_id="710" client_name="Ian Cross" testimonial_text="Karma is hands-down the highest quality theme lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][/karma_builder_testimonial_1][/vc_column][/vc_row][vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Flexible" sub_heading_text="Fully responsive design makes this slider perfect for your website" heading_color="#363636" sub_heading_color="#555555" margin_top="115px" margin_bottom="35px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_testimonial_1 custom_css_class="slider-1"][karma_builder_testimonial_1_slide banner_image_attachment_id="707" client_headshot_image_attachment_id="708" client_name="Adam Conly" testimonial_text="Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum."][karma_builder_testimonial_1_slide client_headshot_image_attachment_id="706" client_name="Haroon Dal" testimonial_text="Karma Wordpress is super flexible! lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla." banner_image_attachment_id="705"][karma_builder_testimonial_1_slide banner_image_attachment_id="709" client_headshot_image_attachment_id="710" client_name="Ian Cross" testimonial_text="Karma is hands-down the highest quality theme lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][karma_builder_testimonial_1_slide banner_image_attachment_id="711" client_headshot_image_attachment_id="712" client_name="Jerry Nice" testimonial_text="Karma is the most Amazing Theme!! lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][/karma_builder_testimonial_1][/vc_column][vc_column width="1/3"][/vc_column][vc_column width="1/3"][karma_builder_testimonial_1 custom_css_class="slider-1"][karma_builder_testimonial_1_slide client_headshot_image_attachment_id="706" client_name="Haroon Dal" testimonial_text="Karma Wordpress is super flexible! lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla." banner_image_attachment_id="705"][karma_builder_testimonial_1_slide banner_image_attachment_id="711" client_headshot_image_attachment_id="712" client_name="Jerry Nice" testimonial_text="Karma is the most Amazing Theme!! lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][karma_builder_testimonial_1_slide banner_image_attachment_id="709" client_headshot_image_attachment_id="710" client_name="Ian Cross" testimonial_text="Karma is hands-down the highest quality theme lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][karma_builder_testimonial_1_slide banner_image_attachment_id="707" client_headshot_image_attachment_id="708" client_name="Adam Conly" testimonial_text="Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum."][/karma_builder_testimonial_1][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Minimal" sub_heading_text="Super clean image-free minimal style :)" heading_color="#363636" sub_heading_color="#555555" margin_top="115px" margin_bottom="35px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][karma_builder_testimonial_1 custom_css_class="slider-1"][karma_builder_testimonial_1_slide banner_image_attachment_id="1271" client_headshot_image_attachment_id="1269" client_name="Adam Conly" testimonial_text="Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum."][karma_builder_testimonial_1_slide banner_image_attachment_id="1281" client_headshot_image_attachment_id="1282" client_name="Jerry Nice" testimonial_text="Karma is amazing Theme!! lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][karma_builder_testimonial_1_slide banner_image_attachment_id="1276" client_headshot_image_attachment_id="1277" client_name="Ian Cross" testimonial_text="Karma is hands-down the highest quality Theme lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][karma_builder_testimonial_1_slide client_headshot_image_attachment_id="1263" client_name="Haroon Dal" testimonial_text="Karma is an amazing Wordpress Theme lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla." banner_image_attachment_id="1273"][/karma_builder_testimonial_1][/vc_column][vc_column width="1/3"][/vc_column][vc_column width="1/3"][karma_builder_testimonial_1 custom_css_class="slider-1"][karma_builder_testimonial_1_slide banner_image_attachment_id="1271" client_headshot_image_attachment_id="1269" client_name="Adam Conly" testimonial_text="Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum."][karma_builder_testimonial_1_slide banner_image_attachment_id="1281" client_headshot_image_attachment_id="1282" client_name="Jerry Nice" testimonial_text="Karma is amazing Theme!! lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][karma_builder_testimonial_1_slide banner_image_attachment_id="1276" client_headshot_image_attachment_id="1277" client_name="Ian Cross" testimonial_text="Karma is hands-down the highest quality Theme lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla."][karma_builder_testimonial_1_slide client_headshot_image_attachment_id="1263" client_name="Haroon Dal" testimonial_text="Karma is an amazing Wordpress Theme lipsum blandit tempus porttitor. Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla." banner_image_attachment_id="1273"][/karma_builder_testimonial_1][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1024['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1024= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['testimonials-1'] = tt_create_pages($page_data1024,$page_post_meta1024);		
	

//Testimonials 2 + 3
	//change variable names (numbers), to avoid crashing with later pages.	
	$page_data1025 = array(
  		'post_title'    => 'Testimonials 2 + 3',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
  		'post_content'  => '[vc_row][vc_column width="1/1"][karma_builder_heading heading_text="Testimonial Slider 2" sub_heading_text="Amazing testimonial slider, built on bootstrap, fully responsive and super easy to customize" heading_color="#363636" sub_heading_color="#555555" margin_top="20px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row css=".vc_custom_1433451132834{padding-right: 22% !important;padding-bottom: 80px !important;padding-left: 22% !important;}"][vc_column width="1/1" el_class="orbit-col-testimonial-4"][karma_builder_testimonial_2 testimonial_bg_color="#e7e9e6" testimonial_text_color="#444444" controls_style="true-controls-dark"][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="720" testimonial_text="TrueThemes has the best customer support. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="719" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="718" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="717" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="716" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="715" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="714" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo."][/karma_builder_testimonial_2][/vc_column][/vc_row][vc_row css=".vc_custom_1433451090808{padding-top: 140px !important;padding-bottom: 140px !important;background-color: #1d6d90 !important;}" full_width="stretch_row" el_class="row-temp"][vc_column width="1/1" el_class="orbit-col-testimonial-4"][karma_builder_testimonial_2 testimonial_bg_color="rgba(255,255,255,0.05)" testimonial_text_color="#ffffff" controls_style="true-controls-light" testimonial_text_size="14px"][karma_builder_testimonial_2_slide testimonial_bg_color="rgba(255,255,255,0)" client_headshot_image_attachment_id="720" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare." testimonial_text_color="#ffffff"][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="719" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="718" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="717" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="716" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="715" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare."][karma_builder_testimonial_2_slide testimonial_bg_color="#e7e9e6" client_headshot_image_attachment_id="714" testimonial_text="Karma is the best Wordpress Theme. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare."][/karma_builder_testimonial_2][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image="" el_id=""][vc_column width="1/1"][karma_builder_heading heading_text="Testimonial Slider 3" sub_heading_text="Super clean testimonial slider for your website" heading_color="#363636" sub_heading_color="#555555" margin_top="120px" margin_bottom="30px" heading_size="30px" heading_type="h3" heading_style="none" sub_heading_size="16px"][/vc_column][/vc_row][vc_row full_width="" parallax="" parallax_image=""][vc_column width="1/1"][testimonial_wrap][testimonial client_name="ThemeForest"]Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod.[/testimonial][testimonial client_name="Envato"]Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.[/testimonial][testimonial client_name="TrueThemes"]Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit.[/testimonial][/testimonial_wrap][/vc_column][/vc_row]',  		
  		'post_type'     => 'page',
		
	);

	$vc_row_attributes = tt_get_all_shortcode_attributes( 'vc_row', $page_data1025['post_content'] );
	$row_css = '';
	foreach($vc_row_attributes as $vc_row_att){
	$row_css .= $vc_row_att['css'];
	}

	$page_post_meta1025= array(
					//set page template, which actually is a post meta!
					'_wp_page_template'=>'template-blank-canvas.php',
					//'truethemes_custom_sub_menu' => 'custom-menu',
					'_wpb_shortcodes_custom_css' => $row_css,
					'truethemes_page_checkbox'=>'on',


	);

	$preset_menu_item_id['testimonials-2-3'] = tt_create_pages($page_data1025,$page_post_meta1025);		
					
/*****************************************
* End new Karma Builder Shortcode Pages.
/*****************************************/		
?>