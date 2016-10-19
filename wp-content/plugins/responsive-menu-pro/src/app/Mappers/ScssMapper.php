<?php

namespace ResponsiveMenuPro\Mappers;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class ScssMapper
{

  public function __construct(OptionsCollection $options)
  {
    $this->options = $options;
    #Ugly
    if(!class_exists('\scssc'))
      require_once "scssphp/scss.inc.php";
    $this->compiler = new \scssc();
  }

}
