<?php

namespace ResponsiveMenuPro\ViewModels;

use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class HeaderBar {

  public function __construct(OptionsCollection $options) {
      $this->options = $options;
  }

  public function getHtml() {
    $mapping = [
      'logo' => 'ResponsiveMenuPro\ViewModels\Components\Header\Logo',
      'title' => 'ResponsiveMenuPro\ViewModels\Components\Header\Title',
      'search' => 'ResponsiveMenuPro\ViewModels\Components\Header\Search',
      'html content' => 'ResponsiveMenuPro\ViewModels\Components\Header\HtmlContent',
      'button' => 'ResponsiveMenuPro\ViewModels\Components\Button\Button'
    ];
    $content = '';

    foreach(json_decode($this->options['header_bar_items_order']) as $key => $val):
      if($val == 'on'):
        $mapper = new $mapping[$key];
        $content .= $mapper->render($this->options);
      endif;
    endforeach;
    return $content;
  }

}
