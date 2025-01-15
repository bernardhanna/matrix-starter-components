<?php
$column_layout = get_sub_field('content_003_column_layout') ?: '3'; // Default to 3 columns
$items = get_sub_field('content_003_items');

if ($items):
?>
    <section class="relative">
        <div class="grid grid-cols-1 md:grid-cols-<?php echo esc_attr($column_layout); ?> gap-8 w-full mx-auto max-w-container px-4 lg:px-8 xxl:px-0">
            <?php foreach ($items as $item): ?>
                <div class="flex flex-col w-full text-black item">
                    <?php if ($item['content_003_image']):
                        $image = $item['content_003_image']; // Image array from ACF
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>"
                            class="object-cover w-full aspect-[1.92]" />
                    <?php endif; ?>
                    <div class="flex items-start justify-between flex-1 w-full p-10"
                        style="background-color: <?php echo esc_attr($item['content_003_background_color']); ?>;">
                        <article class="flex flex-col flex-1 w-full shrink">
                            <?php if ($item['content_003_title']): ?>
                                <h2 class="text-2xl font-semibold leading-none"><?php echo esc_html($item['content_003_title']); ?></h2>
                            <?php endif; ?>
                            <div class="mt-3 bg-primary border-primary border-solid border-[3px] min-h-[3px] w-[66px]" aria-hidden="true"></div>
                            <?php if ($item['content_003_description']): ?>
                                <div class="mt-3 text-lg leading-7">
                                    <?php echo $item['content_003_description']; // WYSIWYG output 
                                    ?>
                                </div>
                            <?php endif; ?>
                        </article>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>