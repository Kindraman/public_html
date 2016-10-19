<?php

namespace ResponsiveMenuPro\Form;
use ResponsiveMenuPro\Models\Option as Option;
use ResponsiveMenuPro\Form\FormComponent as FormComponent;

class TextArea implements FormComponent {

	public function render(Option $option)
	{
		echo "<textarea
				class='textarea'
				id='{$option->getName()}'
				name='menu[{$option->getName()}]'>{$option->getValue()}</textarea>";
	}

}
