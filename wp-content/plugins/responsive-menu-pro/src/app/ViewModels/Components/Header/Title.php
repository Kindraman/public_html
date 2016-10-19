<?php

namespace ResponsiveMenuPro\ViewModels\Components\Header;

use ResponsiveMenuPro\ViewModels\Components\ViewComponent as ViewComponent;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class Title implements ViewComponent {

  public function render(OptionsCollection $options) {

    if($options['header_bar_title']->getValue()):
      $content = '<div id="responsive-menu-pro-header-bar-title" class="responsive-menu-pro-header-bar-item responsive-menu-pro-header-box">';
      $content .= $options['header_bar_logo_link'] ? '<a href="' . $options['header_bar_logo_link'] . '">' : '';
      $content .= $options['header_bar_title'];
      $content .= $options['header_bar_logo_link'] ? '</a>' : '';
      $content .= '</div>';

      return $content;
    endif;


  }

}
