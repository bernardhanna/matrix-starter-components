<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_028 = new FieldsBuilder('content_028', [
  'label' => 'Content 028',
]);

$content_028
  ->addTab('Content', ['label' => 'Content'])
  ->addImage('product_image', [
    'label' => 'Product Image',
    'return_format' => 'array',
  ])
  ->addText('heading', ['label' => 'Heading'])
  ->addSelect('heading_tag', [
    'label' => 'Heading Tag',
    'choices' => ['h1' => 'H1', 'h2' => 'H2', 'h3' => 'H3', 'h4' => 'H4', 'h5' => 'H5', 'h6' => 'H6', 'p' => 'Paragraph', 'span' => 'Span'],
    'default_value' => 'h2',
  ])
  ->addWysiwyg('content_text', ['label' => 'Content Text', 'tabs' => 'all', 'media_upload' => false, 'toolbar' => 'basic'])
  ->addLink('button_link', ['label' => 'Button Link', 'return_format' => 'array'])
  ->addTrueFalse('enable_button_icon', ['label' => 'Show Button Icon?', 'default_value' => 0])

  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('text_color', ['label' => 'Text Color'])
  ->addColorPicker('background_color', ['label' => 'Background Color'])
  ->addColorPicker('button_bg_color', ['label' => 'Button Background Color'])
  ->addColorPicker('button_text_color', ['label' => 'Button Text Color'])
  ->addColorPicker('button_border_color', ['label' => 'Button Border Color'])
  ->addColorPicker('button_hover_bg_color', ['label' => 'Button Hover Background Color'])
  ->addColorPicker('button_hover_text_color', ['label' => 'Button Hover Text Color'])
  ->addColorPicker('button_hover_border_color', ['label' => 'Button Hover Border Color'])
  ->addColorPicker('button_icon_color', ['label' => 'Button Icon Color', 'default_value' => '#FFFFFF'])
  ->addColorPicker('button_icon_hover_color', ['label' => 'Button Icon Hover Color', 'default_value' => '#FFFFFF'])
  ->addNumber('border_radius', ['label' => 'Border Radius (px)', 'default_value' => 10])

  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('padding_settings', ['label' => 'Padding Settings', 'instructions' => 'Customize padding for different screen sizes.', 'button_label' => 'Add Screen Size Padding'])
  ->addSelect('screen_size', ['label' => 'Screen Size', 'choices' => ['xxs' => 'xxs', 'xs' => 'xs', 'mob' => 'mob', 'sm' => 'sm', 'md' => 'md', 'lg' => 'lg', 'xl' => 'xl', 'xxl' => 'xxl', 'ultrawide' => 'ultrawide']])
  ->addNumber('padding_top', ['label' => 'Padding Top', 'min' => 0, 'max' => 20, 'step' => 0.1, 'append' => 'rem'])
  ->addNumber('padding_bottom', ['label' => 'Padding Bottom', 'min' => 0, 'max' => 20, 'step' => 0.1, 'append' => 'rem'])
  ->endRepeater();

return $content_028;
