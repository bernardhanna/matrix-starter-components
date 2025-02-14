<?php
$section_classes = 'relative flex flex-col overflow-hidden';
$container_classes = 'flex flex-col items-center w-full mx-auto max-w-container';
$min_height = get_sub_field('min_height') ?: 400;

// Build responsive grid classes
$grid_classes = ['grid', 'gap-6', 'mt-6', 'w-full', 'mx-auto', 'max-w-[1088px]'];

if (have_rows('responsive_grid')) {
  while (have_rows('responsive_grid')) {
    the_row();
    $screen = get_sub_field('screen_size');
    $cols = get_sub_field('columns');
    $grid_classes[] = "{$screen}:{$cols}";
  }
} else {
  // Default responsive behavior if no custom settings
  $grid_classes[] = 'grid-cols-1';
  $grid_classes[] = 'md:grid-cols-2';
}
// Retrieve ACF fields
$section_heading = get_sub_field('section_heading');
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$background_color = get_sub_field('background_color') ?: '#F5F5F5';
$underline_color = get_sub_field('underline_color') ?: '#FFA500';
$item_image_height = get_sub_field('item_image_height') ?: 70;

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

<section class="<?php echo esc_attr($section_classes); ?>" <?php if ($background_color) : ?>style="background-color: <?php echo esc_attr($background_color); ?>" <?php endif; ?>>
  <div class="<?php echo esc_attr($container_classes . ' ' . implode(' ', $padding_classes)); ?> max-xl:px-5">
    <?php if (!empty($section_heading)): ?>
      <header class="flex flex-col w-full text-left mx-auto max-w-[1088px]">
        <<?php echo esc_attr($heading_tag); ?> class="text-3xl font-bold leading-none">
          <?php echo esc_html($section_heading); ?>
        </<?php echo esc_attr($heading_tag); ?>>
        <div class="w-8 h-1 mt-1" <?php if ($underline_color) : ?>style="background-color: <?php echo esc_attr($underline_color); ?>" <?php endif; ?>></div>
      </header>
    <?php endif; ?>
    <?php if (have_rows('rows')): ?>
      <?php while (have_rows('rows')): the_row(); ?>
        <?php $columns = get_sub_field('columns'); ?>
        <div class="grid gap-6 mt-6 w-full mx-auto max-w-[1088px] <?php echo esc_attr($columns); ?>">
          <?php if (have_rows('items')): ?>
            <?php while (have_rows('items')): the_row(); ?>
              <?php
              $item_image = get_sub_field('item_image');
              $item_title = get_sub_field('item_title');
              $item_description = get_sub_field('item_description');
              ?>
              <article class="flex flex-col p-6 text-center bg-white border rounded-lg border-slate-300 h-auto min-h-[400px]">
                <?php if ($item_image): ?>
                  <div class="flex">
                    <img src="<?php echo esc_url($item_image['url']); ?>"
                      alt="<?php echo esc_attr($item_image['alt'] ?: 'Item Image'); ?>"
                      class="object-contain w-full mx-auto max-w-[104px] h-[<?php echo esc_attr($item_image_height); ?>px]" />
                  </div>
                <?php endif; ?>
                <span class="mt-4 text-xl font-bold text-black"><?php echo esc_html($item_title); ?></span>
                <p class="mt-2 text-base leading-6 text-slate-800"><?php echo esc_html($item_description); ?></p>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>