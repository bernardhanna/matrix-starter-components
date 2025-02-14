<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block layout
$content_027 = new FieldsBuilder('content_027', [
  'label' => 'Content 027',
]);

$content_027
  // Horizontal Tabs
  ->addTab('Content', ['placement' => 'top'])
  ->addSelect('content_027_heading_tag', [
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
  ->addText('content_027_heading_text', [
    'label' => 'Heading Text',
    'placeholder' => 'Enter heading text here...',
    'default_value' => 'Content 027',
  ])
  ->addWysiwyg('content_027_paragraph_text', [
    'label' => 'Paragraph Text',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 1,
    'default_value' => '<p>Lorem ipsum dolor sit amet consectetur. Tristique purus sed diam ac. Ac nullam egestas maecenas interdum imperdiet tincidunt. Tortor egestas et ac faucibus risus. Placerat amet egestas congue molestie dolor gravida.<br>
      Interdum pulvinar fermentum mauris nec lacus et. Nunc malesuada rutrum tincidunt nec euismod ultrices eleifend in sodales. Elit scelerisque.</p>',
  ])
  ->addOembed('content_027_video', [
    'label' => 'Video',
    'instructions' => 'Paste Vimeo URL here',
  ])
  ->addLink('content_027_button_link', [
    'label' => 'Button Link',
    'return_format' => 'array',
    'default_value' => [
      'url' => home_url('/'),
      'title' => 'Discover our API',
      'target' => '_self',
    ],
  ])

  ->addTab('Design', ['placement' => 'top'])
  ->addColorPicker('heading_text_color', [
    'label' => 'Heading Text Color',
    'default_value' => '#000000', // Black by default
  ])
  ->addColorPicker('underline_color', [
    'label' => 'Underline Color',
    'default_value' => '#1e1f3d', // Secondary by default
  ])
  ->addColorPicker('button_background_color', [
    'label' => 'Button Background Color',
    'default_value' => '#1e1f3d', // Secondary by default
  ])
  ->addColorPicker('button_text_color', [
    'label' => 'Button Text Color',
    'default_value' => '#ffffff', // White by default
  ])
  ->addColorPicker('button_hover_background_color', [
    'label' => 'Button Hover Background Color',
    'default_value' => '#F68D2E', // Primary hover by default
  ])
  ->addColorPicker('button_hover_text_color', [
    'label' => 'Button Hover Text Color',
    'default_value' => '#ffffff', // White by default
  ])
  ->addColorPicker('border_color', [
    'label' => 'Border Color',
    'default_value' => '#F68D2E', // Default border color
  ])
  ->addColorPicker('border_hover_color', [
    'label' => 'Border Hover Color',
    'default_value' => '#F68D2E', // Default hover color
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#ffffff',
  ])
  ->addTrueFalse('show_button_icon', [
    'label' => 'Show Button Icon',
    'default_value' => 1, // Default to enabled
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

return $content_027;
