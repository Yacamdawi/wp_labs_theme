<!-- Services section -->
<div class="services-section spad">
  <div class="container">
    <div class="section-title dark">
      <h2><?php echo strongTitle('titre-services'); ?></h2>
    </div>
    <div class="row">
      <?php
      $args = [
        'post_type' => 'service',
        'posts_per_page' => 6,
        'paged' => $paged
      ];
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
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
    <!-- <div class="text-center">
      <a href="" class="site-btn">Display all</a>
    </div> -->
    <div class="page-pagination">
      <?php
      echo paginate_links(array(
        'format'  => 'page/%#%',
        'current' => $paged,
        'total'   => $query->max_num_pages,
        'prev_text'       => __('&laquo; Précedent'),
        'next_text'       => __('Suivant &raquo;')
      ));
      ?>
    </div>
  </div>
</div>
<!-- services section end -->