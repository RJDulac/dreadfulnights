<?php get_header(); 
?>
<?php
//test
// wordpress loop
?>
<div class="container-fluid row pt-4">
<div class="col-md-4 mb-3">
<div class="card w-100">
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
    the_post(); ?>
    <div class="card p-3 content-opacity">
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a><h2>
    <?php the_author_posts_link();?> on <?php the_time('n/j/y'); ?> in <?php echo get_the_category_list(', '); ?>
    <?php the_excerpt(); ?>
    <hr>
    </div>
<?php }
?>
</div>
    </div>
    <?php
get_footer(); ?>