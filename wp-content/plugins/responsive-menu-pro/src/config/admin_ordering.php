<?php

$menus_array = [];
foreach(get_terms('nav_menu') as $menu) $menus_array[] = [ 'value' => $menu->slug, 'display' => $menu->name];
foreach(get_registered_nav_menus() as $location => $menu) $location_menus[] = ['value' => $location, 'display' => $menu];
$location_menus[] = ['value' => '', 'display' => 'None'];

$order_mapping = [

  /*
  *
  * LICENSE
  *
  */

  __('License', 'responsive-menu-pro') =>  [
    __('License Key', 'responsive-menu-pro') =>
      [
        [
          'option' => 'license_key',
          'title' => __('License Key', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'license'
        ],
      ],
    ],


      /*
      *
      * INITIAL SETUP
      *
      */

      __('Initial Setup', 'responsive-menu-pro') => [
        __('Menu', 'responsive-menu-pro') =>
        [
          [
            'option' => 'breakpoint',
            'title' => __('Breakpoint', 'responsive-menu-pro'),
            'label' => __('This is the width of the screen at which point you would like the menu to start showing', 'responsive-menu-pro'),
            'unit' => 'px'
          ],
          [
            'option' => 'menu_to_use',
            'title' => __('Menu to Use', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'select',
            'select' => $menus_array
          ],
          [
            'option' => 'menu_to_hide',
            'title' => __('CSS of Menu to Hide', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro')
          ]
        ]
      ],


  /*
  *
  * MENU
  *
  */

  __('Menu', 'responsive-menu-pro') =>  [
    __('Section Ordering', 'responsive-menu-pro') => [
        [
          'option' => 'items_order',
          'title' => __('Order of Menu Items', 'responsive-menu-pro'),
          'label' => __('Drag the items to re-order and click to turn them on/off', 'responsive-menu-pro'),
          'type' => 'menu_ordering'
        ]
    ],
    __('Font Icons', 'responsive-menu-pro') =>
      [
        [
          'option' => 'menu_font_icons',
          'title' => __('Font Icons', 'responsive-menu-pro'),
          'label' => __('Responsive Menu uses the brilliant <a href="http://fontawesome.io/icons/" target="_blank">Awesome Font Icons</a> for implementing icons in your menu - for more info please visit our doc pages at <a href="https://responsive.menu/docs/basic-setup/font-icons/" target="_blank">https://responsive.menu/docs/basic-setup/font-icons/</a>', 'responsive-menu-pro'),
          'type' => 'fonticons',
          'pro' => true
        ]
      ],
    __('Sizing', 'responsive-menu-pro') =>
      [
        [
          'option' => 'menu_width',
          'title' => __('Menu Width', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => '%'
        ],
        [
          'option' => 'menu_maximum_width',
          'title' => __('Maximum Width', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],
        [
          'option' => 'menu_minimum_width',
          'title' => __('Minimum Width', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],
        [
          'option' => 'menu_links_height',
          'title' => __('Links Height', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],
        [
          'option' => 'menu_auto_height',
          'title' => __('Menu Auto Height', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'checkbox',
          'pro' => true
        ],
      ],
      __('Title', 'responsive-menu-pro') =>
        [
          [
            'option' => 'menu_title',
            'title' => __('Text', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro')
          ],
          [
            'option' => 'menu_title_link',
            'title' => __('Link', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
          ],
          [
            'option' => 'menu_title_link_location',
            'title' => __('Link Location', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'select',
            'select' => [
              ['value' => '_blank', 'display' => 'New Tab'],
              ['value' => '_self', 'display' => 'Same Page'],
              ['value' => '_parent', 'display' => 'Parent Page'],
              ['value' => '_top', 'display' => 'Full Window Body']
            ]
          ],
          [
            'option' => 'menu_title_font_size',
            'title' => __('Title Font Size', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'unit' => 'px'
          ],
          [
            'option' => 'menu_title_font_icon',
            'title' => __('Font Icon', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'pro' => true
          ],
          [
            'option' => 'menu_title_image',
            'title' => __('Image', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'image'
          ],
          [
            'option' => 'menu_title_background_colour',
            'title' => __('Title Background Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_title_background_hover_colour',
            'title' => __('Title Background Colour Hover', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_title_colour',
            'title' => __('Title Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_title_hover_colour',
            'title' => __('Title Hover Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ]

        ],
    __('Additional Content', 'responsive-menu-pro') =>
      [
        [
          'option' => 'menu_additional_content',
          'title' => __('Text', 'responsive-menu-pro'),
          'label' => __('HTMl and Shortcodes can be used', 'responsive-menu-pro'),
          'type' => 'textarea'
        ],
        [
          'option' => 'menu_additional_content_colour',
          'title' => __('Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu'),
          'type' => 'colour'
        ],
      ],
    __('Animation', 'responsive-menu-pro') =>
      [
        [
          'option' => 'menu_appear_from',
          'title' => __('Appear From', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'select',
          'select' => [
            ['value' => 'top', 'display' => 'Top'],
            ['value' => 'left', 'display' => 'Left'],
            ['value' => 'right', 'display' => 'Right'],
            ['value' => 'bottom', 'display' => 'Bottom']
          ],
        ],
        [
          'option' => 'animation_type',
          'title' => __('Animation Type', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'select',
          'semi_pro' => true,
          'select' => [
            ['value' => 'slide',  'display' => 'Slide'],
            ['value' => 'push', 'display' => 'Push'],
            ['value' => 'fade', 'display' => 'Fade', 'disabled' => true]
          ]
        ],
        [
          'option' => 'page_wrapper',
          'title' => __('Page Wrapper CSS selector', 'responsive-menu-pro'),
          'label' => __('This is only needed if you are using the push animation above', 'responsive-menu-pro')
        ],
        [
          'option' => 'menu_close_on_body_click',
          'title' => __('Close Menu on Body Clicks', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'checkbox'
        ],
        [
          'option' => 'menu_close_on_link_click',
          'title' => __('Close Menu on Link Clicks', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'checkbox'
        ],
      ],
    __('Search Box', 'responsive-menu-pro') =>
      [
        [
          'option' => 'menu_search_box_text',
          'title' => __('Text', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'pro' => true
        ],
        [
          'option' => 'menu_search_box_text_colour',
          'title' => __('Text Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour'
        ],
        [
          'option' => 'menu_search_box_border_colour',
          'title' => __('Border Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour'
        ],
        [
          'option' => 'menu_search_box_background_colour',
          'title' => __('Background Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour'
        ],
        [
          'option' => 'menu_search_box_placholder_colour',
          'title' => __('Placeholder Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour'
        ]

      ],
    __('Background Colours', 'responsive-menu-pro') =>
      [
        [
          'option' => 'menu_background_colour',
          'title' => __('Background Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'semi_pro' => true
        ],
        [
          'option' => 'menu_item_background_colour',
          'title' => __('Item Background Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'semi_pro' => true
        ],
        [
          'option' => 'menu_item_background_hover_colour',
          'title' => __('Item Background Colour Hover', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'semi_pro' => true
        ],
        [
          'option' => 'menu_item_border_colour',
          'title' => __('Item Border Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'semi_pro' => true
        ],
        [
          'option' => 'menu_item_border_colour_hover',
          'title' => __('Item Border Colour Hover', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'semi_pro' => true
        ],
        [
          'option' => 'menu_current_item_background_colour',
          'title' => __('Current Item Background Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'semi_pro' => true
        ],
        [
          'option' => 'menu_current_item_background_hover_colour',
          'title' => __('Current Item Background Colour Hover', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'semi_pro' => true
        ],
      ],
      __('Text Colours', 'responsive-menu-pro') =>
        [

          [
            'option' => 'menu_link_colour',
            'title' => __('Link Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_link_hover_colour',
            'title' => __('Link Hover Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_current_link_colour',
            'title' => __('Current Link Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_current_link_hover_colour',
            'title' => __('Current Link Hover Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],

        ],
        __('Text Styling', 'responsive-menu-pro') =>
          [
            [
              'option' => 'menu_font',
              'title' => __('Font', 'responsive-menu-pro'),
              'label' => __('', 'responsive-menu-pro')
            ],
            [
              'option' => 'menu_font_size',
              'title' => __('Font Size', 'responsive-menu-pro'),
              'label' => __('', 'responsive-menu-pro'),
              'unit' => 'px'
            ],
            [
              'option' => 'menu_text_alignment',
              'title' => __('Text Alignment', 'responsive-menu-pro'),
              'label' => __('', 'responsive-menu-pro'),
              'type' => 'select',
              'select' => [
                ['value' => 'left', 'display' => 'Left'],
                ['value' => 'right', 'display' => 'Right'],
                ['value' => 'center', 'display' => 'Centred'],
                ['value' => 'justify', 'display' => 'Justified']
              ]
            ],
            [
              'option' => 'menu_word_wrap',
              'title' => __('Word Wrap', 'responsive-menu-pro'),
              'label' => __('', 'responsive-menu-pro'),
              'type' => 'checkbox',
              'pro' => true
            ],
          ],
          __('Page Overlay', 'responsive-menu-pro') =>
            [
              [
                'option' => 'menu_overlay',
                'title' => __('Add Page Overlay When Menu Open', 'responsive-menu-pro'),
                'label' => __('', 'responsive-menu-pro'),
                'type' => 'checkbox',
                'pro' => true
              ],
              [
                'option' => 'menu_overlay_colour',
                'title' => __('Overlay Colour', 'responsive-menu-pro'),
                'label' => __('', 'responsive-menu-pro'),
                'type' => 'colour',
                'pro' => true
              ],
            ],
          __('Advanced', 'responsive-menu-pro') =>
            [
              [
                'option' => 'menu_depth',
                'title' => __('Depth', 'responsive-menu-pro'),
                'label' => __('', 'responsive-menu-pro'),
                'type' => 'select',
                'select' => [
                  ['value' => 1, 'display' => 1],
                  ['value' => 2, 'display' => 2],
                  ['value' => 3, 'display' => 3],
                  ['value' => 4, 'display' => 4],
                  ['value' => 5, 'display' => 5],
                ]
              ],
              [
                'option' => 'menu_disable_scrolling',
                'title' => __('Disable Scrolling when Menu Active', 'responsive-menu-pro'),
                'label' => __('', 'responsive-menu-pro'),
                'type' => 'checkbox',
                'pro' => true
              ],
              [
                'option' => 'theme_location_menu',
                'title' => __('Theme Location Menu', 'responsive-menu-pro'),
                'label' => __('', 'responsive-menu-pro'),
                'type' => 'select',
                'select' => $location_menus
              ]
            ],
  ],

    /*
    *
    * BUTTON
    *
    */

    __('Button', 'responsive-menu-pro') => [
      __('Animation', 'responsive-menu-pro') =>
      [
        [
          'option' => 'button_click_animation',
          'title' => __('Animation Type', 'responsive-menu-pro'),
          'label' => __('To see all animations in action please visit <a href="https://jonsuh.com/hamburgers/" target="_blank">this page</a>', 'responsive-menu-pro'),
          'type' => 'select',
          'select' => [
            ['value' => 'off', 'display' => 'Off'],
            ['value' => '3dx', 'display' => '3DX', 'disabled' => true],
            ['value' => '3dx-r', 'display' => '3DX Reverse', 'disabled' => true],
            ['value' => '3dy', 'display' => '3DY', 'disabled' => true],
            ['value' => '3dy-r', 'display' => '3DY Reverse', 'disabled' => true],
            ['value' => 'arrow', 'display' => 'Arrow', 'disabled' => true],
            ['value' => 'arrow-r', 'display' => 'Arrow Reverse', 'disabled' => true],
            ['value' => 'arrowalt', 'display' => 'Arrow Alt', 'disabled' => true],
            ['value' => 'arrowalt-r', 'display' => 'Arrow Alt Reverse', 'disabled' => true],
            ['value' => 'boring', 'display' => 'Boring'],
            ['value' => 'collapse', 'display' => 'Collapse', 'disabled' => true],
            ['value' => 'collapse-r', 'display' => 'Collapse Reverse', 'disabled' => true],
            ['value' => 'elastic', 'display' => 'Elastic', 'disabled' => true],
            ['value' => 'elastic-r', 'display' => 'Elastic Reverse', 'disabled' => true],
            ['value' => 'emphatic', 'display' => 'Emphatic', 'disabled' => true],
            ['value' => 'emphatic-r', 'display' => 'Emphatic Reverse', 'disabled' => true],
            ['value' => 'slider', 'display' => 'Slider', 'disabled' => true],
            ['value' => 'slider-r', 'display' => 'Slider Reverse', 'disabled' => true],
            ['value' => 'spin', 'display' => 'Spin', 'disabled' => true],
            ['value' => 'spin-r', 'display' => 'Spin Reverse', 'disabled' => true],
            ['value' => 'spring', 'display' => 'Spring', 'disabled' => true],
            ['value' => 'spring-r', 'display' => 'Spring Reverse', 'disabled' => true],
            ['value' => 'stand', 'display' => 'Stand', 'disabled' => true],
            ['value' => 'stand-r', 'display' => 'Stand Reverse', 'disabled' => true],
            ['value' => 'squeeze', 'display' => 'Squeeze', 'disabled' => true],
            ['value' => 'vortex', 'display' => 'Vortex', 'disabled' => true],
            ['value' => 'vortex-r', 'display' => 'Vortex Reverse', 'disabled' => true]
          ],
          'semi_pro' => true
        ],
        [
          'option' => 'button_position_type',
          'title' => __('Position Type', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'select',
          'select' => [
            ['value' => 'absolute', 'display' => 'Absolute'],
            ['value' => 'fixed', 'display' => 'Fixed'],
            ['value' => 'relative', 'display' => 'Relative']
          ]
        ],
        [
          'option' => 'button_push_with_animation',
          'title' => __('Push Button with Animation', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'checkbox'
        ],
      ],
      __('Location', 'responsive-menu-pro') =>
      [
        [
          'option' => 'button_distance_from_side',
          'title' => __('Distance from Side', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => '%'
        ],
        [
          'option' => 'button_left_or_right',
          'title' => __('Button Side', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'select',
          'select' => [
            ['value' => 'left', 'display' => 'Left'],
            ['value' => 'right', 'display' => 'Right']
          ]
        ],
        [
          'option' => 'button_top',
          'title' => __('Distance from Top', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],
      ],
      __('Container Sizing', 'responsive-menu-pro') =>
      [
        [
          'option' => 'button_height',
          'title' => __('Height', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],
        [
          'option' => 'button_width',
          'title' => __('Width', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],
      ],
      __('Hamburger Sizing', 'responsive-menu-pro') =>
      [
        [
          'option' => 'button_line_height',
          'title' => __('Line Height', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],
        [
          'option' => 'button_line_margin',
          'title' => __('Line Margin', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],
        [
          'option' => 'button_line_width',
          'title' => __('Line Width', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px'
        ],

      ],
      __('Background Colours', 'responsive-menu-pro') => [
          [
            'option' => 'button_background_colour',
            'title' => __('Background Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'button_background_colour_hover',
            'title' => __('Background Hover Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'button_transparent_background',
            'title' => __('Transparent Background', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'checkbox'
          ]
        ],
        __('Line Colours', 'responsive-menu-pro') => [
          [
            'option' => 'button_line_colour',
            'title' => __('Line Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
        ],
        __('Title', 'responsive-menu-pro') => [
          [
            'option' => 'button_title',
            'title' => __('Text', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
          ],
          [
            'option' => 'button_text_colour',
            'title' => __('Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'button_title_position',
            'title' => __('Title Text Position', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'select',
            'select' => [
              ['value' => 'left', 'display' => 'Left'],
              ['value' => 'right', 'display' => 'Right'],
              ['value' => 'top', 'display' => 'Top'],
              ['value' => 'bottom', 'display' => 'Bottom']
            ]
          ],
          [
            'option' => 'button_font',
            'title' => __('Font', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
          ],
          [
            'option' => 'button_font_size',
            'title' => __('Font Size', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'unit' => 'px'
          ],
          [
            'option' => 'button_title_line_height',
            'title' => __('Line Height', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'unit' => 'px'
          ],
      ],
      __('Image', 'responsive-menu-pro') =>
        [
          [
            'option' => 'button_font_icon',
            'title' => __('Font Icon', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'pro' => true
          ],
          [
            'option' => 'button_font_icon_when_clicked',
            'title' => __('Font Icon When Clicked', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'pro' => true
          ],
          [
            'option' => 'button_image',
            'title' => __('Image', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'image'
          ],
          [
            'option' => 'button_image_when_clicked',
            'title' => __('Image When Clicked', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'image'
          ]
        ],
        __('Advanced', 'responsive-menu-pro') =>
        [
          [
            'option' => 'button_click_trigger',
            'title' => __('Trigger', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
          ],
        ],
    ],

/*
*
* SUB MENUS
*
*/
    __('Sub-Menus', 'responsive-menu-pro') => [

      __('Toggle Button Colours', 'responsive-menu-pro') =>
        [
          [
            'option' => 'menu_sub_arrow_background_colour',
            'title' => __('Background Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_sub_arrow_background_hover_colour',
            'title' => __('Background Hover Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_sub_arrow_border_colour',
            'title' => __('Border Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_sub_arrow_border_hover_colour',
            'title' => __('Border Hover Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
        ],
      __('Toggle Icon Colours', 'responsive-menu-pro') =>
        [
          [
            'option' => 'menu_sub_arrow_shape_colour',
            'title' => __('Icon Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
          [
            'option' => 'menu_sub_arrow_shape_hover_colour',
            'title' => __('Icon Hover Colour', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'colour',
            'semi_pro' => true
          ],
        ],
      __('Animations', 'responsive-menu-pro') =>
        [
          [
            'option' => 'accordion_animation',
            'title' => __('Use Accordion Animation', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'checkbox'
          ],
          [
            'option' => 'auto_expand_all_submenus',
            'title' => __('Auto Expand All Submenus', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'checkbox'
          ],
          [
            'option' => 'auto_expand_current_submenus',
            'title' => __('Auto Expand Current Submenus', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'checkbox'
          ],
          [
            'option' => 'menu_item_click_to_trigger_submenu',
            'title' => __('Disable Parent Item Clicks', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'checkbox'

          ],
        ],



      __('Sizing', 'responsive-menu-pro') =>
        [
          [
            'option' => 'submenu_arrow_height',
            'title' => __('Toggle Button Height', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'unit' => 'px'
          ],
          [
            'option' => 'submenu_arrow_width',
            'title' => __('Toggle Button Width', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'unit' => 'px'
          ],

        ],
      __('Toggle Icons', 'responsive-menu-pro') =>
        [
          [
            'option' => 'active_arrow_font_icon',
            'title' => __('Font Icon Active', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'pro' => true
          ],
          [
            'option' => 'inactive_arrow_font_icon',
            'title' => __('Font Icon Inactive', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'pro' => true
          ],
          [
            'option' => 'active_arrow_shape',
            'title' => __('HTML Shape Active', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro')
          ],
          [
            'option' => 'inactive_arrow_shape',
            'title' => __('HTML Shape Inactive', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro')
          ],
          [
            'option' => 'active_arrow_image',
            'title' => __('Image Active', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'image'
          ],
          [
            'option' => 'inactive_arrow_image',
            'title' => __('Image Inactive', 'responsive-menu-pro'),
            'label' => __('', 'responsive-menu-pro'),
            'type' => 'image'
          ]
        ],
      ],

  /*
  *
  * TECHNICAL
  *
  */

  __('Technical', 'responsive-menu-pro') => [
    __('Scripts', 'responsive-menu-pro') => [
        [
          'option' => 'external_files',
          'title' => __('Use External Files?', 'responsive-menu-pro'),
          'label' => __('This will create external files for CSS and JavaScript', 'responsive-menu-pro'),
          'type' => 'checkbox'
        ],
        [
          'option' => 'minify_scripts',
          'title' => __('Minify Scripts?', 'responsive-menu-pro'),
          'label' => __('This will minify CSS and JavaScript output', 'responsive-menu-pro'),
          'type' => 'checkbox'
        ],
        [
          'option' => 'scripts_in_footer',
          'title' => __('Place Scripts In Footer?', 'responsive-menu-pro'),
          'label' => __('This will place the JavaScript file in the footer', 'responsive-menu-pro'),
          'type' => 'checkbox'
        ]
    ],
    __('Menu', 'responsive-menu-pro') => [
        [
          'option' => 'custom_walker',
          'title' => __('Custom Walker', 'responsive-menu-pro'),
          'label' => __('Warning: For extremely advanced use only', 'responsive-menu-pro'),
        ],
        [
          'option' => 'mobile_only',
          'title' => __('Show on mobile devices only?', 'responsive-menu-pro'),
          'label' => __('This will make it not a responsive menu but a "mobile menu"', 'responsive-menu-pro'),
          'type' => 'checkbox',
          'pro' => true
        ],
        [
          'option' => 'shortcode',
          'title' => __('Use Shortcode?', 'responsive-menu-pro'),
          'label' => __('Please place [responsive_menu_pro] in your files to use. Full documentation can be found <a target="_blank" href="https://responsive.menu/docs/advanced-setup/shortcode/">here</a>', 'responsive-menu-pro'),
          'type' => 'checkbox'
        ]
    ],
    __('Animation Speeds', 'responsive-menu-pro') =>
    [
      [
        'option' => 'animation_speed',
        'title' => __('Animation Speed', 'responsive-menu-pro'),
        'label' => __('', 'responsive-menu-pro'),
        'unit' => 's'
      ],
      [
        'option' => 'transition_speed',
        'title' => __('Transition Speed', 'responsive-menu-pro'),
        'label' => __('', 'responsive-menu-pro'),
        'unit' => 's'
      ]
    ],
  ],
  /*
  *
  * CUSTOM CSS
  *
  */

  __('Custom CSS', 'responsive-menu-pro') => [
    __('CSS', 'responsive-menu-pro') => [
        [
          'option' => 'custom_css',
          'title' => __('Custom CSS', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'textarea',
          'pro' => true
        ]
    ]
  ],
  /*
  *
  * HEADER BAR
  *
  */
  __('Header Bar', 'responsive-menu-pro') => [
    __('Setup', 'responsive-menu-pro') => [
        [
          'option' => 'use_header_bar',
          'title' => __('Use Header Bar', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'checkbox',
          'pro' => true
        ],
        [
          'option' => 'header_bar_position_type',
          'title' => __('Position Type', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'select',
          'select' => [
              ['value' => 'fixed', 'display' => 'Fixed'],
              ['value' => 'relative', 'display' => 'Relative'],
              ['value' => 'absolute', 'display' => 'Absolute']
          ],
          'pro' => true
        ],
        [
          'option' => 'header_bar_breakpoint',
          'title' => __('Breakpoint', 'responsive-menu'),
          'label' => __('', 'responsive-menu'),
          'pro' => true
        ],
      ],
    __('Ordering', 'responsive-menu-pro') => [
        [
          'option' => 'header_bar_items_order',
          'title' => __('Ordering', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'header_ordering',
          'pro' => true
        ]
      ],
    __('Logo', 'responsive-menu-pro') => [
        [
          'option' => 'header_bar_logo',
          'title' => __('Image', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'image',
          'pro' => true
        ],
        [
          'option' => 'header_bar_logo_link',
          'title' => __('Link', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'pro' => true
        ],
      ],
    __('Title', 'responsive-menu-pro') => [
        [
          'option' => 'header_bar_title',
          'title' => __('Title', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'pro' => true
        ]
      ],
    __('Content', 'responsive-menu-pro') => [
        [
          'option' => 'header_bar_html_content',
          'title' => __('HTML Content', 'responsive-menu-pro'),
          'label' => __('Accepts shortcodes', 'responsive-menu-pro'),
          'type' => 'textarea',
          'pro' => true
        ]
      ],
    __('Text', 'responsive-menu-pro') => [
        [
          'option' => 'header_bar_font',
          'title' => __('Font', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'pro' => true
        ],
        [
          'option' => 'header_bar_font_size',
          'title' => __('Font Size', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px',
          'pro' => true
        ],
      ],
    __('Sizing', 'responsive-menu-pro') => [
        [
          'option' => 'header_bar_height',
          'title' => __('Height', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px',
          'pro' => true
        ],
      ],
    __('Colours', 'responsive-menu-pro') => [
        [
          'option' => 'header_bar_background_color',
          'title' => __('Background Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ],
        [
          'option' => 'header_bar_text_color',
          'title' => __('Text Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ],
      ],
  ],

  /*
  *
  * SINGLE MENU
  *
  */
  __('Single Menu', 'responsive-menu-pro') => [
    __('Setup', 'responsive-menu-pro') => [
        [
          'option' => 'use_single_menu',
          'title' => __('Use Single Menu', 'responsive-menu-pro'),
          'label' => __('To use this option you must turn the Shortcode option on and use the shortcode in your theme where you want the menu to appear', 'responsive-menu-pro'),
          'type' => 'checkbox',
          'pro' => true
        ]
    ],
    __('Menu Colours', 'responsive-menu-pro') => [
        [
          'option' => 'single_menu_item_background_colour',
          'title' => __('Background Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ],
        [
          'option' => 'single_menu_item_background_colour_hover',
          'title' => __('Background Hover Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ],
        [
          'option' => 'single_menu_item_link_colour',
          'title' => __('Text Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ],
        [
          'option' => 'single_menu_item_link_colour_hover',
          'title' => __('Text Hover Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ]
    ],
    __('Sub-Menu Colours', 'responsive-menu-pro') => [
        [
          'option' => 'single_menu_item_submenu_background_colour',
          'title' => __('Background Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ],
        [
          'option' => 'single_menu_item_submenu_background_colour_hover',
          'title' => __('Background Hover Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ],
        [
          'option' => 'single_menu_item_submenu_link_colour',
          'title' => __('Text Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ],
        [
          'option' => 'single_menu_item_submenu_link_colour_hover',
          'title' => __('Text Hover Colour', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'colour',
          'pro' => true
        ]
    ],
    __('Menu Styling', 'responsive-menu-pro') => [
        [
          'option' => 'single_menu_font',
          'title' => __('Font', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'pro' => true
        ],
        [
          'option' => 'single_menu_font_size',
          'title' => __('Font Size', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px',
          'pro' => true
        ]
    ],
    __('Sub-Menu Styling', 'responsive-menu-pro') => [
        [
          'option' => 'single_menu_submenu_font',
          'title' => __('Font', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'pro' => true
        ],
        [
          'option' => 'single_menu_submenu_font_size',
          'title' => __('Font Size', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px',
          'pro' => true
        ]
    ],
    __('Menu Sizing', 'responsive-menu-pro') => [
        [
          'option' => 'single_menu_height',
          'title' => __('Height', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px',
          'pro' => true
        ]
    ],
    __('Sub-Menu Sizing', 'responsive-menu-pro') => [
        [
          'option' => 'single_menu_submenu_height',
          'title' => __('Height', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'unit' => 'px',
          'pro' => true
        ]
    ]
  ],
  'Import/Export' => [
    __('Import/Export', 'responsive-menu-pro') => [
        [
          'option' => 'import',
          'title' => __('Import', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'import'
        ],
        [
          'option' => 'export',
          'title' => __('Export', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'export'
        ],
        [
          'option' => 'reset',
          'title' => __('Reset', 'responsive-menu-pro'),
          'label' => __('', 'responsive-menu-pro'),
          'type' => 'reset'
        ]
    ]
  ]
];
