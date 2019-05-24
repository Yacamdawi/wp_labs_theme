<!-- Team Section -->
<div class="team-section spad">
  <div class="overlay"></div>
  <div class="container">
    <div class="section-title">
      <h2><?php echo strongTitle('titre-team'); ?></h2>
    </div>
    <div class="row">
      <?php
      $args = [
        'post_type' => 'team',
        'posts_per_page'   => 3,
        'orderby' => 'rand'
      ];
      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-sm-4">
          <div class="member">
            <img src=<?php echo get_the_post_thumbnail_url(); ?> alt="">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_content(); ?></h3>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<!-- Team Section end-->