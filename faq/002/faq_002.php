<?php
$heading_tag = get_sub_field('heading_tag') ?: 'h2';
$heading_text = get_sub_field('heading_text');
$faq_items = get_sub_field('faq_items');
$form_shortcode = get_sub_field('form_shortcode');
$section_bg_color = get_sub_field('section_bg_color');
?>
<section class="flex flex-col items-center justify-center pb-20 max-desktop:px-8" style="background-color: <?php echo esc_attr($section_bg_color); ?>;">
    <div class="flex flex-col w-full m-auto max-w-container">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-[5rem] mt-16">

            <div class="flex flex-wrap items-start justify-between" x-data="{ openIndex: null }">
                <?php if ($faq_items): ?>
                    <?php foreach ($faq_items as $index => $item): ?>
                        <?php
                        $faq_post = $item['faq_item'];
                        if ($faq_post):
                            $faq_title = get_the_title($faq_post);
                            $faq_content = apply_filters('the_content', get_post_field('post_content', $faq_post));
                        ?>
                            <div class="w-full mt-4 md:mt-0">
                                <button
                                    class="w-full text-left"
                                    @click="openIndex === <?php echo $index; ?> ? openIndex = null : openIndex = <?php echo $index; ?>"
                                    :class="openIndex === <?php echo $index; ?> ? 'bg-secondary text-white' : 'bg-primary text-black'">
                                    <div class="flex flex-row justify-between gap-5 p-5 cursor-pointer lg:gap-10">
                                        <h3 class="md:text-base xl:text-2xl font-semibold leading-none w-[80%] lg:w-[90%] md:min-w-[240px] max-md:max-w-full">
                                            <?php echo esc_html($faq_title); ?>
                                        </h3>
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
                                </button>
                                <div x-show="openIndex === <?php echo $index; ?>" class="p-5 text-lg leading-7 bg-neutral-100" x-cloak>
                                    <?php echo wp_kses_post($faq_content); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <?php if ($form_shortcode): ?>
                <div class="flex items-start justify-center w-full px-10 py-20 text-black bg-primary max-md:px-5">
                    <div class="flex flex-col w-full">
                        <header class="flex flex-col self-start text-3xl font-semibold leading-none">
                            <h2>Ask your questions</h2>
                            <div class="mt-4 bg-secondary border-secondary border-solid border-[3px] min-h-[3px] w-[66px]"></div>
                        </header>
                        <?php echo do_shortcode($form_shortcode); ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="flex items-start justify-center w-full px-10 py-20 text-black bg-primary max-md:px-5 max-h-[860px]">
                    <div class="flex flex-col w-full">
                        <header class="flex flex-col self-start text-3xl font-semibold leading-none">
                            <h2>Ask your questions</h2>
                            <div class="mt-4 bg-secondary border-secondary border-solid border-[3px] min-h-[3px] w-[66px]"></div>
                        </header>
                        <form class="flex flex-col gap-2.5 mt-16 w-full text-xl leading-snug max-md:mt-10">
                            <div class="flex flex-col gap-6">
                                <input type="text" id="name" name="name" placeholder="Name*" required class="w-full p-5 bg-white min-h-[68px] " aria-required="true">
                                <input type="email" id="email" name="email" placeholder="Mail*" required class="w-full p-5 bg-white min-h-[68px] " aria-required="true">
                                <input type="text" id="subject" name="subject" placeholder="Subject" class="w-full p-5 bg-white min-h-[68px] ">
                                <textarea id="questions" name="questions" placeholder="Your questions..." class="w-full px-5 pt-5 pb-44 bg-white min-h-[220px]  max-md:pb-24"></textarea>
                                <button type="submit" class="w-full px-12 mt-6 text-base font-semibold text-white uppercase bg-secondary min-h-[60px] border-2 border-secondary hover:bg-transparent hover:text-secondary">
                                    Submit now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>