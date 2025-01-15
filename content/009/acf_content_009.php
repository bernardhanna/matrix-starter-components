<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Intro Block layout
$content_009 = new FieldsBuilder('content_009', [
  'label' => 'Content 009',
]);

$content_009
  ->addSelect('content_009_column_layout', [
    'label' => 'Column Layout',
    'choices' => [
      '2' => '2 Columns',
      '3' => '3 Columns',
    ],
    'default_value' => '3', // Default to 3 columns
  ])
  ->addSelect('content_009_heading_tag', [
    'label' => 'Heading Tag',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
    ],
    'default_value' => 'h2', // Default to H2
  ])
  ->addText('content_009_heading', [
    'label' => 'Section Heading',
  ])
  ->addColorPicker('content_009_section_background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#FFF6F1', // Default neutral light color
  ])
  ->addSelect('content_009_item_height', [
    'label' => 'Item Height',
    'choices' => [
      'h-[332px]' => '332px',
      'h-[220px]' => '220px',
      'h-auto' => 'auto',
    ],
    'default_value' => 'h-[332px]', // Default to 332px height
  ])
  ->addRepeater('content_009_items', [
    'label' => 'Service Items',
    'min' => 1,
    'layout' => 'block',
  ])
  ->addImage('content_009_icon', [
    'label' => 'Service Icon',
    'return_format' => 'array', // We will use the ID to fetch the alt text
  ])
  ->addText('content_009_title', [
    'label' => 'Service Title',
  ])
  ->addWysiwyg('content_009_description', [
    'label' => 'Service Description',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
  ])
  ->endRepeater();

return $content_009;
