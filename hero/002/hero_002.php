<?php
// Fetch hero_002 fields
$hero_002_section_class = get_sub_field('hero_002_section_class');
$hero_002_background_type = get_sub_field('hero_002_background_type');
$hero_002_page_banner_image = get_sub_field('hero_002_page_banner_image');
$hero_002_page_banner_video = get_sub_field('hero_002_page_banner_video');
$hero_002_page_banner_overlay_color = get_sub_field('hero_002_page_banner_overlay_color');
$hero_002_show_icon_boxes = get_sub_field('hero_002_show_icon_boxes');
$hero_002_icon_boxes = get_sub_field('hero_002_icon_boxes');

// **New Fields**
$hero_002_heading_tag = get_sub_field('hero_002_heading_tag');
$hero_002_heading_text = get_sub_field('hero_002_heading_text');
$hero_002_subheading_text = get_sub_field('hero_002_subheading_text');
?>

<section class="flex relative flex-col justify-center items-start w-full min-h-[500px] <?php echo esc_attr($hero_002_section_class); ?>">
  <?php if ($hero_002_background_type === 'video' && $hero_002_page_banner_video) : ?>
    <video class="absolute inset-0 z-0 object-cover w-full h-full md:h-[500px]" autoplay loop muted>
      <source src="<?php echo esc_url($hero_002_page_banner_video); ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  <?php elseif ($hero_002_background_type === 'image' && $hero_002_page_banner_image) : ?>
    <div class="absolute inset-0 z-0 bg-center bg-cover h-[500px]" style="background-image: url('<?php echo esc_url($hero_002_page_banner_image['url']); ?>');"></div>
  <?php endif; ?>

  <div class="relative z-10 flex items-start w-full h-full px-4 py-4 mx-auto md:py-20 max-w-container">
    <div class="relative flex flex-col p-10 mb-0 w-full max-w-[640px]" style="background-color: <?php echo esc_attr($hero_002_page_banner_overlay_color); ?>;">

      <!-- Dynamic Heading Tag -->
      <?php
      // Ensure the heading tag is safe
      $allowed_tags = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
      $heading_tag = in_array($hero_002_heading_tag, $allowed_tags) ? $hero_002_heading_tag : 'h1';
      ?>
      <<?php echo esc_attr($heading_tag); ?> class="text-5xl tracking-tighter leading-[50px] text-white max-md:max-w-full">
        <?php
        // Allow safe HTML tags in the heading text
        echo wp_kses_post($hero_002_heading_text);
        ?>
      </<?php echo esc_attr($heading_tag); ?>>

      <!-- Subheading Text -->
      <div class="mt-2 text-xl leading-7 tracking-tight text-white max-md:max-w-full">
        <?php
        // Allow safe HTML tags in the subheading text
        echo wp_kses_post($hero_002_subheading_text);
        ?>
      </div>

    </div>
  </div>
</section>

<?php if ($hero_002_show_icon_boxes && $hero_002_icon_boxes) : ?>
  <section class="py-12 section_icon_boxes bg-gray-50">
    <div class="px-4 mx-auto">
      <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
        <?php foreach ($hero_002_icon_boxes as $icon_box) :
          $hero_002_icon = $icon_box['hero_002_icon'];
          $hero_002_title = $icon_box['hero_002_title'];
          $hero_002_text = $icon_box['hero_002_text'];
          $hero_002_bg_color = $icon_box['hero_002_bg_color'];
        ?>
          <div class="counter_item <?php echo esc_attr($hero_002_bg_color); ?> p-6 rounded-lg flex items-center">
            <div class="mr-4 counter_column icon_col">
              <?php if ($hero_002_icon) : ?>
                <img src="<?php echo esc_url($hero_002_icon['url']); ?>" alt="<?php echo esc_attr($hero_002_icon['alt']); ?>" class="object-contain w-12 h-12" />
              <?php endif; ?>
            </div>
            <div class="counter_column">
              <h3 class="text-lg font-semibold counter_title"><?php echo esc_html($hero_002_title); ?></h3>
              <p class="text-sm counter_text"><?php echo esc_html($hero_002_text); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>