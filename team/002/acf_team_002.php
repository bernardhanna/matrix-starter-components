<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$team_002 = new FieldsBuilder('team_002', [
  'label' => 'Team 002',
]);

$team_002
  ->addTab('Content', ['label' => 'Content'])
  ->addRepeater('team_rows', [
    'label' => 'Team Rows',
    'button_label' => 'Add Row',
    'layout' => 'block',
  ])
  ->addSelect('columns', [
    'label' => 'Columns',
    'instructions' => 'Select the number of columns for this row.',
    'choices' => [
      'grid-cols-2' => '2 Columns',
      'grid-cols-3' => '3 Columns',
      'grid-cols-4' => '4 Columns',
    ],
    'default_value' => 'grid-cols-4',
  ])
  ->addRepeater('team_members', [
    'label' => 'Team Members',
    'button_label' => 'Add Team Member',
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
  ->endRepeater()
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'default_value' => '#FFFFFF',
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'default_value' => '#1E293B',
  ])
  ->addColorPicker('name_color', [
    'label' => 'Name Text Color',
    'default_value' => '#0284C7',
  ])
  ->addText('image_border_radius', [
    'label' => 'Image Border Radius',
    'instructions' => 'Enter Tailwind class for border radius, e.g., "rounded-md" or "rounded-[10px]"',
    'default_value' => 'rounded-lg',
  ])
  ->addTab('Layout', ['label' => 'Layout'])
  ->addRepeater('padding_settings', [
    'label' => 'Padding Settings',
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

return $team_002;
