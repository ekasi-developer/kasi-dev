<?php get_header(); ?>

<?php get_template_part('template-parts/content/blog-introduction') ?>

<main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php get_template_part('template-parts/content/blog-post') ?>
                    <?php get_template_part('template-parts/content/blog-comments') ?>
                    <?php get_template_part('template-parts/content/blog-comment-form') ?>
                </div>
                <div class="col-md-4">
                    <?php get_template_part('template-parts/content/blog-sidebar-search') ?>
                    <?php get_template_part('template-parts/content/blog-sidebar-posts') ?>
                    <?php get_template_part('template-parts/content/blog-sidebar-categories') ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Single Section -->

</main>
<!-- End #main -->

<?php get_footer() ?>