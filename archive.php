<?php get_header(); ?>

<div class="page__title__background flex__center">
    <h1><?php echo single_cat_title(); ?> </h1>
</div>

<section class=" blog">

    <div class="d-flex flex-column">


        <?php get_template_part('includes/section', 'archive'); ?>


        <p class="previous__posts__link">
            <?php previous_posts_link(); ?>
        </p>

        <p class="next__posts__link">
            <?php next_posts_link(); ?>
        </p>
    </div>



    <aside class="sidebar__column">

        <a href="about-me">

            <div class="about__me__short flex__center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about_me_img.png" alt="about me" class="">
                <h5>front-end developer</h5>
                <p>projektuję oraz programuję strony internetowe</p>
            </div>
        </a>

        <div class="sidebar">

            <?php if (is_active_sidebar('blog-sidebar')) : ?>

                <?php dynamic_sidebar('blog-sidebar'); ?>

            <?php endif; ?>
        </div>
    </aside>

</section>

<?php
get_footer();


?>