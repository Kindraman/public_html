<?php
/*
* This file automatically generates categories, posts and tags.
*/

	//Since we are doing demo content, we probably reuse the latin filler text for most of the post content
	$latin_filler_text = "Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.

Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.

Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.";



	//#message - creating posts
	echo '<li>Creating Posts</li>';
	ob_flush();

	//begin auto generate taxonomy terms.
	
	//categories
	wp_insert_term('Clean Web Design','category',array('slug'=>'clean-web-design'));
	wp_insert_term('Premium WordPress Themes','category',array('slug'=>'premium-wordpress-themes'));
	

	
//Create first post
	
	//notice $post_data1,$category_terms_slug1,$post_tag_terms_slug1 variable names, to avoid crashing with later posts.	
	$post_data1 = array(
  		'post_title'    => 'Optimize Wordpress',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'post',
		'post_content' => $latin_filler_text,
		
	);
	
	$post_meta_values1 = array(
		'truethemes_external_image_url' => '',
		'truethemes_video_url' => '',
	);
	
	//set category
	$category_terms_slug1 = array('premium-wordpress-themes');
	//set tags		
	$post_tag_terms_slug1 = array('themes','truethemes','wordpress');
	//Ok we are done, now create the post!
    tt_create_posts($post_data1,$post_meta_values1,$category_terms_slug1,$post_tag_terms_slug1);	


//Create second post
	
	//notice $post_data2,$category_terms_slug2,$post_tag_terms_slug2 variable names, to avoid crashing with later posts.	
	$post_data2 = array(
  		'post_title'    => 'Metro Design Style',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'post',
		'post_content' => $latin_filler_text,
		
	);
	
	$post_meta_values2 = array(
		'truethemes_external_image_url' => 'http://placehold.it/538x218',
		'truethemes_video_url' => '',
	);
	
	//set category
	$category_terms_slug2 = array('clean-web-design');
	//set tags		
	$post_tag_terms_slug2 = array('design','responsive','wordpress');
	//Ok we are done, now create the post!
    tt_create_posts($post_data2,$post_meta_values2,$category_terms_slug2,$post_tag_terms_slug2);
    
    
    
//Create third post
	
	//notice $post_data3,$category_terms_slug3,$post_tag_terms_slug3 variable names, to avoid crashing with later posts.	
	$post_data3 = array(
  		'post_title'    => 'Responsive WordPress Theme',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'post',
		'post_content' => $latin_filler_text,
		
	);
	
	$post_meta_values3 = array(
		'truethemes_external_image_url' => '',
		'truethemes_video_url' => 'http://vimeo.com/70149174',
	);
	
	//set category
	$category_terms_slug3 = array('premium-wordpress-theme');
	//set tags		
	$post_tag_terms_slug3 = array('metro','responsive','wordpress');
	//Ok we are done, now create the post!
    tt_create_posts($post_data3,$post_meta_values3,$category_terms_slug3,$post_tag_terms_slug3);
    
    
    
    	    	
?>