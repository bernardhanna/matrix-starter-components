<?php
// template-parts/blog/content.php

// Get the current queried object (category, tag, date, etc.)
$queried_object = get_queried_object();
$category_slug = is_category() ? $queried_object->slug : 'all';

?>
<div class="w-full" x-data="{
        activeCategory: '<?php echo esc_js($category_slug); ?>',
        setCategory(category) {
            window.location.href = category === 'all' ? '/resources/' : '/category/' + category;
        }
    }">
  <div class="flex flex-col justify-center items-start mx-auto py-6 w-full max-w-[1075px] text-sm leading-none max-xl:px-5">
    <div class="flex flex-wrap items-center gap-6 max-md:max-w-full">
      <div class="self-stretch my-auto text-slate-800" id="filterLabel">Filter by</div>
      <div class="flex flex-wrap items-center self-stretch gap-4 my-auto font-semibold text-teal-950 max-md:max-w-full" role="group" aria-labelledby="filterLabel">
        <button class="gap-2 self-stretch px-6 py-3 my-auto whitespace-nowrap bg-white border border-solid border-slate-400 min-h-[42px] rounded-[100px] max-md:px-5"
          :class="{ 'bg-[#025A70] text-white': activeCategory === 'all', 'bg-white border text-[#025A70]': activeCategory !== 'all' }"
          @click="setCategory('all')">
          All
        </button>
        <?php
        $categories = get_categories(['exclude' => get_cat_ID('All')]);
        foreach ($categories as $category) : ?>
          <button class="gap-2 self-stretch px-6 py-3 my-auto whitespace-nowrap bg-white border border-solid border-slate-400 min-h-[42px] rounded-[100px] max-md:px-5"
            :class="{ 'bg-[#025A70] text-white': activeCategory === '<?php echo esc_attr($category->slug); ?>', 'bg-white border text-[#025A70]': activeCategory !== '<?php echo esc_attr($category->slug); ?>' }"
            @click="setCategory('<?php echo esc_attr($category->slug); ?>')">
            <?php echo esc_html($category->name); ?>
          </button>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="w-full bg-[#E6EEF1] py-8 lg:py-16 h-full min-h-screen">
    <div class="grid gap-x-16 gap-y-8 lg:gap-y-12 xl:gap-y-20 px-8 max-sm:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 w-full max-w-[1160px] mx-auto bg-[#E6EEF1]">
      <?php
      $args = [
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
      ];

      if (is_category()) {
        $args['category_name'] = get_query_var('category_name');
      } elseif (is_tag()) {
        $args['tag'] = get_query_var('tag');
      } elseif (is_archive()) {
        if (is_date()) {
          if (is_year()) {
            $args['year'] = get_query_var('year');
          } elseif (is_month()) {
            $args['monthnum'] = get_query_var('monthnum');
          } elseif (is_day()) {
            $args['day'] = get_query_var('day');
          }
        }
      }

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $post_categories = get_the_category();
          $post_classes = array_map(fn($cat) => $cat->slug, $post_categories);
          $post_classes_str = implode(' ', $post_classes);
      ?>
          <a href="<?php the_permalink(); ?>" class="flex flex-col w-full overflow-hidden text-base font-bold text-white group"
            x-show="activeCategory === 'all' || '<?php echo esc_attr($post_classes_str); ?>'.split(' ').includes(activeCategory)"
            x-transition.opacity.duration.300ms>
            <div class="relative w-full h-[196px] overflow-hidden">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>"
                  alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>"
                  class="object-cover w-full h-full transition-transform duration-300 ease-in-out transform group-hover:scale-110" />
                <div class="absolute inset-0 bg-[#01242D] opacity-50"></div>
              <?php endif; ?>
            </div>

            <div class="flex flex-col w-full mt-4">
              <h4 class="text-2xl font-bold leading-8 text-[#01242D]"><?php the_title(); ?></h4>
              <div class="text-[#1D2939] text-base font-normal leading-6"><?php the_excerpt(); ?></div>
            </div>
          </a>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <p>No posts found.</p>
      <?php endif; ?>
    </div>

    <div class="flex items-center justify-center w-full py-12 pagination" x-show="activeCategory === 'all'">
      <?php my_custom_pagination(); ?>
    </div>
  </div>
</div>