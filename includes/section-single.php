<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <time datetime="<?php echo get_the_date(DATE_W3C); ?>">
        <?php echo get_the_date('l, jS F, Y'); ?>
    </time>

    <?php the_content(); ?>

    <?php
    $first_name = get_the_author_meta('first_name');
     $last_name = get_the_author_meta('last_name');
    ?>

    <h4>Author: <?php echo $first_name; ?> <?php echo $last_name; ?></h4>
<?php endwhile; endif; ?>