<?php
$section_classes = 'relative flex overflow-hidden';
$container_classes = 'flex flex-col items-center w-full mx-auto max-w-container max-xl:px-5';

// Retrieve ACF fields
$title_text = get_sub_field('title_text') ?: 'Default Title';
$title_tag = get_sub_field('title_tag') ?: 'h2';
$text_alignment = get_sub_field('text_alignment') ?: 'text-left';
$underline_color = get_sub_field('underline_color') ?: '#FFA500'; // Default orange
$background_color = get_sub_field('background_color') ?: '#F5F5F5'; // Default light gray

// Generate padding classes
$padding_classes = ['py-5'];
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

<section class="<?php echo esc_attr($section_classes); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="<?php echo esc_attr($container_classes . ' ' . implode(' ', $padding_classes)); ?>">
    <div class="flex flex-col self-center <?php echo esc_attr($text_alignment); ?> text-3xl font-bold leading-none text-teal-950">
      <<?php echo esc_attr($title_tag); ?> class="max-md:max-w-full">
        <?php echo esc_html($title_text); ?>
      </<?php echo esc_attr($title_tag); ?>>
      <div role="presentation" class="flex mt-1 w-8 min-h-[4px] max-md:max-w-full" style="background-color: <?php echo esc_attr($underline_color); ?>;"></div>
    </div>
  </div>
</section>