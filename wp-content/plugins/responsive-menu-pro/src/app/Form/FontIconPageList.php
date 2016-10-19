<?php

namespace ResponsiveMenuPro\Form;
use ResponsiveMenuPro\Models\Option as Option;
use ResponsiveMenuPro\Form\FormComponent as FormComponent;

class FontIconPageList implements FormComponent {

	public function render(Option $option)
	{

    if($decoded = json_decode($option->getValue()))
      $final = array_filter(array_combine($decoded->id, $decoded->icon));
    else
      $final = null;

    echo "<div class='font-icon-container'><div class='font-icon-row'><div class='font-icon-cell-id'>" . __('Id', 'responsive-menu-pro') . "</div><div class='font-icon-cell-icon'>" . __('Icon', 'responsive-menu-pro') . "</div></div>";

    if(is_array($final) && !empty($final)):
      foreach( $final as $id => $icon):
      		echo "
          <div class='font-icon-row'>
            <div class='font-icon-cell-id'>
                <input
                  type='text'
          				class='{$option->getName()}_id'
          				name='menu[{$option->getName()}][id][]'
          				value='{$id}' />
              </div>
            <div class='font-icon-cell-icon'>
                <input
                    type='text'
            				class='{$option->getName()}_icon'
            				name='menu[{$option->getName()}][icon][]'
            				value='{$icon}' />
                </div>
            </div>";
          endforeach;
    else:
      echo "
      <div class='font-icon-row'>
        <div class='font-icon-cell-id'>
            <input
              type='text'
              class='{$option->getName()}_id'
              name='menu[{$option->getName()}][id][]'
              value='' />
          </div>
        <div class='font-icon-cell-icon'>
            <input
                type='text'
                class='{$option->getName()}_icon'
                name='menu[{$option->getName()}][icon][]'
                value='' />
            </div>
        </div>";
    endif;

      echo "</div><div class='add-font-icon'>" . __('Add New Font Icon', 'responsive-menu-pro') . "</div>";

      echo "<script>
        jQuery(document).ready(function($) {
          $(document).on('click', '.add-font-icon', function(e) {
            var lastRow = $('#{$option->getName()}_container .font-icon-row').last();
            var nextRow = lastRow.clone();
            nextRow.find(':text').val('')
            lastRow.after(nextRow);
          });
        });
      </script>";

	}

}
