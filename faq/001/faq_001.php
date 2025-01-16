<?php
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$heading_text = get_sub_field('heading_text');
$faq_items = get_sub_field('faq_items');
$section_bg_color = get_sub_field('section_bg_color') ?: '#FFFFFF';
?>

<section class="flex flex-col items-center py-8 lg:py-20" style="background-color: <?php echo esc_attr($section_bg_color); ?>;">
    <div class="w-full px-4 m-auto max-w-container lg:px-8 xxl:px-0">
        <div class="flex flex-col text-3xl font-semibold leading-none text-black">
            <<?php echo esc_html($heading_tag); ?>><?php echo esc_html($heading_text); ?></<?php echo esc_html($heading_tag); ?>>
            <div class="mt-4 bg-orange-500 border-orange-500 border-solid border-[3px] min-h-[3px] w-[66px]" aria-hidden="true"></div>
        </div>
        <div class="flex flex-wrap items-start justify-between mt-16 max-md:mt-10" x-data="{ openIndex: null }">
            <?php if ($faq_items): ?>
                <?php foreach ($faq_items as $index => $item): ?>
                    <?php
                    $faq_post = $item['faq_post'];
                    if ($faq_post):
                        $faq_title = get_the_title($faq_post);
                        $faq_content = apply_filters('the_content', get_post_field('post_content', $faq_post));
                    ?>
                        <div class="w-full mt-4">
                            <button
                                class="w-full text-left"
                                @click="openIndex === <?php echo $index; ?> ? openIndex = null : openIndex = <?php echo $index; ?>"
                                :class="openIndex === <?php echo $index; ?> ? 'bg-primary text-white' : 'bg-[#EFF5EC] text-black'">
                                <div class="flex flex-wrap justify-between gap-10 p-5 cursor-pointer">
                                    <div class="flex flex-row justify-between w-full">
                                        <span class="md:text-base xl:text-2xl font-semibold leading-none min-w-[240px] max-md:max-w-full">
                                            <?php echo esc_html($faq_title); ?>
                                        </span>
                                        <div class="flex items-center justify-center">
                                            <!-- Down Icon -->
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                height="28px"
                                                width="40px"
                                                x-show="openIndex !== <?php echo $index; ?>"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                alt="Down Icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            <!-- Up Icon -->
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                height="28px"
                                                width="40px"
                                                x-show="openIndex === <?php echo $index; ?>"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                alt="Up Icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            <div x-show="openIndex === <?php echo $index; ?>" class="p-5 text-lg leading-7 bg-neutral-100" x-cloak>
                                <?php echo wp_kses_post($faq_content); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>