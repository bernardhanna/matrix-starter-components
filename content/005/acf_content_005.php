<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define Content Block 005 layout
$content_005 = new FieldsBuilder('content_005', [
  'label' => 'Content Block 005',
]);

$content_005
  ->addWysiwyg('paragraph_text', [
    'label' => 'Paragraph Text',
    'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec nisl rutrum, vehicula quam sed, volutpat justo. Praesent iaculis, leo eu aliquet mollis, orci sem molestie justo, vitae tincidunt dolor orci commodo ligula. Sed orci arcu, tempor id ornare in, lacinia sed justo. Mauris sit amet erat non ligula facilisis mattis et eu nulla. Quisque ut pulvinar purus. Suspendisse malesuada suscipit eros id ullamcorper. Nam sodales laoreet libero eget ultrices. Vivamus ornare quis ex eget rhoncus. Aliquam volutpat mattis congue. Nullam ullamcorper quam et ipsum finibus, a euismod quam malesuada.',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 0,
  ])
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
    'default_value' => 'h2', // Default to H2
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#fb6407', // Default background color
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'default_value' => '#000000', // Default text color
  ]);

return $content_005;
