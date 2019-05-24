<!-- Services section -->
<div class="services-section spad" id="servicesHome">
  <div class="container">
    <div class="section-title dark">
      <h2><?php echo strongTitle('titre-services'); ?></h2>
    </div>
    <div class="row">
      <?php
      $args = [
        'post_type' => 'service',
        'posts_per_page'   => 9,
        'orderby' => 'rand',
      ];
      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="<?php echo get_post_meta(get_the_ID(), '_key_selected_icon', true); ?>"></i>
            </div>
            <div class="service-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="text-center">
      <a href="<?php echo get_page_link(5); ?>" class="site-btn">Browse</a>
    </div>
  </div>
</div>
<!-- services section end -->