<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block layout
$gallery_001 = new FieldsBuilder('gallery_001', [
  'label' => 'Gallery 001',
]);

$gallery_001
  // Content Tab
  ->addTab('Content', ['placement' => 'top'])
  ->addImage('svg_icon', [
    'label' => 'Section Background Image',
    'return_format' => 'id',
  ])
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

  // Design Tab
  ->addTab('Design', ['placement' => 'top'])
  ->addNumber('gap', [
    'label' => 'Gap Between Images',
    'instructions' => 'Enter gap value (e.g., 10 for 10px).',
    'min' => 0,
    'max' => 20,
  ])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
    'instructions' => 'Customize padding for different screen sizes.',
    'button_label' => 'Add Screen Size Padding',
  ])
  ->addSelect('screen_size', [
    'label' => 'Screen Size',
    'choices' => [
      'xxs' => 'xxs',
      'xs' => 'xs',
      'mob' => 'mob',
      'sm' => 'sm',
      'md' => 'md',
      'lg' => 'lg',
      'xl' => 'xl',
      'xxl' => 'xxl',
      'ultrawide' => 'ultrawide',
    ],
  ])
  ->addNumber('padding_top', [
    'label' => 'Padding Top',
    'instructions' => 'Set the top padding in rem.',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
    'append' => 'rem',
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom',
    'instructions' => 'Set the bottom padding in rem.',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
    'append' => 'rem',
  ])
  ->endRepeater()
  ->addColorPicker('background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#ffffff', // Default white background
  ]);

return $gallery_001;
