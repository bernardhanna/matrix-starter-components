<?php
// Fetch the entire 404 settings group first
$not_found_settings = get_field('not_found_settings', 'option');

// Fallbacks, in case no data is set in ACF:
$title = $not_found_settings['hero_title'] ?? 'Sorry, We Can’t Find That Page.';
$text = $not_found_settings['hero_text'] ?? 'Here are some helpful links to get you back on track:';
$links = $not_found_settings['links'] ?? []; // The repeater array
$bg_color = $not_found_settings['background_color'] ?? '#f8f9fa';
$text_color = $not_found_settings['text_color'] ?? '#333';
$padding_top = $not_found_settings['padding_top'] ?? 'py-10';
$padding_bottom = $not_found_settings['padding_bottom'] ?? 'pb-10';
?>

<main class="flex items-center justify-center w-full min-h-screen overflow-hidden site-main"
  style="background-color: <?php echo esc_attr($bg_color); ?>; color: <?php echo esc_attr($text_color); ?>;">
  <div class="text-center max-w-xl mx-auto px-8 <?php echo esc_attr($padding_top . ' ' . $padding_bottom); ?>">
    <h1 class="mb-4 text-3xl font-bold"><?php echo esc_html($title); ?></h1>
    <div class="mb-6"><?php echo wp_kses_post($text); ?></div>

    <?php if (!empty($links) && is_array($links)) : ?>
      <ul class="space-y-2 text-lg">
        <?php foreach ($links as $link_item) : ?>
          <?php if (!empty($link_item['link_data']['url']) && !empty($link_item['link_data']['title'])) : ?>
            <li>
              <a href="<?php echo esc_url($link_item['link_data']['url']); ?>"
                target="<?php echo esc_attr($link_item['link_data']['target'] ?? '_self'); ?>"
                class="text-[#025A70] underline hover:text-primary">
                <?php echo esc_html($link_item['link_data']['title']); ?>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

  </div>
</main>