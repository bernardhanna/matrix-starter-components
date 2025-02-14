<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$team_001 = new FieldsBuilder('team_001', [
  'label' => 'Team 001',
]);

$team_001
  ->addTab('Content', ['label' => 'Content'])
  ->addText('heading', [
    'label' => 'Section Heading',
    'instructions' => 'Add the heading text for the section.',
    'default_value' => 'Meet our team',
  ])
  ->addSelect('heading_tag', [
    'label' => 'Heading Tag',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
      'p'  => 'Paragraph',
      'span' => 'Span',
    ],
    'default_value' => 'h2',
  ])
  ->addTextarea('description', [
    'label' => 'Description',
    'instructions' => 'Add the description for the team section.',
    'default_value' => 'Lorem ipsum dolor sit amet consectetur...',
  ])
  ->addText('button_text', [
    'label' => 'Button Text',
    'default_value' => 'See full team',
  ])
  ->addUrl('button_link', [
    'label' => 'Button Link',
    'instructions' => 'Add the link for the button.',
  ])
  ->addTrueFalse('button_svg_enabled', [
    'label' => 'Enable SVG Icon',
    'default_value' => 1,
  ])
  ->addRepeater('team_members', [
    'label' => 'Team Members',
    'button_label' => 'Add Team Member',
    'max' => 3,
  ])
  ->addImage('member_image', [
    'label' => 'Member Image',
    'return_format' => 'id',
  ])
  ->addText('member_name', [
    'label' => 'Member Name',
    'default_value' => 'Person Name',
  ])
  ->addText('member_title', [
    'label' => 'Member Title',
    'default_value' => 'Job title',
  ])
  ->endRepeater()
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('background_color', ['label' => 'Background Color'])
  ->addColorPicker('heading_color', ['label' => 'Heading Color'])
  ->addColorPicker('text_color', ['label' => 'Text Color'])
  ->addColorPicker('button_bg_color', ['label' => 'Button Background Color'])
  ->addColorPicker('button_text_color', ['label' => 'Button Text Color'])
  ->addColorPicker('button_hover_bg_color', ['label' => 'Button Hover Background Color'])
  ->addColorPicker('button_hover_text_color', ['label' => 'Button Hover Text Color'])
  ->addColorPicker('button_border_color', ['label' => 'Button Border Color'])
  ->addColorPicker('button_hover_border_color', ['label' => 'Button Hover Border Color'])
  ->addNumber('image_border_radius', [
    'label' => 'Image Border Radius (rem)',
    'default_value' => 0.5,
  ])
  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('padding_settings', ['label' => 'Padding Settings'])
  ->addSelect('screen_size', ['label' => 'Screen Size', 'choices' => ['xxs', 'xs', 'mob', 'sm', 'md', 'lg', 'xl', 'xxl', 'ultrawide']])
  ->addNumber('padding_top', ['label' => 'Padding Top (rem)', 'default_value' => 5])
  ->addNumber('padding_bottom', ['label' => 'Padding Bottom (rem)', 'default_value' => 5])
  ->endRepeater();
return $team_001;
