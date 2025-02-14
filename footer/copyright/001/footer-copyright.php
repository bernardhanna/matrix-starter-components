<div class="flex w-full border-t border-solid border-t-white">
  <nav class="flex flex-col items-start lg:items-start justify-between w-full gap-24 py-4 text-xs leading-none text-white hover:text-primary lg:flex-row  mx-auto max-xl:px-5 max-w-[1190px] max-md:gap-10  max-sm:gap-8 max-sm:px-5 max-sm:py-6" aria-label="Secondary footer navigation">
    <?php
    // Output the WordPress menu
    wp_nav_menu([
      'theme_location' => 'copyright', // Register this menu location in your theme
      'menu_class'     => 'flex flex-col sm:flex-row gap-8 items-start sm:items-center min-w-[240px] max-md:gap-6 max-sm:gap-4 max-sm:text-sm',
      'container'      => false, // Avoid wrapping the menu in a <div>
      'depth'          => 1, // Only show top-level menu items
      'fallback_cb'    => false, // No fallback, don't show anything if menu is not set
      'link_before'    => '<span class="text-white hover:text-primary">',
      'link_after'     => '</span>',
    ]);
    ?>
    <div class="not-italic text-white max-sm:w-full">
      <span>Designed & Developed by
        <a href="https://www.matrixinternet.ie" target="_blank" rel="noopener noreferrer" class="underline hover:text-primary">
          Matrix Internet
        </a>
      </span>
    </div>
  </nav>
</div>