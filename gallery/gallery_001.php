<section
  class="relative w-full"
  style="background-color: <?php echo esc_attr(get_sub_field('background_color')); ?>;">
  <div class="w-full max-w-[1200px] mx-auto relative">
    <div
      class="flex flex-col md:flex-row items-center justify-center w-full mx-auto overflow-hidden max-w-[1040px] max-xl:px-5 <?php echo get_sub_field('gap') ? "gap-[" . esc_attr(get_sub_field('gap')) . "px]" : "gap-8"; ?> 
    <?php
    // Always include default padding
    $classes = ['pt-5', 'pb-5'];

    // Add dynamic padding settings if they exist
    $padding_settings = get_sub_field('padding_settings');
    if ($padding_settings):
      foreach ($padding_settings as $control):
        $screen = $control['screen_size'];
        $padding_top = isset($control['padding_top']) && $control['padding_top'] !== '' ? "pt-[" . esc_attr($control['padding_top']) . "rem]" : null;
        $padding_bottom = isset($control['padding_bottom']) && $control['padding_bottom'] !== '' ? "pb-[" . esc_attr($control['padding_bottom']) . "rem]" : null;

        // Add screen-specific classes
        if ($padding_top):
          $classes[] = $screen . ':' . $padding_top;
        endif;
        if ($padding_bottom):
          $classes[] = $screen . ':' . $padding_bottom;
        endif;
      endforeach;
    endif;

    // Output combined classes
    echo implode(' ', $classes);
    ?>">
      <?php if (have_rows('gallery_images')): ?>
        <?php while (have_rows('gallery_images')): the_row(); ?>
          <?php
          $image = get_sub_field('image');
          $width = get_sub_field('image_width');
          $width_class = $width ? "md:w-[" . esc_attr($width) . "%]" : 'md:w-full';
          ?>
          <?php if ($image): ?>
            <div class="<?php echo esc_attr($width_class); ?> max-md:w-full z-40">
              <img
                loading="lazy"
                src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt'] ?: 'Gallery image'); ?>"
                title="<?php echo esc_attr($image['title'] ?: 'Gallery image'); ?>"
                class="object-cover sm:object-contain md:object-cover w-full max-h-[384px] h-full md:h-[384px] rounded-custom-md" />
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php
      $icon_id = get_sub_field('svg_icon');
      $icon_url = wp_get_attachment_image_url($icon_id, 'full');
      $icon_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);
      ?>
      <?php if ($icon_url): ?>
        <img
          src="<?php echo esc_url($icon_url); ?>"
          alt="<?php echo esc_attr($icon_alt); ?>"
          class="absolute bottom-0 right-0 z-30 object-contain" />
      <?php endif; ?>
    </div>
  </div>
</section>