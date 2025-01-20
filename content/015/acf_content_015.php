<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Section Layout
$content_015 = new FieldsBuilder('content_015', [
  'label' => 'Content 015',
]);

$content_015
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
    'default_value' => 'h4',
  ])
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'placeholder' => 'Enter your heading text...',
    'default_value' => 'Content 0015',
  ])
  ->addColorPicker('heading_color', [
    'label' => 'Heading Color',
    'default_value' => '#FFFFFF',
  ])
  ->addWysiwyg('paragraph_text', [
    'label' => 'Paragraph Text',
    'default_value' => '<p>Lorem ipsum dolor sit amet consectetur...</p>',
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'default_value' => '#FFFFFF',
  ])
  ->addImage('main_image', [
    'label' => 'Main Image',
    'return_format' => 'array',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#025A70',
  ])
  ->addLink('button_link', [
    'label' => 'Button Link',
    'return_format' => 'array',
    'default_value' => [
      'url' => home_url('/'),
      'title' => 'Try the demo - FREE',
      'target' => '_self',
    ],
  ])
  ->addColorPicker('button_bg_color', [
    'label' => 'Button Background Color',
    'default_value' => '#FFA500', // Orange
  ])
  ->addColorPicker('button_text_color', [
    'label' => 'Button Text Color',
    'default_value' => '#FFFFFF',
  ])
  ->addColorPicker('button_hover_bg_color', [
    'label' => 'Button Hover Background Color',
    'default_value' => '#FF4500', // Darker Orange
  ])
  ->addColorPicker('button_hover_text_color', [
    'label' => 'Button Hover Text Color',
    'default_value' => '#FFFFFF',
  ])
  ->addTrueFalse('button_icon_toggle', [
    'label' => 'Show SVG Icon on Button',
    'ui' => 1,
    'default_value' => 1, // Enabled by default
  ]);

return $content_015;
