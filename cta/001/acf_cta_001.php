<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 013
$cta_001 = new FieldsBuilder('cta_001', [
  'label' => 'CTA 001',
]);

$cta_001
  ->addSelect('cta_001_heading_tag', [
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
  ->addText('cta_001_heading_text', [
    'label' => 'Heading Text',
    'default_value' => 'CTA 001'
  ])
  ->addWysiwyg('cta_001_paragraph_text', [
    'label' => 'Paragraph Text',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
    'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat turpis in dictum sollicitudin. Suspendisse lacinia neque suscipit ligula rutrum, et gravida eros dapibus. Donec pulvinar orci id mi facilisis auctor.'
  ])
  ->addLink('cta_001_button_link', [
    'label' => 'Button Link',
    'return_format' => 'array',
  ])
  ->addImage('cta_001_background_image', [
    'label' => 'Background Image',
    'return_format' => 'url',
  ]);
return $cta_001;
