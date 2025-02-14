<?php
$cta_heading = get_sub_field('cta_heading');
$cta_heading_tag = get_sub_field('cta_heading_tag');
$cta_heading_underline_color = get_sub_field('cta_heading_underline_color');
$cta_heading_text_color = get_sub_field('cta_heading_text_color');
$cta_subheading = get_sub_field('cta_subheading');
$cta_button = get_sub_field('cta_button');
$cta_button_bg_color = get_sub_field('cta_button_bg_color');
$cta_button_text_color = get_sub_field('cta_button_text_color');
$cta_button_hover_bg_color = get_sub_field('cta_button_hover_bg_color');
$cta_button_hover_text_color = get_sub_field('cta_button_hover_text_color');
$cta_button_border_color = get_sub_field('cta_button_border_color');
$cta_button_hover_border_color = get_sub_field('cta_button_hover_border_color');
$cta_button_show_icon = get_sub_field('cta_button_show_icon');
$cta_background_color = get_sub_field('cta_background_color');
$image_id = get_sub_field('image');
$image_url = wp_get_attachment_image_url($image_id, 'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
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

<section class="relative flex flex-col items-center w-full overflow-hidden" style="background-color: <?php echo esc_attr($cta_background_color); ?>;" role="region" aria-label="Contact Call to Action">
  <div class="max-w-[1200px] w-full mx-auto relative">
    <div class="flex flex-col items-center w-full mx-auto max-w-container z-40 <?php echo esc_attr(implode(' ', $padding_classes)); ?> pt-12 pb-12 max-xl:px-5">
      <div class="flex flex-col md:flex-row gap-10 items-start w-full max-w-[1040px]">
        <!-- Heading Section -->
        <div class="flex flex-col flex-1 min-w-[240px]">
          <<?php echo esc_attr($cta_heading_tag); ?>
            class="text-3xl font-bold leading-10"
            style="color: <?php echo esc_attr($cta_heading_text_color); ?>;">
            <?php echo esc_html($cta_heading); ?>
            <span
              class="block mt-1 w-8 min-h-[4px]"
              style="background-color: <?php echo esc_attr($cta_heading_underline_color); ?>;"
              aria-hidden="true"></span>
          </<?php echo esc_attr($cta_heading_tag); ?>>
          <p class="mt-4 text-lg leading-loose text-white">
            <?php echo esc_html($cta_subheading); ?>
          </p>
        </div>

        <!-- Button Section -->
        <div class="flex flex-col pt-8 max-md:w-full md:pt-14">
          <?php if ($cta_button): ?>
            <a href="<?php echo esc_url($cta_button['url']); ?>"
              class="z-40 flex items-center justify-center w-full gap-2 px-8 py-4 text-sm font-semibold leading-none border border-solid rounded focus:outline-none focus:ring-2 focus:ring-offset-2 md:w-fit"
              style="
                background-color: <?php echo esc_attr($cta_button_bg_color); ?>;
                color: <?php echo esc_attr($cta_button_text_color); ?>;
                border-color: <?php echo esc_attr($cta_button_border_color); ?>;"
              onmouseover="
                this.style.backgroundColor='<?php echo esc_attr($cta_button_hover_bg_color); ?>';
                this.style.color='<?php echo esc_attr($cta_button_hover_text_color); ?>';
                this.style.borderColor='<?php echo esc_attr($cta_button_hover_border_color); ?>';
                this.querySelector('path').style.stroke='<?php echo esc_attr($cta_button_hover_text_color); ?>';"
              onmouseout="
                this.style.backgroundColor='<?php echo esc_attr($cta_button_bg_color); ?>';
                this.style.color='<?php echo esc_attr($cta_button_text_color); ?>';
                this.style.borderColor='<?php echo esc_attr($cta_button_border_color); ?>';
                this.querySelector('path').style.stroke='<?php echo esc_attr($cta_button_text_color); ?>';"
              target="<?php echo esc_attr($cta_button['target']); ?>"
              aria-label="<?php echo esc_attr($cta_button['title']); ?>">
              <span><?php echo esc_html($cta_button['title']); ?></span>
              <?php if ($cta_button_show_icon): ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-6 h-6 shrink-0">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19"
                    stroke="<?php echo esc_attr($cta_button_text_color); ?>"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              <?php endif; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php if ($image_url): ?>
      <img
        src="<?php echo esc_url($image_url); ?>"
        alt="<?php echo esc_attr($image_alt); ?>"
        class="absolute bottom-0 right-0 z-30 object-contain" />
    <?php endif; ?>
  </div>
</section>