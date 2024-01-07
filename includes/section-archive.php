<h1><?php echo single_cat_title(); ?></h1>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
    <a class="archive__link" href="<?php the_permalink(); ?>">Read more</a>
<?php endwhile; endif; ?>