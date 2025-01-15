<?php
$content_010_heading_tag = get_sub_field('content_010_heading_tag') ?: 'h2'; // Default to h2 if not set
$content_010_heading = get_sub_field('content_010_heading');
$content_010_items = get_sub_field('content_010_items');
?>

<section class="flex flex-col items-center self-stretch justify-center py-8 bg-secondary lg:py-20">
  <div class="flex flex-col max-w-full px-4 w-container lg:px-8 xxl:px-0">
    <div class="flex flex-col self-start max-sm:justify-center max-sm:items-center max-sm:w-full">
      <<?php echo esc_html($content_010_heading_tag); ?> class="text-3xl font-semibold leading-none text-black max-mobile:text-center">
        <?php echo esc_html($content_010_heading); ?>
      </<?php echo esc_html($content_010_heading_tag); ?>>
      <div class="mt-4 bg-orange-500 border-orange-500 border-solid border-[3px] min-h-[3px] w-[66px]"></div>
    </div>
    <!-- 5-column grid setup -->
    <div class="grid w-full grid-cols-1 mt-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-9 max-md:mt-10 max-md:max-w-full max-sm:justify-center">
      <?php if ($content_010_items): ?>
        <?php foreach ($content_010_items as $item): ?>
          <article class="flex flex-col justify-center min-w-[240px]" style="background-color: <?php echo esc_attr($item['content_010_icon_background_color']); ?>; min-height: 180px;">
            <div class="flex flex-col items-center justify-center max-w-full">
              <img src="<?php echo esc_url($item['content_010_icon']); ?>"
                alt="<?php echo esc_attr(get_post_meta($item['content_010_icon'], '_wp_attachment_image_alt', true)); ?>"
                class="object-cover w-full max-w-full" />
            </div>
            <span class="flex-1 shrink gap-2.5 self-stretch p-6 max-w-full text-xl font-semibold leading-7 text-center text-black">
              <?php echo esc_html($item['content_010_title']); ?>
            </span>
          </article>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>