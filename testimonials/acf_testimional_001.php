<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Testimonial Section Layout
$testimonial_001 = new FieldsBuilder('testimonial_001', [
  'label' => 'Testimonial Section',
]);

$testimonial_001
  ->addColorPicker('background_color', [
    'label' => 'Section Background Color',
    'default_value' => '#FFFF00', // Default yellow background
  ])
  ->addRepeater('testimonials', [
    'label' => 'Testimonials',
    'min' => 1,
    'button_label' => 'Add Testimonial',
  ])
  ->addWysiwyg('quote', [
    'label' => 'Testimonial Quote',
    'default_value' => '<p>This is a really great time for GeoDirectory and our customers...</p>',
  ])
  ->addText('author', [
    'label' => 'Author Name',
    'placeholder' => 'Enter the author name...',
    'default_value' => 'Dara Keogh, CEO, GeoDirectory',
  ])
  ->addImage('author_image', [
    'label' => 'Author Image',
    'return_format' => 'array',
  ])
  ->addTrueFalse('show_svg', [
    'label' => 'Show SVG Icon',
    'ui' => 1,
    'default_value' => 1,
  ])
  ->endRepeater();

return $testimonial_001;
