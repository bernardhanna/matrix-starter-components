<section class="relative w-full">
  <div
    class="flex flex-wrap items-center md:justify-between 
      <?php echo get_sub_field('gap') ? "gap-[" . esc_attr(get_sub_field('gap')) . "px]" : "gap-8"; ?> 
      <?php echo get_sub_field('padding_y') ? "py-[" . esc_attr(get_sub_field('padding_y')) . "%]" : "py-20"; ?> 
      mx-auto overflow-hidden max-w-[1084px] max-md:px-5"
    role="region"
    aria-label="Image Gallery">
    <?php if (have_rows('gallery_images')): ?>
      <?php while (have_rows('gallery_images')): the_row(); ?>
        <?php
        // Fetch the subfields
        $image = get_sub_field('image');
        $width = get_sub_field('image_width'); // Width as a percentage
        // Generate the Tailwind responsive class
        $width_class = $width ? "md:w-[$width%]" : 'md:w-full';
        ?>
        <?php if ($image): ?>
          <div class="<?php echo esc_attr($width_class); ?> max-md:w-full">
            <img
              loading="lazy"
              src="<?php echo esc_url($image['url']); ?>"
              alt="<?php echo esc_attr($image['alt'] ?: 'Gallery image'); ?>"
              title="<?php echo esc_attr($image['title'] ?: 'Gallery image'); ?>"
              class="object-cover max-md:w-full max-h-[384px] md:min-h-[384px] h-full" />
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>