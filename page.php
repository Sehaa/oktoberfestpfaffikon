<?php include('header.php') ?>

<header>
      <div class="header-content">
          <div class="header-content-inner">
              <h1 id="homeHeading">Oktoberfest</h1>
              <hr>
              <p>Pffäfiker <br> Die größte Festzeltparty in unserer Stadt </p>
              <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
          </div>
      </div>
  </header>

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
