<?php
$background_color = get_sub_field('background_color');
$heading_tag = get_sub_field('heading_tag') ?: 'h4';
$heading_text = get_sub_field('heading_text');
$heading_color = get_sub_field('heading_color');
$paragraph_text = get_sub_field('paragraph_text');
$text_color = get_sub_field('text_color');
$main_image = get_sub_field('main_image');
$button_link = get_sub_field('button_link');
$button_bg_color = get_sub_field('button_bg_color');
$button_text_color = get_sub_field('button_text_color');
$button_hover_bg_color = get_sub_field('button_hover_bg_color');
$button_hover_text_color = get_sub_field('button_hover_text_color');
$button_icon_toggle = get_sub_field('button_icon_toggle');
?>
<div
  class="flex w-full overflow-hidden"
  style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="flex flex-col w-full mx-auto md:flex-row max-w-container">
    <img
      loading="lazy"
      src="<?php echo esc_url($main_image['url'] ?? get_template_directory_uri() . '/assets/images/placeholder.png'); ?>"
      alt="<?php echo esc_attr($main_image['alt'] ?? 'Placeholder Image'); ?>"
      class="object-cover w-full max-w-full md:max-w-[50%] max-sm:h-[315px] lg:h-full" />
    <div class="flex flex-col w-full my-auto max-lg:px-5 max-lg:py-5">
      <div class="flex flex-col w-full max-w-full px-5 lg:w-4/5 lg:px-16">
        <div class="flex flex-col w-full">
          <<?php echo esc_html($heading_tag); ?>
            class="w-full text-3xl font-bold leading-10"
            style="color: <?php echo esc_attr($heading_color); ?>;">
            <?php echo esc_html($heading_text); ?>
          </<?php echo esc_html($heading_tag); ?>>
          <?php if (get_sub_field('underline_title')): ?>
            <div class="flex mt-1 w-8 min-h-[4px]"
              style="background-color: <?php echo esc_attr(get_sub_field('underline_color')); ?>;"></div>
          <?php endif; ?>
        </div>
        <div
          class="mt-8 text-base leading-6 max-lg:max-w-full"
          style="color: <?php echo esc_attr($text_color); ?>;">
          <?php echo wp_kses_post($paragraph_text); ?>
        </div>
        <?php if ($button_link): ?>
          <a href="<?php echo esc_url($button_link['url']); ?>"
            class="flex gap-2 justify-center items-center self-start px-8 py-4 mt-8 text-sm font-semibold leading-none rounded border border-solid min-h-[56px] max-lg:px-5 no-underline"
            style="
              background-color: <?php echo esc_attr($button_bg_color); ?>;
              color: <?php echo esc_attr($button_text_color); ?>;
              border-color: <?php echo esc_attr(get_sub_field('button_border_color')); ?>;
            "
            onmouseover="
              this.style.backgroundColor='<?php echo esc_attr($button_hover_bg_color); ?>';
              this.style.color='<?php echo esc_attr($button_hover_text_color); ?>';
              this.style.borderColor='<?php echo esc_attr(get_sub_field('button_hover_border_color')); ?>';
            "
            onmouseout="
              this.style.backgroundColor='<?php echo esc_attr($button_bg_color); ?>';
              this.style.color='<?php echo esc_attr($button_text_color); ?>';
              this.style.borderColor='<?php echo esc_attr(get_sub_field('button_border_color')); ?>';
            "
            target="<?php echo esc_attr($button_link['target']); ?>">
            <div><?php echo esc_html($button_link['title']); ?></div>
            <?php if (get_sub_field('button_icon_toggle')): ?>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>