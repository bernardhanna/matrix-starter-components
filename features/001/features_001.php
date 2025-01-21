<section class="relative w-full">
  <?php

  // Determine background style
  if ($background_gradient) {
    $background_style = "background: $background_gradient;";
  } else {
    $background_style = "background-color: $background_color;";
  }

  // Generate unique ID for the slider
  $slider_id = uniqid('features-slider-');

  // Retrieve grid layout and styles
  $columns = get_field('columns') ?: '3'; // Default to 3 columns
  $grid_classes = 'grid-cols-3'; // Default grid class

  if ($columns === '2') {
    $grid_classes = 'grid-cols-2';
  } elseif ($columns === '4') {
    $grid_classes = 'grid-cols-4';
  }
  ?>

  <style>
    .features_001 .slick-dots li button {
      height: 4px;
      width: 4px;
      background-color: rgb(59 130 246 / var(--tw-bg-opacity));
      padding-left: 1rem;
      padding-right: 1rem;
      padding-top: 2px;
      padding-bottom: 2px;
      background-color: #79797A;
    }


    .features_001 .slick-dots li.slick-active button {
      background-color: #FCBF14;
    }
  </style>

  <div id="<?php echo esc_attr($slider_id); ?>" class="features_001 md:grid md:<?php echo esc_attr($grid_classes); ?> md:gap-6 md:px-5 lg:px-24  md:mx-auto md:max-w-container  max-md:py-12 max-md:slick-slider lg:-mt-[8rem]" role="region" aria-label="Features Overview">
    <!-- Start Repeater -->
    <?php while (have_rows('features')): the_row();
      $heading_tag = get_sub_field('heading_tag') ?: 'h2';
      $heading_text = get_sub_field('heading_text') ?: 'Default Heading';
      $subtext = get_sub_field('subtext') ?: 'Default subtext.';
      $icon = get_sub_field('icon');
      $icon_url = $icon['url'] ?? 'https://placehold.co/40x40';
      $icon_alt = $icon['alt'] ?? 'Default icon';
      $background_color = get_sub_field('background_color') ?: '#C6C6C6';
      $background_gradient = get_sub_field('background_gradient');
      $text_color = get_sub_field('text_color') ?: '#000000';
      $subtext_color = get_sub_field('subtext_color') ?: '#D1D5DB';
      $border_radius = get_sub_field('border_radius') ?: 8; // Default 8px
      $min_height = get_sub_field('min_height') ?: 240; // Default 240px
      // Determine background style
      if ($background_gradient) {
        $background_style = "background: $background_gradient;";
      } else {
        $background_style = "background-color: $background_color;";
      }
    ?>
      <div class="flex flex-col items-start justify-start p-10 slick-item" tabindex="0"
        style="<?php echo esc_attr($background_style); ?> border-radius: <?php echo esc_attr($border_radius); ?>px; min-height: <?php echo esc_attr($min_height); ?>px;">
        <div class="flex gap-2.5 items-center">
          <div class="flex items-start">
            <img loading="lazy" src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($icon_alt); ?>" class="object-contain w-auto aspect-square" />
          </div>
        </div>
        <div class="flex flex-col w-full mt-6">
          <<?php echo esc_attr($heading_tag); ?>
            class="text-2xl font-bold leading-none tracking-tight font-primary"
            style="color: <?php echo esc_attr($text_color); ?>;">
            <?php echo wp_kses_post($heading_text); ?>
          </<?php echo esc_attr($heading_tag); ?>>
          <div class="mt-2 text-base leading-6 font-primary" style="color: <?php echo esc_attr($subtext_color); ?>;">
            <?php echo esc_html($subtext); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <!-- End Repeater -->
  </div>
</section>

<script>
  jQuery(document).ready(function($) {
    function initSlickSliders() {
      $('[id^="features-slider-"]').each(function() {
        const $slider = $(this);

        // Check if already initialized
        if (window.innerWidth <= 768) {
          if (!$slider.hasClass('slick-initialized')) {
            $slider.slick({
              dots: true,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 5000,
              slidesToShow: 1,
              slidesToScroll: 1,
              centerMode: false,
              variableWidth: false
            });
          }
        } else {
          if ($slider.hasClass('slick-initialized')) {
            $slider.slick('unslick'); // Destroy Slick
            // Remove leftover classes to prevent duplication
            $slider.removeClass('slick-slider slick-initialized slick-dotted');
          }
        }
      });
    }

    // Initialize on page load
    initSlickSliders();

    // Reinitialize on resize
    $(window).on('resize', function() {
      initSlickSliders();
    });
  });
</script>