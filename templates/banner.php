<!-- Intro Section -->
<div class="hero-section">
  <div class="hero-content">
    <div class="hero-center">
      <img src="<?php echo get_theme_mod('logo-banner-image', __("Cette image s'affiche au mileu du banner")); ?>" alt="">
      <!-- "/img/big-logo.png" -->  
      <p><?php echo bloginfo('description'); ?></p>
    </div>
  </div>
  <!-- slider -->
  <div id="hero-slider" class="owl-carousel">
    <div class="item  hero-item" data-bg=<?php echo get_theme_mod('image-carousel-1'); ?>></div>
    <div class="item  hero-item" data-bg=<?php echo get_theme_mod('image-carousel-2'); ?>></div>
  </div>
</div>
<!-- Intro Section -->