<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_002 = new FieldsBuilder('hero_002');

$hero_002
  ->addText('heading_text', [
    'label' => 'Heading Text',
    'instructions' => 'Enter the main heading text.',
    'default_value' => 'Hero 002',
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
    ],
    'default_value' => 'h1',
  ])
  ->addTextarea('subtext', [
    'label' => 'Subtext',
    'instructions' => 'Enter the supporting text below the heading.',
    'default_value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
  ])
  ->addImage('background_image', [
    'label' => 'Background Image',
    'instructions' => 'Upload or select a background image.',
    'return_format' => 'array',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'instructions' => 'Select the background color.',
    'default_value' => '#212121', // Default: bg-neutral-900
  ])
  ->addRange('background_opacity', [
    'label' => 'Background Opacity',
    'instructions' => 'Set the opacity of the background color.',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 50, // 50% opacity
  ]);

return $hero_002;
