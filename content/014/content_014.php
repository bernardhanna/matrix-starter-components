<?php
$padding_top_classes = ['pt-12']; // Default pt class
$padding_bottom_classes = ['pb-12']; // Default pb class

if (have_rows('padding_settings')) {
  while (have_rows('padding_settings')) {
    the_row();
    $screen = get_sub_field('screen_size');
    $padding_top = get_sub_field('padding_top');
    $padding_bottom = get_sub_field('padding_bottom');

    if (!empty($padding_top)) {
      $padding_top_classes[] = "{$screen}:pt-[" . esc_attr($padding_top) . "rem]";
    }
    if (!empty($padding_bottom)) {
      $padding_bottom_classes[] = "{$screen}:pb-[" . esc_attr($padding_bottom) . "rem]";
    }
  }
}

// Combine both padding classes
$padding_classes = implode(' ', array_merge($padding_top_classes, $padding_bottom_classes));
?>

<section class="relative w-full <?php echo esc_attr($padding_classes); ?>" style="background-color: <?php echo esc_attr(get_sub_field('background_color')); ?>;">
  <div class="flex flex-wrap items-start w-full gap-8 mx-auto max-w-[1084px] px-5 lg:px-4">
    <div class="flex flex-col w-full mx-auto lg:flex-row lg:justify-between">
      <div class="flex flex-col w-full lg:w-[408px] max-md:pb-4">
        <?php $heading_tag = get_sub_field('content_014_heading_tag') ?: 'h2'; ?>
        <<?php echo esc_html($heading_tag); ?> class="w-full text-3xl font-bold tracking-tighter lg:w-[90%] leading-2"
          style="color: <?php echo esc_attr(get_sub_field('heading_text_color')) ?: '#000000'; ?>;">
          <?php echo esc_html(get_sub_field('content_014_heading_text')); ?>
          <div class="mt-1.5 w-8 h-[4px] max-w-[32px]"
            style="background-color: <?php echo esc_attr(get_sub_field('underline_color')) ?: '#1e1f3d'; ?>;"
            aria-hidden="true"></div>
        </<?php echo esc_html($heading_tag); ?>>
        <div class="mt-4 text-lg leading-7 text-black wp_editor">
          <?php echo wp_kses_post(get_sub_field('content_014_subheading_text')); ?>
        </div>
      </div>

      <div class="flex items-start gap-2 text-base w-full lg:max-w-[599px]">
        <div class="flex flex-col w-full">
          <div class="mb-4 leading-6 text-black wp_editor">
            <?php echo wp_kses_post(get_sub_field('content_014_paragraph_text')); ?>
          </div>
          <?php if ($button = get_sub_field('content_014_button_link')): ?>
            <a href="<?php echo esc_url($button['url']); ?>"
              class="flex self-start justify-center w-full gap-2 px-6 py-3 text-center no-underline rounded md:w-fit focus:outline-none focus:ring-2 focus:ring-offset-2 group"
              style="
     background-color: <?php echo esc_attr(get_sub_field('button_background_color')) ?: '#025A70'; ?>;
     color: <?php echo esc_attr(get_sub_field('button_text_color')) ?: '#ffffff'; ?>;
     border: 1px solid <?php echo esc_attr(get_sub_field('border_color')) ?: '#025A70'; ?>;"
              onmouseover="
     this.style.backgroundColor='<?php echo esc_attr(get_sub_field('button_hover_background_color')) ?: '#F68D2E'; ?>';
     this.style.color='<?php echo esc_attr(get_sub_field('button_hover_text_color')) ?: '#000000'; ?>';
     this.style.borderColor='<?php echo esc_attr(get_sub_field('border_hover_color')) ?: '#F68D2E'; ?>';
     this.querySelector('path').style.stroke='<?php echo esc_attr(get_sub_field('svg_stroke_hover_color')) ?: '#ffffff'; ?>';"
              onmouseout="
     this.style.backgroundColor='<?php echo esc_attr(get_sub_field('button_background_color')) ?: '#025A70'; ?>';
     this.style.color='<?php echo esc_attr(get_sub_field('button_text_color')) ?: '#000000'; ?>';
     this.style.borderColor='<?php echo esc_attr(get_sub_field('border_color')) ?: '#F68D2E'; ?>';
     this.querySelector('path').style.stroke='<?php echo esc_attr(get_sub_field('svg_stroke_color')) ?: '#ffffff'; ?>';"
              target="<?php echo esc_attr($button['target']); ?>">
              <?php echo esc_html($button['title']); ?>
              <?php if (get_sub_field('show_button_icon')): ?>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19"
                    stroke="<?php echo esc_attr(get_sub_field('svg_stroke_color')) ?: '#ffffff'; ?>"
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
  </div>
</section>