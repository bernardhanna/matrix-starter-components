<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Intro Block layout
$content_002 = new FieldsBuilder('content_002', [
  'label' => 'Content Block 002',
]);

$content_002
  ->addSelect('content_002_heading_tag', [
    'label' => 'Heading Tag',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
    ],
    'default_value' => 'h2', // Default to H2
  ])
  ->addText('content_002_heading_text', [
    'label' => 'Heading Text',
    'default_value' => 'Content 002',
  ])
  ->addText('content_002_padding', [
    'label' => 'Padding',
  ])
  ->addWysiwyg('content_002_paragraph_text', [
    'label' => 'Paragraph Text',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
    'default_value' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
  ])
  ->addImage('content_002_image', [
    'label' => 'Content Image',
    'return_format' => 'id', // Get image ID to retrieve alt and title later
  ])
  ->addColorPicker('content_002_background_color_top', [
    'label' => 'Top Background Color',
    'default_value' => '#FEF3C7', // Default to bg-yellow-50
  ])
  ->addColorPicker('content_002_background_color_bottom', [
    'label' => 'Bottom Background Color',
    'default_value' => '#F59E0B', // Default to bg-yellow-400
  ])
  ->addSelect('content_002_layout_order', [
    'label' => 'Layout Order',
    'choices' => [
      'text_left_image_right' => 'Text Left, Image Right',
      'image_left_text_right' => 'Image Left, Text Right',
    ],
    'default_value' => 'text_left_image_right',
  ]);

return $content_002;
