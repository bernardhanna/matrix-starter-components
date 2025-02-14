<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$partners_001 = new FieldsBuilder('partners_001', [
  'label' => 'Partners',
]);

$partners_001
  ->addTab('Content', [
    'label' => 'Content',
  ])
  ->addText('section_heading', [
    'label' => 'Section Heading',
    'instructions' => 'Enter the heading for this section.',
    'default_value' => 'Our Partners',
  ])
  ->addSelect('heading_tag', [
    'label' => 'Heading Tag',
    'instructions' => 'Select the HTML tag for the heading.',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
      'p'  => 'Paragraph',
    ],
    'default_value' => 'h2',
  ])
  ->addRepeater('rows', [
    'label' => 'Rows',
    'instructions' => 'Add rows with items.',
    'button_label' => 'Add Row',
    'layout' => 'block',
  ])
  ->addSelect('columns', [
    'label' => 'Number of Columns',
    'instructions' => 'Select the number of columns for this row.',
    'choices' => [
      'sm:grid-cols-2 lg:grid-cols-2 max-sm:grid-cols-1' => '2 Columns',
      'sm:grid-cols-2 lg:grid-cols-3 max-sm:grid-cols-1' => '3 Columns',
    ],
    'default_value' => 'sm:grid-cols-2 lg:grid-cols-1 max-sm:grid-cols-1',
  ])
  ->addRepeater('items', [
    'label' => 'Items',
    'instructions' => 'Add items for this row.',
    'button_label' => 'Add Item',
    'layout' => 'block',
  ])
  ->addImage('item_image', [
    'label' => 'Item Image',
    'instructions' => 'Upload an image for this item.',
    'return_format' => 'array',
  ])
  ->addNumber('item_image_height', [
    'label' => 'Image Height (px)',
    'instructions' => 'Set the height of the item image in pixels.',
    'default_value' => 70,
    'min' => 10,
    'max' => 100,
    'step' => 1,
  ])
  ->addText('item_title', [
    'label' => 'Item Title',
    'instructions' => 'Enter the title for this item.',
  ])
  ->addTextarea('item_description', [
    'label' => 'Item Description',
    'instructions' => 'Enter the description for this item.',
    'rows' => 3,
  ])
  ->endRepeater()
  ->endRepeater()
  ->addTab('Design', [
    'label' => 'Design',
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'instructions' => 'Select a background color for the section.',
  ])
  ->addColorPicker('underline_color', [
    'label' => 'Underline Color',
    'instructions' => 'Select a color for the underline.',
    'default_value' => '#FFA500',
  ])
  ->addTab('Layout', [
    'label' => 'Layout',
  ])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
    'instructions' => 'Customize padding for different screen sizes.',
    'button_label' => 'Add Padding',
  ])
  ->addSelect('screen_size', [
    'label' => 'Screen Size',
    'choices' => [
      'xxs' => 'xxs',
      'xs' => 'xs',
      'mob' => 'mob',
      'sm' => 'sm',
      'md' => 'md',
      'lg' => 'lg',
      'xl' => 'xl',
      'xxl' => 'xxl',
      'ultrawide' => 'ultrawide',
    ],
  ])
  ->addNumber('padding_top', [
    'label' => 'Padding Top',
    'instructions' => 'Set the top padding in rem.',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom',
    'instructions' => 'Set the bottom padding in rem.',
    'min' => 0,
    'max' => 20,
    'step' => 0.1,
  ])
  ->endRepeater();

return $partners_001;
