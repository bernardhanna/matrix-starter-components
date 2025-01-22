<div class="flex w-full border-t border-solid border-t-white">
  <nav class="flex flex-col items-start justify-between w-full gap-24 px-16 py-4 mx-auto text-sm leading-none text-white md:flex-row md:items-center max-w-container max-md:gap-10 max-md:px-10 max-sm:gap-8 max-sm:px-5 max-sm:py-6" aria-label="Secondary footer navigation">
    <?php
    // Output the WordPress menu
    wp_nav_menu([
      'theme_location' => 'copyright', // Register this menu location in your theme
      'menu_class'     => 'flex flex-wrap gap-8 items-center min-w-[240px] max-md:gap-6 max-sm:gap-4 max-sm:text-sm',
      'container'      => false, // Avoid wrapping the menu in a <div>
      'depth'          => 1, // Only show top-level menu items
      'fallback_cb'    => false, // No fallback, don't show anything if menu is not set
      'link_before'    => '<span class="text-white">',
      'link_after'     => '</span>',
    ]);
    ?>
    <div class="not-italic max-sm:w-full max-sm:text-center">
      <span><?php echo esc_html__('Designed & Developed by Matrix Internet', 'matrix-starter'); ?></span>
    </div>
  </nav>
</div>