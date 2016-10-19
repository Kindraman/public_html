<?php
/*
* This file automatically generates gallery categories, gallery posts and tags to its categories as well as return taxonomy term id for page template use.
* therefore this file should always run before generating page templates!
*/

	//#message - creating gallery posts
	echo '<li>Creating Gallery Posts</li>';
	ob_flush();

	//begin auto generate taxonomy terms.
	
	//parent gallery category
	$gparent_term = wp_insert_term('Design','truethemes-gallery-category');

	//Insert sub categories
	$gparent_term_id = $gparent_term['term_id']; //parent term id
	
	wp_insert_term(
	  'Audio',
	  'truethemes-gallery-category',
	  array(
	    'slug' => 'audio',
	    'parent'=> (int)$gparent_term_id,
	  )
	);
	

	wp_insert_term(
	  'Logo',
	  'truethemes-gallery-category',
	  array(
	    'slug' => 'logo',
	    'parent'=> (int)$gparent_term_id,
	  )
	);
	
	wp_insert_term(
	  'Print',
	  'truethemes-gallery-category',
	  array(
	    'slug' => 'print',
	    'parent'=> (int)$gparent_term_id,
	  )
	);	
	
	wp_insert_term(
	  'Web',
	  'truethemes-gallery-category',
	  array(
	    'slug' => 'web',
	    'parent'=> (int)$gparent_term_id,
	  )
	);				
	
	//clear the cache or sub categories will not appear in WordPress admin
	delete_option("truethemes-gallery-category"."_children");
		



	//begin creating gallery posts	
	
	
	
/*
*create gallery post 1
*/	
	//notice $gpost_data1 and $gpost_meta_values1 variable names, to avoid crashing with later gallery posts.	
	$gpost_data1 = array(
  		'post_title'    => 'Gallery Post 1',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'tt-gallery',
		
	);
	
	//set post meta values
	$gpost_meta_values1 = array(
    "truethemes_gallery_link_to_page" => "",
	"truethemes_gallery_link_target" => "",
	"truethemes_gallery_title" => "Responsive Wordpress Theme",
	"truethemes_gallery_description" => "Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.",
	'truethemes_gallery_thumbnail' => "http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-demo.jpg",
	'truethemes_gallery_lightbox' => "http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-demo.jpg",
	'truethemes_gallery_lightbox_title_1' => "Karma Wordpress Theme",
	'truethemes_gallery_lightbox_2' => "",
	'truethemes_gallery_lightbox_title_2' => "",
	'truethemes_gallery_lightbox_3' => "",
	'truethemes_gallery_lightbox_title_3' => "",
	'truethemes_gallery_lightbox_4' => "",
	'truethemes_gallery_lightbox_title_4' => "",
	'truethemes_gallery_lightbox_5'=>"",
	'truethemes_gallery_lightbox_title_5' => "",
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_gallery_posts($gpost_data1,$gpost_meta_values1,'web');
	
	
	
	
/*
*create gallery post 2
*/	
	//notice $gpost_data2 and $gpost_meta_values2 variable names, to avoid crashing with later gallery posts.	
	$gpost_data2 = array(
  		'post_title'    => 'Gallery Post 2',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'tt-gallery',
		
	);
	
	//set post meta values
	$gpost_meta_values2 = array(
    "truethemes_gallery_link_to_page" => "",
	"truethemes_gallery_link_target" => "",
	"truethemes_gallery_title" => "Premium Wordpress Theme",
	"truethemes_gallery_description" => "Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.",
	'truethemes_gallery_thumbnail' => "http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-demo.jpg",
	'truethemes_gallery_lightbox' => "http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-demo.jpg",
	'truethemes_gallery_lightbox_title_1' => "Karma - Clean and Modern Wordpress Theme",
	'truethemes_gallery_lightbox_2' => "",
	'truethemes_gallery_lightbox_title_2' => "",
	'truethemes_gallery_lightbox_3' => "",
	'truethemes_gallery_lightbox_title_3' => "",
	'truethemes_gallery_lightbox_4' => "",
	'truethemes_gallery_lightbox_title_4' => "",
	'truethemes_gallery_lightbox_5'=>"",
	'truethemes_gallery_lightbox_title_5' => "",
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_gallery_posts($gpost_data2,$gpost_meta_values2,'logo');	
	
	
	
	
/*
*create gallery post 3
*/	
	//notice $gpost_data3 and $gpost_meta_values3 variable names, to avoid crashing with later gallery posts.	
	$gpost_data3 = array(
  		'post_title'    => 'Gallery Post 3',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'tt-gallery',
		
	);
	
	//set post meta values
	$gpost_meta_values3 = array(
    "truethemes_gallery_link_to_page" => "",
	"truethemes_gallery_link_target" => "",
	"truethemes_gallery_title" => "Clean and Modern Wordpress Theme",
	"truethemes_gallery_description" => "Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.",
	'truethemes_gallery_thumbnail' => "http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-demo.jpg",
	'truethemes_gallery_lightbox' => "http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-demo.jpg",
	'truethemes_gallery_lightbox_title_1' => "Karma Responsive Wordpress",
	'truethemes_gallery_lightbox_2' => "",
	'truethemes_gallery_lightbox_title_2' => "",
	'truethemes_gallery_lightbox_3' => "",
	'truethemes_gallery_lightbox_title_3' => "",
	'truethemes_gallery_lightbox_4' => "",
	'truethemes_gallery_lightbox_title_4' => "",
	'truethemes_gallery_lightbox_5'=>"",
	'truethemes_gallery_lightbox_title_5' => "",
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_gallery_posts($gpost_data3,$gpost_meta_values3,'print');		
	
	
/*
*create gallery post 4
*/	
	//notice $gpost_data4 and $gpost_meta_values4 variable names, to avoid crashing with later gallery posts.	
	$gpost_data4 = array(
  		'post_title'    => 'Gallery Post 4',
  		'post_status'   => 'publish',
  		'post_author'   => 1,
		'post_type' => 'tt-gallery',
		
	);
	
	//set post meta values
	$gpost_meta_values4 = array(
    "truethemes_gallery_link_to_page" => "http://www.google.com",
	"truethemes_gallery_link_target" => "_self",
	"truethemes_gallery_title" => "Premium Responsive Wordpress Theme",
	"truethemes_gallery_description" => "Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.",
	'truethemes_gallery_thumbnail' => "http://s3.truethemes.net/theme-xml-content/wp-karma-4/karma-demo.jpg",
	'truethemes_gallery_lightbox' => "",
	'truethemes_gallery_lightbox_title_1' => "",
	'truethemes_gallery_lightbox_2' => "",
	'truethemes_gallery_lightbox_title_2' => "",
	'truethemes_gallery_lightbox_3' => "",
	'truethemes_gallery_lightbox_title_3' => "",
	'truethemes_gallery_lightbox_4' => "",
	'truethemes_gallery_lightbox_title_4' => "",
	'truethemes_gallery_lightbox_5'=>"",
	'truethemes_gallery_lightbox_title_5' => "",
	);

	
	//needs post data, post meta values, and taxonomy term slug
	tt_create_gallery_posts($gpost_data4,$gpost_meta_values4,'audio');		

?>