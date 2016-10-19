<?php
/*
* This file automatically generates 'general' processes such as clear widgets from sidebar, create and set menu locations..
* in preparation for other processes.. returns menu ids etc… for later use.
* this file should always be the first to run!
*/

	//#message - clearing default widgets
	echo '<li>Clearing default widgets from sidebar, pre-setting widgets, and pre-setting site option.</li>';
	$widgets = get_option('sidebars_widgets');
	$widgets['sidebar-1'] = array(); //this will clear the first sidebar.
	$widgets['sidebar-3'] = array('recent-posts-2','archives-2','categories-2'); //adding recent posts widget to blog sidebar
	update_option('sidebars_widgets',$widgets);
	
	//activate Karma 4.0
	update_option('ka_activate_karma4','true');
    update_option('ka_disable_exclude_categories','true');
    update_option('ka_logo_icon','custom-logo-2.png');
    update_option('ka_logo_text',get_bloginfo('blogname'));
		
?>