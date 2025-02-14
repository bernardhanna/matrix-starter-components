<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_018 = new FieldsBuilder('content_018', [
  'label' => 'What We Do Section',
]);

$content_018
  ->addTab('Content', ['label' => 'Content'])
  ->addText('heading', [
    'label' => 'Section Heading',
    'instructions' => 'Enter the heading text for the section.',
    'default_value' => 'What we do',
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
      'p'  => 'Paragraph',
      'span' => 'Span',
    ],
    'default_value' => 'h2',
  ])
  ->addTextarea('description', [
    'label' => 'Description',
    'instructions' => 'Enter the content description for the section.',
    'default_value' => 'Lorem ipsum dolor sit amet...',
  ])
  ->addImage('image', [
    'label' => 'Section Image',
    'return_format' => 'id',
  ])
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#FDE68A',
  ])
  ->addColorPicker('heading_color', [
    'label' => 'Heading Color',
    'default_value' => '#0F172A',
  ])
  ->addColorPicker('divider_color', [
    'label' => 'Divider Color',
    'default_value' => '#f97316', // Tailwind's bg-orange-400
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'default_value' => '#1E293B',
  ])
  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
  ])
  ->addSelect('screen_size', [
    'label' => 'Screen Size',
    'choices' => ['xxs', 'xs', 'mob', 'sm', 'md', 'lg', 'xl', 'xxl', 'ultrawide'],
  ])
  ->addNumber('padding_top', [
    'label' => 'Padding Top (rem)',
    'default_value' => 5,
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom (rem)',
    'default_value' => 5,
  ])
  ->endRepeater();

return $content_018;
