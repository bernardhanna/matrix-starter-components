<?php
// Hero_002 Section Template
$heading_text = get_sub_field('heading_text') ?: 'Default Heading Text';
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$subtext = get_sub_field('subtext') ?: 'Default subtext for the hero section.';
$background_image = get_sub_field('background_image');
$background_color = get_sub_field('background_color') ?: '#1a1a1a'; // Default bg color
$background_opacity = get_sub_field('background_opacity') ?: 50; // Default to 50% opacity

// Handle background image
if ($background_image) {
  $bg_image_url = esc_url($background_image['url']);
  $bg_image_alt = esc_attr($background_image['alt'] ?: 'Background image');
} else {
  $bg_image_url = 'https://via.placeholder.com/1500';
  $bg_image_alt = 'Placeholder background image';
}

// Convert opacity to decimal for RGBA
function hex_to_rgb($hex)
{
  $hex = str_replace('#', '', $hex);
  if (strlen($hex) == 3) {
    $r = hexdec(str_repeat(substr($hex, 0, 1), 2));
    $g = hexdec(str_repeat(substr($hex, 1, 1), 2));
    $b = hexdec(str_repeat(substr($hex, 2, 1), 2));
  } else {
    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));
  }
  return [$r, $g, $b];
}

$rgb = hex_to_rgb($background_color);
$rgba_background = sprintf('rgba(%d, %d, %d, %.2f)', $rgb[0], $rgb[1], $rgb[2], $background_opacity / 100);
?>

<section class="flex flex-col overflow-hidden text-white">
  <div
    class="relative flex flex-col justify-center items-start px-20 py-28 w-full min-h-[500px] max-md:px-5 max-md:pb-24 max-md:max-w-full"
    role="region"
    aria-label="Hero section">
    <!-- Background Image -->
    <img
      loading="lazy"
      src="<?php echo $bg_image_url; ?>"
      class="absolute inset-0 object-cover size-full"
      alt="<?php echo $bg_image_alt; ?>"
      aria-hidden="true" />

    <!-- Content Wrapper -->
    <div class="w-full mx-auto max-w-container">
      <div
        class="relative flex flex-col p-10 mb-0 max-w-full w-[640px] max-md:px-5 max-md:mb-2.5"
        role="contentinfo"
        style="background-color: <?php echo esc_attr($rgba_background); ?>;">

        <!-- Dynamic Heading -->
        <<?php echo esc_attr($heading_tag); ?> class="text-5xl tracking-tighter leading-[50px] max-md:max-w-full">
          <?php echo esc_html($heading_text); ?>
        </<?php echo esc_attr($heading_tag); ?>>

        <!-- Subtext -->
        <p class="mt-2 text-xl leading-7 tracking-tight max-md:max-w-full">
          <?php echo esc_html($subtext); ?>
        </p>
      </div>
    </div>
  </div>
</section>