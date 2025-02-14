<?php
$logo_id = get_field('logo', 'option') ?: get_theme_mod('custom_logo');
$logo_url = $logo_id ? wp_get_attachment_image_url($logo_id, 'full') : '';
$logo_alt = $logo_id ? get_post_meta($logo_id, '_wp_attachment_image_alt', true) : get_bloginfo('name');

// Retrieve Calculator Button Text and Link
$calculator_text = get_field('calculator_text', 'option') ?: 'Calculator';
$calculator_link = get_field('calculator_link', 'option');

// Retrieve Mobile Navigation Settings
$enable_hamburger = get_field('enable_hamburger', 'option');
$hamburger_style = get_field('hamburger_style', 'option');
$mobile_menu_effect = get_field('mobile_menu_effect', 'option') ?: 'slide_up';
$mobile_menu_width = get_field('mobile_menu_width', 'option') ?: 100;
$mobile_menu_bg = get_field('mobile_menu_background', 'option') ?: '#FFFFFF';
$sticky_menu = get_field('sticky_menu', 'option'); // Sticky menu toggle

// Map effects to transition classes
$effect_classes = [
  'slide_up'    => 'translate-y-full',
  'slide_left'  => '-translate-x-full',
  'slide_right' => 'translate-x-full',
  'fullscreen'  => 'translate-y-full',
];
$transition_class = $effect_classes[$mobile_menu_effect] ?? 'translate-y-full';

// Define additional styles for non-fullscreen menus
$menu_width_style = $mobile_menu_effect !== 'fullscreen'
  ? "width: {$mobile_menu_width}%; left: 0;"
  : "width: 100%;";

use Log1x\Navi\Navi;

$navigation = Navi::make()->build('primary');
?>

<section
  id="site-header"
  x-data="{
    isOpen: false,
    activeDropdown: null,
    toggleDropdown(index) {
      this.activeDropdown = (this.activeDropdown === index ? null : index);
    },
    checkWindowSize() {
      if (window.innerWidth > 768) {
        this.isOpen = false;
        this.activeDropdown = null;
      }
    }
  }"
  x-init="window.addEventListener('resize', () => checkWindowSize())"
  class="py-4 bg-white"
  x-effect="isOpen ? document.body.style.overflow = 'hidden' : document.body.style.overflow = ''">

  <div class="flex flex-wrap items-center justify-between w-full px-4 m-auto bg-white sm:px-8 xxl:px-0">
    <div class="flex flex-row items-center justify-between w-full mx-auto max-w-[1160px]">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php if ($logo_url) : ?>
          <img style="z-index: 10000;" class="relative" src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($logo_alt); ?>" />
        <?php else : ?>
          <span><?php echo get_bloginfo('name'); ?></span>
        <?php endif; ?>
      </a>

      <div class="items-center h-full gap-10 text-base font-semibold text-black uppercase md:flex max-md:hidden">
        <?php if ($navigation->isNotEmpty()) : ?>
          <nav id="site-navigation">
            <ul id="primary-menu" class="flex items-center space-x-8">
              <?php foreach ($navigation->toArray() as $index => $item) : ?>
                <li class="relative group <?php echo esc_attr($item->classes); ?> <?php echo $item->active ? 'current-item' : ''; ?>">
                  <a href="<?php echo esc_url($item->url); ?>" class="gap-2.5 self-stretch my-auto whitespace-nowrap text-[#1d2838] hover:text-[#025a70] text-base font-normal leading-normal flex items-center capitalize <?php echo $item->active ? 'active-item' : ''; ?>">
                    <?php echo esc_html($item->label); ?>
                    <?php if ($item->children) : ?>
                      <span class="ml-[2px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                          <path d="M4.25 6.875L8.5 11.125L12.75 6.875" stroke="#1D2939" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    <?php endif; ?>
                  </a>

                  <?php if ($item->children) : ?>
                    <ul class="absolute left-0 hidden space-y-2 border-b-2 border-[#F68D2E] bg-white group-hover:block min-w-[200px] z-50">
                      <?php foreach ($item->children as $child) : ?>
                        <li class="group <?php echo esc_attr($child->classes); ?> <?php echo $child->active ? 'current-item' : ''; ?> hover:bg-secondary">
                          <a href="<?php echo esc_url($child->url); ?>"
                            class="block px-4 py-2 text-sm font-normal leading-normal 
          text-[#1d2838] hover:text-white">
                            <?php echo esc_html($child->label); ?>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </nav>
        <?php endif; ?>
      </div>

      <?php if ($enable_hamburger): ?>
        <button
          :class="{ 'is-active z-50 bg-transparent hover:bg-transparent flex items-center justify-center ': isOpen }"
          class="hamburger <?php echo esc_attr($hamburger_style); ?> md:hidden"
          type="button"
          aria-label="Menu"
          aria-expanded="false"
          @click="isOpen = !isOpen">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($enable_hamburger && $navigation->isNotEmpty()): ?>
    <div
      x-show="isOpen"
      :class="{ '<?php echo esc_attr($transition_class); ?>': !isOpen, 'translate-x-0 translate-y-0': isOpen }"
      class="absolute top-0 left-0 z-40 h-screen <?php echo esc_attr($transition_class); ?> bg-white transition-transform duration-500 ease-out"
      style="background-color: <?php echo esc_attr($mobile_menu_bg); ?>; <?php echo esc_attr($menu_width_style); ?>"
      x-transition:enter="transition ease-out duration-500"
      x-transition:leave="transition ease-in duration-300"
      @click.away="isOpen = false">
      <nav class="flex flex-col items-center justify-center h-full px-8">
        <ul class="relative flex flex-col justify-center w-full h-full mx-auto space-y-8 text-center stretch">
          <?php foreach ($navigation->toArray() as $index => $item) : ?>
            <li class="relative mb-4 border-b border-[#CCDEE2] pb-6 <?php echo esc_attr($item->classes); ?> <?php echo $item->active ? 'current-item' : ''; ?>">
              <div class="flex items-center justify-between">
                <!-- Top-Level Link -->
                <a
                  href="<?php echo esc_url($item->url); ?>"
                  class="text-lg font-normal leading-7 text-secondary-800 ">
                  <?php echo esc_html($item->label); ?>
                </a>

                <!-- If the item has children, show a toggle button -->
                <?php if ($item->children) : ?>
                  <button
                    type=" button"
                    class="ml-4"
                    @click.stop="toggleDropdown(<?php echo $index; ?>)"
                    aria-label="Toggle sub-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                      <path d="M4.25 6.875L8.5 11.125L12.75 6.875" stroke="#1D2939" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </button>
                <?php endif; ?>
              </div>

              <!-- Child Submenu -->
              <?php if ($item->children) : ?>
                <ul
                  x-show="activeDropdown === <?php echo $index; ?>"
                  x-transition
                  style="display: none;"
                  class="flex flex-col items-start self-stretch gap-8 p-6 px-8  text-lg transition-all duration-300 rounded-lg text-gray-70 bg-[#E6EEF1]">
                  <?php foreach ($item->children as $child) : ?>
                    <li class="text-left">
                      <a href="<?php echo esc_url($child->url); ?>" class="block py-2">
                        <?php echo esc_html($child->label); ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  <?php endif; ?>
</section>