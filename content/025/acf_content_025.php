<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$content_025 = new FieldsBuilder('content_025', [
  'label' => 'content 025',
]);

$content_025
  ->addTab('Content', [
    'label' => 'Content',
  ])
  ->addText('alert_text', [
    'label' => 'Alert Text',
    'instructions' => 'Enter the text for the alert message.',
  ])
  ->addText('aria_label', [
    'label' => 'ARIA Label',
    'instructions' => 'Provide an ARIA label for accessibility.',
    'default_value' => 'Information Alert',
  ])
  ->addSelect('icon', [
    'label' => 'Icon',
    'instructions' => 'Select the icon for the alert.',
    'choices' => [
      'ti ti-info-circle' => 'Information Circle',
      'ti ti-alert-circle' => 'Alert Circle',
      'ti ti-check-circle' => 'Check Circle',
    ],
    'default_value' => 'ti ti-info-circle',
  ])
  ->addTab('Design', [
    'label' => 'Design',
  ])
  ->addColorPicker('icon_color', [
    'label' => 'Icon Color',
    'instructions' => 'Select the color for the icon.',
    'default_value' => '#F97316', // Default orange
  ])
  ->addColorPicker('border_color', [
    'label' => 'Border Color',
    'instructions' => 'Select the color for the alert border.',
    'default_value' => '#F97316', // Default orange
  ])
  ->addColorPicker('text_color', [
    'label' => 'Text Color',
    'instructions' => 'Select the color for the alert text.',
    'default_value' => '#334155', // Default slate
  ])
  ->addColorPicker('background_color', [
    'label' => 'Background Color',
    'instructions' => 'Select the background color for the alert.',
    'default_value' => '#FFFFFF', // Default white
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

return $content_025;
