<?php

$testimonialArgs = [
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'post_per_page' => 6
];
$testimonial = new WP_Query($testimonialArgs);

if($testimonial->have_posts()):

?>

<!-- ======= Testimonials Section ======= -->
<div class="testimonials paralax-mf bg-image" style="background-image: url(<?= get_template_directory_uri() ?>/assets/background/IMG_20200911_111917.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-mf" class="owl-carousel owl-theme">
                    
                    <?php
                    
                    while($testimonial->have_posts()): $testimonial->the_post();

                    ?>
                    
                    <div class="testimonial-box">

                        <div class="author-test">

                            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="" class="rounded-circle b-shadow-a">

                            <span class="author"><?= the_title() ?></span>

                        </div>

                        <div class="content-test">

                            <p class="description lead"><?php strip_tags(the_content()) ?></p>

                            <span class="comit"><i class="fa fa-quote-right"></i></span>

                        </div>
                    </div>

                    <?php
                    
                    endwhile;

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Section -->

<?php

endif;

wp_reset_query();

?>