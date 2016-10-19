<?php

namespace ResponsiveMenuPro\ViewModels;

use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class Menu {

  public function __construct(OptionsCollection $options) {
      $this->options = $options;
  }

  public function getHtml() {
    $mapping = [
      'title' => 'ResponsiveMenuPro\ViewModels\Components\Menu\Title',
      'menu' => 'ResponsiveMenuPro\ViewModels\Components\Menu\Menu',
      'search' => 'ResponsiveMenuPro\ViewModels\Components\Menu\Search',
      'additional content' => 'ResponsiveMenuPro\ViewModels\Components\Menu\AdditionalContent'
    ];
    $content = '';

    foreach(json_decode($this->options['items_order']) as $key => $val):
      if($val == 'on'):
        $mapper = new $mapping[$key];
        $content .= $mapper->render($this->options);
      endif;
    endforeach;

    return $content;
  }

}
