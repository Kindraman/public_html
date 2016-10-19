<?php
/*
Plugin Name: Image Caption Hover for Visual Composer
Description: Image Caption Hover Extension for Visual Composer
Plugin URI: http://webcodingplace.com/wordpress-free-plugins/image-caption-hover-visual-composer-wordpress-plugin/
Author: Rameez
Author URI: http://webcodingplace.com
Version: 6.0
License: GPL2
Text Domain: ich-vc
*/

/*

    Copyright (C) 2016  Rameez  rameez7759@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
include 'plugin.class.php';
if (class_exists('Image_Caption_Hover_VC')) {
    $obj_init = new Image_Caption_Hover_VC;
}
?>