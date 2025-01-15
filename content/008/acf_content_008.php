<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define Content Block 008 layout
$content_008 = new FieldsBuilder('content_008', [
  'label' => 'Content Block 008',
]);

$content_008
  ->addSelect('content_008_heading_tag', [
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
  ->addText('content_008_heading_text', [
    'label' => 'Heading Text',
    'default_value' => 'Content 008'
  ])
  ->addText('content_008_padding', [
    'label' => 'Padding',
    'default_value' => '2rem', // Default to 2rem
  ])
  ->addWysiwyg('content_008_paragraph_text', [
    'label' => 'Paragraph Text',
    'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus fermentum tristique. Donec sit amet purus nec lectus faucibus suscipit a vitae urna. Aenean non augue ac orci aliquam aliquam. Duis vitae felis eu dui sagittis sodales nec at dolor. Vivamus condimentum molestie ante. Suspendisse ornare ipsum in purus ultricies egestas. Ut pharetra, ex euismod ultricies tempus, velit turpis condimentum mi, quis imperdiet diam arcu sed nisi. Quisque vestibulum nunc a est egestas tempor.',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ])
  ->addImage('content_008_image', [
    'label' => 'Content Image',
    'return_format' => 'id', // Get image ID to retrieve alt and title later
  ])
  ->addColorPicker('content_008_background_color_top', [
    'label' => 'Background Color',
    'default_value' => '#432a38', // Default to bg-yellow-50
  ])
  ->addSelect('content_008_layout_order', [
    'label' => 'Layout Order',
    'choices' => [
      'text_left_image_right' => 'Text Left, Image Right',
      'image_left_text_right' => 'Image Left, Text Right',
    ],
    'default_value' => 'text_left_image_right',
  ])
;

return $content_008;
