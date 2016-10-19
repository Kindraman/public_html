<?php

namespace ResponsiveMenuPro\Form;
use ResponsiveMenuPro\Models\Option as Option;
use ResponsiveMenuPro\Form\FormComponent as FormComponent;

class Colour implements FormComponent
{

	public function render(Option $option)
	{
		echo "<input type='text'
				class='colour wp-color-picker'
				id='{$option->getName()}'
				name='menu[{$option->getName()}]'
				value='{$option->getValue()}' />";
	}

}
