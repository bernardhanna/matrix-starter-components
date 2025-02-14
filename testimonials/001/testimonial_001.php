<?php
$background_color = get_sub_field('background_color');
$testimonials = get_sub_field('testimonials');

// Generate a unique ID for the slider
$slider_id = uniqid('testimonial-slider-');
$is_slider = count($testimonials) > 1;
?>

<section
  class="relative flex w-full"
  role="region"
  aria-label="Customer Testimonial"
  style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div id="<?php echo esc_attr($slider_id); ?>" class="flex flex-col w-full mx-auto max-w-[1000px] pt-12 pb-12 md:pt-8 md:pb-8 lg:pt-24 lg:pb-24 <?php echo $is_slider ? 'slick-slider flex-col' : 'lg:flex-row'; ?>">
    <?php if ($testimonials): ?>
      <?php foreach ($testimonials as $testimonial): ?>
        <div class="flex flex-col justify-between w-full px-5 md:flex-row slick-item max-lg:items-center">
          <div class="relative flex flex-col justify-start w-full md:w-3/5">
            <div class="flex flex-col w-full xl:flex-row">
              <?php if ($testimonial['show_svg']): ?>
                <div class="relative xl:absolute lg:-left-[1rem] xl:left-[-114px] top-0 xl:-top-[1.6rem]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-[50px] h-[50px] lg:w-[91px] lg:h-[56px] xl:w-[107px] xl:h-[66px]" viewBox="0 0 107 66" fill="none">
                    <path d="M38.9091 66H0L28.3931 0H53.8943L38.9091 66ZM92.0147 66H53.1056L81.4988 0H107L92.0147 66Z" fill="#013643" />
                  </svg>
                </div>
              <?php endif; ?>
              <div class="flex flex-col sm:pr-8 lg:mt-5">
                <blockquote
                  class="z-0 text-xl lg:text-2xl xl:text-3xl font-semibold xleading-10 text-cyan-950 max-md:max-w-full max-md:text-[24px] max-md:font-semibold max-md:leading-[32px]">
                  <?php echo wp_kses_post($testimonial['quote']); ?>
                </blockquote>
                <cite class="z-0 mt-4 text-base text-slate-800 max-md:max-w-full">
                  <?php echo esc_html($testimonial['author']); ?>
                </cite>
              </div>
            </div>
          </div>
          <div class="relative flex flex-col justify-center w-full mx-auto md:w-2/5 max-lg:pt-5">
            <img
              loading="lazy"
              src="<?php echo esc_url($testimonial['author_image']['url'] ?? get_template_directory_uri() . '/assets/images/placeholder.png'); ?>"
              alt="<?php echo esc_attr($testimonial['author_image']['alt'] ?? 'Placeholder Image'); ?>"
              class="object-contain md:object-cover w-full sm:w-[360px] h-[372px] sm:h-[392px] my-auto rounded-lg aspect-[0.9] relative lg:left-4 xl:-top-8" />
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