<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block 013
$accreditations_001 = new FieldsBuilder('accreditations_001', [
  'label' => 'Accreditations Post Type Carousel',
]);

$accreditations_001
  ->addSelect('accreditations_001_heading_tag', [
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
  ]);
return $accreditations_001;
