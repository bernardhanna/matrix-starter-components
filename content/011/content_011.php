<?php
$content_011_items = get_sub_field('content_011_items');
$content_011_background_color = get_sub_field('content_011_background_color') ?: '#ffffff'; // Default to white
?>

<section class="px-4 features lg:px-8 xxl:px-0" style="background-color: <?php echo esc_attr($content_011_background_color); ?>;">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 items-start font-semibold max-w-[1440px] mx-auto">
    <?php if ($content_011_items): ?>
      <?php foreach ($content_011_items as $index => $item): ?>
        <?php
        $number = $index + 1; // Incremental number based on the index
        $text_color = $item['content_011_text_color'] ?: '#000000'; // Default text color
        $circle_background_color = $item['content_011_circle_background_color'] ?: '#E7F0E'; // Default background color for the circle
        ?>
        <div class="flex flex-col items-center px-16 text-center md:px-0">
          <div class="flex items-center justify-center w-24 h-24 text-6xl leading-none rounded-full max-md:text-4xl" aria-hidden="true" style="background-color: <?php echo esc_attr($circle_background_color); ?>;">
            <span style="color: <?php echo esc_attr($text_color); ?>;"><?php echo esc_html($number); ?></span>
          </div>
          <span class="mt-5 text-xl leading-7 text-center text-black">
            <?php echo esc_html($item['content_011_text']); ?>
          </span>
          <span class="mt-5 text-base font-normal leading-7 text-center text-black">
            <?php echo esc_html($item['content_011_desc']); ?>
          </span>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>