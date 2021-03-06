<?php

namespace ResponsiveMenuPro\Mappers;

class ScssSingleMenuMapper extends ScssMapper
{

  public function map()
  {

    $css = <<<CSS
      #responsive-menu-pro-container.responsive-menu-pro-no-transition {
          transition: none;
      }
      @media screen and (min-width: {$this->options['breakpoint']}px) {
        #responsive-menu-pro-container {
          display: block;
          & div {
            display: none;
          }
          & #responsive-menu-pro-wrapper,
          & #responsive-menu-pro {
            display: block;
          }
        }
        #responsive-menu-pro {
          list-style-type: none;
          margin: 0;
          li {
            box-sizing: border-box;
            display: inline-block;
            position: relative;
            white-space: nowrap;
            margin: 0;
            a {
              line-height: {$this->options['single_menu_height']}px;
              color: {$this->options['single_menu_item_link_colour']};
              background: {$this->options['single_menu_item_background_colour']};
              text-decoration: none;
              transition: color, background {$this->options['transition_speed']}s;
              display: block;
              padding: 0 15px;
              .fa {
                margin-right: 5px;
              }
              &:hover {
                color: {$this->options['single_menu_item_link_colour_hover']};
                background: {$this->options['single_menu_item_background_colour_hover']};
              }
              font-size: {$this->options['single_menu_font_size']}px;
              @if '{$this->options['single_menu_font']}' != '' {
                font-family: '{$this->options['single_menu_font']}';
              }
            }
            .responsive-menu-pro-submenu {
              display: none;
              position: absolute;
              margin: 0;
              top: {$this->options['single_menu_height']}px;
              li {
                display: block;
                width: 100%;
                a {
                  background: {$this->options['single_menu_item_submenu_background_colour']};
                  color: {$this->options['single_menu_item_submenu_link_colour']};
                  font-size: {$this->options['single_menu_submenu_font_size']}px;
                  line-height: {$this->options['single_menu_submenu_height']}px;
                  &:hover {
                    color: {$this->options['single_menu_item_submenu_link_colour_hover']};
                    background: {$this->options['single_menu_item_submenu_background_colour_hover']};
                  }
                  @if '{$this->options['single_menu_submenu_font']}' != '' {
                    font-family: '{$this->options['single_menu_submenu_font']}';
                  }
                }
                .responsive-menu-pro-submenu {
                  top: 0;
                  left: 100%;
                }
              }
            }
            &:hover > .responsive-menu-pro-submenu {
              display: block;
            }
          }
        }

    }
CSS;

    return $this->compiler->compile($css);

  }

}
