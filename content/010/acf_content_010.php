<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Intro Block layout
$content_010 = new FieldsBuilder('content_010', [
  'label' => 'Content 010',
]);

$content_010
  ->addText('content_010_heading', [
    'label' => 'Section Heading',
  ])
  ->addSelect('content_010_heading_tag', [
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
  ->addRepeater('content_010_items', [
    'label' => 'Service Items',
    'min' => 1,
    'layout' => 'block',
  ])
  ->addImage('content_010_icon', [
    'label' => 'Service Icon',
    'return_format' => 'url',
  ])
  ->addText('content_010_title', [
    'label' => 'Service Title',
  ])
  ->addColorPicker('content_010_icon_background_color', [
    'label' => 'Background Color',
    'default_value' => '#E5E5E5', // Default icon background color
  ])
  ->endRepeater();
return $content_010;
