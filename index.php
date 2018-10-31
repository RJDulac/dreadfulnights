<!-- get header function to pull in contents from header.php -->
<?php get_header(); 

?>
<div class="container">
<?php
//test
// wordpress loop
while(have_posts()) {
    //wordpress function that keeps track of posts

    the_post(); ?>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a><h2>
    <?php the_content(); ?>
    <hr>


<?php }

?>
    </div>
    <?php

get_footer();
?>