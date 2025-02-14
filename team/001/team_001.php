<?php
$heading = get_sub_field('heading');
$heading_tag = get_sub_field('heading_tag');
$description = get_sub_field('description');
$button_link = get_sub_field('button_link');
$button_text = get_sub_field('button_text');
$button_svg_enabled = get_sub_field('button_svg_enabled'); // Toggle for SVG icon
$team_members = get_sub_field('team_members');
$background_color = get_sub_field('background_color');
$heading_color = get_sub_field('heading_color');
$text_color = get_sub_field('text_color');
$button_bg_color = get_sub_field('button_bg_color');
$button_text_color = get_sub_field('button_text_color');
$button_hover_bg_color = get_sub_field('button_hover_bg_color'); // Hover Background Color
$button_hover_text_color = get_sub_field('button_hover_text_color'); // Hover Text Color
$button_border_color = get_sub_field('button_border_color'); // Border Color
$button_hover_border_color = get_sub_field('button_hover_border_color'); // Hover Border Color
$image_border_radius = get_sub_field('image_border_radius');

$padding_classes = [];
if (have_rows('padding_settings')) {
  while (have_rows('padding_settings')) {
    the_row();
    $screen_size = get_sub_field('screen_size');
    $padding_top = get_sub_field('padding_top');
    $padding_bottom = get_sub_field('padding_bottom');

    // Append padding classes with arbitrary values
    $padding_classes[] = "{$screen_size}:pt-[{$padding_top}rem]";
    $padding_classes[] = "{$screen_size}:pb-[{$padding_bottom}rem]";
  }
}
?>
<section class="relative flex flex-col overflow-hidden" style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="flex flex-col items-center w-full mx-auto max-w-container pt-12 pb-12 max-xl:px-5 <?php echo esc_attr(implode(' ', $padding_classes)); ?>">
    <div class="flex flex-wrap gap-8 justify-between items-start w-full max-w-[1120px]">
      <div class="flex flex-col w-64">
        <<?php echo esc_attr($heading_tag); ?> class="text-3xl font-bold leading-none" style="color: <?php echo esc_attr($heading_color); ?>;">
          <?php echo esc_html($heading); ?>
        </<?php echo esc_attr($heading_tag); ?>>
        <div class="mt-1 w-8 bg-orange-400 min-h-[4px]" role="presentation"></div>
        <p class="mt-4 text-base leading-6" style="color: <?php echo esc_attr($text_color); ?>;">
          <?php echo esc_html($description); ?>
        </p>
        <a href="<?php echo esc_url($button_link); ?>" class="inline-flex items-center px-8 py-4 mt-4 text-sm font-semibold transition-all rounded w-fit"
          style="
                        background-color: <?php echo esc_attr($button_bg_color); ?>; 
                        color: <?php echo esc_attr($button_text_color); ?>; 
                        border: 1px solid <?php echo esc_attr($button_border_color); ?>;"
          onmouseover="
                        this.style.backgroundColor='<?php echo esc_attr($button_hover_bg_color); ?>'; 
                        this.style.color='<?php echo esc_attr($button_hover_text_color); ?>'; 
                        this.style.borderColor='<?php echo esc_attr($button_hover_border_color); ?>';"
          onmouseout="
                        this.style.backgroundColor='<?php echo esc_attr($button_bg_color); ?>'; 
                        this.style.color='<?php echo esc_attr($button_text_color); ?>'; 
                        this.style.borderColor='<?php echo esc_attr($button_border_color); ?>';">
          <span><?php echo esc_html($button_text); ?></span>
          <?php if ($button_svg_enabled): ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="ml-2">
              <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          <?php endif; ?>
        </a>
      </div>
      <?php if ($team_members): ?>
        <?php foreach ($team_members as $member): ?>
          <div class="flex flex-col w-64">
            <div class="overflow-hidden rounded" style="border-radius: <?php echo esc_attr($image_border_radius); ?>rem;">
              <?php echo wp_get_attachment_image($member['member_image'], 'medium', false, ['alt' => get_post_meta($member['member_image'], '_wp_attachment_image_alt', true) ?: 'Team Member']); ?>
            </div>
            <span class="mt-4 text-lg font-semibold" style="color: <?php echo esc_attr($heading_color); ?>;">
              <?php echo esc_html($member['member_name']); ?>
            </span>
            <p class="text-sm" style="color: <?php echo esc_attr($text_color); ?>;">
              <?php echo esc_html($member['member_title']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>