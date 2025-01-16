<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 013
$title_001 = new FieldsBuilder('title_001', [
  'label' => 'Title 001',
]);

$title_001
  ->addSelect('title_001_heading_tag', [
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
    ->addText('title_001_heading_text', [
      'label' => 'Heading Text',
      'instructions' => 'Enter the main title text.',
    ])
    ->addColorPicker('title_001_heading_color', [
      'label' => 'Heading Color',
      'default_value' => '#000000', // Default to black
    ])
    ->addColorPicker('title_001_border_color', [
      'label' => 'Border Color',
      'default_value' => '#F16623', // Default to orange
    ])
return $title_001;
