<?php
get_header(); ?>

<div class="page__title__background flex__center">

    <h1>
        <h1>szukasz: "<?php echo get_search_query(); ?>": </h1>
    </h1>

</div>

<section class="blog">

    <section class="list__of__articles">

        <?php get_template_part('includes/section', 'searchresults'); ?>


    </section>


    <aside class="sidebar__column">

        <a href="about-me">

            <div class="about__me__short flex__center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about_me_img.jpg" alt="about me" class="">
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