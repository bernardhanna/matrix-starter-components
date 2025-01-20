<section class="relative w-full">
  <div class="flex flex-wrap items-start w-full gap-8 py-12 mx-auto max-w-container max-lg:px-5">
    <?php $heading_tag = get_sub_field('content_014_heading_tag') ?: 'h2'; ?>
    <<?php echo esc_html($heading_tag); ?>
      class="w-full text-3xl leading-none tracking-tighter whitespace-nowrap text-neutral-900"
      role="heading">
      <?php echo esc_html(get_sub_field('content_014_heading_text')); ?>
      <div class="mt-1 w-8 bg-secondary min-h-[4px]" aria-hidden="true"></div>
    </<?php echo esc_html($heading_tag); ?>>

    <div class="flex flex-col w-full lg:flex-row lg:justify-between max-w-[1084px] mx-auto">
      <div class="flex flex-col w-full md:w-[408px] max-md:pb-4">
        <div class="text-lg leading-7 text-black">
          <?php echo wp_kses_post(get_sub_field('content_014_subheading_text')); ?>
        </div>
      </div>

      <div class="flex items-start gap-2 text-base w-full max-w-[599px]">
        <div class="flex flex-col w-full">
          <div class="leading-6 text-black">
            <?php echo wp_kses_post(get_sub_field('content_014_paragraph_text')); ?>
          </div>
          <?php if ($button = get_sub_field('content_014_button_link')): ?>
            <a href="<?php echo esc_url($button['url']); ?>"
              class="self-start gap-2 px-6 py-3 mt-6 text-white rounded bg-secondary hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
              target="<?php echo esc_attr($button['target']); ?>">
              <?php echo esc_html($button['title']); ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>