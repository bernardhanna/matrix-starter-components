<section class="relative w-full" style="background-color: <?php echo esc_attr(get_sub_field('background_color')); ?>;">
  <div
    class="flex flex-wrap items-start w-full gap-8 mx-auto max-w-container px-5 lg:px-4 py-8 lg:<?php echo get_sub_field('padding_y') ? 'py-[' . esc_attr(get_sub_field('padding_y')) . '%]' : 'py-12'; ?>">

    <div class="flex flex-col w-full lg:flex-row lg:justify-between max-w-[1084px] mx-auto">
      <div class="flex flex-col w-full md:w-[408px] max-md:pb-4">
        <?php $heading_tag = get_sub_field('content_014_heading_tag') ?: 'h2'; ?>
        <<?php echo esc_html($heading_tag); ?>
          class="w-full text-3xl leading-none tracking-tighter whitespace-nowrap text-neutral-900"
          role="heading">
          <?php echo esc_html(get_sub_field('content_014_heading_text')); ?>
          <div class="mt-1 w-8 bg-secondary h-[4px] max-w-[32px]" aria-hidden="true"></div>
        </<?php echo esc_html($heading_tag); ?>>
        <div class="text-lg leading-7 text-black">
          <?php echo wp_kses_post(get_sub_field('content_014_subheading_text')); ?>
        </div>
      </div>

      <div class="flex items-start gap-2 text-base w-full max-w-[599px]">
        <div class="flex flex-col w-full">
          <div class="leading-6 text-black mb-6 ">
            <?php echo wp_kses_post(get_sub_field('content_014_paragraph_text')); ?>
          </div>
          <?php if ($button = get_sub_field('content_014_button_link')): ?>
            <a href="<?php echo esc_url($button['url']); ?>"
              class="w-fit-content flex self-start gap-2 px-6 py-3 text-white rounded bg-secondary hover:bg-red hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
              target="<?php echo esc_attr($button['target']); ?>">
              <?php echo esc_html($button['title']); ?>
              <?php if (get_sub_field('show_button_icon')): ?>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              <?php endif; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>