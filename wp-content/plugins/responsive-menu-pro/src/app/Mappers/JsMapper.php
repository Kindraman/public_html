<?php

namespace ResponsiveMenuPro\Mappers;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class JsMapper
{
  public function __construct(OptionsCollection $options)
  {
    $this->options = $options;
  }

  public function map()
  {
    $animation_speed = $this->options['animation_speed'] ? $this->options['animation_speed']->getValue() * 1000 : 500;

    $js = <<<JS

    jQuery(document).ready(function($) {

      var ResponsiveMenuPro = {
        trigger: '{$this->options['button_click_trigger']}',
        animationSpeed: {$animation_speed},
        breakpoint: {$this->options['breakpoint']},
        pushButton: '{$this->options['button_push_with_animation']}',
        animationType: '{$this->options['animation_type']}',
        animationSide: '{$this->options['menu_appear_from']}',
        pageWrapper: '{$this->options['page_wrapper']}',
        disableScrolling: '{$this->options['menu_disable_scrolling']}',
        isOpen: false,
        triggerTypes: 'click',
        activeClass: 'is-active',
        container: '#responsive-menu-pro-container',
        openClass: 'responsive-menu-pro-open',
        accordion: '{$this->options['accordion_animation']}',
        activeArrow: '{$this->options->getActiveArrow()}',
        inactiveArrow: '{$this->options->getInActiveArrow()}',
        wrapper: '#responsive-menu-pro-wrapper',
        closeOnBodyClick: '{$this->options['menu_close_on_body_click']}',
        closeOnLinkClick: '{$this->options['menu_close_on_link_click']}',
        itemTriggerSubMenu: '{$this->options['menu_item_click_to_trigger_submenu']}',
        linkElement: '.responsive-menu-pro-item-link',
        isSingleMenu: '{$this->options['use_single_menu']}',
        openMenu: function() {
          $(this.trigger).addClass(this.activeClass);
          $('html').addClass(this.openClass);
          $('.responsive-menu-pro-button-icon-active').hide();
          $('.responsive-menu-pro-button-icon-inactive').show();
          if(this.isSingleMenu == 'on'){
            $(this.container).removeClass('responsive-menu-pro-no-transition');
          }
          if(this.animationType != 'fade') {
            this.setWrapperTranslate();
          } else {
            this.fadeMenuIn();
          }
          this.isOpen = true;
        },
        closeMenu: function() {
          $(this.trigger).removeClass(this.activeClass);
          $('html').removeClass(this.openClass);
          $('.responsive-menu-pro-button-icon-inactive').hide();
          $('.responsive-menu-pro-button-icon-active').show();
          if(this.animationType != 'fade') {
            this.clearWrapperTranslate();
          } else {
            this.fadeMenuOut();
          }
          this.isOpen = false;
        },
        triggerMenu: function() {
          this.isOpen ? this.closeMenu() : this.openMenu();
        },
        triggerSubArrow: function(subarrow) {
          var sub_menu = $(subarrow).parent().next('.responsive-menu-pro-submenu');
          var self = this;
          if(this.accordion == 'on') {
            /* Get Top Most Parent and the siblings */
            var top_siblings = sub_menu.parents('.responsive-menu-pro-item-has-children').last().siblings('.responsive-menu-pro-item-has-children');
            var first_siblings = sub_menu.parents('.responsive-menu-pro-item-has-children').first().siblings('.responsive-menu-pro-item-has-children');
            /* Close up just the top level parents to key the rest as it was */
            top_siblings.children('.responsive-menu-pro-submenu').slideUp(200, 'linear').removeClass('responsive-menu-pro-submenu-open');
            /* Set each parent arrow to inactive */
            top_siblings.each(function() {
              $(this).find('.responsive-menu-pro-subarrow').first().html(self.inactiveArrow);
            });
            /* Now Repeat for the current item siblings */
            first_siblings.children('.responsive-menu-pro-submenu').slideUp(200, 'linear').removeClass('responsive-menu-pro-submenu-open');
            first_siblings.each(function() {
              $(this).find('.responsive-menu-pro-subarrow').first().html(self.inactiveArrow);
            });
          }
          if(sub_menu.hasClass('responsive-menu-pro-submenu-open')) {
            sub_menu.slideUp(200, 'linear').removeClass('responsive-menu-pro-submenu-open');
            $(subarrow).html(this.inactiveArrow);
          } else {
            sub_menu.slideDown(200, 'linear').addClass('responsive-menu-pro-submenu-open');
            $(subarrow).html(this.activeArrow);
          }
        },
        menuHeight: function() {
          return $(this.container).height();
        },
        menuWidth: function() {
          return $(this.container).width();
        },
        wrapperHeight: function() {
          return $(this.wrapper).height();
        },
        setWrapperTranslate: function() {
          switch(this.animationSide) {
            case 'left':
              translate = 'translateX(' + this.menuWidth() + 'px)'; break;
            case 'right':
              translate = 'translateX(-' + this.menuWidth() + 'px)'; break;
            case 'top':
              translate = 'translateY(' + this.wrapperHeight() + 'px)'; break;
            case 'bottom':
              translate = 'translateY(-' + this.menuHeight() + 'px)'; break;
            }
            if(this.animationType == 'push') {
              $(this.pageWrapper).css({'transform':translate});
              $('html, body').css('overflow-x', 'hidden');
            }
            if(this.pushButton == 'on') {
              $('#responsive-menu-pro-button').css({'transform':translate});
            }
        },
        clearWrapperTranslate: function() {
          self = this;
          if(this.animationType == 'push') {
            $(this.pageWrapper).css({'transform':''});
            setTimeout(function() {
              $('html, body').css('overflow-x', '');
            }, self.animationSpeed);
          }
          if(this.pushButton == 'on') {
            $('#responsive-menu-pro-button').css({'transform':''});
          }
        },
        fadeMenuIn: function() {
          $(this.container).fadeIn(this.animationSpeed);
        },
        fadeMenuOut: function() {
          $(this.container).fadeOut(this.animationSpeed);
        },
        init: function() {
          var self = this;
          if(this.disableScrolling == 'on') {
            $('body > *').not('#responsive-menu-pro-button, #responsive-menu-pro-container, #responsive-menu-pro-overlay, #responsive-menu-pro-mask').wrapAll('<div id="responsive-menu-pro-noscroll-wrapper"></div>');
          }
          $(this.trigger).on(this.triggerTypes, function(e){
            e.stopPropagation();
            self.triggerMenu();
          });
          $('.responsive-menu-pro-subarrow').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            self.triggerSubArrow(this);
          });
          $(window).resize(function() {
            if($(window).width() > self.breakpoint) {
              if(self.isOpen){
                  self.closeMenu();
              }
              $('.responsive-menu-pro-submenu').removeAttr('style');
            } else {
              if(self.isSingleMenu == 'on'){
                $(self.container).addClass('responsive-menu-pro-no-transition');
              }
              if($('.responsive-menu-pro-open').length>0){
                self.setWrapperTranslate();
              }
            }
          });
          if(this.closeOnLinkClick == 'on') {
            $(this.linkElement).on('click', function(e) {
              e.preventDefault();
              old_href = $(this).attr('href');
              if(self.isOpen) {
                if($(e.target).closest('.responsive-menu-pro-subarrow').length) {
                  return;
                }
                self.closeMenu();
                setTimeout(function() {
                  window.location = old_href;
                }, self.animationSpeed);
              }
            });
          }
          if(this.closeOnBodyClick == 'on') {
            $(document).on('click', 'body', function(e) {
              if(self.isOpen) {
                if($(e.target).closest('#responsive-menu-pro-container').length || $(e.target).closest('#responsive-menu-pro-button').length) {
                  return;
                }
              }
              self.closeMenu();
            });
          }
          if(this.itemTriggerSubMenu == 'on') {
            $('.responsive-menu-pro-item-has-children > ' + this.linkElement).on('click', function(e) {
              e.preventDefault();
              self.triggerSubArrow($(this).children('.responsive-menu-pro-subarrow').first());
            });
          }
        }
      };
      ResponsiveMenuPro.init();
    });

JS;

  return $js;

  }

}
