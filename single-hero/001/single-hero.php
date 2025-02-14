<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_section = new FieldsBuilder('hero_section');

$hero_section
  ->setLocation('post_type', '==', 'post');

$hero_section
  ->addImage('banner_image', [
    'label' => 'Banner Image',
    'return_format' => 'url',
    'preview_size' => 'medium',
    'instructions' => 'Upload a banner image for the post.',
  ])
  ->addNumber('background_opacity', [
    'label' => 'Background Opacity',
    'instructions' => 'Set the opacity for the background overlay (0 to 1).',
    'min' => 0,
    'max' => 1,
    'step' => 0.1,
    'default_value' => 0.8,
  ]);

acf_add_local_field_group($hero_section->build());
