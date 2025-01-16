<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 013
$faq_002 = new FieldsBuilder('faq_002', [
  'label' => 'FAQ 002',
]);

$faq_002
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
    'default_value' => 'FAQ 002',
  ])
  ->addRepeater('faq_items', [
    'label' => 'FAQ Items',
    'layout' => 'block',
  ])
  ->addPostObject('faq_item', [
    'label' => 'Select FAQ',
    'post_type' => ['faqs'],
    'return_format' => 'object',
  ])
  ->endRepeater()
  ->addWysiwyg('form_shortcode', [
    'label' => 'Form Shortcode',
    'instructions' => 'Add the shortcode for the form if you want to display it in the FAQ section.',
  ])
  ->addColorPicker('section_bg_color', [
    'label' => 'Section Background Color',
    'default_value' => '#FFFFFF',
  ]);
return $faq_002;
