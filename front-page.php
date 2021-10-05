<?php get_header(); ?>

<div class="front__page flex__center">

    <div class="homepage__title__background flex__center">

        <div class="slogan" data-aos="fade-up">

            <h1>Blog osobisty, jeszcze nie wiem o czym...</h1>

            <a href="#posts">
                <button>odkrywaj</button>
            </a>

        </div>

    </div>

    <h2 id="posts" data-aos="fade-up"> Najnowsze wpisy na blogu: </h2>


    <section class="front__page__latest__posts flex__center" data-aos="fade-up">

        <?php

        $the_query = new WP_Query(array(
            'category_name' => '',
            'posts_per_page' => 3,
        ));
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


                <div class="front__page__single__post">

                    <?php if (has_post_thumbnail()) : ?>

                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="post__thumbnail"></a>

                    <?php endif ?>

                    <a href="<?php the_permalink(); ?>">
                        <h3 class="post__title"><?php the_title(); ?></h3>
                    </a>

                    <p class="post__details">
                        <?php echo get_the_date(' j F Y') . ' |'; ?>
                        <?php the_author(); ?>
                    </p>

                    <p class="post__category__bar">

                        <?php

                        $categories = get_the_category();
                        if ($categories) {
                            foreach ($categories as $cat) : ?>


                                <a href="<?php echo get_category_link($cat->term_id); ?>">
                                    <?php echo $cat->name; ?>
                                </a>

                        <?php endforeach;
                        }
                        ?>
                    </p>

                    <?php echo '<p class = "post__excerpt">' . get_the_excerpt() . '</p>' ?>

                    <a href=" <?php the_permalink(); ?>" class="read__link"> <button class="read__button"> czytaj</button></a>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>



        <?php endif; ?>


    </section>

    <a href="/category/blog" class="see__more__on__blog">
        <button>zobacz wszystkie wpisy</button>
    </a>

</div>

<?php get_footer(); ?>