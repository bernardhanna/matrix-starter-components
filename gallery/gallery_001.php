<section
  class="relative w-full"
  style="background-color: <?php echo esc_attr(get_sub_field('background_color')); ?>;">
  <div
    class="flex flex-col md:flex-row items-center justify-center w-full py-12 
      <?php echo get_sub_field('gap') ? "gap-[" . esc_attr(get_sub_field('gap')) . "px]" : "gap-8"; ?> 
      <?php echo get_sub_field('padding_top') ? "pt-[" . esc_attr(get_sub_field('padding_top')) . "%]" : "lg:pt-10"; ?> 
      <?php echo get_sub_field('padding_bottom') ? "pb-[" . esc_attr(get_sub_field('padding_bottom')) . "%]" : "lg:pb-10"; ?> 
      mx-auto overflow-hidden max-w-[1040px] max-lg:px-5"
    role="region"
    aria-label="Image Gallery">
    <?php if (have_rows('gallery_images')): ?>
      <?php while (have_rows('gallery_images')): the_row(); ?>
        <?php
        $image = get_sub_field('image');
        $width = get_sub_field('image_width');
        $width_class = $width ? "md:w-[$width%]" : 'md:w-full';
        ?>
        <?php if ($image): ?>
          <div class="<?php echo esc_attr($width_class); ?> max-md:w-full">
            <img
              loading="lazy"
              src="<?php echo esc_url($image['url']); ?>"
              alt="<?php echo esc_attr($image['alt'] ?: 'Gallery image'); ?>"
              title="<?php echo esc_attr($image['title'] ?: 'Gallery image'); ?>"
              class="object-cover w-full max-h-[384px] h-full md:h-[384px] rounded-custom-md" />
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>