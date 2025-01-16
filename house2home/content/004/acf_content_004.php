
<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define Content Block 004 layout
$content_004 = new FieldsBuilder('content_004', [
  'label' => 'Content Block 004',
]);

$content_004
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
    'default_value' => 'Content 004',
  ])
  ->addWysiwyg('content_text', [
    'label' => 'Content Text',
    'default_value' => 'We have partnered with Energia to offer our new Smart Solar bundle...',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 0,
  ])
  ->addRepeater('images', [
    'label' => 'Images',
    'layout' => 'block',
    'min' => 1,
    'max' => 2,
  ])
  ->addImage('image', [
    'label' => 'Image',
    'return_format' => 'id',
  ])
  ->endRepeater()
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#F3F4F6', // Default background color
  ]);

return $content_004;
