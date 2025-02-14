<?php
// Retrieve ACF fields
$feature_image = get_sub_field('feature_image');
$section_heading = get_sub_field('section_heading') ?: 'Default Heading';
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$background_color = get_sub_field('background_color') ?: '#F5F5F5';
$text_color = get_sub_field('text_color') ?: '#1D2939';
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

<section class="relative flex flex-wrap items-center justify-center gap-8 overflow-hidden <?php echo esc_attr($reverse_layout); ?> <?php echo esc_attr(implode(' ', $padding_classes)); ?>" style="background-color: <?php echo esc_attr($background_color); ?>; color: <?php echo esc_attr($text_color); ?>;">
  <div class="relative overflow-hidden rounded-lg h-[400px] shadow-md w-[600px] max-md:w-full max-md:h-[350px] max-sm:h-[280px]">
    <?php if ($feature_image): ?>
      <img src="<?php echo esc_url($feature_image['url']); ?>" alt="<?php echo esc_attr($feature_image['alt']); ?>" class="absolute inset-0 object-cover w-full h-full opacity-90" />
    <?php else: ?>
      <div class="absolute inset-0 flex items-center justify-center font-bold text-white bg-sky-900 bg-opacity-80">Placeholder Image</div>
    <?php endif; ?>
  </div>

  <div class="flex flex-col gap-6 w-[408px] max-md:w-full">
    <<?php echo esc_attr($heading_tag); ?> class="text-2xl font-bold leading-none">
      <?php echo esc_html($section_heading); ?>
    </<?php echo esc_attr($heading_tag); ?>>

    <?php if (have_rows('features')): ?>
      <div class="flex flex-col gap-3">
        <?php while (have_rows('features')): the_row(); ?>
          <div role="listitem" class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-sky-900" fill="none" viewBox="0 0 24 24">
              <path d="M10.2391 16.3144L5.99609 12.0704L7.41009 10.6564L10.2391 13.4844L15.8951 7.82739L17.3101 9.24239L10.2391 16.3144Z" fill="#025A70" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.998047 12.0002C0.998047 5.92524 5.92305 1.00024 11.998 1.00024C18.073 1.00024 22.998 5.92524 22.998 12.0002C22.998 18.0752 18.073 23.0002 11.998 23.0002C5.92305 23.0002 0.998047 18.0752 0.998047 12.0002ZM11.998 21.0002C10.8161 21.0002 9.64583 20.7675 8.5539 20.3152C7.46197 19.8629 6.46981 19.1999 5.63409 18.3642C4.79836 17.5285 4.13542 16.5363 3.68313 15.4444C3.23084 14.3525 2.99805 13.1821 2.99805 12.0002C2.99805 10.8183 3.23084 9.64802 3.68313 8.55609C4.13542 7.46416 4.79836 6.47201 5.63409 5.63628C6.46981 4.80056 7.46197 4.13762 8.5539 3.68533C9.64583 3.23304 10.8161 3.00024 11.998 3.00024C14.385 3.00024 16.6742 3.94846 18.362 5.63628C20.0498 7.32411 20.998 9.6133 20.998 12.0002C20.998 14.3872 20.0498 16.6764 18.362 18.3642C16.6742 20.052 14.385 21.0002 11.998 21.0002Z" fill="#025A70" />
            </svg>
            <div class="text-base leading-6"><?php echo esc_html(get_sub_field('feature_title')); ?></div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>