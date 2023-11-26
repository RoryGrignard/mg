<?php get_header(); ?>

<div class="container archive">
    <?php get_template_part('includes/section', 'archive'); ?>

    <div class="archive__pagination">
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</div>

<?php get_footer(); ?>