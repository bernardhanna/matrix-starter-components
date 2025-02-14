<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_023 = new FieldsBuilder('content_023', [
  'label' => 'Content 023',
]);

$content_023
  ->addTab('Content', [
    'label' => 'Content',
  ])
  ->addImage('feature_image', [
    'label' => 'Feature Image',
    'instructions' => 'Upload the feature image.',
    'return_format' => 'array',
  ])
  ->addText('section_heading', [
    'label' => 'Section Heading',
    'instructions' => 'Enter the main heading.',
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
      'p'  => 'Paragraph',
    ],
    'default_value' => 'h2',
  ])
  ->addRepeater('features', [
    'label' => 'Feature Items',
    'instructions' => 'Add individual feature items.',
    'button_label' => 'Add Feature',
  ])
  ->addText('feature_title', [
    'label' => 'Feature Title',
    'instructions' => 'Enter the title of the feature.',
  ])
  ->addTextarea('feature_description', [
    'label' => 'Feature Description',
    'instructions' => 'Enter the description of the feature.',
    'rows' => 3,
  ])
  ->endRepeater()
  ->addTab('Design', [
    'label' => 'Design',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'instructions' => 'Select the background color for the section.',
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'instructions' => 'Select the text color for the content.',
  ])
  ->addTab('Layout', [
    'label' => 'Layout',
  ])
  ->addTrueFalse('reverse_layout', [
    'label' => 'Reverse Layout',
    'instructions' => 'Check to reverse the layout (image on right, text on left).',
    'ui' => 1,
  ])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
    'instructions' => 'Customize padding for different screen sizes.',
    'button_label' => 'Add Padding',
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
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom',
    'instructions' => 'Set the bottom padding in rem.',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
  ])
  ->endRepeater();

return $content_023;
