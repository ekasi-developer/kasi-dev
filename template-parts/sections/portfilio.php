<?php

$projectArgs = [
    'post_type' => 'project',
    'post_status' => 'publish',
    'posts_per_page' => 12
];
            
$projects = new WP_Query($projectArgs);
            
if($projects->have_posts()):

?>

<!-- ======= Portfolio Section ======= -->
<section id="work" class="portfolio-mf sect-pt4 mb-3 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">Portfolio</h3>
                    <p class="subtitle-a">
                        This is my lastest work/projects for more info get in
                        <a href="<?= site_url('/#contact') ?>" class="text-muted"><span class="ion-ios-telephone"></span> touch</a>
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            
            while($projects->have_posts()): $projects->the_post();

            ?>
                <div class="col-md-4">
                    <?php get_template_part('template-parts/content/project-card') ?>
                </div>

            <?php

            endwhile;

            ?>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->

<?php

endif;
            
wp_reset_query();

?>