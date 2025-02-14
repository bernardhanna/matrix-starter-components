<?php
$heading = get_sub_field('heading');
$heading_tag = get_sub_field('heading_tag');
$heading_underline_color = get_sub_field('heading_underline_color');
$content = get_sub_field('content');
$image = get_sub_field('image');
$image_alt = get_post_meta($image, '_wp_attachment_image_alt', true) ?: 'Image Alt';
$button = get_sub_field('button');
$show_button_icon = get_sub_field('show_button_icon');
$reverse_layout = get_sub_field('reverse_layout');

// Colors and styles
$background_color = get_sub_field('background_color');
$heading_color = get_sub_field('heading_color');
$text_color = get_sub_field('text_color');
$button_bg_color = get_sub_field('button_bg_color');
$button_text_color = get_sub_field('button_text_color');
$button_hover_bg_color = get_sub_field('button_hover_bg_color');
$button_hover_text_color = get_sub_field('button_hover_text_color');
$button_border_color = get_sub_field('button_border_color');
$button_hover_border_color = get_sub_field('button_hover_border_color');
$border_radius = get_sub_field('border_radius');

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
  class="relative flex overflow-hidden pt-12 pb-12 <?php echo esc_attr(implode(' ', $padding_classes)); ?>"
  style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="w-full mx-auto max-w-[1120px] flex <?php echo $reverse_layout ? 'flex-col md:flex-row-reverse' : 'flex-col md:flex-row'; ?> items-center justify-between max-xl:px-5">
    <div class="w-full md:w-[43%] max-md:px-0 max-md:py-5">
      <<?php echo esc_attr($heading_tag); ?> class="text-3xl font-bold leading-none" style="color: <?php echo esc_attr($heading_color); ?>;">
        <?php echo esc_html($heading); ?>
      </<?php echo esc_attr($heading_tag); ?>>
      <div class="w-8 h-1 mt-2" style="background-color: <?php echo esc_attr($heading_underline_color); ?>;"></div>
      <div class="mt-4 text-base leading-6" style="color: <?php echo esc_attr($text_color); ?>;">
        <?php echo wp_kses_post($content); ?>
      </div>
      <?php if ($button && is_array($button) && isset($button['url']) && isset($button['title'])): ?>
        <a href="<?php echo esc_url($button['url']); ?>"
          class="inline-flex items-center justify-center w-full gap-2 px-6 py-3 mt-4 font-semibold rounded md:w-fit"
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
          target="<?php echo esc_attr(isset($button['target']) ? $button['target'] : '_self'); ?>">
          <span class="text-sm font-semibold leading-5"><?php echo esc_html($button['title']); ?></span>
          <?php if ($show_button_icon): ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 12H19M19 12L12 5M19 12L12 19"
                stroke="<?php echo esc_attr($button_text_color); ?>"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          <?php endif; ?>
        </a>
      <?php endif; ?>
    </div>
    <?php if ($image): ?>
      <div class="w-full md:w-[55%] ">
        <?php echo wp_get_attachment_image($image, 'full', false, [
          'alt' => esc_attr($image_alt),
          'class' => 'rounded object-cover w-full h-full max-h-[320px] max-w-[600px]',
          'style' => "border-radius: {$border_radius}rem;",
        ]); ?>
      </div>
    <?php endif; ?>
  </div>
</section>