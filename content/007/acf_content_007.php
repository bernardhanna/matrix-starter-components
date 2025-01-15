<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define Content Block 007 layout
$content_007 = new FieldsBuilder('content_007', [
  'label' => 'Content Block 007',
]);

$content_007
  ->addSelect('heading_tag', [
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
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'default_value' => 'Content Block 007',
  ])
  ->addWysiwyg('content_paragraph', [
    'label' => 'Content Paragraph',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
    'default_value' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
  ])
  ->addImage('content_image', [
    'label' => 'Content Image',
    'return_format' => 'id',
  ])
  ->addText('button_text', [
    'label' => 'Button Text',
    'default_value' => 'Our services',
  ])
  ->addUrl('button_link', [
    'label' => 'Button Link',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#FFFFFF',
  ])
  ->addRepeater('sections', [
    'label' => 'Sections',
    'min' => 1,
    'max' => 2,
    'layout' => 'block',
  ])
  ->addImage('section_icon', [
    'label' => 'Section Icon',
    'return_format' => 'id',
  ])
  ->addText('section_title', [
    'label' => 'Section Title',
    'default_value' => 'Content 001',
  ])
  ->addWysiwyg('section_text', [
    'label' => 'Section Text',
    'rows' => 4,
    'default_value' => 'Lorem ipsum dolor sit amet',
  ])
  ->addColorPicker('section_background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#F3F4F6',
  ])
  ->endRepeater();

return $content_007;
