<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 013
$wysiwyg = new FieldsBuilder('wysiwyg', [
  'label' => 'WYSIWYG Block',
]);

$wysiwyg
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
  ])
  ->addWysiwyg('content', [
    'label' => 'Content',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 1,
    'delay' => 0,
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#FFFFFF', // Default to white background
  ])
  ->addText('custom_classes', [
    'label' => 'Custom Classes',
    'instructions' => 'Add any custom classes for additional styling.',
    'default_value' => '', // No custom classes by default
  ]);
return $wysiwyg;
