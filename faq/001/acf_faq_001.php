<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 013
$faq_001 = new FieldsBuilder('faq_001', [
  'label' => 'FAQ 001',
]);

$faq_001
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
    'default_value' => 'Frequently Asked Questions',
  ])
  ->addRepeater('faq_items', [
    'label' => 'FAQ Items',
    'layout' => 'block',
  ])
  ->addPostObject('faq_post', [
    'label' => 'Select FAQ',
    'post_type' => ['faqs'],
    'return_format' => 'id',
  ])
  ->endRepeater()
  ->addColorPicker('section_bg_color', [
    'label' => 'Section Background Color',
    'default_value' => '#FFFFFF', // Default white background
  ]);
return $faq_001;
