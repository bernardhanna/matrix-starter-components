<?php
$section_classes = 'relative flex overflow-hidden';
$container_classes = 'flex flex-col items-center w-full mx-auto max-w-[1088px] max-xl:px-5';

// Retrieve ACF fields
$main_image = get_sub_field('main_image');
$secondary_image = get_sub_field('secondary_image');
$heading_text = get_sub_field('heading_text') ?: 'Default Heading';
$heading_tag = get_sub_field('heading_tag') ?: 'h3';
$heading_color = get_sub_field('heading_color') ?: '#1D2939'; // Default text-primary color
$content_text = get_sub_field('content_text') ?: 'Default content text.';
$background_color = get_sub_field('background_color') ?: '#F5F5F5'; // Default light gray
$underline_color = get_sub_field('underline_color') ?: '#FFA500'; // Default orange
$reverse_layout = get_sub_field('reverse_layout') ? 'flex-row-reverse' : 'flex-row';

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
    <div class="flex flex-col md:<?php echo esc_attr($reverse_layout); ?> items-center w-full bg-white rounded-lg">
      <div class="flex flex-col w-full lg:w-1/2">
        <?php if ($main_image): ?>
          <div class="relative w-full h-[250px] md:h-[400px]">
            <img
              src="<?php echo esc_url($main_image['url']); ?>"
              alt="<?php echo esc_attr($main_image['alt'] ?: 'Image'); ?>"
              class="absolute inset-0 object-cover w-full h-full <?php
                                                                  echo ($reverse_layout === 'flex-row' ? 'max-md:rounded-t-lg md:rounded-l-lg' : 'max-md:rounded-t-lg md:rounded-r-lg');
                                                                  ?>" />
          </div>
        <?php endif; ?>
      </div>
      <div class="flex flex-col w-full lg:w-1/2 max-lg:p-5 lg:px-16">
        <div class="text-3xl" style="color: <?php echo esc_attr($heading_color); ?>;">
          <<?php echo esc_attr($heading_tag); ?> class="font-bold"><?php echo esc_html($heading_text); ?></<?php echo esc_attr($heading_tag); ?>>
          <div role="presentation" class="w-8 h-1 mt-2" style="background-color: <?php echo esc_attr($underline_color); ?>;"></div>
        </div>
        <p class="mt-4 text-base leading-6 text-slate-800">
          <?php echo wp_kses_post($content_text); ?>
        </p>
      </div>
    </div>
  </div>
</section>