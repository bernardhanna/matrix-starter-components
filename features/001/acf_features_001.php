<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define Feature Section Layout
$features_001 = new FieldsBuilder('features_001', [
  'label' => 'Features 001',
]);

$features_001
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
    ],
    'default_value' => 'h2',
  ])
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'default_value' => 'Default Heading',
  ])
  ->addTextarea('subtext', [
    'label' => 'Subtext',
    'default_value' => 'Default subtext for this feature.',
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
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'default_value' => '#000000',
  ])
  ->endRepeater();

return $features_001;
