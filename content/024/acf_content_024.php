<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_024 = new FieldsBuilder('content_024', [
  'label' => 'Content 024',
  'style' => 'default',
]);

// Content Tab
$content_024
  ->addTab('content_tab', ['label' => 'Content'])
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
      'p' => 'Paragraph',
    ],
    'default_value' => 'h2',
  ])
  ->addText('heading', [
    'label' => 'Heading',
    'default_value' => 'Why choose us?',
  ])
  ->addWysiwyg('intro_text', [
    'label' => 'Intro Text',
    'default_value' => 'Accurate data is a catalyst for business success. With GeoDirectory, you can:',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ])
  ->addRepeater('features', [
    'label' => 'Features',
    'button_label' => 'Add Feature',
  ])
  ->addWysiwyg('description', [
    'label' => 'Description',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ])
  ->endRepeater()
  ->addWysiwyg('closing_text', [
    'label' => 'Closing Text',
    'default_value' => 'With GeoDirectory, you can trust that your data works as hard as you do.',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ])
  ->addImage('side_image', [
    'label' => 'Side Image',
    'return_format' => 'array',
  ]);

// Design Tab
$content_024
  ->addTab('design_tab', ['label' => 'Design'])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#e2e8f0', // Tailwind's bg-slate-200
  ])
  ->addText('background_gradient', [
    'label' => 'Background Gradient (CSS)',
    'instructions' => 'Enter a valid CSS gradient, e.g., "linear-gradient(to right, #ff7e5f, #feb47b)"',
    'default_value' => '',
  ])
  ->addColorPicker('heading_color', [
    'label' => 'Heading Color',
    'default_value' => '#000000', // Tailwind's text-black
  ])
  ->addColorPicker('text_color_24', [
    'label' => 'Text Color',
    'default_value' => '#ffffff', // Tailwind's text-slate-800
  ])
  ->addColorPicker('divider_color', [
    'label' => 'Divider Color',
    'default_value' => '#f97316', // Tailwind's bg-orange-400
  ])
  ->addColorPicker('icon_color', [
    'label' => 'Icon Color',
    'default_value' => '#025A70', // Default SVG color
  ])
  ->addNumber('image_border_radius', [
    'label' => 'Image Border Radius',
    'min' => 0,
    'max' => 50,
    'step' => 1,
    'default_value' => 8,
    'append' => 'px',
  ]);

// Layout Tab
$content_024
  ->addTab('layout_tab', ['label' => 'Layout'])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
    'button_label' => 'Add Screen Size Padding',
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
      'ultrawide' => 'ultrawide',
    ],
  ])
  ->addNumber('padding_top', [
    'label' => 'Padding Top',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
    'append' => 'rem',
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
    'append' => 'rem',
  ])
  ->endRepeater();

return $content_024;
