<?php

namespace ResponsiveMenuPro\ViewModels\Components\Menu;

use ResponsiveMenuPro\ViewModels\Components\ViewComponent as ViewComponent;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class AdditionalContent implements ViewComponent {

  public function render(OptionsCollection $options) {

    if($options['menu_additional_content']->getValue()):
      return '<div id="responsive-menu-pro-additional-content">'.
              do_shortcode($options['menu_additional_content']) .
            '</div>';
    endif;

  }

}
