<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 013
$content_013 = new FieldsBuilder('content_013', [
  'label' => 'Content 013',
]);

$content_013
  ->addRepeater('articles', [
    'label' => 'Articles',
    'layout' => 'block',
  ])
  ->addText('heading', [
    'label' => 'Heading',
  ])
  ->addImage('main_image', [
    'label' => 'Main Image',
    'return_format' => 'id',
  ])
  ->addWysiwyg('content', [
    'label' => 'Content',
  ])
  ->addRepeater('list_items', [
    'label' => 'List Items',
    'layout' => 'block',
  ])
  ->addText('item_text', [
    'label' => 'Item Text',
  ])
  ->endRepeater()
  ->addLink('button_link', [
    'label' => 'Button Link',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#FFFFFF',
  ])
  ->endRepeater();
return $content_013;
