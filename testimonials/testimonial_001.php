<?php
$background_color = get_sub_field('background_color');
$testimonials = get_sub_field('testimonials');

// Generate a unique ID for the slider
$slider_id = uniqid('testimonial-slider-');
$is_slider = count($testimonials) > 1;
?>

<section
  class="flex flex-wrap items-center self-stretch gap-10 pt-8"
  role="region"
  aria-label="Customer Testimonial"
  style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div id="<?php echo esc_attr($slider_id); ?>" class="flex flex-col w-full mx-auto max-w-[1180px] pt-24 pb-24 <?php echo $is_slider ? 'slick-slider flex-col' : 'lg:flex-row'; ?>">
    <?php if ($testimonials): ?>
      <?php foreach ($testimonials as $testimonial): ?>
        <div class="flex flex-row w-full slick-item">
          <div class="relative flex flex-col justify-start w-1/2">
            <div class="flex flex-row w-full">
              <?php if ($testimonial['show_svg']): ?>
                <div class="absolute left-[-114px] -top-[1.6rem]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-[107px] h-[66px]" viewBox="0 0 107 66" fill="none">
                    <path d="M38.9091 66H0L28.3931 0H53.8943L38.9091 66ZM92.0147 66H53.1056L81.4988 0H107L92.0147 66Z" fill="#013643" />
                  </svg>
                </div>
              <?php endif; ?>
              <div class="flex flex-col pr-8">
                <blockquote
                  class="z-0 text-3xl font-semibold leading-10 text-cyan-950 max-md:max-w-full">
                  <?php echo wp_kses_post($testimonial['quote']); ?>
                </blockquote>
                <cite class="z-0 mt-4 text-base text-slate-800 max-md:max-w-full">
                  <?php echo esc_html($testimonial['author']); ?>
                </cite>
              </div>
            </div>
          </div>
          <div class="relative flex flex-col justify-center w-1/2 mx-auto">
            <img
              loading="lazy"
              src="<?php echo esc_url($testimonial['author_image']['url'] ?? get_template_directory_uri() . '/assets/images/placeholder.png'); ?>"
              alt="<?php echo esc_attr($testimonial['author_image']['alt'] ?? 'Placeholder Image'); ?>"
              class="object-cover w-[360px] h-[392px] my-auto rounded-lg aspect-[0.9] relative left-4 -top-8" />
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>


<?php if ($is_slider): ?>
  <script>
    jQuery(document).ready(function($) {
      $('#<?php echo esc_js($slider_id); ?>').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        adaptiveHeight: true,
        fade: true, // Enables fade effect
        cssEase: 'linear',
        //prevArrow: '<button class="text-2xl text-gray-500 slick-prev hover:text-gray-700">&lt;</button>',
        //nextArrow: '<button class="text-2xl text-gray-500 slick-next hover:text-gray-700">&gt;</button>',
        customPaging: function(slider, i) {
          return '<button class="w-3 h-3 rounded-full dot bg-secondary"></button>'; // Adds circular indicators
        },
      });
    });
  </script>
<?php endif; ?>