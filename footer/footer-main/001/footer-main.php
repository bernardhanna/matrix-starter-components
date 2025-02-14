<div class="flex flex-col w-full mx-auto max-w-[1190px]" role="contentinfo" aria-label="Footer">
  <nav class="flex flex-col items-start justify-between w-full gap-24 py-8 lg:flex-row lg:items-center max-md:gap-10 max-xl:px-5 max-sm:gap-8 max-sm:px-5 max-sm:py-6" aria-label="Primary footer navigation">
    <!-- WordPress Menu -->
    <?php if (has_nav_menu('footer')) : ?>
      <ul class="flex flex-row items-center gap-8 text-base text-white hover:text-primary max-md:items-start max-md:flex-col max-sm: max-md:gap-6 max-sm:gap-4 max-sm:text-sm" role="list">
        <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container'      => false,
          'items_wrap'     => '%3$s', // Remove ul wrapper
          'depth'          => 1,
          'link_before'    => '<span class="text-white hover:text-primary">',
          'link_after'     => '</span>',
        ]);
        ?>
      </ul>
    <?php endif; ?>

    <!-- Social Media Links -->
    <div class="flex items-start gap-4 md:items-center max-sm:w-full" role="list" aria-label="Social media links">
      <?php
      $social_links = get_field('social_links', 'option'); // Retrieve social links from ACF
      if ($social_links) :
        foreach ($social_links as $social) :
          if ($social['url'] && $social['icon']) : ?>
            <a href="<?php echo esc_url($social['url']); ?>" class="focus:outline-none focus-within:outline-none focus:ring-2 focus:ring-white" aria-label="Visit our <?php echo esc_attr($social['label']); ?>" target="_blank" rel="noopener noreferrer">
              <i class="fab <?php echo esc_attr($social['icon']); ?> text-2xl text-white hover:text-primary transition-opacity cursor-pointer duration-[0.2s] hover:opacity-80 outline-none focus-within:outline-none"></i>
            </a>
      <?php endif;
        endforeach;
      endif;
      ?>
    </div>
  </nav>
</div>