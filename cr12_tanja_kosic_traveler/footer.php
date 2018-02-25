<?php if(!is_front_page()) : ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

  </div><!-- /.container -->
<footer class="blog-footer">
  <div class="footer">
    <div class="container">
      <h2 class="title text-center">Contact Us</h2>
      <div class="row">
        <div class="col-sm-12">
          <div class="footer-content text-center">
            <ul class="social-links text-center">
              <li class="facebook">
                  <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="twitter">
                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="googleplus">
                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li class="skype">
                <a target="_blank" href="#"><i class="fa fa-skype"></i></a>
              </li>
              <li class="linkedin">
                <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
              </li>
              <li class="youtube">
                <a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
              </li>
              <li class="flickr">
                <a target="_blank" href="#"><i class="fa fa-flickr"></i></a>
              </li>
              <li class="pinterest">
                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>
