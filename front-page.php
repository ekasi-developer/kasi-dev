<?php /* Template Name: Home-Page */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/body/intro'); ?>

<main id="main">

    <?php get_template_part('template-parts/sections/about'); ?>

    <?php get_template_part('template-parts/sections/services'); ?>

    <?php get_template_part('template-parts/sections/counter'); ?>

    <?php get_template_part('template-parts/sections/portfilio'); ?>

    <?php get_template_part('template-parts/sections/testimonials'); ?>

    <?php get_template_part('template-parts/sections/blog'); ?>

    <?php get_template_part('template-parts/sections/contact'); ?>

</main>

<?php get_footer(); ?>
