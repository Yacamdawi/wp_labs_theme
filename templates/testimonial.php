<!-- Testimonial section -->
<div class="testimonial-section pb100">
  <div class="test-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-4">
        <div class="section-title left">
          <h2><?php echo strongTitle('titre-clients'); ?></h2>
        </div>
        <div class="owl-carousel" id="testimonial-slide">
          <?php
          $args = [
            'post_type' => 'client',
            'orderby' => 'rand'
          ];
          $query = new WP_Query($args);
          while ($query->have_posts()) : $query->the_post(); ?>
            <div class="testimonial">
              <span>‘​‌‘​‌</span>
              <p><?php the_content(); ?></p>
              <div class="client-info">
                <div class="avatar">
                  <img src=<?php echo get_the_post_thumbnail_url(); ?> alt="">
                </div>
                <div class="client-name">
                  <h2><?php the_title(); ?></h2>
                  <p><?php echo get_post_meta(get_the_ID(), '_key_description_client', true); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial section end-->