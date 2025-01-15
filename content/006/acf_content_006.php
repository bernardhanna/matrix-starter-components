<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define Content Block 006 layout
$content_006 = new FieldsBuilder('content_006', [
  'label' => 'Content Block 006',
]);

$content_006
  ->addSelect('heading_tag', [
    'label' => 'Heading Tag',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
    ],
    'default_value' => 'h2',
  ])
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'default_value' => 'Content 006',
  ])
  ->addWysiwyg('content_text', [
    'label' => 'Content Text',
    'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec nisl rutrum, vehicula quam sed, volutpat justo. Praesent iaculis, leo eu aliquet mollis, orci sem molestie justo, vitae tincidunt dolor orci commodo ligula.',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 0,
  ])
  ->addImage('main_image', [
    'label' => 'Main Image',
    'return_format' => 'id',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#E5E7EB', // Neutral background color by default
  ]);

return $content_006;
