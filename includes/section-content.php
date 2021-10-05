<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

        <section class="content">
            <?php the_content(); ?>
        </section>

<?php endwhile;

else : endif; ?>