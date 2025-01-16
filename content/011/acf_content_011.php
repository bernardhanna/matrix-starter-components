<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Intro Block layout
$content_011 = new FieldsBuilder('content_011', [
  'label' => 'Content 011',
]);

$content_011
  ->addColorPicker('content_011_background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#ffffff',
  ])
  ->addRepeater('content_011_items', [
    'label' => 'Feature Items',
    'min' => 1,
    'layout' => 'block',
  ])
  ->addColorPicker('content_011_text_color', [
    'label' => 'Number Text Color',
    'default_value' => '#fb6407',
  ])
  ->addColorPicker('content_011_circle_background_color', [
    'label' => 'Circle Background Color',
    'default_value' => '#1e1f3d',
  ])
  ->addText('content_011_text', [
    'label' => 'Feature Description',
    'default_value' => 'Content 008'
  ])
  ->addText('content_011_desc', [
    'label' => 'Feature Text',
    'default_value' => 'Count increment increases by 1 with each repeater field added'
  ])
  ->endRepeater();
return $content_011;
