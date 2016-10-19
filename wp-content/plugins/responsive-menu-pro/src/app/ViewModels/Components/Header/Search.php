<?php

namespace ResponsiveMenuPro\ViewModels\Components\Header;

use ResponsiveMenuPro\ViewModels\Components\ViewComponent as ViewComponent;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class Search implements ViewComponent {

  public function render(OptionsCollection $options) {

    $action = function_exists( 'icl_get_home_url' ) ? icl_get_home_url() : get_home_url();
    return '<div id="responsive-menu-pro-header-bar-search" class="responsive-menu-pro-header-bar-item responsive-menu-pro-header-box">
      <form action="'.$action.'" class="responsive-menu-pro-search-form" role="search">
        <input type="search" name="s" placeholder="' . $options['menu_search_box_text'] . '" class="responsive-menu-pro-search-box">
      </form>
    </div>';

  }

}
