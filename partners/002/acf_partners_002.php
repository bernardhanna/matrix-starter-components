<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$partners_002 = new FieldsBuilder('partners_002', [
  'label' => 'Partners 002',
]);

$partners_002
  ->addTab('Content', ['label' => 'Content'])
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'instructions' => 'Enter the section heading.',
    'default_value' => 'Seamlessly integrate into your existing apps',
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
      'p' => 'Paragraph'
    ],
    'default_value' => 'h2'
  ])
  ->addLink('button', [
    'label' => 'Button',
    'return_format' => 'array',
    'instructions' => 'Configure the button link and text.',
  ])
  ->addRepeater('partner_logos', [
    'label' => 'Partner Logos',
    'layout' => 'table',
    'button_label' => 'Add Logo',
  ])
  ->addImage('logo_image', [
    'label' => 'Logo Image',
    'return_format' => 'array',
    'preview_size' => 'medium'
  ])
  ->addSelect('image_justify', [
    'label' => 'Image Alignment',
    'choices' => [
      'justify-center' => 'Center (Default)',
      'justify-start' => 'Left',
      'justify-end' => 'Right'
    ],
    'default_value' => 'justify-center',
  ])
  ->endRepeater()
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('section_bg_color', [
    'label' => 'Section Background Color',
    'default_value' => '#FFFFFF'
  ])
  ->addColorPicker('heading_color', [
    'label' => 'Heading Color',
    'default_value' => '#02485A'
  ])
  ->addColorPicker('underline_color', [
    'label' => 'Underline Color',
    'default_value' => '#F68D2E'
  ])
  ->addColorPicker('button_bg_color', [
    'label' => 'Button Background Color',
    'default_value' => '#0C4A6E'
  ])
  ->addColorPicker('button_text_color', [
    'label' => 'Button Text Color',
    'default_value' => '#FFFFFF'
  ])
  ->addColorPicker('button_border_color', [
    'label' => 'Button Border Color',
    'default_value' => '#0C4A6E'
  ])
  ->addColorPicker('button_hover_bg_color', [
    'label' => 'Button Hover Background Color',
    'default_value' => '#082F49'
  ])
  ->addColorPicker('button_hover_text_color', [
    'label' => 'Button Hover Text Color',
    'default_value' => '#FFFFFF'
  ])
  ->addColorPicker('button_hover_border_color', [
    'label' => 'Button Hover Border Color',
    'default_value' => '#082F49'
  ])
  ->addTrueFalse('use_svg_icon', [
    'label' => 'Use SVG Icon',
    'message' => 'Enable SVG Arrow Icon',
    'default_value' => 1
  ])
  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
    'button_label' => 'Add Padding'
  ])
  ->addSelect('screen_size', [
    'label' => 'Screen Size',
    'choices' => [
      'xxs' => 'xxs',
      'xs' => 'xs',
      'mob' => 'mob',
      'sm' => 'sm',
      'md' => 'md',
      'lg' => 'lg',
      'xl' => 'xl',
      'xxl' => 'xxl',
      'ultrawide' => 'ultrawide'
    ]
  ])
  ->addNumber('padding_top', [
    'label' => 'Padding Top (rem)',
    'default_value' => 5
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom (rem)',
    'default_value' => 5
  ])
  ->endRepeater();

return $partners_002;
