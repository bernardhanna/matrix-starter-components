<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_019 = new FieldsBuilder('content_019', [
  'label' => 'Content 019',
]);

$content_019
  ->addTab('Content', ['label' => 'Content'])
  ->addText('heading', [
    'label' => 'Heading Text',
    'instructions' => 'Set the text for the heading.',
    'default_value' => 'How we deliver',
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
      'p'  => 'Paragraph',
      'span' => 'Span',
    ],
    'default_value' => 'h2',
  ])
  ->addWysiwyg('content', [
    'label' => 'Main Content',
    'instructions' => 'Add the main content.',
    'default_value' => '<p>Our team of data scientists and technology experts integrates the ground-level insights...</p>',
    'media_upload' => 0,
    'tabs' => 'all',
    'toolbar' => 'full',
  ])
  ->addImage('image', [
    'label' => 'Image',
    'return_format' => 'id',
    'preview_size' => 'medium',
  ])
  ->addLink('button', [
    'label' => 'Button',
    'return_format' => 'array',
  ])
  ->addTrueFalse('show_button_icon', [
    'label' => 'Show Button Icon',
    'default_value' => 1,
  ])
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#FFFFFF',
  ])
  ->addColorPicker('heading_underline_color', [
    'label' => 'Heading Underline Color',
    'default_value' => '#FFA500', // Default Orange
  ])
  ->addColorPicker('heading_color', [
    'label' => 'Heading Color',
    'default_value' => '#1D2939',
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'default_value' => '#1D2939',
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
    'default_value' => '#013847',
  ])
  ->addColorPicker('button_hover_text_color', [
    'label' => 'Button Hover Text Color',
    'default_value' => '#FFFFFF',
  ])
  ->addColorPicker('button_border_color', [
    'label' => 'Button Border Color',
    'default_value' => '#025A70',
  ])
  ->addColorPicker('button_hover_border_color', [
    'label' => 'Button Hover Border Color',
    'default_value' => '#013847',
  ])
  ->addNumber('border_radius', [
    'label' => 'Image Border Radius (rem)',
    'default_value' => 0.5,
    'min' => 0,
    'max' => 10,
    'step' => 0.1,
  ])
  ->addTab('Layout', ['label' => 'Layout'])
  ->addTrueFalse('reverse_layout', [
    'label' => 'Reverse Layout',
    'instructions' => 'Toggle to switch the image and text positions.',
    'default_value' => 0,
  ])
  ->addRepeater('padding_settings', ['label' => 'Padding Settings'])
  ->addSelect('screen_size', [
    'label' => 'Screen Size',
    'choices' => ['xxs', 'xs', 'mob', 'sm', 'md', 'lg', 'xl', 'xxl', 'ultrawide'],
  ])
  ->addNumber('padding_top', ['label' => 'Padding Top (rem)', 'default_value' => 5])
  ->addNumber('padding_bottom', ['label' => 'Padding Bottom (rem)', 'default_value' => 5])
  ->endRepeater();

return $content_019;
