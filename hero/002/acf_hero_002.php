<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Hero 002 Block layout
$hero_002 = new FieldsBuilder('hero_002', [
  'label' => 'Hero 002 Block',
]);

$hero_002
  // Section Class
  ->addText('hero_002_section_class', [
    'label' => 'Section Class',
    'placeholder' => 'additional-class',
    'default_value' => '',
  ])

  // Background Type
  ->addSelect('hero_002_background_type', [
    'label' => 'Background Type',
    'choices' => [
      'image' => 'Image',
      'video' => 'Video',
    ],
    'default_value' => 'image',
  ])

  // Banner Image
  ->addImage('hero_002_page_banner_image', [
    'label' => 'Banner Image',
    'return_format' => 'array',
    'preview_size' => 'medium',
    'library' => 'all',
    'placeholder' => 'Upload a banner image...',
  ])

  // Banner Video
  ->addFile('hero_002_page_banner_video', [
    'label' => 'Banner Video',
    'return_format' => 'url',
    'library' => 'all',
    'mime_types' => 'mp4,webm,ogg',
    'placeholder' => 'Upload a banner video...',
  ])

  // Banner Overlay Color
  ->addColorPicker('hero_002_page_banner_overlay_color', [
    'label' => 'Overlay Color',
    'default_value' => '#000000',
    'enable_opacity' => true,
  ])

  // Show Icon Boxes
  ->addTrueFalse('hero_002_show_icon_boxes', [
    'label' => 'Show Icon Boxes',
    'default_value' => 0,
    'ui' => 1,
  ])

  // Icon Boxes Repeater
  ->addRepeater('hero_002_icon_boxes', [
    'label' => 'Icon Boxes',
    'instructions' => 'Add icon boxes to display.',
    'collapsed' => 'hero_002_icon',
    'min' => 0,
    'layout' => 'row',
    'button_label' => 'Add Icon Box',
    'conditional_logic' => [
      [
        [
          'field' => 'hero_002_show_icon_boxes',
          'operator' => '==',
          'value' => '1',
        ],
      ],
    ],
  ])
  ->addImage('hero_002_icon', [
    'label' => 'Icon',
    'return_format' => 'array',
    'preview_size' => 'thumbnail',
    'library' => 'all',
    'required' => 1,
  ])
  ->addText('hero_002_title', [
    'label' => 'Title',
    'placeholder' => 'Icon Box Title',
    'default_value' => 'Icon Title',
    'required' => 1,
  ])
  ->addTextArea('hero_002_text', [
    'label' => 'Text',
    'placeholder' => 'Icon box description...',
    'default_value' => 'This is a description for the icon box.',
    'required' => 1,
  ])
  ->addSelect('hero_002_bg_color', [
    'label' => 'Background Color',
    'choices' => [
      'bg-blue-500' => 'Blue',
      'bg-green-500' => 'Green',
      'bg-red-500' => 'Red',
      'bg-yellow-500' => 'Yellow',
      'bg-gray-100' => 'Gray',
      // Add more Tailwind color classes as needed
    ],
    'default_value' => 'bg-gray-100',
    'required' => 1,
  ])
  ->endRepeater()

  // **New Fields for Banner Text**

  // Heading Tag
  ->addSelect('hero_002_heading_tag', [
    'label' => 'Heading Tag',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
    ],
    'default_value' => 'h1', // Default to H1
  ])

  // Heading Text
  ->addText('hero_002_heading_text', [
    'label' => 'Heading Text',
    'placeholder' => 'Grow your revenue by finding new customers',
    'default_value' => 'Grow your revenue by finding new customers',
  ])

  // Subheading Text
  ->addTextArea('hero_002_subheading_text', [
    'label' => 'Subheading Text',
    'placeholder' => 'We are revolutionising fleet operations globally with our telematics solution, that offers an unparalleled level of intelligence to drive your business forward.',
    'default_value' => 'We are revolutionising fleet operations globally with our telematics solution, that offers an unparalleled level of intelligence to drive your business forward.',
    'new_lines' => 'wpautop', // Automatically add paragraph tags
  ]);

return $hero_002;
