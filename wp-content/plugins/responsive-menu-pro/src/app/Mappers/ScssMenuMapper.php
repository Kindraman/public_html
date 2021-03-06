<?php

namespace ResponsiveMenuPro\Mappers;

class ScssMenuMapper extends ScssMapper
{

  public function map()
  {

    $css = <<<CSS

    @media screen and ( max-width: {$this->options['breakpoint']}px ) {

      @if '{$this->options['menu_close_on_body_click']}' == 'on' {
        html.responsive-menu-pro-open {
          cursor: pointer;
          #responsive-menu-pro-container {
            cursor: initial;
          }
        }
      }

      .responsive-menu-pro-fade-top,
      .responsive-menu-pro-fade-left,
      .responsive-menu-pro-fade-right,
      .responsive-menu-pro-fade-bottom {
        #responsive-menu-pro-container {
          display: none;
        }
      }

      #responsive-menu-pro-mask {
        transition: background-color {$this->options['animation_speed']}s,
        width 0s {$this->options['animation_speed']}s,
        height 0s{$this->options['animation_speed']}s;
        .responsive-menu-pro-open & {
          background-color: {$this->options['menu_overlay_colour']};
          transition: background-color {$this->options['animation_speed']}s;
        }
      }

      @if '{$this->options['page_wrapper']}' != '' {
        & {$this->options['page_wrapper']} {
          transition: transform {$this->options['animation_speed']}s;
        }
        html.responsive-menu-pro-open,
        .responsive-menu-pro-open body {
          width: 100%;
        }
      }

      #responsive-menu-pro-container {
        width: {$this->options['menu_width']}%;
        {$this->options['menu_appear_from']}: 0;
        @if '{$this->options['menu_auto_height']}' == 'off' {
          background: {$this->options['menu_background_colour']};
        }
        transition: transform {$this->options['animation_speed']}s;
        text-align: {$this->options['menu_text_alignment']};

        & #responsive-menu-pro-wrapper {
          background: {$this->options['menu_background_colour']};
        }

        #responsive-menu-pro-additional-content {
          color: {$this->options['menu_additional_content_colour']};
        }

        .responsive-menu-pro-search-box {
          background: {$this->options['menu_search_box_background_colour']};
          border: 2px solid {$this->options['menu_search_box_border_colour']};
          color: {$this->options['menu_search_box_text_colour']};
          &:-ms-input-placeholder {
            color: {$this->options['menu_search_box_placholder_colour']};
          }
          &:-webkit-input-placeholder {
            color: {$this->options['menu_search_box_placholder_colour']};
          }
          &:-moz-placeholder {
            color: {$this->options['menu_search_box_placholder_colour']};
            opacity: 1;
          }
          &::-moz-placeholder {
            color: {$this->options['menu_search_box_placholder_colour']};
            opacity: 1;
          }
        }



        @if '{$this->options['menu_auto_height']}' == 'on' {
          @if '{$this->options['menu_appear_from']}' == 'bottom' {
            top: auto;
          } @else {
            bottom: '';
          }
        }

        @if '{$this->options['menu_maximum_width']}' != '' {
          max-width: {$this->options['menu_maximum_width']}px;
        }
        @if '{$this->options['menu_minimum_width']}' != '' {
          min-width: {$this->options['menu_minimum_width']}px;
        }

        @if '{$this->options['menu_font']}' != '' {
          font-family: '{$this->options['menu_font']}';
        }

        & a, & #responsive-menu-pro-title, & .responsive-menu-pro-subarrow {
          transition: all {$this->options['transition_speed']}s;
        }

        #responsive-menu-pro-title {
          background-color: {$this->options['menu_title_background_colour']};
          color: {$this->options['menu_title_colour']};
          font-size: {$this->options['menu_title_font_size']}px;
          a {
            color: {$this->options['menu_title_colour']};
            text-decoration: none;
            &:hover {
              color: {$this->options['menu_title_hover_colour']};
            }
          }
          &:hover {
            background-color: {$this->options['menu_title_background_hover_colour']};
            color: {$this->options['menu_title_hover_colour']};
            a {
              color: {$this->options['menu_title_hover_colour']};
            }
          }
          #responsive-menu-pro-title-image {
            display: inline-block;
            vertical-align: middle;
            margin-right: 15px;
          }
        }

        #responsive-menu-pro {

          li.responsive-menu-pro-item {
            .responsive-menu-pro-item-link {
              font-size: {$this->options['menu_font_size']}px;
            }
            a {
              line-height: {$this->options['menu_links_height']}px;
              border: 1px solid {$this->options['menu_item_border_colour']};
              color: {$this->options['menu_link_colour']};
              background-color: {$this->options['menu_item_background_colour']};
              @if '{$this->options['menu_word_wrap']}' != 'off' {
                word-wrap: break-word;
              }
              &:hover {
                color: {$this->options['menu_link_hover_colour']};
                background-color: {$this->options['menu_item_background_hover_colour']};
                border-color: {$this->options['menu_item_border_colour_hover']};
                .responsive-menu-pro-subarrow {
                  color: {$this->options['menu_sub_arrow_shape_hover_colour']};
                  border-color: {$this->options['menu_sub_arrow_border_hover_colour']};
                  background-color: {$this->options['menu_sub_arrow_background_hover_colour']};
                }
              }

              .responsive-menu-pro-subarrow {
                height: {$this->options['submenu_arrow_height']}px;
                line-height: {$this->options['submenu_arrow_height']}px;
                width: {$this->options['submenu_arrow_width']}px;
                color: {$this->options['menu_sub_arrow_shape_colour']};
                border-left: 1px solid {$this->options['menu_sub_arrow_border_colour']};
                background-color: {$this->options['menu_sub_arrow_background_colour']};

                  &:hover {
                    color: {$this->options['menu_sub_arrow_shape_hover_colour']};
                    border-color: {$this->options['menu_sub_arrow_border_hover_colour']};
                    background-color: {$this->options['menu_sub_arrow_background_hover_colour']};
                  }
              }
            }
            &.responsive-menu-pro-current-item > .responsive-menu-pro-item-link {
              background-color: {$this->options['menu_current_item_background_colour']};
              color: {$this->options['menu_current_link_colour']};
              &:hover {
                background-color: {$this->options['menu_current_item_background_hover_colour']};
                color: {$this->options['menu_current_link_hover_colour']};
              }
            }
          }
        }
      }
        @if '{$this->options['menu_to_hide']}' != '' {
          & {$this->options['menu_to_hide']} {
            display: none;
          }
        }
      }

CSS;

    return $this->compiler->compile($css);
  }

}
