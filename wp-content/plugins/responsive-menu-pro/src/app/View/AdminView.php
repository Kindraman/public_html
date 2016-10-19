<?php

namespace ResponsiveMenuPro\View;

class AdminView implements View
{

  public function __construct()
  {
    if(is_admin() && isset($_GET['page']) && $_GET['page'] == 'responsive-menu-pro'):

      wp_enqueue_media();

      wp_enqueue_script('responsive-menu-pro-font-awesome', 'https://use.fontawesome.com/b6bedb3084.js', null, null);

      wp_enqueue_script('postbox');
      wp_enqueue_script('postbox-edit', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/postbox-edit.js', array('jquery', 'postbox'));

      wp_enqueue_script('item-drag', '//code.jquery.com/ui/1.11.4/jquery-ui.js', 'jquery', 'null');

      wp_register_style('admin-css',  plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/main.css', false, null );
      wp_enqueue_style('admin-css');

      wp_register_style('colorpicker-css',  plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/colorpicker.css', false, null );
      wp_enqueue_style('colorpicker-css');

      wp_register_script('colorpicker-js',  plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/colorpicker.js', 'jquery', null );
      wp_enqueue_script('colorpicker-js');

      wp_register_script('admin-js',  plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/main.js', 'jquery', null );
      wp_enqueue_script('admin-js' );

    endif;
  }

	public function render($location, $l = [])
	{
		include dirname(dirname(dirname(__FILE__))) . '/views/admin/' . $location . '.phtml';
	}

}
