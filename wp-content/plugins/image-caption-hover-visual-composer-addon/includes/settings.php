<?php
$hoverEffects = array(
	'Slide left to right'	=>	'slide-left-to-right',
	'Slide right to left'	=>	'slide-right-to-left',
	'Slide top to bottom'	=>	'slide-top-to-bottom',
	'Slide bottom to top'	=>	'slide-bottom-to-top',
	'Image flip up'			=>	'image-flip-up',
	'Image flip down'		=>	'image-flip-down',
	'Image flip right'		=>	'image-flip-right',
	'Image flip left'		=>	'image-flip-left',
	'Rotate image down'		=>	'rotate-image-down',
	'Image turn around'		=>	'image-turn-around',
	'Zoom and pan'			=>	'zoom-and-pan',
	'Tilt image'			=>	'tilt-image',
	'Morph'					=>	'morph',
	'Move image right'		=>	'move-image-right',
	'Move image left'		=>	'move-image-left',
	'Move image top'		=>	'move-image-top',
	'Move image bottom'		=>	'move-image-bottom',
	'Image squeez right'	=>	'image-squeez-right',
	'Image squeez left'		=>	'image-squeez-left',
	'Image squeez top'		=>	'image-squeez-top',
	'Image squeez bottom'	=>	'image-squeez-bottom',
	'No Effect'				=>	'no-effect',

	'Zoom In' => 'zoom-in',
	'Zoom Out' => 'zoom-out',
	'Zoom In Twist' => 'zoom-in-twist',
	'Zoom Out Twist' => 'zoom-out-twist',
	'Zoom Caption In Image Out' => 'zoom-caption-in-image-out',
	'Zoom Caption Out Image In' => 'zoom-caption-out-image-in',
	'Zoom Image Out Caption Twist' => 'zoom-image-out-caption-twist',
	'Zoom Image in Caption Twist' => 'zoom-image-in-caption-twist',

	'Fall down caption -- (Pro Feature)' => 	'fall-down-caption',
	'Fall down image -- (Pro Feature)' => 	'fall-down-image',
	'Swap caption -- (Pro Feature)' => 	'swap-caption',
	'Swap image -- (Pro Feature)' => 	'swap-image',
	'Open door down caption -- (Pro Feature)' => 	'opendoordown-caption',
	'Open door down image -- (Pro Feature)' => 	'opendoordown-image',
	'Open door up caption -- (Pro Feature)' => 	'opendoorup-caption',
	'Open door up image -- (Pro Feature)' => 	'opendoorup-image',
	'Open door right caption -- (Pro Feature)' => 	'opendoorright-caption',
	'Open door right image -- (Pro Feature)' => 	'opendoorright-image',
	'Open door left caption -- (Pro Feature)' => 	'opendoorleft-caption',
	'Open door left image -- (Pro Feature)' => 	'opendoorleft-image',
	'Rotate down caption -- (Pro Feature)' => 	'rotatedown-caption',
	'Rotate down image -- (Pro Feature)' => 	'rotatedown-image',
	'Rotate up caption -- (Pro Feature)' => 	'rotateup-caption',
	'Rotate up image -- (Pro Feature)' => 	'rotateup-image',
	'Rotate right caption -- (Pro Feature)' => 	'rotateright-caption',
	'Rotate right image -- (Pro Feature)' => 	'rotateright-image',
	'Rotate left caption -- (Pro Feature)' => 	'rotateleft-caption',
	'Rotate left image -- (Pro Feature)' => 	'rotateleft-image',
	'Space out up caption -- (Pro Feature)' => 	'spaceoutup-caption',
	'Space out up image -- (Pro Feature)' => 	'spaceoutup-image',
	'Space out down caption -- (Pro Feature)' => 	'spaceoutdown-caption',
	'Space out down image -- (Pro Feature)' => 	'spaceoutdown-image',
	'Space out right caption -- (Pro Feature)' => 	'spaceoutright-caption',
	'Space out right image -- (Pro Feature)' => 	'spaceoutright-image',
	'Space out left caption -- (Pro Feature)' => 	'spaceoutleft-caption',
	'Space out left image -- (Pro Feature)' => 	'spaceoutleft-image',
	'Foolish caption -- (Pro Feature)' => 	'foolish-caption',
	'Foolish image -- (Pro Feature)' => 	'foolish-image',
	'Tin right caption -- (Pro Feature)' => 	'tinright-caption',
	'Tin right image -- (Pro Feature)' => 	'tinright-image',
	'Tin left caption -- (Pro Feature)' => 	'tinleft-caption',
	'Tin left image -- (Pro Feature)' => 	'tinleft-image',
	'Tin up caption -- (Pro Feature)' => 	'tinup-caption',
	'Tin up image -- (Pro Feature)' => 	'tinup-image',
	'Tin down caption -- (Pro Feature)' => 	'tindown-caption',
	'Tin down image -- (Pro Feature)' => 	'tindown-image',
	'Simple Fade -- (Pro Feature)' => 	'simple-fade',	


	'Flip image vertical -- (Pro Feature)' => 'flip-image-vertical',
	'Flip image horizontal -- (Pro Feature)' => 'flip-image-horizontal',
	'Flip image vertical back -- (Pro Feature)' => 'flip-image-vertical-back',
	'Flip image horizontal back -- (Pro Feature)' => 'flip-image-horizontal-back',

	'Page turn from top -- (Pro Feature)' => 'page-turn-from-top',
	'Page turn from bottom -- (Pro Feature)' => 'page-turn-from-bottom',
	'Page turn from left -- (Pro Feature)' => 'page-turn-from-left',
	'Page turn from right -- (Pro Feature)' => 'page-turn-from-right',	
);

$settings_params = array(
	array(
		"type" 			=> 	"attach_image",
		"heading" 		=> 	__( 'Image', 'ich-vc' ),
		"param_name" 	=> 	"image_id",
		"description" 	=> 	__( 'Select the image', 'ich-vc' ),
		"group" 		=> 	'Image',
	),
	array(
		"type" 			=> "textfield",
		"heading" 		=> __( 'Title', 'ich-vc' ),
		"param_name" 	=> "image_title",
		"description" 	=> __( 'It will be used as title attribute of img tag', 'ich-vc' ),
		"group" 		=> 'Image',
	),
	array(
		"type" 			=> "textfield",
		"heading" 		=> __( 'Alternate Text', 'ich-vc' ),
		"param_name" 	=> "image_alt",
		"description" 	=> __( 'It will be used as alt attribute of img tag', 'ich-vc' ),
		"group" 		=> 'Image',
	),

	/* Caption */

	array(
		"type" 			=> "textarea_html",
		"heading" 		=> __( 'Caption Text', 'ich-vc' ),
		"param_name" 	=> "content",
		"description" 	=> __( 'Provide Caption Here', 'ich-vc' ),
		"group" 		=> 'Caption',
		"value"			=> '<h2>Caption Text Here</h2>'
	),
	array(
		"type" 			=> "colorpicker",
		"heading" 		=> __( 'Caption Background Color', 'ich-vc' ),
		"param_name" 	=> "caption_bg",
		"description" 	=> __( 'Background color for caption', 'ich-vc' ),
		"group" 		=> 'Caption',
	),
	array(
		"type" 			=> "colorpicker",
		"heading" 		=> __( 'Caption Text Color', 'ich-vc' ),
		"param_name" 	=> "caption_text_color",
		"description" 	=> __( 'Text color for caption', 'ich-vc' ),
		"group" 		=> 'Caption',
	),
	array(
		"type" 			=> "textfield",
		"heading" 		=> __( 'Link To', 'ich-vc' ),
		"param_name" 	=> "caption_url",
		"description" 	=> __( 'Enter URL to link caption', 'ich-vc' ),
		"group" 		=> 'Caption',
	),
	array(
		"type" 			=> "textfield",
		"heading" 		=> __( 'Link Target', 'ich-vc' ),
		"param_name" 	=> "caption_url_target",
		"description" 	=> __( 'Write _blank to open link in new window', 'ich-vc' ),
		"group" 		=> 'Caption',
	),

	/* Border */

	array(
		"type" 			=> "textfield",
		"heading" 		=> __( 'Border Width', 'ich-vc' ),
		"param_name" 	=> "border_width",
		"description" 	=> __( 'Width of border, eg: 15px. Leaving blank will disable border', 'ich-vc' ),
		"group" 		=> 'Border',
	),

	array(
		"type" 			=> "dropdown",
		"heading" 		=> __( 'Border Style', 'ich-vc' ),
		"param_name" 	=> "border_type",
		"description" 	=> __( 'Choose border type', 'ich-vc' ),
		"group" 		=> 'Border',
		"value" 		=> array(
				"Solid"		=> "solid", 
				"Dotted (Pro Feature)" 	=> "dotted", 
				"Dashed (Pro Feature)" 	=> "dashed", 
				"Double (Pro Feature)" 	=> "double",
				"Groove (Pro Feature)" 	=> "groove", 
				"Ridge (Pro Feature)"  	=> "ridge",
				"Inset (Pro Feature)"  	=> "inset", 
				"Outset (Pro Feature)"	=> "outset"
		)
	),

	array(
		"type" 			=> "colorpicker",
		"heading" 		=> __( 'Border Color', 'ich-vc' ),
		"param_name" 	=> "border_color",
		"description" 	=> __( 'Select the color for border', 'ich-vc' ),
		"group" 		=> 'Border',
	),

	array(
		"type" 			=> "textfield",
		"heading" 		=> __( 'Border Radius', 'ich-vc' ),
		"param_name" 	=> "border_radius",
		"description" 	=> __( 'Radius of border eg: 5px or 50%. It will work in Pro Version. ', 'ich-vc' ). ' <a target="_blank" href="http://codecanyon.net/item/image-caption-hover-pro-for-visual-composer/16572802?ref=Rameez_Iqbal">Buy Now</a>',
		"group" 		=> 'Border',
	),

	array(
		"type" 			=> "textfield",
		"heading" 		=> __( 'Shadow', 'ich-vc' ),
		"param_name" 	=> "border_shadow",
		"description" 	=> __( 'Box Shadow for border. (h-shadow v-shadow blur spread color). It will work in Pro Version ', 'ich-vc' ) . ' <a target="_blank" href="http://codecanyon.net/item/image-caption-hover-pro-for-visual-composer/16572802?ref=Rameez_Iqbal">Buy Now</a>',
		"group" 		=> 'Border',
	),

	array(
		"type" 			=> "dropdown",
		"heading" 		=> __( 'Hover Effect', 'ich-vc' ),
		"param_name" 	=> "hover_effect",
		"description" 	=> __( 'Choose hover effect', 'ich-vc' ),
		"group" 		=> 'Hover Effects',
		"value" 		=> $hoverEffects,
	),

	array(
		"type" 			=> "textfield",
		"heading" 		=> __( 'Animation Speed', 'ich-vc' ),
		"param_name" 	=> "anim_speed",
		"description" 	=> __( 'Eg: 1s or 500ms. It will work in Pro Version', 'ich-vc' ) . ' <a target="_blank" href="http://codecanyon.net/item/image-caption-hover-pro-for-visual-composer/16572802?ref=Rameez_Iqbal">Buy Now</a>',
		"group" 		=> 'Hover Effects',
	),
);

?>