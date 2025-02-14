<?php
$team_rows = get_sub_field('team_rows');
$background_color = get_sub_field('background_color');
$text_color = get_sub_field('text_color');
$name_color = get_sub_field('name_color');
$image_border_radius = get_sub_field('image_border_radius');

$padding_classes = [];
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

<section aria-label="Team Members" class="relative" style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="w-full mx-auto max-w-[1120px]max-xl:px-5 pt-12 pb-12 <?php echo esc_attr(implode(' ', $padding_classes)); ?>">
    <?php if ($team_rows): ?>
      <?php foreach ($team_rows as $row): ?>
        <?php
        $columns = $row['columns'] ?: 'grid-cols-2';
        $team_members = $row['team_members'] ?: [];
        ?>
        <div class="grid <?php echo esc_attr($columns); ?> gap-8 max-sm:grid-cols-1">
          <?php foreach ($team_members as $member): ?>
            <?php
            $image_id = $member['member_image'];
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true) ?: 'Team Member';
            $image_title = get_the_title($image_id) ?: 'Team Member';
            ?>
            <article class="flex flex-col items-center text-center">
              <div class="overflow-hidden">
                <?php echo wp_get_attachment_image($image_id, 'medium', false, [
                  'alt' => esc_attr($image_alt),
                  'title' => esc_attr($image_title),
                  'class' => 'object-contain h-full lg:h-[315px] min-h-[315px] max-h-[315px] w-full ' . esc_attr($image_border_radius),
                ]); ?>
              </div>
              <div class="flex flex-col justify-center mt-4">
                <span class="text-lg font-semibold leading-loose" style="color: <?php echo esc_attr($name_color); ?>;">
                  <?php echo esc_html($member['member_name']); ?>
                </span>
                <p class="text-sm" style="color: <?php echo esc_attr($text_color); ?>;">
                  <?php echo esc_html($member['member_title']); ?>
                </p>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>