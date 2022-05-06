<?php
$image_head = get_field('image_head');
$logo = get_field('logo');
$logo_url = acf_maybe_get($logo, 'url');
$content = get_field('content');
$sub_content = get_field('sub_content');
$description = get_field('description');
?>
<!-- Agence -->
<section id="agence">
    <?php
    // Banner
    if ($image_head):
        $image_head_url = acf_maybe_get($image_head, 'url');?>
        <img data-sal="slide-up" data-sal-duration="1000" class="h-96 md:h-500 2xl:h-700 w-full object-cover" src="<?php echo $image_head_url; ?>" alt="" srcset="">
    <?php endif; ?>
    <div class="px-5 mx-auto w-full md:px-0 xl:w-8/12 2xl:w-7/12 3xl:w-6/12">
        <div class="transform -translate-y-48 -mb-48 flex flex-wrap gap-16 md:translate-y-0 md:mb-0 md:flex-nowrap">
            <div class="bg-gray-custom flex items-center transform xl:-mb-48 xl:-translate-y-48 justify-center w-full h-350 xl:h-600 2xl:h-700 md:w-500">
                <img class="w-24 xl:w-44" src="<?php echo $logo_url; ?>" alt="" srcset="">
            </div>
            <?php
            // Content
            if ($content): ?>
                <div class="w-full md:pt-40 md:w-4/6">
                    <div class="content font-primary pb-6 text-3xl xl:text-5xl"><?php echo $content; ?></div>
                    <?php
                    // Sub content
                    if ($sub_content): ?>
                        <div class="font-primary pb-12 text-3xl lg:pb-24 xl:text-4xl"><?php echo $sub_content; ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php
        // Description
        if ($description): ?>
            <div class="md:pt-24 xl:pt-0">
                <div class="description font-primary text-2xl 2xl:text-3xl"><?php echo $description; ?></div>
            </div>
        <?php endif; ?>
    </div>

    <?php if (have_rows('cards')):
        $i = 0; ?>
        <div class="py-8 pb-0 xl:pt-28 2xl:pt-44">
            <div class="container">
                <div class="flex flex-wrap gap-8 md:flex-nowrap lg:gap-36">
                    <?php while(have_rows('cards')):
                    the_row();
                    $content_type = get_sub_field('content_type');
                    $sub_title = get_sub_field('sub_title');
                    $i++;
                    switch ($content_type) :
                        case 'image':
                            $image = get_sub_field('image');
                            $image_url = acf_maybe_get($image, 'url'); ?>
                            <div data-sal="slide-up" data-sal-duration="1000" data-sal-delay="<?php echo $i . '00'; ?>"
                                class="bg-gray-custom w-full flex flex-col p-6 items-center justify-center h-52 xl:h-72 2xl:w-500 2xl:h-500 2xl:py-16 2xl:px-16 text-center">
                                <img class="w-48 h-24 object-contain pb-3 mx-auto" src="<?php echo $image_url; ?>" alt="" srcset="">
                                <p class="font-primary uppercase text-2xl 2xl:text-3xl 3xl:text-5xl"><?php echo $sub_title; ?></p>
                            </div>
                            <?php break;
                        case 'text':
                            $title = get_sub_field('title'); ?>
                            <div data-sal="slide-up" data-sal-duration="1000" data-sal-delay="<?php echo $i . '00'; ?>"
                                class="bg-gray-custom w-full flex flex-col p-6 items-center justify-center h-52 xl:h-72 2xl:w-500 2xl:h-500 2xl:py-16 2xl:px-16 text-center">
                                <p class="font-primary-bold text-5xl 3xl:text-8xl pb-3"><?php echo $title; ?></p>
                                <p class="font-primary uppercase text-2xl 2xl:text-3xl 3xl:text-5xl text-center"><?php echo $sub_title; ?></p>
                            </div>
                            <?php break;
                    endswitch; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>