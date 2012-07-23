<?php
add_filter(array('Form', 'Item', 'PBCore', 'Creator'), 'filter_admin_form_function');
 
function filter_admin_form_function()
{
	$value = settings('author');

   return __v()->formTextarea('blah' . '[text]', $value, array('class' => 'textinput', 'rows' => 3, 'cols' => 50));
}