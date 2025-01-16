<?php
$content_009_heading_tag = get_sub_field('content_009_heading_tag') ?: 'h2';
$content_009_heading = get_sub_field('content_009_heading');
$column_layout = get_sub_field('content_009_column_layout') ?: '3';
$section_background_color = get_sub_field('content_009_section_background_color') ?: '#FFF6F1';
$item_height = get_sub_field('content_009_item_height') ?: 'h-[332px]';
$items = get_sub_field('content_009_items');
?>

<section class="flex flex-col items-center justify-center px-4 py-8 section-background lg:py-20 lg:px-8 xxl:px-0 max-sm:justify-center max-sm:items-center"
  style="--section-bg-color: <?php echo esc_attr($section_background_color); ?>;">
  <div class="flex flex-col max-w-full w-[1440px]">
    <?php if ($content_009_heading): ?>
      <div class="flex flex-col self-start text-3xl font-semibold leading-none text-black heading-section max-md:max-w-full max-sm:justify-center max-sm:items-center max-sm:text-center">
        <<?php echo esc_html($content_009_heading_tag); ?> class="leading-8 max-md:max-w-full">
          <?php echo esc_html($content_009_heading); ?>
        </<?php echo esc_html($content_009_heading_tag); ?>>
        <div class="mt-4 bg-orange-500 border-orange-500 border-solid border-[3px] min-h-[3px] w-[66px]"></div>
      </div>
    <?php endif; ?>

    <div class="flex flex-col w-full mt-16 grid-container max-md:mt-10 max-md:max-w-full">
      <div class="grid grid-cols-1 md:grid-cols-<?php echo esc_attr($column_layout); ?> gap-10 w-full max-md:max-w-full">
        <?php if (is_array($items) && !empty($items)): ?>
          <?php foreach ($items as $item): ?>
            <?php
            $icon = $item['content_009_icon'] ?? null;
            $icon_url = $icon ? (is_array($icon) ? $icon['url'] : wp_get_attachment_url($icon)) : 'https://via.placeholder.com/96';
            $icon_alt = $icon ? (is_array($icon) ? $icon['alt'] : get_post_meta($icon, '_wp_attachment_image_alt', true)) : 'Placeholder';
            ?>
            <div class="card flex flex-wrap flex-1 shrink gap-8 items-start p-10 basis-0 min-w-[240px] max-md:px-5 max-md:max-w-full max-sm:justify-center max-sm:items-center h-auto xl:<?php echo esc_attr($item_height); ?> bg-white">
              <div class="icon-container flex gap-2.5 justify-center items-center w-24 h-24 bg-orange-50 min-h-[96px] rounded-[48px]">
                <img loading="lazy" src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($icon_alt); ?>" class="self-stretch object-contain w-full aspect-square" />
              </div>
              <div class="content flex flex-col flex-1 shrink text-black basis-0 min-w-[240px] max-md:max-w-full max-sm:justify-center max-sm:items-center max-sm:text-center">
                <?php if (!empty($item['content_009_title'])): ?>
                  <h3 class="text-2xl font-semibold leading-none max-md:max-w-full"><?php echo esc_html($item['content_009_title']); ?></h3>
                <?php endif; ?>
                <div class="divider mt-3 border-orange-500 border-solid border-[3px] min-h-[3px] w-[66px]"></div>
                <?php if (!empty($item['content_009_description'])): ?>
                  <div class="mt-3 text-lg leading-7 description max-md:max-w-full">
                    <?php echo wp_kses_post($item['content_009_description']); ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>