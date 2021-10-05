<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="single__post">

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

            <?php if (has_post_thumbnail()) : ?>

                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="post__thumbnail"></a>

            <?php endif ?>


            <?php echo '<p class = "post__excerpt">' . get_the_excerpt() . '</p>' ?>


            <a href=" <?php the_permalink(); ?>" class="read__link"> <button class="read__button"> czytaj</button></a>

        </div>

    <?php endwhile;

else : ?>

    <h3>nie znaleziono żadnych wyników dla: "<?php the_search_query(); ?>"</h3>

<?php endif; ?>