<?php
$title_text = get_sub_field('title_text') ?: 'Default Title';
$title_tag = get_sub_field('title_tag') ?: 'h2';
$text_alignment = get_sub_field('text_alignment') ?: 'items-center';
$desc_text = get_sub_field('desc_text') ?: 'Default Description';
$underline_color = get_sub_field('underline_color') ?: '#FFA500';
$content_011_items = get_sub_field('content_011_items');
$content_011_background_color = get_sub_field('content_011_background_color') ?: '#ffffff';
$content_011_background_gradient = get_sub_field('background_gradient');

// Set the background style based on whether gradient exists
$background_style = '';
if (!empty($content_011_background_gradient)) {
  $background_style = "background: {$content_011_background_gradient};";
} else {
  $background_style = "background-color: {$content_011_background_color};";
}

$heading_text_color = get_sub_field('heading_text_color') ?: '#ffffff';
$padding_top_classes = ['pt-12']; // Default pt class
$padding_bottom_classes = ['pb-12']; // Default pb class

if (have_rows('padding_settings')) {
  while (have_rows('padding_settings')) {
    the_row();
    $screen = get_sub_field('screen_size');
    $padding_top = get_sub_field('padding_top');
    $padding_bottom = get_sub_field('padding_bottom');

    if (!empty($padding_top)) {
      $padding_top_classes[] = "{$screen}:pt-[" . esc_attr($padding_top) . "rem]";
    }
    if (!empty($padding_bottom)) {
      $padding_bottom_classes[] = "{$screen}:pb-[" . esc_attr($padding_bottom) . "rem]";
    }
  }
}

// Combine both padding classes
$padding_classes = implode(' ', array_merge($padding_top_classes, $padding_bottom_classes));

?>

<section class="relative flex overflow-hidden" style="<?php echo esc_attr($background_style); ?>">
  <div class="flex flex-col items-center w-full <?php echo esc_attr($padding_classes); ?> mx-auto max-w-[1088px] max-xl:px-5">
    <div class="flex flex-col w-full <?php echo esc_attr($text_alignment); ?> text-3xl font-bold leading-none">
      <<?php echo esc_attr($title_tag); ?> class="max-md:max-w-full" style="color: <?php echo esc_attr(get_sub_field('heading_text_color')) ?: '#ffffff'; ?>;">
        <?php echo esc_html($title_text); ?>
      </<?php echo esc_attr($title_tag); ?>>
      <div role="presentation" class="flex mt-1 w-8 min-h-[4px] max-md:max-w-full  <?php echo esc_attr($text_alignment); ?>" style="background-color: <?php echo esc_attr($underline_color); ?>;"></div>
      <div class="mt-4 text-lg leading-7 text-white wp_editor">
        <?php echo wp_kses_post($desc_text); ?>
      </div>
    </div>
    <div class="flex flex-wrap justify-between w-full pt-8">
      <?php if ($content_011_items): ?>
        <?php foreach ($content_011_items as $index => $item): ?>
          <?php
          $number = $index + 1;
          $text_color = $item['content_011_text_color'] ?: '#ffffff'; // Default text color
          $circle_background_color = $item['content_011_circle_background_color'] ?: '#025a70'; // Default circle background color
          $circle_border_color = $item['content_011_circle_border_color'] ?: '#F68D2E'; // Default border color
          $title_text_color = $item['content_011_title_text_color'] ?: '#ffffff'; // Default title text color
          $desc_text_color = $item['content_011_desc_text_color'] ?: '#ffff'; // Default description text color
          ?>
          <div class="flex flex-col items-center text-center w-[calc(50%-1rem)] max-w-[calc(50%-1rem)] mt-5 md:w-[calc(33.3333%-1rem)] md:max-w-[calc(33.3333%-1rem)] md:mt-0 lg:w-[calc(25%-1rem)] lg:max-w-[calc(25%-1rem)] lg:mt-0">
            <div class="flex items-center justify-center w-[72px] h-[72px] text-base font-bold leading-6 border rounded-full font-primary" aria-hidden="true"
              style="background-color: <?php echo esc_attr($circle_background_color); ?>; border-color: <?php echo esc_attr($circle_border_color); ?>;">
              <span style="color: <?php echo esc_attr($text_color); ?>;">
                <?php echo esc_html($number); ?>
              </span>
            </div>
            <span class="mt-5 text-base font-normal leading-6 text-center" style="color: <?php echo esc_attr($title_text_color); ?>;">
              <?php echo esc_html($item['content_011_text']); ?>
            </span>
            <span class="mt-5 text-base font-normal leading-6 text-center" style="color: <?php echo esc_attr($desc_text_color); ?>;">
              <?php echo esc_html($item['content_011_desc']); ?>
            </span>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>