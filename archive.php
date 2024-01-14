<?php get_header(); ?>

<div class="archive container">
    <?php get_template_part('includes/section', 'archive'); ?>

    <div class="border-t border-black mt-5 pt-5 flex items-center justify-end">
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</div>

<?php get_footer(); ?>