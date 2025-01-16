<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Intro Block layout
$content_003 = new FieldsBuilder('content_003', [
  'label' => 'Content 003',
]);

$content_003
  ->addSelect('content_003_column_layout', [
    'label' => 'Column Layout',
    'choices' => [
      '2' => '2 Columns',
      '3' => '3 Columns',
      '4' => '4 Columns',
    ],
    'default_value' => '3', // Default to 3 columns
  ])
  ->addRepeater('content_003_items', [
    'label' => 'Column Items',
    'min' => 1,
    'layout' => 'block',
  ])
  ->addImage('content_003_image', [
    'label' => 'Column Image',
    'return_format' => 'array', // Change to 'array' to get the URL and alt text
  ])
  ->addText('content_003_title', [
    'label' => 'Column Title',
  ])
  ->addWysiwyg('content_003_description', [
    'label' => 'Column Description',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ])
  ->addColorPicker('content_003_background_color', [
    'label' => 'Background Color',
    'default_value' => '#FFF6F1', // Default neutral light color
  ]);

return $content_003;
