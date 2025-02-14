<?php
$heading = get_sub_field('heading');
$heading_tag = get_sub_field('heading_tag');
$content = get_sub_field('content');
$list_items = get_sub_field('list_items');
$icons = get_sub_field('icons');
$background_color = get_sub_field('background_color');
$text_color = get_sub_field('text_color');
$border_radius = get_sub_field('border_radius');
$padding_classes = ['pt-5', 'pb-5'];
$content_two = get_sub_field('content_two');
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
<section class="relative flex overflow-hidden" style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 w-full mx-auto max-w-[1084px] px-5 lg:px-0 pt-8 pb-8  <?php echo esc_attr(implode(' ', $padding_classes)); ?>">
    <div class="flex flex-col">
      <div class="flex flex-col">
        <<?php echo esc_attr($heading_tag); ?> class="text-3xl font-bold leading-none" style="color: <?php echo esc_attr($text_color); ?>;">
          <?php echo esc_html($heading); ?>
        </<?php echo esc_attr($heading_tag); ?>>
        <div class="mt-1.5 w-8 h-[4px] max-w-[32px]"
          style="background-color: <?php echo esc_attr(get_sub_field('underline_color')) ?: '#1e1f3d'; ?>;"
          aria-hidden="true"></div>
      </div>
      <div class="py-[1.5rem] text-lg leading-7 text-left" style="color: <?php echo esc_attr($text_color); ?>;">
        <?php echo $content; ?>
      </div>
      <?php if (!empty($list_items) && is_array($list_items)): ?>
        <ul class="flex flex-col w-full mt-8 max-md:max-w-full" role="list">
          <?php foreach ($list_items as $item): ?>
            <li class="flex flex-row items-start w-full gap-4 pl-4 max-md:max-w-full">
              <div class="flex items-start w-2 gap-2 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                  <circle cx="4" cy="4" r="4" fill="#F68D2E" />
                </svg>
              </div>

              <span class="text-lg leading-7 text-left" style="color: <?php echo esc_attr($text_color); ?>;">
                <?php echo esc_html($item['list_text']); ?>
              </span>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <div class="py-[1.5rem] text-lg leading-7 text-left" style="color: <?php echo esc_attr($text_color); ?>;">
        <?php echo $content_two; ?>
      </div>
    </div>
    <?php if (!empty($icons) && is_array($icons)): ?>
      <div class="grid grid-cols-2 gap-8">
        <?php foreach ($icons as $icon): ?>
          <div class="flex flex-col items-center gap-4">
            <div class="w-16 h-16 bg-orange-400 rounded-full">
              <?php echo wp_get_attachment_image($icon['icon'], 'full', false, ['alt' => '']); ?>
            </div>
            <div class="w-full text-xl text-center w-full lg:w-[90%]" style="color: <?php echo esc_attr($text_color); ?>;">
              <?php echo esc_html($icon['icon_text']); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
  </div>
</section>