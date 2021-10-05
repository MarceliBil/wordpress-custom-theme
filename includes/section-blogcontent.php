<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <p class="post__details">
            <?php echo get_the_date(' j F Y') . ' |'; ?>
            <?php the_author(); ?>
        </p>

        <p class="post__category__bar">
            <?php
            $categories = get_the_category();

            if ($categories) {
                foreach ($categories as $cat) : ?>

                    <a href="<?php echo get_category_link($cat->term_id); ?>" class="post__category">
                        <?php echo $cat->name ?>
                    </a>

            <?php endforeach;
            } ?>
        </p>

        <div class="single__post__content">
            <?php if (has_post_thumbnail()) : ?>

                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="single__post__main__image">

                <p class="single__post__main__image__caption">
                    <?php the_post_thumbnail_caption(); ?>
                </p>

            <?php endif ?>


            <?php the_content(); ?>
        </div>

        <p class="author">Autorem posta jest: <?php the_author(); ?></p>

        <?php

        $tags = get_the_tags();


        if ($tags) {
            echo ('<p>Tagi:</p>');
            foreach ($tags as $tag) : ?>

                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag-cloud-link">
                    <?php echo $tag->name ?>
                </a>

        <?php endforeach;
        } ?>

        <div class="comments__area">
            <?php comments_template() ?>
        </div>

        <div class="previous__next__post flex__center">

            <div class="prev flex__center">
                <?php next_post_link('<p>Poprzedni wpis:</p> <p>%link</p>', '%title', false); ?>
            </div>

            <div class="next flex__center">
                <?php previous_post_link('<p>Następny wpis:</p><p>%link</p>', '%title', false); ?>
            </div>
        </div>

<?php endwhile;
else : endif; ?>