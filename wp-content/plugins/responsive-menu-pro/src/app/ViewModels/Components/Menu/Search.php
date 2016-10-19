<?php

namespace ResponsiveMenuPro\ViewModels\Components\Menu;

use ResponsiveMenuPro\ViewModels\Components\ViewComponent as ViewComponent;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class Search implements ViewComponent {

  public function render(OptionsCollection $options) {

      $action = function_exists( 'icl_get_home_url' ) ? icl_get_home_url() : get_home_url();
      $text = apply_filters('wpml_translate_single_string', $options['menu_search_box_text']->getValue(), 'Responsive Menu Pro', 'menu_search_box_text');

      return '<div id="responsive-menu-pro-search-box">
        <form action="'.$action.'" class="responsive-menu-pro-search-form" role="search">
          <input type="search" name="s" placeholder="' . $text . '" class="responsive-menu-pro-search-box">
        </form>
      </div>';

  }

}
