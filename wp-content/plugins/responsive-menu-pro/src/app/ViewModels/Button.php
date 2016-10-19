<?php

namespace ResponsiveMenuPro\ViewModels;

use ResponsiveMenuPro\ViewModels\Components\Button\Button as ButtonComponent;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class Button {

  public function __construct(OptionsCollection $options) {
      $this->options = $options;
  }

  public function getHtml() {
      $mapper = new ButtonComponent();
      return $mapper->render($this->options);
  }

}
