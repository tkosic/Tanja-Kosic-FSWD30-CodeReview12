<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
      }
    </style>
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             =>  2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
               'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new WP_Bootstrap_Navwalker())
           );
       ?>
        </nav>
      </div>
    </div>

<section class="showcase">
  <div class="container">
    <h1><?php echo get_theme_mod('showcase_heading', 'Mount Everest'); ?></h1>
    <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
    <a href="<?php echo get_theme_mod('btn_url', '#'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
  </div>
</section>

<section class="boxes">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <i class="fa fa-plane"></i>
        <h3>Lorem Ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
        <i class="fa fa-map"></i>
        <h3>Lorem Ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
        <i class="fa fa-flag-checkered"></i>
        <h3>Lorem Ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- section start -->  
  <div class="section translucent-bg blue">
    <div class="container">
      <h3 class="text-center title">Mount Everest Services</h3>
        <div class="row">
        <div class="col-sm-6">
          <div class="media">
            <div class="media-body text-right">
              <h4 class="media-heading">Service 1</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
            </div>
            <div class="media-right">
              <i class="fa fa-cog"></i>
            </div>
            </div>
            <div class="media">
            <div class="media-body text-right">
              <h4 class="media-heading">Service 2</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
            </div>
            <div class="media-right">
              <i class="fa fa-check"></i>
            </div>
            </div>
            <div class="media">
            <div class="media-body text-right">
              <h4 class="media-heading">Service 3</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
            </div>
            <div class="media-right">
              <i class="fa fa-desktop"></i>
            </div>
          </div>  
        </div>


        <div class="col-sm-6">
          <div class="media">
            <div class="media-left">
              <i class="fa fa-leaf"></i>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Service 4</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <i class="fa fa-area-chart"></i>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Service 5</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <i class="fa fa-child"></i>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Service 6</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section end -->

<footer class="blog-footer">
  <div class="footer">
    <div class="container">
      <h2 class="text-center title-footer">Contact Us</h2>
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
