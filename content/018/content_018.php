<?php
$heading = get_sub_field('heading');
$heading_tag = get_sub_field('heading_tag');
$description = get_sub_field('description');
$image_id = get_sub_field('image');
$image_url = wp_get_attachment_image_url($image_id, 'medium');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true) ?: 'What we do';
$background_color = get_sub_field('background_color');
$heading_color = get_sub_field('heading_color');
$text_color = get_sub_field('text_color');
$divider_color = get_sub_field('divider_color');
$padding_classes = [];
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
?>
<section
  aria-label="What We Do Section"
  class="relative flex items-start justify-between overflow-hidden"
  style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="relative flex flex-col items-center w-full mx-auto max-w-container max-xl:px-5  pt-12 pb-12 <?php echo esc_attr(implode(' ', $padding_classes)); ?>">
    <div class="z-40 flex flex-col text-left w-full mx-auto max-w-[680px] relative xl:left-[5rem]">
      <<?php echo esc_attr($heading_tag); ?> class="text-3xl font-bold" style="color: <?php echo esc_attr($heading_color); ?>;">
        <?php echo esc_html($heading); ?>
      </<?php echo esc_attr($heading_tag); ?>>
      <div role="presentation" class="flex mt-1 w-8 min-h-[4px]" style="background-color: <?php echo esc_attr($divider_color); ?>;"></div>
      <p class="mt-6 text-lg leading-7" style="color: <?php echo esc_attr($text_color); ?>;">
        <?php echo esc_html($description); ?>
      </p>
    </div>
  </div>
  <?php if ($image_url): ?>
    <img
      src="<?php echo esc_url($image_url); ?>"
      alt="<?php echo esc_attr($image_alt); ?>"
      class="absolute object-contain bottom-0 left-[-45px] z-30" />
  <?php endif; ?>
</section>