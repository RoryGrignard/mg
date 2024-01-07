<h1><?php echo single_cat_title(); ?></h1>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <?php if(has_post_thumbnail()): ?>
        <?php $thumbnail_id = get_post_thumbnail_id( $post->ID ); ?>
        <img src="<?php the_post_thumbnail_url('post-thumbnail-small'); ?>" alt="<?php echo get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); ?>">
    <?php endif; ?>

    <h2><?php the_title(); ?></h2>

    <?php the_excerpt(); ?>

    <a class="archive__link" href="<?php the_permalink(); ?>">Read more</a>
<?php endwhile; endif; ?>