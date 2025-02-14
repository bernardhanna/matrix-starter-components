<?php
// Fetch ACF Fields
$heading = get_sub_field('heading');
$heading_tag = get_sub_field('heading_tag') ? get_sub_field('heading_tag') : 'h2';
$content_text = get_sub_field('content_text');
$product_image = get_sub_field('product_image');
$button_link = get_sub_field('button_link');
$enable_button_icon = get_sub_field('enable_button_icon');

// Design Controls
$text_color = get_sub_field('text_color') ? get_sub_field('text_color') : '#1E293B';
$background_color = get_sub_field('background_color') ? get_sub_field('background_color') : '#F1F5F9';

// Button Design
$button_bg_color = get_sub_field('button_bg_color') ? get_sub_field('button_bg_color') : '#1E40AF';
$button_text_color = get_sub_field('button_text_color') ? get_sub_field('button_text_color') : '#FFFFFF';
$button_border_color = get_sub_field('button_border_color') ? get_sub_field('button_border_color') : '#1E40AF';
$button_hover_bg_color = get_sub_field('button_hover_bg_color') ? get_sub_field('button_hover_bg_color') : '#0F172A';
$button_hover_text_color = get_sub_field('button_hover_text_color') ? get_sub_field('button_hover_text_color') : '#FFFFFF';
$button_hover_border_color = get_sub_field('button_hover_border_color') ? get_sub_field('button_hover_border_color') : '#0F172A';

$border_radius = get_sub_field('border_radius') ? get_sub_field('border_radius') : 10;

// Padding Settings
$padding_classes = ['pt-12 pb-12'];
if (have_rows('padding_settings')) {
  while (have_rows('padding_settings')) {
    the_row();
    $screen_size = get_sub_field('screen_size');
    $padding_top = get_sub_field('padding_top');
    $padding_bottom = get_sub_field('padding_bottom');

    $padding_classes[] = $screen_size . ':pt-[' . $padding_top . 'rem]';
    $padding_classes[] = $screen_size . ':pb-[' . $padding_bottom . 'rem]';
  }
}
$padding_class_string = implode(' ', $padding_classes);
?>

<section class="relative flex overflow-hidden">
  <div class="flex flex-col items-center max-xl:px-5 w-full mx-auto max-w-[952px] <?php echo esc_attr($padding_class_string); ?>">
    <div class="flex flex-col items-start justify-center lg:flex-row">
      <div class="w-full overflow-hidden rounded-lg lg:w-[55%] max-lg:mb-5"
        style="background-color: <?php echo esc_attr($background_color); ?>; border-radius: <?php echo esc_attr($border_radius); ?>px;">
        <?php if ($product_image) : ?>
          <img src="<?php echo esc_url($product_image['url']); ?>"
            alt="<?php echo esc_attr($product_image['alt'] ? $product_image['alt'] : 'Product Image'); ?>"
            class="object-cover w-full rounded-lg max-h-[384px] h-full" />
        <?php endif; ?>
      </div>
      <div class="w-full overflow-hidden rounded-lg lg:pl-8 lg:w-1/2">
        <<?php echo esc_html($heading_tag); ?> class="text-lg font-normal leading-7" style="color: <?php echo esc_attr($text_color); ?>">
          <?php echo esc_html($heading); ?>
        </<?php echo esc_html($heading_tag); ?>>

        <div class="mt-4 text-lg font-normal leading-7"><?php echo wp_kses_post($content_text); ?></div>

        <?php if ($button_link && is_array($button_link) && isset($button_link['url']) && isset($button_link['title'])): ?>
          <div class="flex items-start gap-2 mt-8 text-sm font-semibold leading-none">
            <a href="<?php echo esc_url($button_link['url']); ?>"
              class="flex gap-2 justify-center items-center px-8 py-4 rounded min-h-[56px] max-xl:px-5 focus:outline-none focus:ring-2 focus:ring-offset-2 w-full md:w-fit"
              style="background-color: <?php echo esc_attr($button_bg_color); ?>;
                     color: <?php echo esc_attr($button_text_color); ?>;
                     border: 1px solid <?php echo esc_attr($button_border_color); ?>;"
              onmouseover="
                this.style.backgroundColor='<?php echo esc_attr($button_hover_bg_color); ?>';
                this.style.color='<?php echo esc_attr($button_hover_text_color); ?>';
                this.style.borderColor='<?php echo esc_attr($button_hover_border_color); ?>';
                const path = this.querySelector('path');
                if (path) path.style.stroke='<?php echo esc_attr($button_hover_text_color); ?>';"
              onmouseout="
                this.style.backgroundColor='<?php echo esc_attr($button_bg_color); ?>';
                this.style.color='<?php echo esc_attr($button_text_color); ?>';
                this.style.borderColor='<?php echo esc_attr($button_border_color); ?>';
                const path = this.querySelector('path');
                if (path) path.style.stroke='<?php echo esc_attr($button_text_color); ?>';"
              target="<?php echo esc_attr(isset($button_link['target']) ? $button_link['target'] : '_self'); ?>">
              <span class="self-stretch my-auto"><?php echo esc_html($button_link['title']); ?></span>

              <?php if ($enable_button_icon): ?>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19"
                    stroke="<?php echo esc_attr($button_text_color); ?>"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              <?php endif; ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>