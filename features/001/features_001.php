<section class="relative w-full">
  <div class="flex flex-wrap items-start w-full gap-6 px-24 mx-auto max-w-container max-md:px-5" role="region" aria-label="Features Overview">
    <!-- Start Repeater -->
    <?php while (have_rows('features')): the_row();
      // Retrieve fields
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

      // Determine background style
      if ($background_gradient) {
        $background_style = "background: $background_gradient;";
      } else {
        $background_style = "background-color: $background_color;";
      }
    ?>
      <div class="flex flex-col flex-1 p-10 shrink basis-0" tabindex="0" style="<?php echo esc_attr($background_style); ?> min-width: 240px;">
        <div class="flex gap-2.5 items-center p-1.5 bg-white h-[84px] rounded-[40px] w-[84px]">
          <div class="flex gap-2.5 items-start p-4 rounded-[36px] w-[72px]">
            <img loading="lazy" src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($icon_alt); ?>" class="object-contain w-10 aspect-square" />
          </div>
        </div>
        <div class="flex flex-col w-full mt-6">
          <<?php echo esc_attr($heading_tag); ?>
            class="text-2xl leading-none tracking-tight"
            style="color: <?php echo esc_attr($text_color); ?>;">
            <?php echo esc_html($heading_text); ?>
          </<?php echo esc_attr($heading_tag); ?>>
          <div class="mt-2 text-base leading-6" style="color: <?php echo esc_attr($subtext_color); ?>;">
            <?php echo esc_html($subtext); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <!-- End Repeater -->
  </div>
</section>