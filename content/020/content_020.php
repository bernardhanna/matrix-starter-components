<?php
$section_title = get_sub_field('section_title');
$section_description = get_sub_field('section_description');
$section_image = get_sub_field('section_image');
$steps = get_sub_field('steps');
$step_title = get_sub_field('step_title');
$cta_text = get_sub_field('cta_text');
$cta_link = get_sub_field('cta_link');
$show_cta = get_sub_field('show_cta');
$show_cta_icon = get_sub_field('show_cta_icon');
$section_bg_color = get_sub_field('section_bg_color');
$text_color = get_sub_field('text_color');
$grid_column_1_use_gradient = get_sub_field('grid_column_1_use_gradient');
$grid_column_1_bg = get_sub_field('grid_column_1_bg');
$grid_column_1_gradient = get_sub_field('grid_column_1_gradient');
$grid_column_2_use_gradient = get_sub_field('grid_column_2_use_gradient');
$grid_column_2_bg = get_sub_field('grid_column_2_bg');
$grid_column_2_gradient = get_sub_field('grid_column_2_gradient');
$cta_bg_color = get_sub_field('cta_bg_color');
$cta_text_color = get_sub_field('cta_text_color');
$cta_hover_bg_color = get_sub_field('cta_hover_bg_color');
$cta_hover_text_color = get_sub_field('cta_hover_text_color');
$padding_classes = ['pt-12 pb-12'];

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
$padding_class = implode(' ', $padding_classes);
?>

<section class="relative flex overflow-hidden" style="background: <?php echo esc_attr($section_bg_color); ?>;">
  <div class="max-xl:px-5 grid w-full grid-cols-2 gap-10 max-md:grid-cols-1 max-w-[1088px] mx-auto <?php echo esc_attr($padding_class); ?>">
    <div class="p-10 text-white rounded-lg max-xl:px-5" style="background: <?php echo esc_attr($grid_column_1_use_gradient ? $grid_column_1_gradient : $grid_column_1_bg); ?>; color: <?php echo esc_attr($text_color); ?>;">
      <img src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt'] ?: 'Illustration'); ?>" class="object-contain w-20" />
      <div class="mt-6">
        <h2 class="text-2xl font-bold leading-none"><?php echo wp_kses_post($section_title); ?></h2>
        <div class="mt-2 text-base leading-6"><?php echo wp_kses_post($section_description); ?></div>
        <?php if ($show_cta): ?>
          <div class="pt-2 mt-2">
            <a href="<?php echo esc_url($cta_link); ?>" class="flex gap-2 justify-center items-center px-8 py-4 text-sm font-semibold rounded w-fit min-h-[56px] max-xl:px-5"
              style="background-color: <?php echo esc_attr($cta_bg_color); ?>; color: <?php echo esc_attr($cta_text_color); ?>;"
              onmouseover="this.style.backgroundColor='<?php echo esc_attr($cta_hover_bg_color); ?>'; this.style.color='<?php echo esc_attr($cta_hover_text_color); ?>';"
              onmouseout="this.style.backgroundColor='<?php echo esc_attr($cta_bg_color); ?>'; this.style.color='<?php echo esc_attr($cta_text_color); ?>';">
              <span><?php echo esc_html($cta_text); ?></span>
              <?php if ($show_cta_icon): ?>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12.7937H19M19 12.7937L12 5.7937M19 12.7937L12 19.7937" stroke="#01242D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              <?php endif; ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="p-10 text-base rounded-lg max-xl:px-5" style="background: <?php echo esc_attr($grid_column_2_use_gradient ? $grid_column_2_gradient : $grid_column_2_bg); ?>;">
      <p class="text-base leading-6"><?php echo wp_kses_post($step_title); ?></p>
      <div class="mt-4" role="list" aria-label="API validation steps">
        <?php if ($steps): ?>
          <?php foreach ($steps as $step): ?>
            <div class="flex items-start gap-4 mt-2" role="listitem">
              <span class="flex items-center justify-center w-8 h-8 p-4 font-bold text-white rounded-full bg-[#025A70] p-[1rem]" aria-hidden="true">
                <?php echo esc_html($step['step_number']); ?>
              </span>
              <div class="leading-6 text-slate-800">
                <span class="text-base leading-6"><?php echo wp_kses_post($step['step_description']); ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>