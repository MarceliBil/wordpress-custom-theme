<?php
get_header(); ?>

<div class="page__title__background flex__center">

    <h1><?php the_title(); ?></h1>

</div>

<section class="page__content flex__center">

    <?php get_template_part('includes/section', 'content'); ?>

</section>

<?php
get_footer();


?>