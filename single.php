<!-- wordpress looks for this file for single posts -->
<?php
get_header();
// wordpress loop
while(have_posts()) {
    //wordpress function that keeps track of posts
    the_post(); ?>
    <h2><?php the_title();?><h2>
    <?php the_content(); ?>

<?php }
get_footer();
?>