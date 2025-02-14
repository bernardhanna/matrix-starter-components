<?php
$form_shortcode = get_sub_field('form_shortcode');
$background_color = get_sub_field('background_color');


$padding_classes = ['pt-12 pb-12'];
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
?>

<section class="relative flex overflow-hidden" style="background-color: <?php echo esc_attr($background_color); ?>;">
  <div class="flex flex-col items-center w-full mx-auto max-w-[1040px] max-xl:px-5 <?php echo implode(' ', $padding_classes); ?>">

    <div class="flex flex-col w-full">
      <?php if ($form_shortcode) : ?>
        <div class="flex flex-col justify-center w-full px-20 border-4 border-solid py-14 rounded-2xl border-slate-300 max-xl:px-5 max-md:max-w-full max-sm:flex max-sm:flex-col max-sm:p-4">
          <?php echo do_shortcode($form_shortcode); ?>
        </div>
      <?php else : ?>
        <form class="flex flex-col justify-center w-full px-20 border-4 border-solid py-14 rounded-2xl border-slate-300 max-xl:px-5 max-md:max-w-full max-sm:flex max-sm:flex-col max-sm:p-4">
          <div class="flex items-start w-full gap-10 text-sm leading-none max-md:max-w-full">
            <div class="flex flex-col flex-1 shrink w-full basis-0 min-w-[240px] max-md:max-w-full">
              <div class="flex flex-wrap items-start w-full gap-4 max-md:max-w-full">
                <div class="flex flex-col flex-1 shrink basis-0 min-h-[80px] min-w-[240px] max-md:max-w-full">
                  <label for="firstName" class="self-stretch flex-1 w-full shrink text-slate-700 max-md:max-w-full">First name*</label>
                  <div class="flex flex-col flex-1 w-full mt-2 text-gray-500 max-md:max-w-full">
                    <input type="text" id="firstName" name="firstName" required aria-required="true" class="flex-1 w-full px-4 py-3 border border-solid rounded border-stone-500 max-md:max-w-full" placeholder="First name" />
                  </div>
                </div>
                <div class="flex flex-col flex-1 shrink basis-0 min-h-[80px] min-w-[240px] max-md:max-w-full">
                  <label for="lastName" class="self-stretch flex-1 w-full shrink text-slate-700 max-md:max-w-full">Last name</label>
                  <div class="flex flex-col flex-1 w-full mt-2 text-gray-500 max-md:max-w-full">
                    <input type="text" id="lastName" name="lastName" class="flex-1 w-full px-4 py-3 border border-solid rounded border-stone-500 max-md:max-w-full" placeholder="Last name" />
                  </div>
                </div>
              </div>
              <div class="flex flex-wrap items-start w-full gap-4 mt-4 max-md:max-w-full">
                <div class="flex flex-col flex-1 shrink basis-0 min-h-[80px] min-w-[240px] max-md:max-w-full">
                  <label for="companyName" class="self-stretch flex-1 w-full shrink text-slate-700 max-md:max-w-full">Company name</label>
                  <div class="flex flex-col flex-1 w-full mt-2 text-gray-500 max-md:max-w-full">
                    <input type="text" id="companyName" name="companyName" class="flex-1 w-full px-4 py-3 border border-solid rounded border-stone-500 max-md:max-w-full" placeholder="Company name" />
                  </div>
                </div>
                <div class="flex flex-col flex-1 shrink whitespace-nowrap basis-0 min-h-[80px] min-w-[240px] max-md:max-w-full">
                  <label for="email" class="self-stretch flex-1 w-full shrink text-slate-700 max-md:max-w-full">Email*</label>
                  <div class="flex flex-col flex-1 w-full mt-2 text-gray-500 max-md:max-w-full">
                    <input type="email" id="email" name="email" required aria-required="true" class="flex-1 w-full px-4 py-3 border border-solid rounded border-stone-500 max-md:max-w-full" placeholder="Email" />
                  </div>
                </div>
              </div>
              <div class="flex flex-wrap items-start w-full gap-4 mt-4 max-md:max-w-full">
                <div class="flex flex-col flex-1 shrink basis-0 min-h-[80px] min-w-[240px] max-md:max-w-full">
                  <label for="phone" class="self-stretch flex-1 w-full shrink text-slate-700 max-md:max-w-full">Phone number (optional)</label>
                  <div class="flex flex-col flex-1 w-full mt-2 text-gray-500 max-md:max-w-full">
                    <input type="tel" id="phone" name="phone" class="flex-1 w-full px-4 py-3 border border-solid rounded border-stone-500 max-md:max-w-full" placeholder="Phone number" />
                  </div>
                </div>
                <div class="flex shrink-0 h-20 min-w-[240px] w-[496px]"></div>
              </div>
              <div class="flex flex-col mt-4 w-full min-h-[165px] max-md:max-w-full">
                <label for="message" class="self-stretch flex-1 w-full shrink text-slate-700 max-md:max-w-full">Tell us more*</label>
                <div class="flex flex-col flex-1 w-full mt-2 text-gray-500 max-md:max-w-full">
                  <textarea id="message" name="message" required aria-required="true" class="flex-1 px-4 py-3 rounded border border-solid border-stone-500 w-full max-md:max-w-full min-h-[120px]" placeholder="Your message..."></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap items-center w-full gap-2 mt-8 max-md:max-w-full">
            <div class="flex overflow-hidden flex-col justify-center items-center self-stretch my-auto w-8 rounded min-h-[32px]">
              <input type="checkbox" id="privacy-accept" name="privacy-accept" required aria-required="true" class="w-8 h-8 rounded border border-gray-500 border-solid min-h-[32px]" />
            </div>
            <label for="privacy-accept" class="self-stretch my-auto text-xs leading-none text-slate-600">
              I accept the
              <a href="#privacy" class="font-semibold text-slate-600">Privacy policy</a>
              and the
              <a href="#terms" class="font-semibold text-slate-600">Terms and conditions</a>
            </label>
          </div>
          <div class="flex flex-wrap gap-8 items-center self-center pr-16 mt-8 max-w-full text-sm font-semibold leading-none text-teal-950 w-[496px] max-md:pr-5">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/f35586c581c84ecf82b6de32c55ed39e/75d8d99b3cbfb6a0f53b26ff05c69cfac7494ab228aa9c11c161f80c16089f2a?apiKey=0f8c151e993440459bd06f1271f3d4d8&" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[72px]" />
            <button type="submit" class="gap-2 self-stretch px-14 py-5 my-auto bg-orange-400 rounded min-h-[56px] max-xl:px-5">
              Send message
            </button>
          </div>
        </form>
      <?php endif; ?>
    </div>
  </div>
</section>