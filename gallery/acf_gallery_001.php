<?php

use StoutLogic\AcfBuilder\FieldsBuilder;
// Define the Content Block layout
$gallery_001 = new FieldsBuilder('gallery_001', [
  'label' => 'Gallery 001',
]);

$gallery_001
  ->addRepeater('gallery_images', [
    'label' => 'Gallery Images',
    'min' => 1,
    'layout' => 'row',
    'button_label' => 'Add Image',
  ])
  ->addImage('image', [
    'label' => 'Image',
    'return_format' => 'array',
  ])
  ->addNumber('image_width', [
    'label' => 'Image Width (%)',
    'instructions' => 'Enter the image width as a percentage (e.g., 50 for 50%).',
    'min' => 1,
    'max' => 100,
    'default_value' => 50,
    'append' => '%',
  ])
  ->endRepeater()
  ->addNumber('gap', [
    'label' => 'Gap Between Images',
    'instructions' => 'Enter gap value (e.g., 10 for 10px).',
    'min' => 0,
    'max' => 20,
  ])
->addNumber('padding_top', [
  'label' => 'Padding Top',
  'instructions' => 'Set the top padding as a percentage.',
  'min' => 0,
  'max' => 100,
  'step' => 1,
  'default_value' => 10, // Default 10%
])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom',
    'instructions' => 'Set the bottom padding as a percentage.',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 10, // Default 10%
  ])
  ->addColorPicker('background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#ffffff', // Default white background
  ]);

return $gallery_001;
