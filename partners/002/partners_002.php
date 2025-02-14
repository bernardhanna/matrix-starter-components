<?php
$heading_text = get_sub_field('heading_text');
$heading_tag = get_sub_field('heading_tag');
$heading_color = get_sub_field('heading_color');
$underline_color = get_sub_field('underline_color');
$button_bg_color = get_sub_field('button_bg_color');
$button_text_color = get_sub_field('button_text_color');
$button_border_color = get_sub_field('button_border_color');
$button_hover_bg_color = get_sub_field('button_hover_bg_color');
$button_hover_text_color = get_sub_field('button_hover_text_color');
$button_hover_border_color = get_sub_field('button_hover_border_color');
$use_svg_icon = get_sub_field('use_svg_icon');
$section_bg_color = get_sub_field('section_bg_color');
$button = get_sub_field('button');
$partner_logos = get_sub_field('partner_logos');

$padding_classes = ['py-12'];
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

<section class="relative flex overflow-hidden" style="background-color: <?php echo esc_attr($section_bg_color); ?>;">
  <div class="flex flex-col items-center w-full mx-auto max-w-container max-lg:px-5 <?php echo esc_attr($padding_class); ?>">
    <<?php echo esc_html($heading_tag); ?> class="text-3xl font-bold text-center" style="color: <?php echo esc_attr($heading_color); ?>;">
      <?php echo esc_html($heading_text); ?>
    </<?php echo esc_html($heading_tag); ?>>
    <div class="flex self-center mt-1 w-8 min-h-[4px]" style="background-color: <?php echo esc_attr($underline_color); ?>;"></div>
    <style>
      .slick-track {
        display: flex;
        align-items: center;
        justify-content: center;
      }
    </style>
    <div class="partner-slider flex items-center lg:grid lg:grid-cols-5 lg:gap-x-10 mt-10 max-w-full w-[1059px]">
      <?php if ($partner_logos && is_array($partner_logos)): ?>
        <?php foreach ($partner_logos as $logo): ?>
          <?php
          $logo_img = isset($logo['logo_image']) ? $logo['logo_image'] : null;
          $image_justify = isset($logo['image_justify']) ? $logo['image_justify'] : 'justify-center';

          if ($logo_img && isset($logo_img['url'])):
          ?>
            <div class="flex items-center justify-center xl:<?php echo esc_attr($image_justify); ?>">
              <img src="<?php echo esc_url($logo_img['url']); ?>"
                alt="<?php echo esc_attr(isset($logo_img['alt']) ? $logo_img['alt'] : 'Partner Logo'); ?>"
                class="object-contain max-md:w-[100px]" />
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <?php
    // Check if button array exists and has required fields
    if ($button && is_array($button) && isset($button['url']) && isset($button['title'])):
    ?>
      <a href="<?php echo esc_url($button['url']); ?>"
        class="flex gap-2 2 md:w-fit justify-center items-center px-8 mt-10 text-sm font-semibold leading-none rounded min-h-[56px] w-full border-2 border-solid"
        style="
         background-color: <?php echo esc_attr($button_bg_color); ?>; 
         color: <?php echo esc_attr($button_text_color); ?>; 
         border: 1px solid <?php echo esc_attr($button_border_color); ?>;"
        onmouseover="
         this.style.backgroundColor='<?php echo esc_attr($button_hover_bg_color); ?>';
         this.style.color='<?php echo esc_attr($button_hover_text_color); ?>';
         this.style.borderColor='<?php echo esc_attr($button_hover_border_color); ?>';
         const path = this.querySelector('path');
         if (path) path.style.stroke='<?php echo esc_attr($button_hover_text_color); ?>';"
        onmouseout="
         this.style.backgroundColor='<?php echo esc_attr($button_bg_color); ?>';
         this.style.color='<?php echo esc_attr($button_text_color); ?>';
         this.style.borderColor='<?php echo esc_attr($button_border_color); ?>';
         const path = this.querySelector('path');
         if (path) path.style.stroke='<?php echo esc_attr($button_text_color); ?>';"
        target="<?php echo esc_attr(isset($button['target']) ? $button['target'] : '_self'); ?>">
        <span class="self-stretch my-auto"><?php echo esc_html($button['title']); ?></span>
        <?php if ($use_svg_icon): ?>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
            <path d="M5 12.7937H19M19 12.7937L12 5.7937M19 12.7937L12 19.7937"
              stroke="<?php echo esc_attr($button_text_color); ?>"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        <?php endif; ?>
      </a>
    <?php endif; ?>
  </div>
</section>

<script>
  jQuery(document).ready(function($) {
    function initSlickSliders() {
      $('.partner-slider').each(function() {
        const $slider = $(this);

        if ($(window).width() <= 993) {
          if (!$slider.hasClass('slick-initialized')) {
            $slider.removeClass('grid grid-cols-5 gap-x-10');
            $slider.slick({
              dots: false,
              arrows: true,
              prevArrow: '<button class="relative left-0 slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 32 32" fill="none"><path d="M20 24L12 16L20 8" stroke="#025A70" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
              nextArrow: '<button class="relative right-0 slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 32 32" fill="none"><path d="M12 24L20 16L12 8" stroke="#025A70" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
              autoplay: true,
              autoplaySpeed: 5000,
              slidesToShow: 3,
              slidesToScroll: 1,
              responsive: [{
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                  },
                },
                {
                  breakpoint: 575,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                  },
                },
              ],
            });
          }
        } else {
          if ($slider.hasClass('slick-initialized')) {
            $slider.slick('unslick');
          }
          $slider.addClass('grid grid-cols-5 gap-x-10');
        }
      });
    }

    initSlickSliders();

    let resizeTimer;
    $(window).on('resize', function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function() {
        initSlickSliders();
      }, 300);
    });
  });
</script>