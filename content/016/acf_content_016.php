<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Section Layout
$content_016 = new FieldsBuilder('content_016', [
  'label' => 'Content 0016',
]);

$content_016

  // Content Tab
  ->addTab('Content', ['placement' => 'top'])
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
    'placeholder' => 'Enter your heading text...',
    'default_value' => 'Success stories',
  ])
  ->addColorPicker('heading_color', [
    'label' => 'Heading Text Color',
    'default_value' => '#000000',
  ])
  ->addImage('main_image', [
    'label' => 'Main Image',
    'return_format' => 'array',
  ])
  ->addRepeater('list_items', [
    'label' => 'List Items',
    'button_label' => 'Add List Item',
  ])
  ->addText('list_text', [
    'label' => 'List Item Text',
    'placeholder' => 'Enter list item text...',
  ])
  ->endRepeater()
  ->addWysiwyg('paragraph_text', [
    'label' => 'Paragraph Text',
    'default_value' => '<p>Effective data usage can positively impact on all aspects of an organisation\'s performance.</p>',
  ])
  ->addLink('button_link', [
    'label' => 'Button Link',
    'return_format' => 'array',
    'default_value' => [
      'url' => home_url('/'),
      'title' => 'See our case studies',
      'target' => '_self',
    ],
  ])
  // Design Tab
  ->addTab('Design', ['placement' => 'top'])
  ->addColorPicker('background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#FFFFFF',
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'default_value' => '#333333',
  ])
  ->addColorPicker('button_bg_color', [
    'label' => 'Button Background Color',
    'default_value' => '#025A70',
  ])
  ->addColorPicker('button_text_color', [
    'label' => 'Button Text Color',
    'default_value' => '#FFFFFF',
  ])
  ->addColorPicker('button_hover_bg_color', [
    'label' => 'Button Hover Background Color',
    'default_value' => '#FF4500',
  ])
  ->addColorPicker('button_hover_text_color', [
    'label' => 'Button Hover Text Color',
    'default_value' => '#FFFFFF',
  ])
  ->addTrueFalse('button_icon_toggle', [
    'label' => 'Show SVG Icon on Button',
    'ui' => 1,
    'default_value' => 1, // Enabled by default
  ])

  // Layout Tab
  ->addTab('Layout', ['placement' => 'top'])
  ->addNumber('padding_top', [
    'label' => 'Padding Top (rem)',
    'instructions' => 'Enter the top padding in rem (e.g., 10 for 10rem).',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 10, // Default to 10rem
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom (rem)',
    'instructions' => 'Enter the bottom padding in rem (e.g., 10 for 10rem).',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 10, // Default to 10rem
  ]);

return $content_016;
