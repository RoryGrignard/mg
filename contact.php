<?php 
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="contact container">
    <?php if(has_post_thumbnail()): ?>
        <?php $thumbnail_id = get_post_thumbnail_id( $post->ID ); ?>
        <img src="<?php the_post_thumbnail_url('post-thumbnail-large'); ?>" alt="<?php echo get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); ?>">
    <?php endif; ?>

    <h1><?php the_title(); ?></h1>

    <?php get_template_part('includes/section', 'content'); ?>

    <h3>Contact info</h3>
</div>

<?php get_footer(); ?>