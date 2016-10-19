<?php

namespace ResponsiveMenuPro\ViewModels\Components\Header;

use ResponsiveMenuPro\ViewModels\Components\ViewComponent as ViewComponent;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class HtmlContent implements ViewComponent {

  public function render(OptionsCollection $options) {

    return '<div id="responsive-menu-pro-header-bar-html" class="responsive-menu-pro-header-bar-item responsive-menu-pro-header-box">' .
              do_shortcode($options['header_bar_html_content']) .
            '</div>';

  }

}
