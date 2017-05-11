<?php
/*
Template Name: Fullwidth template
*/
 ?>
<?php include('header.php') ?>

  <div class="header-pages">
    <h2> <?php echo get_the_title(); ?> </h2>
  </div>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="blogpost">
      <?php the_content(); ?>
    </div>

    <?php endwhile; ?>
    <?php else : ?>

    <h6 class="center">Not Found</h6>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
    <?php endif; ?>
<?php include('footer.php') ?>
