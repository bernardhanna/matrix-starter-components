<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 013
$contact_001 = new FieldsBuilder('contact_001', [
  'label' => 'Contact 001',
]);

$contact_001
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
    'default_value' => 'Do you have any further questions? Send us a message',
  ])
  ->addColorPicker('section_bg_color', [
    'label' => 'Section Background Color',
    'default_value' => '#E5E7EB', // Neutral background color by default
  ])
  ->addWysiwyg('form_iframe', [
    'label' => 'Form Short Code',
    'instructions' => 'Insert the Short Code for the form',
  ]);
return $contact_001;
