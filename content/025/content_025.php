<?php
// Retrieve ACF fields
$alert_text = get_sub_field('alert_text') ?: 'Default alert text goes here.';
$aria_label = get_sub_field('aria_label') ?: 'Information Alert';
$icon_class = get_sub_field('icon') ?: 'ti ti-info-circle';
$icon_color = get_sub_field('icon_color') ?: '#F97316';
$border_color = get_sub_field('border_color') ?: '#F97316';
$text_color = get_sub_field('text_color') ?: '#334155';
$background_color = get_sub_field('background_color') ?: '#FFFFFF';

// Generate padding classes
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

<section class="relative flex overflow-hidden" style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="flex flex-col items-center w-full mx-auto max-w-container <?php echo esc_attr(implode(' ', $padding_classes)); ?>max-xl:px-5">
    <div
      class="flex items-start w-full gap-6 p-6 border-2 border-solid rounded max-md:gap-5 max-md:p-5 max-sm:flex-col max-sm:gap-4 max-sm:items-start max-sm:p-4"
      style="
                background-color: <?php echo esc_attr($background_color); ?>;
                border-color: <?php echo esc_attr($border_color); ?>;
            "
      role="alert"
      aria-label="<?php echo esc_attr($aria_label); ?>"
      aria-live="polite">
      <div
        class="flex items-center justify-center w-10 h-10 shrink-0 max-sm:w-8 max-sm:h-8"
        aria-hidden="true">
        <i
          class="<?php echo esc_attr($icon_class); ?> text-2xl max-sm:text-xl"
          style="color: <?php echo esc_attr($icon_color); ?>;"
          role="img"></i>
      </div>
      <div
        class="flex-1 text-base leading-6 max-sm:text-sm max-sm:leading-5"
        style="color: <?php echo esc_attr($text_color); ?>;">
        <?php echo esc_html($alert_text); ?>
      </div>
    </div>
  </div>
</section>