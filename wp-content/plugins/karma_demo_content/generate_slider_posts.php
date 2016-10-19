<?php
/*
* This file automatically generates slider categories, slider posts and tags to its categories as well as return taxonomy term id for page template use.
* therefore this file should always run before generating page templates!
*/


//filter text for most of the slider post content
$slider_filler_text = "Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.";

	
	//#message - creating slider posts
	echo '<li>Creating Slider Posts</li>';
	ob_flush();

	//begin auto generate taxonomy terms.
	
	
	$jquery_one_category_term_id = wp_insert_term(
	  'jQuery1 Category',
	  'karma-slider-category',
	  array(
	    'slug' => 'jquery1-category',
	  )
	);
	

	$jquery_two_category_term_id = wp_insert_term(
	  'jQuery2 Category',
	  'karma-slider-category',
	  array(
	    'slug' => 'jquery2-category',
	  )
	);
				

	
	//clear the cache or sub categories will not appear in WordPress admin
	//delete_option("karma-slider-category"."_children");
		



	//begin creating slider posts	
	
	
	
/*
*create slider post 1
*/	
	//notice $spost_data1 and $spost_meta_values1 variable names, to avoid crashing with later slider posts.	
	$spost_data1 = array(
  		'post_title'    => 'Vimeo Video',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values1 = array(
					'slider_image_layout'=>'',
					'slider_image'=>'',
					'slider_image_linking'=>'http://google.com',
					'slider_image_alt_text'=>'Sample alt text',
					'slider_video'=>'http://vimeo.com/27246366',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data1,$spost_meta_values1,'jquery2-category');
	



/*
*create slider post 2
*/	
	//notice $spost_data2 and $spost_meta_values2 variable names, to avoid crashing with later slider posts.	
	$spost_data2 = array(
  		'post_title'    => 'Normal Image',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values2 = array(
					'slider_image_layout'=>'normal-image',
					'slider_image'=>'http://placehold.it/436x270',
					'slider_image_linking'=>'',
					'slider_image_alt_text'=>'',
					'slider_video'=>'',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data2,$spost_meta_values2,'jquery2-category');


	
/*
*create slider post 3
*/	
	//notice $spost_data3 and $spost_meta_values3 variable names, to avoid crashing with later slider posts.	
	$spost_data3 = array(
  		'post_title'    => 'Full-Width',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values3 = array(
					'slider_image_layout'=>'full-width-image',
					'slider_image'=>'http://placehold.it/840x270',
					'slider_image_linking'=>'',
					'slider_image_alt_text'=>'',
					'slider_video'=>'',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data3,$spost_meta_values3,'jquery2-category');
	

/*
*create slider post 4
*/	
	//notice $spost_data4 and $spost_meta_values4 variable names, to avoid crashing with later slider posts.	
	$spost_data4 = array(
  		'post_title'    => 'Full Bleed',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values4 = array(
					'slider_image_layout'=>'full-bleed-image',
					'slider_image'=>'http://placehold.it/920x358',
					'slider_image_linking'=>'',
					'slider_image_alt_text'=>'',
					'slider_video'=>'',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data4,$spost_meta_values4,'jquery2-category');

	
/*
*create slider post 5
*/	
	//notice $spost_data5 and $spost_meta_values5 variable names, to avoid crashing with later slider posts.	
	$spost_data5 = array(
  		'post_title'    => 'jQuery 1 Image',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values5 = array(
					'slider_image_layout'=>'normal-image',
					'slider_image'=>'http://placehold.it/404x256',
					'slider_image_linking'=>'',
					'slider_image_alt_text'=>'Karma Responsive WordPress Theme',
					'slider_video'=>'',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data5,$spost_meta_values5,'jquery1-category');


/*
*create slider post 6
*/	
	//notice $spost_data6 and $spost_meta_values6 variable names, to avoid crashing with later slider posts.	
	$spost_data6 = array(
  		'post_title'    => 'Youtube Video Embed',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values6 = array(
					'slider_image_layout'=>'',
					'slider_image'=>'',
					'slider_image_linking'=>'',
					'slider_image_alt_text'=>'',
					'slider_video'=>'http://www.youtube.com/watch?v=dQw4w9WgXcQ',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data6,$spost_meta_values6,'jquery1-category');
	



/*
*create slider post 7
*/	
	//notice $spost_data7 and $spost_meta_values7 variable names, to avoid crashing with later slider posts.	
	$spost_data7 = array(
  		'post_title'    => 'Vimeo Video Embed',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values7 = array(
					'slider_image_layout'=>'',
					'slider_image'=>'',
					'slider_image_linking'=>'',
					'slider_image_alt_text'=>'',
					'slider_video'=>'http://vimeo.com/70149174',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data7,$spost_meta_values7,'jquery1-category');



/*
*create slider post 8
*/	
	//notice $spost_data8 and $spost_meta_values8 variable names, to avoid crashing with later slider posts.	
	$spost_data8 = array(
  		'post_title'    => 'Youtube Video',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values8 = array(
					'slider_image_layout'=>'',
					'slider_image'=>'',
					'slider_image_linking'=>'',
					'slider_image_alt_text'=>'',
					'slider_video'=>'http://www.youtube.com/watch?v=dQw4w9WgXcQ',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data8,$spost_meta_values8,'jquery2-category');



/*
*create slider post 9
*/	
	//notice $spost_data9 and $spost_meta_values9 variable names, to avoid crashing with later slider posts.	
	$spost_data9 = array(
  		'post_title'    => 'jQuery 1 Full Width',
  		'post_status'   => 'publish',
  		'post_content' => $slider_filler_text,
  		'post_author'   => 1,
		'post_type' => 'karma-slider',
		
	);
	
	//set post meta values
	$spost_meta_values9 = array(
					'slider_image_layout'=>'full-width-image',
					'slider_image'=>'http://placehold.it/940x283',
					'slider_image_linking'=>'',
					'slider_image_alt_text'=>'',
					'slider_video'=>'',
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_slider_posts($spost_data9,$spost_meta_values9,'jquery1-category');


	
?>