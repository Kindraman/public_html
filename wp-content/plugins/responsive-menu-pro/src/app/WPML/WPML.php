<?php

namespace ResponsiveMenuPro\WPML;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class WPML {

  public function saveFromOptions(OptionsCollection $options) {
    if(isset($options['menu_to_use']))
      do_action('wpml_register_single_string', 'Responsive Menu Pro', 'menu_to_use', $options['menu_to_use']->getValue());

    if(isset($options['button_title']))
      do_action('wpml_register_single_string', 'Responsive Menu Pro', 'button_title', $options['button_title']->getValue());

  if(isset($options['menu_title']))
      do_action('wpml_register_single_string', 'Responsive Menu Pro', 'menu_title', $options['menu_title']->getValue());

  if(isset($options['menu_title_link']))
      do_action('wpml_register_single_string', 'Responsive Menu Pro', 'menu_title_link', $options['menu_title_link']->getValue());

  if(isset($options['menu_title_link']))
      do_action('wpml_register_single_string', 'Responsive Menu Pro', 'menu_search_box_text', $options['menu_search_box_text']->getValue());

  }

}
