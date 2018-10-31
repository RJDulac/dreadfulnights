<!-- get header function to pull in contents from header.php -->
<?php get_header(); 

?>

<?php
//test
// wordpress loop
?>
<div class="container row">
<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>
<div class="col-md-8">

<?php
while(have_posts()) {
    //wordpress function that keeps track of posts

    the_post(); ?>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a><h2>
    <?php the_excerpt(); ?>
    <hr>


<?php }

?>
</div>
    </div>
    <?php

get_footer();
?>