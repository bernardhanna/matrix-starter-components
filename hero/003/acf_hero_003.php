<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_003 = new FieldsBuilder('hero_003', [
  'label' => 'Hero Section 003',
]);

$hero_003
  ->addTab('Content', ['label' => 'Content'])
  ->addWysiwyg('heading_text', [
    'label' => 'Heading Text',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 0,
    'default_value' => '<h1 class="hero_title">Accurate Address Validation, <span class=""Every Time</span></h1>',
  ])
  ->addWysiwyg('subtext', [
    'label' => 'Subtext',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
    'instructions' => 'Enter the supporting text below the heading.',
    'default_value' => '<p>Seamlessly integrate our address validation API<br /> to ensure your customers provide accurate<br /> address information effortlessly.</p>',
  ])
  ->addLink('button', [
    'label' => 'Button',
    'instructions' => 'Enter the button text and URL.',
    'return_format' => 'array',
  ])
  ->addTrueFalse('button_show_svg', [
    'label' => 'Show SVG in Button',
    'instructions' => 'Toggle whether to display an SVG icon inside the button.',
    'default_value' => 0,
  ])
  ->addTab('Video', ['label' => 'Video'])
  ->addTrueFalse('enable_video', [
    'label' => 'Enable Video Background',
    'instructions' => 'Toggle to enable a video as the background.',
    'default_value' => 0,
  ])
  ->addUrl('video_url', [
    'label' => 'Vimeo Video URL',
    'instructions' => 'Enter the Vimeo video URL to be used as the background.',
  ])
  ->addTrueFalse('video_autoplay', [
    'label' => 'Autoplay Video',
    'instructions' => 'Enable autoplay for the video.',
    'default_value' => 1,
  ])
  ->addTrueFalse('video_loop', [
    'label' => 'Loop Video',
    'instructions' => 'Enable looping for the video.',
    'default_value' => 1,
  ])
  ->addTrueFalse('video_muted', [
    'label' => 'Mute Video',
    'instructions' => 'Mute the video by default.',
    'default_value' => 1,
  ])
  ->addTab('Design', ['label' => 'Design'])
  ->addImage('background_image', [
    'label' => 'Background Image',
    'instructions' => 'Upload or select a background image.',
    'return_format' => 'array',
  ])
  ->addColorPicker('content_background_color', [
    'label' => 'Content Background Color',
    'instructions' => 'Select the background color for the content wrapper.',
  ])
  ->addRange('content_background_opacity', [
    'label' => 'Content Background Opacity',
    'instructions' => 'Set the opacity of the content background color.',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 100,
  ])
  ->addColorPicker('overlay_background_color', [
    'label' => 'Overlay Background Color',
    'instructions' => 'Select the overlay background color.',
  ])
  ->addRange('overlay_background_opacity', [
    'label' => 'Overlay Background Opacity',
    'instructions' => 'Set the opacity of the overlay background color.',
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'default_value' => 50,
  ])
  ->addText('overlay_gradient', [
    'label' => 'Overlay Gradient',
    'instructions' => 'Enter the CSS gradient for the overlay.',
  ])
  ->addColorPicker('button_bg_color', [
    'label' => 'Button Background Color',
    'instructions' => 'Select the button background color.',
  ])
  ->addColorPicker('button_text_color', [
    'label' => 'Button Text Color',
    'instructions' => 'Select the button text color.',
  ])
  ->addColorPicker('button_border_color', [
    'label' => 'Button Border Color',
    'instructions' => 'Select the button border color.',
  ])
  ->addColorPicker('button_hover_bg_color', [
    'label' => 'Button Hover Background Color',
    'instructions' => 'Select the button hover background color.',
  ])
  ->addColorPicker('button_hover_text_color', [
    'label' => 'Button Hover Text Color',
    'instructions' => 'Select the button hover text color.',
  ])
  ->addColorPicker('button_hover_border_color', [
    'label' => 'Button Hover Border Color',
    'instructions' => 'Select the button hover border color.',
  ])
  ->addTab('Layout', ['label' => 'Layout'])
  ->addNumber('min_height', [
    'label' => 'Minimum Height',
    'instructions' => 'Set the minimum height in pixels.',
    'default_value' => 575,
  ])
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

return $hero_003;
