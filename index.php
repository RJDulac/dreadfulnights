<!-- get header function to pull in contents from header.php -->
<?php get_header(); 

?>
<div class="container">
<?php

// wordpress loop
while(have_posts()) {
    //wordpress function that keeps track of posts

    the_post(); ?>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a><h2>
    <?php the_content(); ?>
    <hr>


<?php }

//my function is gone :(
?>
    </div>
    <?php

get_footer();
?>