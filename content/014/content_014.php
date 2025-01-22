<section class="relative w-full" style="background-color: <?php echo esc_attr(get_sub_field('background_color')); ?>;">
  <div
    class="flex flex-wrap items-start w-full gap-8 mx-auto max-w-container px-5 lg:px-4 py-8 lg:<?php echo get_sub_field('padding_y') ? 'py-[' . esc_attr(get_sub_field('padding_y')) . '%]' : 'py-12'; ?>">

    <div class="flex flex-col w-full lg:flex-row lg:justify-between max-w-[1084px] mx-auto">
      <div class="flex flex-col w-full md:w-[408px] max-md:pb-4">
        <?php $heading_tag = get_sub_field('content_014_heading_tag') ?: 'h2'; ?>
        <<?php echo esc_html($heading_tag); ?>
          class="w-full text-3xl leading-none tracking-tighter whitespace-nowrap font-bold"
          style="color: <?php echo esc_attr(get_sub_field('heading_text_color')) ?: '#000000'; ?>;"
          role="heading">
          <?php echo esc_html(get_sub_field('content_014_heading_text')); ?>
          <div class="mt-1 w-8 h-[4px] max-w-[32px]"
            style="background-color: <?php echo esc_attr(get_sub_field('underline_color')) ?: '#1e1f3d'; ?>;"
            aria-hidden="true"></div>
        </<?php echo esc_html($heading_tag); ?>>
        <div class="text-lg leading-7 text-black">
          <?php echo wp_kses_post(get_sub_field('content_014_subheading_text')); ?>
        </div>
      </div>

      <div class="flex items-start gap-2 text-base w-full max-w-[599px]">
        <div class="flex flex-col w-full">
          <div class="leading-6 text-black mb-6">
            <?php echo wp_kses_post(get_sub_field('content_014_paragraph_text')); ?>
          </div>
          <?php if ($button = get_sub_field('content_014_button_link')): ?>
            <a href="<?php echo esc_url($button['url']); ?>"
              class="w-fit flex self-start gap-2 px-6 py-3 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 no-underline"
              style="
       background-color: <?php echo esc_attr(get_sub_field('button_background_color')) ?: '#1e1f3d'; ?>;
       color: <?php echo esc_attr(get_sub_field('button_text_color')) ?: '#ffffff'; ?>;
       border: 1px solid <?php echo esc_attr(get_sub_field('button_border_color')) ?: '#cccccc'; ?>;"
              onmouseover="
       this.style.backgroundColor='<?php echo esc_attr(get_sub_field('button_hover_background_color')) ?: '#fb6407'; ?>';
       this.style.color='<?php echo esc_attr(get_sub_field('button_hover_text_color')) ?: '#ffffff'; ?>';
       this.style.borderColor='<?php echo esc_attr(get_sub_field('button_hover_border_color')) ?: '#fb6407'; ?>';"
              onmouseout="
       this.style.backgroundColor='<?php echo esc_attr(get_sub_field('button_background_color')) ?: '#1e1f3d'; ?>';
       this.style.color='<?php echo esc_attr(get_sub_field('button_text_color')) ?: '#ffffff'; ?>';
       this.style.borderColor='<?php echo esc_attr(get_sub_field('button_border_color')) ?: '#cccccc'; ?>';"
              target="<?php echo esc_attr($button['target']); ?>">
              <?php echo esc_html($button['title']); ?>
              <?php if (get_sub_field('show_button_icon')): ?>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19"
                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              <?php endif; ?>
            </a>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>