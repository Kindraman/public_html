<?php

namespace ResponsiveMenuPro\Form;
use ResponsiveMenuPro\Models\Option as Option;
use ResponsiveMenuPro\Form\FormComponent as FormComponent;

class Image implements FormComponent
{

	public function render(Option $option)
	{
		echo "<input
        type='text'
				class='image'
				id='{$option->getName()}'
				name='menu[{$option->getName()}]'
				value='{$option->getValue()}' />
        <button
            type='button'
            class='button image_button'
            for='{$option->getName()}'
          /><i class='fa fa-upload'></i></button>";
	}

}
