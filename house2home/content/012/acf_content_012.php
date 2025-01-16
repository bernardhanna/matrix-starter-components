<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 012
$content_012 = new FieldsBuilder('content_012', [
  'label' => 'Content 012',
]);

$content_012
  ->addRepeater('content_012_items', [
    'label' => 'List Items',
    'min' => 1,
    'layout' => 'block',
  ])
  ->addSelect('content_012_heading_tag', [
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
  ->addText('content_012_heading_text', [
    'label' => 'Heading Text',
    'placeholder' => 'Enter heading text',
    'default_value' => 'Content 012'
  ])
  ->addRepeater('content_012_subitems', [
    'label' => 'Subitems',
    'min' => 1,
    'layout' => 'block',
  ])
  ->addText('content_012_subitem_text', [
    'label' => 'Subitem Text',
    'placeholder' => 'Enter subitem text',
  ])
  ->endRepeater()
  ->endRepeater();
return $content_012;
