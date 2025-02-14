<?php
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$heading_text = get_sub_field('heading_text');
$faq_items = get_sub_field('faq_items');
$section_background = get_sub_field('section_background') ?: '#E2E8F0';
$text_color = get_sub_field('text_color') ?: '#025A70';
$border_color = get_sub_field('border_color') ?: '#CCDEE2';
$hover_border_color = get_sub_field('hover_border_color') ?: '#F97316';
$accordion_background = get_sub_field('accordion_background') ?: '#FFF';
$active_border_color = get_sub_field('active_border_color') ?: '#F68D2E';

// Generate padding classes
$padding_classes = ['py-5'];
if (have_rows('padding_settings')) {
  while (have_rows('padding_settings')) {
    the_row();
    $screen_size = get_sub_field('screen_size');
    $padding_top = get_sub_field('padding_top');
    $padding_bottom = get_sub_field('padding_bottom');
    $padding_classes[] = "{$screen_size}:pt-[{$padding_top}rem]";
    $padding_classes[] = "{$screen_size}:pb-[{$padding_bottom}rem]";
  }
}
?>

<section aria-labelledby="faq-heading" class="flex flex-col self-stretch px-32 pt-14 pb-20 font-bold text-<?php echo esc_attr($text_color); ?> max-xl:px-5" style="background-color: <?php echo esc_attr($section_background); ?>;">
  <div class="flex flex-col w-full max-md:max-w-full max-w-[1040px] mx-auto">
    <header class="flex flex-col w-full pb-4 text-3xl leading-none whitespace-nowrap text-teal-950 max-md:max-w-full">
      <<?php echo esc_html($heading_tag); ?> id="faq-heading" class="max-md:max-w-full">
        <?php echo esc_html($heading_text); ?>
      </<?php echo esc_html($heading_tag); ?>>
      <div role="presentation" class="flex mt-1 w-8 bg-orange-400 min-h-[4px]"></div>
    </header>

    <div class="flex flex-col gap-5 mt-5 mb-5">
      <?php if ($faq_items): ?>
        <?php foreach ($faq_items as $index => $faq_post): ?>
          <?php
          $faq_title = get_the_title($faq_post);
          $faq_content = apply_filters('the_content', get_post_field('post_content', $faq_post));
          ?>
          <div x-data="{ open: false }" class="w-full">
            <button @click="open = !open"
              class="group bg-white flex border-[1px] flex-row justify-between items-center p-6 w-full text-base sm:text-lg leading-loose rounded-lg border-solid border-<?php echo esc_attr($border_color); ?> bg-<?php echo esc_attr($accordion_background); ?> hover:border-<?php echo esc_attr($hover_border_color); ?> focus:outline-none focus:border-<?php echo esc_attr($hover_border_color); ?>  transition-all duration-200"
              :style="open ? 'border-radius: 8px; border: 4px solid #F68D2E; border-bottom: 0px; border-bottom-right-radius: 0px;  border-bottom-left-radius: 0px;;' : ''"
              aria-expanded="false">

              <span>
                <!-- Unopened Icon -->
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <path d="M16.0003 6.66663V25.3333M6.66699 16H25.3337" stroke="#025A70" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <!-- Opened Icon -->
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <path d="M6.66699 16H25.3337" stroke="#025A70" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
              <span class="flex-1 pl-4 text-left text-[#025A70]"><?php echo esc_html($faq_title); ?></span>
            </button>
            <div x-show="open"
              class="p-6 text-base leading-6 border-1 rounded-lg border-<?php echo esc_attr($active_border_color); ?> bg-white transition-all duration-300"
              :style="open ? 'border-radius: 8px; border: 4px solid var(--Primary-Orange-500, #F68D2E); border-top: 0px; border-top-right-radius: 0px; border-top-left-radius: 0px;' : ''">

              <div class="wp_editor">
                <?php echo wp_kses_post($faq_content); ?>

              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-gray-500">No FAQs available.</p>
      <?php endif; ?>
    </div>
</section>