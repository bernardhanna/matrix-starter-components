<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$cta_003 = new FieldsBuilder('cta_003', [
  'label' => 'CTA 003',
]);

$cta_003
  ->addTab('Content', ['label' => 'Content'])
  ->addText('cta_heading', [
    'label' => 'Heading',
    'default_value' => 'Take the first step to maximising the value of data in your organisation today!',
  ])
  ->addSelect('cta_heading_tag', [
    'label' => 'Heading Tag',
    'choices' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'span', 'p'],
    'default_value' => 'h2',
  ])
  ->addColorPicker('cta_heading_text_color', [
    'label' => 'Heading Text Color',
    'default_value' => '#FFFFFF',
  ])
  ->addColorPicker('cta_heading_underline_color', [
    'label' => 'Heading Underline Color',
    'default_value' => '#FBBF24',
  ])
  ->addText('cta_subheading', [
    'label' => 'Subheading',
    'default_value' => 'Get in touch',
  ])
  ->addLink('cta_button', [
    'label' => 'Button',
    'description' => 'Add a button link',
    'return_format' => 'array',
  ])
  ->addTrueFalse('cta_button_show_icon', [
    'label' => 'Show Icon on Button',
    'default_value' => true,
  ])
  ->addImage('image', [
    'label' => 'Section Background Image',
    'return_format' => 'id',
  ])
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('cta_background_color', [
    'label' => 'Background Color',
    'default_value' => '#02485a',
  ])
  ->addColorPicker('cta_button_bg_color', [
    'label' => 'Button Background Color',
    'default_value' => '#F68D2E',
  ])
  ->addColorPicker('cta_button_text_color', [
    'label' => 'Button Text Color',
    'default_value' => '#000000',
  ])
  ->addColorPicker('cta_button_hover_bg_color', [
    'label' => 'Button Hover Background Color',
    'default_value' => '#02485a',
  ])
  ->addColorPicker('cta_button_hover_text_color', [
    'label' => 'Button Hover Text Color',
    'default_value' => '#ffffff',
  ])
  ->addColorPicker('cta_button_border_color', [
    'label' => 'Button Border Color',
    'default_value' => '#F68D2E',
  ])
  ->addColorPicker('cta_button_hover_border_color', [
    'label' => 'Button Hover Border Color',
    'default_value' => '#ffffff',
  ])

  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
    'button_label' => 'Add Screen Size Padding',
  ])
  ->addSelect('screen_size', [
    'label' => 'Screen Size',
    'choices' => ['xxs', 'xs', 'mob', 'sm', 'md', 'lg', 'xl', 'xxl', 'ultrawide'],
  ])
  ->addNumber('padding_top', [
    'label' => 'Padding Top (rem)',
    'default_value' => 5,
  ])
  ->addNumber('padding_bottom', [
    'label' => 'Padding Bottom (rem)',
    'default_value' => 5,
  ])
  ->endRepeater();

return $cta_003;
