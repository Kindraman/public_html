<?php
/*
Plugin Name: Karma Demo Content
Plugin URI: http://truethemes.net
Description: Generate demo content for the Karma Wordpress Theme: Appearance > Karma Demo Content
Version: 1.2
Author: TrueThemes
Author URI: http://truethemes.net
*/


/*
* Load helper functions!
*/
require_once('helper-functions.php');


/*
* Create admin notice after plugin activation! To give customer instruction to go to plugin admin page.
*/

add_action('admin_notices','tt_plugin_notice');

function tt_plugin_notice(){

//check if demo content has been generated before.
$tt_has_karma_theme_demo_content_created = get_option('karma_theme_demo_content_created');

//determine where we are now, show this message if user is not on plugin admin page.
$screen = get_current_screen();
if($screen->id != 'appearance_page_karma_theme_demo_content_generator'):
?>

	<?php if($tt_has_karma_theme_demo_content_created != 'done_creating'): ?>
	<div id="message" class="updated">
	<p>
			Please head over to the <a href="<?php echo admin_url('themes.php?page=karma_theme_demo_content_generator'); ?>">Karma Demo Content</a> page to Import Demo Content.
	</p>
	</div>    	
	<?php endif; ?>
<?php
endif;
}




/*
* Create Plugin admin page.
*/
add_action('admin_menu', 'tt_create_admin_pages');


function tt_create_admin_pages() {
add_theme_page('Karma Demo Content','Karma Demo Content','administrator','karma_theme_demo_content_generator','tt_generate_demo_content_page');
}





/*
* Plugin admin page and Processing PHP codes
*/
function tt_generate_demo_content_page(){
?>
<div class='wrap'>
<div class="icon32" id="icon-tools"><br></div>
<h2>Karma Demo Content</h2>
<br/>

<?php
//check if demo content has been generated before.
$tt_has_karma_theme_demo_content_created = get_option('karma_theme_demo_content_created');
if($tt_has_karma_theme_demo_content_created != 'done_creating'):
?>
<div id="message" class="updated">
<h4><u>Instructions:</u></h4>
    <ol>
	<li>To avoid any potential errors please only run this plugin on a fresh installation of Wordpress. </li>
	<li>Click the "Generate Demo Content" button below to auto-generate demo content and setup the theme. </li> 
	<li>Please only click the button once.</li>
    <li>Enjoy :)</li>
	</ol>
    <p>&nbsp;</p>
</div>
<?php else: ?>
<div id="message" class="updated">
	<p>
		<strong>Attention:</strong>
			<ol>
			<li>You've already created content using this plugin.</li> 
            <li>Please kindly deactivate and delete the plugin as it's no longer needed.</li>
			<li>If for any reason you need to re-install the demo content please kindly reach out to us at our <a href='https://help.truethemes.net'>TrueThemes Help Center</a> for further instructions. </li> 
			</ol>
		Cheers :)
	</p>
</div>
<?php endif; ?>



<?php
//proceed with actual content generating and theme setup
if($_POST["tt_generate_contents_now"]=='lets_do_it'):

	//check wp_nonce for security
	$tt_wp_nonce = $_POST['tt_demo_content_nonce_field'];
	if ( ! wp_verify_nonce( $tt_wp_nonce,'tt_demo_content_check_nonce' ) ) {
     die( 'You have cleared your browser session, Please kindly login to WordPress admin again!' ); 
    }
    
    ob_start();

	ob_implicit_flush(true);
    //#message - inform user..plugin is running.
    echo "<h3>Please wait, Plugin is processing...</h3>";
    ob_end_flush();
    echo "<ol>"; //starts order list of process message, plugin will echo out message when it runs a process, so that user can know what has been done.

	ob_implicit_flush(true);
	//Starts to run general processes which creates and sets up "things" that will be needed later.
	require_once('general_processes.php');
	ob_end_flush();

	ob_implicit_flush(true);
	//Starts to generate gallery taxonomy and gallery posts.
	require_once('generate_gallery_posts.php');
	ob_end_flush();

	ob_implicit_flush(true);
	//Starts to generate slider taxonomy and slider posts.
	require_once('generate_slider_posts.php');
	ob_end_flush();
	
	ob_implicit_flush(true);
	//Starts to generate posts
	require_once('generate_posts.php');
	ob_end_flush();
		
	ob_implicit_flush(true);
	//Starts to generate pages using page templates.
	require_once('generate_pages.php');
	ob_end_flush();
	
	ob_implicit_flush(true);
	//Starts to generate menus.
	require_once('generate_menus.php');	
	ob_end_flush();
	

	//add option to database to indicate this plugin has been run before.	
	add_option('karma_theme_demo_content_created','done_creating');
	
	ob_implicit_flush(true);
	echo "</ol>";//ends order list of process meesage.
	
	
	//#message - inform user, plugin has completed running.
	echo "<script type='text/javascript'>jQuery('#message').html('<p><strong>Success!</strong> Demo content has successfully imported.</p>');</script>";
	ob_end_flush();
	
	//deactivate plugin
	deactivate_plugins( plugin_basename( __FILE__ ) ); 
	
	
	
else:
//show the form if not submitted.
?>

	<?php
	//check if demo content has been generated before, if not show the generate content button!
	$tt_has_karma_theme_demo_content_created = get_option('karma_theme_demo_content_created');
	if($tt_has_karma_theme_demo_content_created != 'done_creating'):
	?>
	<form action="" method="post">
	<input type="hidden" name="tt_generate_contents_now" value="lets_do_it"><br>
	<?php
		//generate form nonce
		wp_nonce_field('tt_demo_content_check_nonce','tt_demo_content_nonce_field');
	?>
	<input type="submit" class="button-primary" value="Generate Demo Content">
	</form>
	</div>
	<?php endif; ?>

<?php
endif; //end if($_POST["tt_generate_contents_now"]=='lets_do_it'):
}
?>