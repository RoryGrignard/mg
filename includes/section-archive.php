<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <h3 class="archive__heading"><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
    <a class="archive__link" href="<?php the_permalink(); ?>">Read more</a>
<?php endwhile; endif; ?>