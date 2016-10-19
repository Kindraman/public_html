<?php 
/**
* Plugin Main Class
*/
class Image_Caption_Hover_VC
{
	
	function __construct()
	{
		add_action('vc_before_init', array($this, 'wcp_load_plugin'));
		add_action( 'plugins_loaded', array($this, 'wcp_load_plugin_textdomain' ) );
		add_shortcode( 'ich-vc', array( $this, 'render_ich_shortcode' ) );
		add_action( 'wp_enqueue_scripts', array($this, 'adding_front_scripts') );
		add_action( 'init', array( $this, 'check_if_vc_is_install' ) );
	}

	function wcp_load_plugin_textdomain(){
		load_plugin_textdomain( 'ich-vc', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
	}	

	function wcp_load_plugin(){

		include 'includes/settings.php';


		$ich_main_var = array(
			"name" => "Image Caption Hover",
			"base" => "ich-vc",
			"category" => 'Content',
			"description" => __('Insert Images with Hover Effects'),
			"params" => $settings_params
		);

		vc_map($ich_main_var);
	}

	function render_ich_shortcode($attrs, $content = null){
		extract( shortcode_atts( array(
			'image_id' => '',
			'image_title' => 'Image Caption Hover Title',
			'image_alt' => 'Image Caption Hover Alt',
			'caption_bg' => '#000',
			'caption_text_color' => '#FFF',
			'caption_url' => '',
			'caption_url_target' => '',
			'border_width' => '',
			'border_type' => 'solid',
			'border_color' => '',
			'border_radius' => '',
			'border_shadow' => '',
			'anim_speed' => '1s',
			'hover_effect' => 'slide-left-to-right',
		), $attrs ) );

		$content = wpb_js_remove_wpautop($content, true);

		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		if ($border_width != '') {
			$border_styling = 'border: '.$border_width.' solid '.$border_color.';';
		} else {
			$border_styling = '';
		}		
		ob_start();
		include 'includes/render_shortcode.php';
		return ob_get_clean();
	}

	function adding_front_scripts(){
		wp_enqueue_style( 'image-caption-hover-css', plugins_url( 'css/style.css' , __FILE__ ));
		wp_enqueue_script( 'image-caption-hover-js', plugins_url( 'js/script.js' , __FILE__ ), array('jquery'));
	}

	function check_if_vc_is_install(){
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            // Display notice that Visual Compser is required
            add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
            return;
        }			
	}

    function showVcVersionNotice() {
        $plugin_name = 'Image Caption Hover';
        echo '
        <div class="updated">
          <p>'.sprintf('<strong>%s</strong> requires <strong><a href="http://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=Rameez_Iqbal" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', $plugin_name).'</p>
        </div>';
    }	
}
?>