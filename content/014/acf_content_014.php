<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block layout
$content_014 = new FieldsBuilder('content_014', [
  'label' => 'Content 014',
]);

$content_014
  ->addSelect('content_014_heading_tag', [
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
  ->addText('content_014_heading_text', [
    'label' => 'Heading Text',
    'placeholder' => 'Enter heading text here...',
    'default_value' => 'Content 014',
  ])
  ->addWysiwyg('content_014_subheading_text', [
    'label' => 'Subheading Text',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
    'default_value' => '<p>See whose services we help to deliver to you every day</p>',
  ])
  ->addWysiwyg('content_014_paragraph_text', [
    'label' => 'Paragraph Text',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 0,
    'default_value' => '<p>Lorem ipsum dolor sit amet consectetur. Tristique purus sed diam ac. Ac nullam egestas maecenas interdum imperdiet tincidunt. Tortor egestas et ac faucibus risus. Placerat amet egestas congue molestie dolor gravida.<br>
    Interdum pulvinar fermentum mauris nec lacus et. Nunc malesuada rutrum tincidunt nec euismod ultrices eleifend in sodales. Elit scelerisque.</p>',
  ])
  ->addLink('content_014_button_link', [
    'label' => 'Button Link',
    'return_format' => 'array',
    'default_value' => [
      'url' => home_url('/'),
      'title' => 'Discover our API',
      'target' => '_self',
    ],
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#ffffff',
  ])
  ->addRange('padding_y', [
    'label' => 'Padding Y',
    'instructions' => 'Set vertical padding for the section.',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 12, // Default 12%
  ])
  ->addTrueFalse('show_button_icon', [
    'label' => 'Show Button Icon',
    'default_value' => 1, // Default to enabled
  ]);

return $content_014;