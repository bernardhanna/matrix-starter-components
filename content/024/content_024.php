<?php
// Fetch ACF field values
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$heading = get_sub_field('heading');
$intro_text = get_sub_field('intro_text');
$features = get_sub_field('features');
$closing_text = get_sub_field('closing_text');
$side_image = get_sub_field('side_image');
$background_color = get_sub_field('background_color');
$background_gradient = get_sub_field('background_gradient');

// Apply background: Use gradient if set, otherwise fallback to background color
$background_style = !empty($background_gradient)
  ? "background: " . esc_attr($background_gradient) . ";"
  : (!empty($background_color) ? "background-color: " . esc_attr($background_color) . ";" : "");
$heading_color = get_sub_field('heading_color');
$text_color_24 = get_sub_field('text_color_24');
$divider_color = get_sub_field('divider_color');
$icon_color = get_sub_field('icon_color');
$image_border_radius = get_sub_field('image_border_radius');

// Generate unique ID for this section
$unique_id = 'wp_editor_' . uniqid();

// Padding classes
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
$padding_classes = implode(' ', $padding_classes);
?>

<section aria-labelledby="why-choose-heading" class="relative flex" <?php echo !empty($background_style) ? 'style="' . esc_attr($background_style) . '"' : ''; ?>>
  <div class="pt-12 pb-12 <?php echo esc_attr($padding_classes); ?> max-xl:px-5 max-w-[1040px] mx-auto grid grid-cols-1 gap-8 md:grid-cols-2">
    <div class="flex flex-col self-stretch max-w-[640px] lg:pr-4">
      <div class="flex flex-col w-full text-3xl font-bold leading-none" style="color: <?php echo esc_attr($heading_color); ?>;">
        <div class="flex flex-col w-full max-md:max-w-full">
          <<?php echo esc_html($heading_tag); ?> id="why-choose-heading" class="max-md:max-w-full"><?php echo esc_html($heading); ?></<?php echo esc_html($heading_tag); ?>>
          <div role="presentation" class="flex mt-1 w-8 min-h-[4px]" style="background-color: <?php echo esc_attr($divider_color); ?>;"></div>
        </div>
      </div>

      <!-- Unique ID for the WYSIWYG editor -->
      <div id="<?php echo esc_attr($unique_id); ?>" class="mt-5 text-lg leading-7 wp_editor">
        <style>
          #<?php echo esc_attr($unique_id); ?>>p,
          #<?php echo esc_attr($unique_id); ?>>span,
          #<?php echo esc_attr($unique_id); ?>>div,
          #<?php echo esc_attr($unique_id); ?>>a {
            --tw-text-opacity: 1;
            color: <?php echo esc_attr($text_color_24); ?> !important;
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: 28px;
          }
        </style>
        <?php echo $intro_text; ?>
      </div>

      <ul class="flex flex-col w-full mt-4 max-md:max-w-full" role="list">
        <?php foreach ($features as $feature) : ?>
          <?php
          // Generate unique ID for each feature description
          $feature_id = 'feature_' . uniqid();
          ?>
          <li class="flex flex-wrap items-start w-full gap-4 pl-4 max-md:max-w-full">
            <div class="flex items-start w-2 gap-2 pt-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="<?php echo esc_attr($icon_color); ?>">
                <circle cx="4" cy="4" r="4" />
              </svg>
            </div>

            <!-- Apply unique ID to each feature -->
            <div id="<?php echo esc_attr($feature_id); ?>" class="flex-1 text-base leading-6 shrink basis-0 wp_editor">
              <?php echo '<style>
                  #' . esc_attr($feature_id) . ' p,
                  #' . esc_attr($feature_id) . ' span,
                  #' . esc_attr($feature_id) . ' div p,
                  #' . esc_attr($feature_id) . ' li,
                  #' . esc_attr($feature_id) . ' a {
                      --tw-text-opacity: 1;
                      color: ' . esc_attr($text_color_24) . ' !important;
                      font-size: 16px;
                      font-style: normal;
                      font-weight: 400;
                      line-height: 24px;
                  }
              </style>'; ?>
              <?php echo $feature['description']; ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Closing text with unique ID -->
      <?php $closing_id = 'closing_' . uniqid(); ?>
      <div id="<?php echo esc_attr($closing_id); ?>" class="mt-4 text-base leading-6 wp_editor">
        <style>
          #<?php echo esc_attr($closing_id); ?>>p,
          #<?php echo esc_attr($closing_id); ?>>span,
          #<?php echo esc_attr($closing_id); ?>>div,
          #<?php echo esc_attr($closing_id); ?>>a {
            --tw-text-opacity: 1;
            color: <?php echo esc_attr($text_color_24); ?> !important;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
          }
        </style>
        <?php echo $closing_text; ?>
      </div>
    </div>

    <div class="flex overflow-hidden flex-col self-stretch my-auto rounded-lg w-[502px] max-md:max-w-full">
      <img
        loading="lazy"
        src="<?php echo esc_url($side_image['url']); ?>"
        alt="<?php echo esc_attr($side_image['alt']); ?>"
        class="object-contain w-full"
        style="border-radius: <?php echo esc_attr($image_border_radius); ?>px;" />
    </div>
  </div>
</section>