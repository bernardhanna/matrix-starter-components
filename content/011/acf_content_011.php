<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content 011 Block
$content_011 = new FieldsBuilder('content_011', [
  'label' => 'Content 011',
]);

$content_011
  ->addTab('Content', ['placement' => 'top'])
  ->addText('title_text', [
    'label' => 'Title Text',
    'instructions' => 'Enter the title text for this section.',
  ])
  ->addSelect('title_tag', [
    'label' => 'Title Tag',
    'instructions' => 'Select the HTML tag for the title.',
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
  ->addSelect('text_alignment', [
    'label' => 'Text Alignment',
    'instructions' => 'Select the alignment for the text.',
    'choices' => [
      'items-left' => 'Left',
      'items-center' => 'Center',
      'items-right' => 'Right',
    ],
    'default_value' => 'text-left',
  ])
  ->addWysiwyg('desc_text', [
    'label' => 'Description Text',
    'instructions' => 'Enter the description text for this section.',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 0,
  ])
  ->addRepeater('content_011_items', [
    'label' => 'Feature Items',
    'min' => 1,
    'layout' => 'block',
  ])
  ->addColorPicker('content_011_text_color', [
    'label' => 'Number Text Color',
    'default_value' => '#000000',
  ])
  ->addColorPicker('content_011_circle_background_color', [
    'label' => 'Circle Background Color',
    'default_value' => '#E7F0E',
  ])
  ->addColorPicker('content_011_circle_border_color', [
    'label' => 'Circle Border Color',
    'default_value' => '#000000',
  ])
  ->addColorPicker('content_011_title_text_color', [
    'label' => 'Title Text Color',
    'default_value' => '#000000',
  ])
  ->addColorPicker('content_011_desc_text_color', [
    'label' => 'Description Text Color',
    'default_value' => '#000000',
  ])
  ->addText('content_011_text', [
    'label' => 'Feature Title',
    'default_value' => 'Feature Title',
  ])
  ->addText('content_011_desc', [
    'label' => 'Feature Description',
    'default_value' => 'Feature description goes here.',
  ])
  ->endRepeater()
  ->addTab('Design', ['placement' => 'top'])
  ->addColorPicker('content_011_background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#02485',
  ])
  ->addText('background_gradient', [
    'label' => 'Background Gradient',
    'default_value' => '',
  ])
  ->addColorPicker('underline_color', [
    'label' => 'Underline Color',
    'instructions' => 'Choose a color for the underline.',
  ])
  ->addTab('Layout', ['placement' => 'top'])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Controls',
    'button_label' => 'Add Screen Size Padding',
    'layout' => 'block',
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
    'instructions' => 'Set top padding in rem.',
    'min' => 0,
    'max' => 10,
    'step' => 0.1,
    'default_value' => null, // Null for fallback
    'append' => 'rem',
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom',
    'instructions' => 'Set bottom padding in rem.',
    'min' => 0,
    'max' => 10,
    'step' => 0.1,
    'default_value' => null, // Null for fallback
    'append' => 'rem',
  ])
  ->endRepeater();
return $content_011;
