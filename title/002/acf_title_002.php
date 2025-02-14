<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$title_002 = new FieldsBuilder('title_002', [
  'label' => 'Title 002',
]);

$title_002
  ->addTab('Content', [
    'label' => 'Content',
  ])
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
      'text-left' => 'Left',
      'text-center' => 'Center',
      'text-right' => 'Right',
    ],
    'default_value' => 'text-left',
  ])
  ->addColorPicker('underline_color', [
    'label' => 'Underline Color',
    'instructions' => 'Choose a color for the underline.',
  ])
  ->addTab('Design', [
    'label' => 'Design',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'instructions' => 'Set the background color of the section.',
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
  ->endRepeater();

return $title_002;
