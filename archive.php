<?php get_header(); ?>
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <h1><?php echo 'Recherche pour: ' . get_query_var('tag') . get_query_var('category_name') ?></h1>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <div class="post-date">
                                <h2><?php echo the_time('d'); ?> </h2>
                                <h3><?php echo the_time('M'); ?> <?php the_time('Y'); ?></h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <div class="post-meta">
                                <a href=""><?php the_author(); ?></a>
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $tag) {
                                        ?><a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name . ' '; ?></a><?php }
                                                                                        } ?>
                                <a href="<?php the_permalink(get_the_ID()); ?>"><?php echo get_comments_number(); ?> <?php echo get_comments_number() > 1 ? 'Comments' : 'Comment' ?></a>
                            </div>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>

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
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>