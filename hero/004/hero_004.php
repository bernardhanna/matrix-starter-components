<?php
$heading_text = get_sub_field('heading_text');
$heading_tag = get_sub_field('heading_tag');
$subtext = get_sub_field('subtext');
$background_image = get_sub_field('background_image');
$background_overlay_color = get_sub_field('background_overlay_color');
$background_overlay_opacity = get_sub_field('background_overlay_opacity');
$heading_text_color = get_sub_field('heading_text_color');
$subtext_color = get_sub_field('subtext_color');
$content_alignment = get_sub_field('content_alignment');

$padding_classes = ['pt-12 pb-12'];
if (have_rows('padding_settings')) {
  while (have_rows('padding_settings')) {
    the_row();
    $screen_size = get_sub_field('screen_size');
    $padding_top = get_sub_field('padding_top');
    $padding_bottom = get_sub_field('padding_bottom');
    $padding_classes[] = "{$screen_size}:pt-[{$padding_top}rem]";
    $padding_classes[] = "{$screen_size}:pb-[{$padding_bottom}rem]";
  }
}

$height_classes = [];
if (have_rows('section_height_settings')) {
  while (have_rows('section_height_settings')) {
    the_row();
    $screen_size = get_sub_field('screen_size');
    $section_height = get_sub_field('section_height');
    $height_classes[] = "{$screen_size}:h-[{$section_height}px]";
  }
}

$alignment_classes = [
  'left' => 'items-start text-left',
  'center' => 'items-center text-center',
  'right' => 'items-end text-right'
];
$alignment_class = $alignment_classes[$content_alignment] ?? 'items-center text-center';
?>

<section class="relative mt-[5rem] flex overflow-hidden bg-center bg-cover h-fit md:h-[240px] <?php echo implode(' ', $height_classes); ?>  <?php echo implode(' ', $padding_classes); ?> <?php echo esc_attr($alignment_class); ?>"
  style="background-image: url('<?php echo esc_url($background_image['url'] ?? ''); ?>');">
  <div class="absolute inset-0" style="background-color: <?php echo esc_attr($background_overlay_color); ?>; 
        opacity: <?php echo esc_attr($background_overlay_opacity / 100); ?>;"></div>

  <div class="px-5 xl:px-0 z-40 flex flex-col w-full mx-auto max-w-[1095px] justify-center h-full">
    <<?php echo esc_attr($heading_tag); ?>
      class="text-4xl font-bold leading-none tracking-tight"
      style="color: <?php echo esc_attr($heading_text_color); ?>; opacity: 1;">
      <?php echo esc_html($heading_text); ?>
    </<?php echo esc_attr($heading_tag); ?>>
    <?php if (!empty($subtext)): ?>
      <p class="mt-2 max-w-[80%] text-[1.125rem] leading-7 tracking-wide w-full "
        style="color: <?php echo esc_attr($subtext_color); ?>; opacity: 1;">
        <?php echo esc_html($subtext); ?>
      </p>
    <?php endif; ?>
    </p>
  </div>
</section>