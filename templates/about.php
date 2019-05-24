<!-- About section -->
<div class="about-section">
  <div class="overlay"></div>
  <!-- card section -->
  <div class="card-section">
    <div class="container">
      <div class="row">
        <?php
        $args = [
          'post_type' => 'service',
          'posts_per_page'   => 3,
          'orderby' => 'rand'
        ];

        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post(); ?>
          <div class="col-md-4 col-sm-12">
            <div class="lab-card">
              <div class="icon">
                <i class="<?php echo get_post_meta(get_the_ID(), '_key_selected_icon', true); ?>"></i>
              </div>
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <!-- card section end-->

  <!-- About contant -->
  <div class="about-contant">
    <div class="container">
      <div class="section-title">
        <h2><?php echo strongTitle('titre-about'); ?></h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p><?php echo get_theme_mod('texte-about-gauche'); ?></p>
        </div>
        <div class="col-md-6">
          <p><?php echo get_theme_mod('texte-about-droite'); ?></p>
        </div>
      </div>
      <div class="text-center mt60">
        <a href="#servicesHome" class="site-btn">Browse</a>
      </div>
      <!-- popup video -->
      <div class="intro-video">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <img src=<?php echo get_theme_mod('video-image'); ?> alt="">
            <a href=<?php echo get_theme_mod('video-link'); ?> class="video-popup">
              <i class="fa fa-play"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About section end -->