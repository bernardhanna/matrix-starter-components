<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_020 = new FieldsBuilder('content_020', [
  'label' => 'Content 20',
]);

$content_020
  ->addTab('Content', ['label' => 'Content'])
  ->addSelect('heading_tag', [
    'label' => 'Heading Tag',
    'instructions' => 'Choose the HTML tag for the heading.',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
      'span' => 'Span',
      'p' => 'Paragraph',
    ],
    'default_value' => 'h3',
  ])
  ->addText('section_title', [
    'label' => 'Section Title',
    'default_value' => 'How it Works'
  ])
  ->addWysiwyg('section_description', [
    'label' => 'Section Description',
    'default_value' => 'Our API seamlessly integrates into your existing systems to ensure the accuracy and validity of addresses.'
  ])
  ->addImage('section_image', [
    'label' => 'Icon Image',
    'return_format' => 'array'
  ])
  ->addText('step_title', ['label' => 'Steps Title'])
  ->addRepeater('steps', [
    'label' => 'Steps',
    'layout' => 'table',
    'button_label' => 'Add Step'
  ])
  ->addText('step_number', ['label' => 'Step Number', 'default_value' => '1'])
  ->addWysiwyg('step_description', ['label' => 'Step Description'])
  ->endRepeater()
  ->addText('cta_text', ['label' => 'CTA Text', 'default_value' => 'Optional CTA'])
  ->addUrl('cta_link', ['label' => 'CTA Link'])
  ->addTrueFalse('show_cta', ['label' => 'Show CTA', 'default_value' => 1])
  ->addTrueFalse('show_cta_icon', ['label' => 'Show CTA Icon', 'default_value' => 1])
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('section_bg_color', ['label' => 'Section Background Color', 'default_value' => '#FFFFFF'])
  ->addColorPicker('text_color', ['label' => 'Text Color', 'default_value' => '#FFFFFF'])
  ->addTrueFalse('grid_column_1_use_gradient', ['label' => 'Use Gradient for Grid Column 1', 'default_value' => 0])
  ->addColorPicker('grid_column_1_bg', ['label' => 'Grid Column 1 Background', 'default_value' => '#025A70'])
  ->addText('grid_column_1_gradient', ['label' => 'Grid Column 1 Gradient', 'default_value' => 'linear-gradient(180deg, #1B6B7E 0%, #025A70 100%)'])
  ->addTrueFalse('grid_column_2_use_gradient', ['label' => 'Use Gradient for Grid Column 2', 'default_value' => 0])
  ->addColorPicker('grid_column_2_bg', ['label' => 'Grid Column 2 Background', 'default_value' => '#F68D2E'])
  ->addText('grid_column_2_gradient', ['label' => 'Grid Column 2 Gradient', 'default_value' => 'linear-gradient(180deg, #FFB703 0%, #F68D2E 100%)'])
  ->addColorPicker('cta_bg_color', ['label' => 'CTA Background Color', 'default_value' => '#FFFFFF'])
  ->addColorPicker('cta_text_color', ['label' => 'CTA Text Color', 'default_value' => '#025A70'])
  ->addColorPicker('cta_hover_bg_color', ['label' => 'CTA Hover Background Color', 'default_value' => '#F68D2E'])
  ->addColorPicker('cta_hover_text_color', ['label' => 'CTA Hover Text Color', 'default_value' => '#FFFFFF'])
  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('padding_settings', ['label' => 'Padding Settings', 'button_label' => 'Add Padding'])
  ->addSelect('screen_size', ['label' => 'Screen Size', 'choices' => [
    'xxs' => 'xxs',
    'xs' => 'xs',
    'mob' => 'mob',
    'sm' => 'sm',
    'md' => 'md',
    'lg' => 'lg',
    'xl' => 'xl',
    'xxl' => 'xxl',
    'ultrawide' => 'ultrawide'
  ]])
  ->addNumber('padding_top', ['label' => 'Padding Top (rem)', 'default_value' => 5])
  ->addNumber('padding_bottom', ['label' => 'Padding Bottom (rem)', 'default_value' => 5])
  ->endRepeater();

return $content_020;
