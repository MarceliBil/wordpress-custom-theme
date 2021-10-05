<?php
get_header(); ?>

<div class="page__title__background flex__center">

    <h2 class="post__category__bar">
        <?php
        $categories = get_the_category();

        if ($categories) {
            foreach ($categories as $cat) : ?>

                <a href="<?php echo get_category_link($cat->term_id); ?>" class="post__category">
                    <?php echo $cat->name; ?>
                </a>

        <?php endforeach;
        } ?>
    </h2>

</div>

<section class="single__post__page">

    <section class="single__post flex__center">

        <section class="single__post__area">

            <h1 class="single__post__title"><?php the_title(); ?></h1>

            <?php get_template_part('includes/section', 'blogcontent'); ?>


        </section>

    </section>


    <aside class="sidebar__column">

        <a href="about-me">

            <div class="about__me__short flex__center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about_me_img.png" alt="about me" class="">
                <h5>front-end developer</h5>
                <p>projektuję oraz programuję strony internetowe</p>
            </div>
        </a>


        <div class="sidebar">
            <?php if (is_active_sidebar('page-sidebar')) : ?>

                <?php dynamic_sidebar('page-sidebar'); ?>

            <?php endif; ?>
        </div>

    </aside>
</section>


<?php
get_footer();

?>