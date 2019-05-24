  <!-- services card section-->
  <div class="services-card-section spad" id="featuresCard">
      <div class="container">
          <div class="row">
              <?php
                $args = [
                    'post_type' => 'feature',
                    'posts_per_page'   => 3,
                    'orderby' => 'date'
                ];
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post(); ?>
                  <div class="col-md-4 col-sm-6">
                      <div class="sv-card">
                          <div class="card-img">
                              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                          </div>
                          <div class="card-text">
                              <h2><?php the_title(); ?></h2>
                              <p><?php the_content(); ?></p>
                          </div>
                      </div>
                  </div>
              <?php endwhile; ?>
          </div>
      </div>
  </div>
  <!-- services card section end-->