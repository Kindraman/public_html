<?php

namespace ResponsiveMenuPro\ViewModels\Components\Button;

use ResponsiveMenuPro\ViewModels\Components\ViewComponent as ViewComponent;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class Button implements ViewComponent {

  public function render(OptionsCollection $options) {

    $button_title = apply_filters('wpml_translate_single_string', $options['button_title']->getValue(), 'Responsive Menu Pro', 'button_title');

    /*
    Add Polylang Support */
    if(function_exists('pll__'))
      $button_title = pll__($button_title);
      
    $button_title_pos = $options['button_title_position']->getValue();
    $button_title_html = $button_title != '' ? '<span class="responsive-menu-pro-label responsive-menu-pro-label-'.$button_title_pos.'">'.$button_title.'</span>' : '';

    $accessible = in_array($button_title_pos, array('left', 'right')) ? 'responsive-menu-pro-accessible' : '';
    $content = '';

    $content .= $options['use_header_bar'] == 'on' ? '<div id="responsive-menu-pro-header-bar-button" class="responsive-menu-pro-header-box">' : '';

    $content .= '<button id="responsive-menu-pro-button"
            class="responsive-menu-pro-button ' . $accessible .
            ' responsive-menu-pro-' . $options['button_click_animation'] . '"
            type="button"
            aria-label="Menu">';
    $content .= in_array($button_title_pos, array('top', 'left')) ? $button_title_html : '';
    $content .= '<span class="responsive-menu-pro-box">' . $options->getButtonIcon() . $options->getButtonIconActive() . '</span>';
    $content .= in_array($button_title_pos, array('bottom', 'right')) ? $button_title_html : '';
    $content .= '</button>';
    $content .= $options['use_header_bar'] == 'on' ? '</div>' : '';

    return $content;

  }

}
