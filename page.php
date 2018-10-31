<!-- wordpress uses this file for pages -->
<?php
get_header();
// wordpress loop
?>
<div class="container">
<?php
while(have_posts()) {
    //wordpress function that keeps track of posts
    the_post(); ?>
    <h1>Page.php</h1>
    <h2><?php the_title();?><h2>
    <?php the_content(); ?>
<?php }
?>
</div>
<?php
get_footer();
?>