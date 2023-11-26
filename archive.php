<?php get_header(); ?>

<div class="container archive">
    <?php get_template_part('includes/section', 'archive'); ?>

    <!-- If you want Next page / Previous page -->
    <!-- <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?> -->

    <!-- Numbered pagination with Next / Previous -->
    <?php
    global $wp_query;

    $big = 999999999;
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%',  esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ) );
    ?>
</div>

<?php get_footer(); ?>