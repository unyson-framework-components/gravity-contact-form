<?php if (!defined('FW')) die('Forbidden');
if(!class_exists('GFCommon')) die('Please install and activate <a href="https://www.gravityforms.com/" target="_blank">"Gravity forms"</a> to make theme work properly');

$forms = GFAPI::get_forms();
$forms_name_array = [];

foreach ($forms as $key => $form) {
    $forms_name_array[$form['title']] = $form['title'];
}

$options = array(
    'title' => array(
        'label' => __('Title text', 'galg'),
        'type' => 'text',
        'value' => 'Contact'
    ),

    'background_image' => array(
        'label' => __('Background', 'galg'),
        'type' => 'upload',
        'images_only' => true
    ),

    'form_name' => array(
        'type'  => 'select',
        'value' => $forms_name_array[0],
        'label' => __('Form', 'galg'),
        'desc'  => __('Please chose form from the list to show it in the block', 'galg'),
        'choices' => $forms_name_array
    ),
);
