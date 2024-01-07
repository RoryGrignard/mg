<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <time datetime="<?php echo get_the_date(DATE_W3C); ?>">
        <?php echo get_the_date('l, jS F, Y'); ?>
    </time>

    <?php the_content(); ?>

    <?php
    $first_name = get_the_author_meta('first_name');
    $last_name = get_the_author_meta('last_name');
    ?>

    <h3>Author: <?php echo $first_name; ?> <?php echo $last_name; ?></h3>

    <h4>Categories</h4>

    <div class="pill-wrapper">
        <?php
        $categories = get_the_category();
        if($categories):
            foreach($categories as $cat): ?>
                <a href="<?php echo get_category_link($cat->term_id); ?>" class="pill">
                    <?php echo $cat->name; ?>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <h4>Tags</h4>

    <div class="pill-wrapper">
        <?php
        $tags = get_the_tags();
        if($tags):
            foreach($tags as $tag): ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="pill">
                    <?php echo $tag->name; ?>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php comments_template(); ?>

<?php endwhile; endif; ?>