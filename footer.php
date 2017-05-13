<section class ="contac footer">
        <div class="container">
            <div class="row"><!--row-->
              <?php dynamic_sidebar( 'message' ); ?>

              <?php dynamic_sidebar('phone'); ?>

              <?php dynamic_sidebar('mail'); ?>

            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/creative.min.js"></script>
    <style media="screen">
    html {
  margin-top: 0px !important;
}
    </style>
</body>
<?php wp_footer(); ?>
</html>
