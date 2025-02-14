<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_021 = new FieldsBuilder('content_021', [
  'label' => 'Content 021',
]);

$content_021
  ->addTab('Content', [
    'label' => 'Content',
  ])
  ->addImage('main_image', [
    'label' => 'Main Image',
    'instructions' => 'Upload the main image.',
    'return_format' => 'array',
  ])
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'instructions' => 'Enter the heading text.',
  ])
  ->addSelect('heading_tag', [
    'label' => 'Heading Tag',
    'instructions' => 'Choose the HTML tag for the heading.',
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
    'default_value' => 'h3',
  ])
  ->addColorPicker('heading_color', [
    'label' => 'Heading Color',
    'instructions' => 'Choose the text color for the heading.',
  ])
  ->addWysiwyg('content_text', [
    'label' => 'Content Text',
    'instructions' => 'Enter the content text.',
    'media_upload' => 0,
    'tabs' => 'visual',
  ])
  ->addTab('Design', [
    'label' => 'Design',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'instructions' => 'Choose a background color for the section.',
  ])
  ->addColorPicker('underline_color', [
    'label' => 'Underline Color',
    'instructions' => 'Choose a color for the underline.',
  ])
  ->addTab('Layout', [
    'label' => 'Layout',
  ])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
    'instructions' => 'Customize padding for different screen sizes.',
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
    'instructions' => 'Set the top padding in rem.',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
    'append' => 'rem',
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom',
    'instructions' => 'Set the bottom padding in rem.',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
    'append' => 'rem',
  ])
  ->endRepeater()
  ->addTrueFalse('reverse_layout', [
    'label' => 'Reverse Layout',
    'instructions' => 'Check this to reverse the layout (Image on right, text on left).',
    'ui' => 1,
  ]);

return $content_021;
