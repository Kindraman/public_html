<?php
/*
* helper functions
*/

//declare global arrays to be used for creating menus and in files generate_menus.php and generate_pages.php
$preset_menu_item_id = array();
$preset_menu_parent_item_id = array();

function tt_create_gallery_posts($gpost_data,$gpost_meta_values,$taxonomy_term_slug){
	//create the post, grab the returned post id for updating taxonomy and post meta
	$gpost_id = wp_insert_post($gpost_data);
	//set the taxonomy
	wp_set_object_terms( $gpost_id, $taxonomy_term_slug, 'truethemes-gallery-category');
	
	//creates all post meta!
	//using foreach! why didn't I think of this earlier?
	foreach($gpost_meta_values as $key => $value):
			add_post_meta($gpost_id,"{$key}",$value);
	endforeach;
		
	return $gpost_id ;
}



function tt_create_posts($post_data,$post_meta_values,$category_terms_slug,$post_tag_terms_slug){
	//create the post, grab the returned post id for updating taxonomy and post meta
	$post_id = wp_insert_post($post_data);
	//set the categories
	wp_set_object_terms( $post_id, $category_terms_slug, 'category');
	//set the tags
	wp_set_object_terms( $post_id, $post_tag_terms_slug, 'post_tag');

	//creates all post meta!
	//using foreach! why didn't I think of this earlier?
	foreach($post_meta_values as $key => $value):
			add_post_meta($post_id,"{$key}",$value);
	endforeach;
		
	return $post_id;		
}




function tt_create_slider_posts($spost_data,$spost_meta_values,$taxonomy_term_slug){
	//create the post, grab the returned post id for updating taxonomy and post meta
	$spost_id = wp_insert_post($spost_data);
	//set the taxonomy
	wp_set_object_terms( $spost_id, $taxonomy_term_slug, 'karma-slider-category');
	
	//creates all post meta!
	//using foreach! why didn't I think of this earlier?
	foreach($spost_meta_values as $key => $value):
			add_post_meta($spost_id,"{$key}",$value);
	endforeach;
	
	return $spost_id ;
}



function tt_create_custom_links($menu_id,$menu_item_title,$url='#',$menu_description='', $menu_parent_item_id = ''){

		$custom_menu_item = array(
		'menu-item-object' => 'page',
		'menu-item-type' => 'custom',
		'menu-item-title' => $menu_item_title,
		'menu-item-url' => $url,
		'menu-item-parent-id' => $menu_parent_item_id,
		'menu-item-description' => $menu_description,		
		'menu-item-status' => 'publish',
	);
	
	$custom_menu_item_id = wp_update_nav_menu_item( $menu_id, 0, $custom_menu_item );

	return $custom_menu_item_id;
}



function tt_create_menu_links($menu_id,$menu_parent_item_id,$menu_item_object_id,$menu_description = '',$menu_item_title=''){
	//tag to custom menu item Gallery + Portfolio as sub menu item.
	$page_menu_item = array(
		'menu-item-db-id' => 0,
		'menu-item-object-id' => $menu_item_object_id,
		'menu-item-object' => 'page',
		'menu-item-parent-id' => $menu_parent_item_id,
		'menu-item-type' => 'post_type',
		'menu-item-title' => $menu_item_title,
		'menu-item-url' => '',
		'menu-item-description' => $menu_description,
		'menu-item-attr-title' => '',
		'menu-item-target' => '',
		'menu-item-classes' => '',
		'menu-item-xfn' => '',
		'menu-item-status' => 'publish',
	);	
	
	//refer to this article to understand menu position and how things works..
	//http://www.acousticwebdesign.net/wordpress/how-to-create-wordpress-3-navigation-menus-in-your-theme-or-plugin-code/
	$menu_item_id = wp_update_nav_menu_item( $menu_id, 0, $page_menu_item );
		
	return $menu_item_id;
}




function tt_create_pages($page_data,$page_post_meta){
	//create the post, grab the returned post id for updating taxonomy and post meta
	$page_id = wp_insert_post($page_data);
	
	//creates all post meta!
	//using foreach! why didn't I think of this earlier?
	foreach($page_post_meta as $key => $value):
		if($key == 'tt_karma_slider_category' || $key == 'meta_truethemes_gallery_category'):
			add_post_meta($page_id,"{$key}",array(0=>$value));
		else:
			add_post_meta($page_id,"{$key}",$value);
		endif;
	endforeach;	

	return $page_id;
}


//http://wordpress.stackexchange.com/questions/172275/extract-attribute-values-from-every-shortcode-in-post
/**
 * Grab all attributes for a given shortcode in a text
 *
 * @uses get_shortcode_regex()
 * @uses shortcode_parse_atts()
 * @param  string $tag   Shortcode tag
 * @param  string $text  Text containing shortcodes
 * @return array  $out   Array of attributes
 */

function tt_get_all_shortcode_attributes( $tag, $text )
{
    preg_match_all( '/' . get_shortcode_regex() . '/s', $text, $matches );
    $out = array();
    if( isset( $matches[2] ) )
    {
        foreach( (array) $matches[2] as $key => $value )
        {
            if( $tag === $value )
                $out[] = shortcode_parse_atts( $matches[3][$key] );  
        }
    }
    return $out;
}
?>