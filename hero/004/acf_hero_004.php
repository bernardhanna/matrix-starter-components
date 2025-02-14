<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_004 = new FieldsBuilder('hero_004', [
  'label' => 'Hero 004',
]);

$hero_004
  ->addTab('Content', ['label' => 'Content'])
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'instructions' => 'Enter the main heading text.',
    'default_value' => 'Lorem Ipsum Dolar mat',
  ])
  ->addSelect('heading_tag', [
    'label' => 'Heading Tag',
    'instructions' => 'Select the HTML heading tag.',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
      'p'  => 'Paragraph',
      'span' => 'Span',
    ],
    'default_value' => 'h1',
  ])
  ->addTextarea('subtext', [
    'label' => 'Subtext',
    'instructions' => 'Enter the supporting text below the heading.',
    'default_value' => 'Lorem Ipsum Dolar mat',
  ])
  ->addImage('background_image', [
    'label' => 'Background Image',
    'instructions' => 'Upload or select a background image.',
    'return_format' => 'array',
  ])

  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('background_overlay_color', [
    'label' => 'Overlay Color',
    'instructions' => 'Select the background overlay color.',
    'default_value' => '#083344',
  ])
  ->addRange('background_overlay_opacity', [
    'label' => 'Overlay Opacity',
    'instructions' => 'Set the opacity of the background overlay.',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 70,
  ])
  ->addColorPicker('heading_text_color', [
    'label' => 'Heading Text Color',
    'default_value' => '#ffb703',
  ])
  ->addColorPicker('subtext_color', [
    'label' => 'Subtext Color',
    'default_value' => '#FFFFFF',
  ])

  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('section_height_settings', [
    'label' => 'Section Height Settings',
    'instructions' => 'Customize height for different screen sizes.',
    'button_label' => 'Add Screen Size Height',
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
  ->addNumber('section_height', [
    'label' => 'Section Height',
    'instructions' => 'Set the height of the section in pixels.',
    'min' => 0,
    'max' => 2000,
    'step' => 10,
    'append' => 'px',
  ])
  ->endRepeater()
  ->addSelect('content_alignment', [
    'label' => 'Content Alignment',
    'instructions' => 'Set the alignment of the content.',
    'choices' => [
      'left' => 'Left',
      'center' => 'Center',
      'right' => 'Right',
    ],
    'default_value' => 'left',
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

return $hero_004;
