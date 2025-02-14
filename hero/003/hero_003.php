<?php
$heading_text = get_sub_field('heading_text') ?: 'Default Heading Text';
$heading_tag = get_sub_field('heading_tag') ?: 'h1';
$subtext = get_sub_field('subtext') ?: 'Default subtext for the hero section.';
$bg_image = get_sub_field('background_image');
$bg_image_url = $bg_image ? esc_url($bg_image['url']) : 'https://via.placeholder.com/1920x1080';
$bg_image_alt = $bg_image ? esc_attr($bg_image['alt']) : 'Hero Background';
$bg_image_srcset = [];

if (isset($bg_image['sizes'])) {
  if (!empty($bg_image['sizes']['hero-small'])) {
    $bg_image_srcset[] = esc_url($bg_image['sizes']['hero-small']) . " 768w";
  }
  if (!empty($bg_image['sizes']['hero-medium'])) {
    $bg_image_srcset[] = esc_url($bg_image['sizes']['hero-medium']) . " 1024w";
  }
  if (!empty($bg_image['sizes']['hero-large'])) {
    $bg_image_srcset[] = esc_url($bg_image['sizes']['hero-large']) . " 1280w";
  }
  if (!empty($bg_image['sizes']['hero-xlarge'])) {
    $bg_image_srcset[] = esc_url($bg_image['sizes']['hero-xlarge']) . " 1600w";
  }
  if (!empty($bg_image['sizes']['hero-xxlarge'])) {
    $bg_image_srcset[] = esc_url($bg_image['sizes']['hero-xxlarge']) . " 1920w";
  }
}

// Ensure there's always a fallback size
if (empty($bg_image_srcset)) {
  $bg_image_srcset[] = esc_url($bg_image_url) . " 1920w";
}

$bg_image_srcset_string = implode(", ", $bg_image_srcset);
$enable_video = get_sub_field('enable_video');
$video_url = get_sub_field('video_url');
$video_autoplay = get_sub_field('video_autoplay') ? '1' : '0';
$video_loop = get_sub_field('video_loop') ? '1' : '0';
$video_muted = get_sub_field('video_muted') ? '1' : '0';
$content_background_color = get_sub_field('content_background_color');
$content_background_opacity = get_sub_field('content_background_opacity') ?: 100;
$overlay_background_color = get_sub_field('overlay_background_color');
$overlay_background_opacity = get_sub_field('overlay_background_opacity') ?: 50;
$overlay_gradient = get_sub_field('overlay_gradient');
$min_height = get_sub_field('min_height') ?: 575;
$button = get_sub_field('button');
$button_show_svg = get_sub_field('button_show_svg');
$button_bg_color = get_sub_field('button_bg_color');
$button_text_color = get_sub_field('button_text_color');
$button_border_color = get_sub_field('button_border_color');
$button_hover_bg_color = get_sub_field('button_hover_bg_color');
$button_hover_text_color = get_sub_field('button_hover_text_color');
$button_hover_border_color = get_sub_field('button_hover_border_color');

preg_match('/vimeo\.com\/(\d+)/', $video_url, $matches);
$video_id = isset($matches[1]) ? $matches[1] : '';
$video_embed_url = $video_id ? "https://player.vimeo.com/video/$video_id?autoplay=0&muted=$video_muted&loop=$video_loop&controls=0" : '';

function hex_to_rgba($hex, $opacity)
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
  return sprintf('rgba(%d, %d, %d, %.2f)', $r, $g, $b, $opacity / 100);
}

$overlay_rgba = $overlay_background_color ? hex_to_rgba($overlay_background_color, $overlay_background_opacity) : '';
$content_rgba = $content_background_color ? hex_to_rgba($content_background_color, $content_background_opacity) : '';
?>

<section class="relative flex flex-col justify-end mx-auto overflow-hidden text-white md:justify-center">
  <div class="inset-0 transition-opacity duration-500  mt-[5rem]" id="hero-bg">
    <img
      src="<?php echo esc_url($bg_image_url); ?>"
      srcset="<?php echo esc_attr($bg_image_srcset_string); ?>"
      sizes="(max-width: 768px) 768px,
         (max-width: 1024px) 1024px,
         (max-width: 1280px) 1280px,
         (max-width: 1600px) 1600px,
         1920px"
      class="relative inset-0 object-cover w-full md:w-auto md:h-auto max-sm:h-[603px] max-w-[1920px] max-h-[75vh] mx-auto"
      alt="<?php echo esc_attr($bg_image_alt); ?>"
      aria-hidden="true" />
  </div>

  <?php if ($enable_video && $video_id) : ?>
    <div id="hero-video-container" class="absolute inset-0 transition-opacity duration-700 opacity-0 pointer-events-none">
      <iframe
        id="hero-video"
        class="absolute inset-0 object-cover w-full h-full"
        src="<?php echo esc_url($video_embed_url); ?>"
        frameborder="0"
        allow="autoplay; fullscreen"
        allowfullscreen></iframe>
    </div>
  <?php endif; ?>

  <div
    id="hero-overlay"
    class="absolute inset-0 left-0 right-0 transition-opacity duration-500 max-w-[1920px] max-h-[1080px] mt-[5rem] mx-auto"
    style="background: <?php echo esc_attr($overlay_gradient ?: $overlay_rgba); ?>;"></div>

  <div
    class="absolute flex flex-col justify-end md:justify-center items-start max-w-container left-0 right-0 mx-auto w-full min-h-[<?php echo esc_attr($min_height); ?>px] px-5 xl:px-14 transition-opacity duration-500"
    id="hero-content">
    <div class="w-full mx-auto max-w-[1078px]">
      <div
        class="relative flex flex-col mb-0 max-w-full w-[640px]max-xl:px-5 xl:-top-[4.5rem] max-md:pb-4"
        role="contentinfo"
        style="background-color: <?php echo esc_attr($content_rgba); ?>;">
        <div> <?php echo wp_kses_post($heading_text); ?></div>
        <div class="mt-2 text-[1.125rem] leading-7 tracking-wide font-primaryw-full max-w-[451px]">
          <?php echo wp_kses_post($subtext); ?>
        </div>

        <?php if ($button) : ?>
          <a
            href="<?php echo esc_url($enable_video && $video_id ? '#' : $button['url']); ?>"
            class="inline-block px-6 py-3 mt-4 text-sm font-semibold transition-opacity duration-500 rounded w-fit"
            style="
              background-color: <?php echo esc_attr($button_bg_color); ?>;
              color: <?php echo esc_attr($button_text_color); ?>;
              border: 1px solid <?php echo esc_attr($button_border_color); ?>;
            "
            onmouseover="
              this.style.backgroundColor='<?php echo esc_attr($button_hover_bg_color); ?>';
              this.style.color='<?php echo esc_attr($button_hover_text_color); ?>';
              this.style.borderColor='<?php echo esc_attr($button_hover_border_color); ?>';
            "
            onmouseout="
              this.style.backgroundColor='<?php echo esc_attr($button_bg_color); ?>';
              this.style.color='<?php echo esc_attr($button_text_color); ?>';
              this.style.borderColor='<?php echo esc_attr($button_border_color); ?>';
            "
            <?php if ($enable_video && $video_id) : ?>
            onclick="playHeroVideo(event)"
            <?php endif; ?>>
            <?php echo esc_html($button['title']); ?>
            <?php if ($button_show_svg) : ?>
              <span class="inline-block ml-2">🔗</span>
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    window.playHeroVideo = function(e) {
      e.preventDefault();
      let bg = document.getElementById('hero-bg');
      let overlay = document.getElementById('hero-overlay');
      let content = document.getElementById('hero-content');
      let videoContainer = document.getElementById('hero-video-container');
      let video = document.getElementById('hero-video');
      if (bg && overlay && content && videoContainer && video) {
        bg.classList.add('opacity-0');
        overlay.classList.add('opacity-0');
        content.classList.add('opacity-0');
        videoContainer.classList.remove('opacity-0');
        videoContainer.classList.add('opacity-100', 'pointer-events-auto');
        video.src = video.src.replace('&autoplay=0', '');
        video.src += '&autoplay=1';
      }
    };
  });
</script>