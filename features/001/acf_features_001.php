<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define Feature Section Layout
$features_001 = new FieldsBuilder('features_001', [
  'label' => 'Features 001',
]);

$features_001
  ->addSelect('columns', [
    'label' => 'Number of Columns',
    'instructions' => 'Select the number of columns for the features.',
    'choices' => [
      '2' => '2 Columns',
      '3' => '3 Columns',
      '4' => '4 Columns',
    ],
    'default_value' => '3', // Default to 3 columns
  ])
  ->addRepeater('features', [
    'label' => 'Features',
    'layout' => 'block',
    'min' => 1,
    'button_label' => 'Add Feature',
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
      'span' => 'Span',
    ],
    'default_value' => 'span',
  ])
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'default_value' => 'Default Heading',
  ])
  ->addColorPicker('text_color', [
    'label' => 'Heading Text Color',
    'default_value' => '#000000',
  ])
  ->addTextarea('subtext', [
    'label' => 'Subtext',
    'default_value' => 'Default subtext for this feature.',
  ])
  ->addColorPicker('subtext_color', [
    'label' => 'Subtext Color',
    'default_value' => '#D1D5DB',
  ])
  ->addImage('icon', [
    'label' => 'Icon',
    'return_format' => 'array',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#C6C6C6',
  ])
  ->addText('background_gradient', [
    'label' => 'Background Gradient',
    'default_value' => 'linear-gradient(45deg,#404041_0%,#79797A_100%)',
  ])
  ->addRange('border_radius', [
    'label' => 'Border Radius',
    'instructions' => 'Set the border radius of the item.',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 8, // Default 8px
  ])
  ->addRange('min_height', [
    'label' => 'Minimum Height',
    'instructions' => 'Set the minimum height of the item.',
    'min' => 0,
    'max' => 500,
    'step' => 10,
    'default_value' => 240, // Default 240px
  ])
  ->endRepeater();

return $features_001;
