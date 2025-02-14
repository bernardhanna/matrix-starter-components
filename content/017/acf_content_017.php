<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_017 = new FieldsBuilder('content_017', [
  'label' => 'Content 017',
]);

$content_017
  ->addTab('Content', ['label' => 'Content'])
  ->addText('heading', [
    'label' => 'Heading Text',
    'instructions' => 'Set the text for the heading.',
    'default_value' => 'Who we are',
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
    'default_value' => '<p>At Lorem Ipsum, we understand that data is one of the most valuable assets a business can have...</p>',
    'media_upload' => 0,
    'tabs' => 'all',
    'toolbar' => 'full',
  ])
  ->addRepeater('list_items', [
    'label' => 'List Items',
    'button_label' => 'Add List Item',
  ])
  ->addText('list_text', [
    'label' => 'Text',
    'instructions' => 'List item text.',
  ])
  ->endRepeater()
  ->addWysiwyg('content_two', [
    'label' => 'Bottom Content',
    'instructions' => 'Add the main content.',
    'default_value' => '<p>Together, we combine deep local insight with advanced geographical capabilities to redefine address data accuracy.</p>',
    'media_upload' => 0,
    'tabs' => 'all',
    'toolbar' => 'full',
  ])
  ->addRepeater('icons', [
    'label' => 'Icons Section',
    'button_label' => 'Add Icon',
  ])
  ->addImage('icon', [
    'label' => 'Icon',
    'return_format' => 'id',
  ])
  ->addText('icon_text', [
    'label' => 'Icon Text',
    'default_value' => 'Default text',
  ])
  ->endRepeater()
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#1e1f3d',
  ])
  ->addColorPicker('underline_color', [
    'label' => 'Underline Color',
    'default_value' => '#f68d2e', // Secondary by default
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'default_value' => '#FFFFFF',
  ])
  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
  ])
  ->addSelect('screen_size', [
    'label' => 'Screen Size',
    'choices' => ['xxs', 'xs', 'mob', 'sm', 'md', 'lg', 'xl', 'xxl', 'ultrawide'],
  ])
  ->addNumber('padding_top', ['label' => 'Padding Top (rem)', 'default_value' => 5])
  ->addNumber('padding_bottom', ['label' => 'Padding Bottom (rem)', 'default_value' => 5])
  ->endRepeater();
return $content_017;
