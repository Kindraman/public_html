<?php

namespace ResponsiveMenuPro\Form;
use ResponsiveMenuPro\Models\Option as Option;

interface FormComponent {
  public function render(Option $option);
}
