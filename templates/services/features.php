<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2><?php echo strongTitle('titre-features'); ?></h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <?php
                $args = [
                    'post_type' => 'feature',
                    'posts_per_page'   => 6,
                    'orderby' => 'rand',
                ];
                $i = 0;
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post();
                    if ($i < 3) :
                        ?>
                        <div class="icon-box light left">
                            <div class="service-text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="<?php echo get_post_meta(get_the_ID(), '_key_selected_icon_feature', true); ?>"></i>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php
                $i += 1;
            endwhile; ?>
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri() . '/img/device.png'; ?>" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                <?php
                // $query = new WP_Query($args);
                $i = 0;
                while ($query->have_posts()) : $query->the_post();
                    if ($i >= 3) :
                        ?>
                        <div class="icon-box light left">
                            <div class="service-text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="<?php echo get_post_meta(get_the_ID(), '_key_selected_icon_feature', true); ?>"></i>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php
                $i += 1;
            endwhile;
            ?>
            </div>
        </div>
        <div class="text-center mt100">
            <a href="#featuresCard" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->