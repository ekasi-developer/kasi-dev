<?php

$blogArgs = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3
];

$blogs = new WP_Query($blogArgs);

if($blogs->have_posts()):

?>

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog-mf sect-pt4 mb-5 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Blog
                    </h3>
                    <p class="subtitle-a">
                        Get the latest blog post and stay up to date.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">

            <?php

            while($blogs->have_posts()): $blogs->the_post();

            ?>

                <div class="col-md-4 card-deck mb-5 ml-2">
                    <?php get_template_part('template-parts/content/blog-card') ?>
                </div>

            <?php

            endwhile;

            ?>
            
            <div class="col-12 text-center">
                <a class="btn font-weight-bolder btn-blog-more" href="<?= site_url('blog') ?>">
                    <i class=""></i> View More Blogs
                </a>
            </div>

        </div>
    </div>
</section>
<!-- End Blog Section -->

<?php

endif;

wp_reset_query();

?>