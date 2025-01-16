<?php
$content_012_items = get_sub_field('content_012_items');
?>

<section class="bg-neutral-100 max-md:px-5">
    <div class="py-8 m-auto max-w-container max-md:max-w-full lg:py-20 max-desktop:px-8">
        <div class="grid w-full grid-cols-1 gap-4 mt-16 text-lg leading-loose lg:grid-cols-2 max-md:mt-10 max-md:max-w-full">
            <?php if ($content_012_items): ?>
                <?php foreach ($content_012_items as $item): ?>
                    <div class="flex flex-col content_012_item">
                        <div class="flex flex-col w-full pb-12 text-3xl font-semibold leading-10 max-md:max-w-full">
                            <?php if ($item['content_012_heading_text']): ?>
                                <<?php echo esc_html($item['content_012_heading_tag']); ?> class="text-3xl font-semibold leading-10 text-black max-w-[515px] max-md:max-w-full">
                                    <?php echo esc_html($item['content_012_heading_text']); ?>
                                </<?php echo esc_html($item['content_012_heading_tag']); ?>>
                                <div class="mt-4 bg-secondary border-secondary border-solid border-[3px] min-h-[3px] w-[66px]"></div>
                            <?php endif; ?>
                        </div>
                        <?php if ($item['content_012_subitems']): ?>
                            <?php foreach ($item['content_012_subitems'] as $subitem): ?>
                                <div class="flex flex-row items-start w-full pb-3 space-x-4 lg:items-center max-md:max-w-full">
                                    <div class="w-[10%]">
                                        <svg class="w-full mr-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path d="M17.0658 27.1907L9.99414 20.1173L12.3508 17.7607L17.0658 22.474L26.4925 13.0457L28.8508 15.404L17.0658 27.1907Z" fill="#000" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66211 20.0003C1.66211 9.87533 9.87044 1.66699 19.9954 1.66699C30.1204 1.66699 38.3288 9.87533 38.3288 20.0003C38.3288 30.1253 30.1204 38.3337 19.9954 38.3337C9.87044 38.3337 1.66211 30.1253 1.66211 20.0003ZM19.9954 35.0003C18.0256 35.0003 16.0751 34.6123 14.2552 33.8585C12.4353 33.1047 10.7817 31.9998 9.38884 30.6069C7.99596 29.214 6.89107 27.5605 6.13725 25.7406C5.38343 23.9207 4.99544 21.9702 4.99544 20.0003C4.99544 18.0305 5.38343 16.08 6.13725 14.2601C6.89107 12.4402 7.99596 10.7866 9.38884 9.39372C10.7817 8.00084 12.4353 6.89595 14.2552 6.14213C16.0751 5.38831 18.0256 5.00033 19.9954 5.00033C23.9737 5.00033 27.789 6.58068 30.602 9.39372C33.4151 12.2068 34.9954 16.0221 34.9954 20.0003C34.9954 23.9786 33.4151 27.7939 30.602 30.6069C27.789 33.42 23.9737 35.0003 19.9954 35.0003Z" fill="#000" />
                                        </svg>
                                    </div>

                                    <p class="text-lg leading-loose text-black w-[90%]">
                                        <?php echo esc_html($subitem['content_012_subitem_text']); ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>