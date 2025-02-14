<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$contact_002 = new FieldsBuilder('contact', [
  'label' => 'Contact  002',
]);

$contact_002
  ->addTab('Content', ['label' => 'Content'])
  ->addWysiwyg('form_shortcode', ['label' => 'Form Shortcode (Leave blank for default form)'])
  ->addTab('Design', ['label' => 'Design'])
  ->addColorPicker('background_color', ['label' => 'Background Color', 'default_value' => '#ffffff'])
  ->addColorPicker('text_color', ['label' => 'Text Color', 'default_value' => '#1D2939'])
  ->addColorPicker('underline_color', ['label' => 'Underline Color', 'default_value' => '#F68D2E'])
  ->addTab('Padding', ['label' => 'Padding'])
  ->addRepeater('padding_settings', ['label' => 'Padding Settings'])
  ->addSelect('screen_size', ['label' => 'Screen Size', 'choices' => [
    'xxs' => 'xxs',
    'xs' => 'xs',
    'mob' => 'mob',
    'sm' => 'sm',
    'md' => 'md',
    'lg' => 'lg',
    'xl' => 'xl',
    'xxl' => 'xxl',
    'ultrawide' => 'ultrawide',
  ]])
  ->addNumber('padding_top', ['label' => 'Padding Top', 'min' => 0, 'max' => 20, 'step' => 0.1, 'append' => 'rem'])
  ->addNumber('padding_bottom', ['label' => 'Padding Bottom', 'min' => 0, 'max' => 20, 'step' => 0.1, 'append' => 'rem'])
  ->endRepeater();

return $contact_002;
