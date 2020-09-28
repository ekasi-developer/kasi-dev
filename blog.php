<?php /* Template Name: Blog */ ?>

<?= get_header() ?>

<main id="main">

    <?php get_template_part('template-parts/content/blog-search'); ?>

    <!-- ======= Blogs ======= -->
    <section id="blogs" class="blogs-mf mt-5 mb-5 route">
        <div class="container">
            <h3 class="mb-5"><i class="fa fa-rss"></i> Blog Posts</h3>
            <div class="row">
                <?php

                $blogsArgs = [
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'offset' => get_query_var('paged') == 0 ? 0 : get_query_var('paged'),
                    's' => sanitize_text_field($_GET['term']),
                    'category_name' => isset($_GET['category']) ? sanitize_text_field($_GET['category']) : null
                ];
                $blogs = new WP_Query($blogsArgs);
                
                if($blogs->have_posts()):
                    while($blogs->have_posts()): $blogs->the_post();

                ?>
                
                <div class="col-md-4 card-deck mb-5 ml-2">
                    <?= get_template_part('template-parts/content/blog-card') ?>
                </div>
                
                <?php

                    endwhile;
                endif;

                ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <nav id="pagination">
                        <?= paginate_links([
                            'total' => ceil($blogs->found_posts/$blogs->query['posts_per_page'])]) ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blogs Section -->

</main>
<!-- End #main -->

<?php

wp_reset_query();

?>


<?= get_footer() ?>