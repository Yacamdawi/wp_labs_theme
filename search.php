<?php get_header(); ?>
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <?php
                $search = get_search_query();
                $args = array(
                    's' => $search,
                    'post_type' => 'post'
                );
                $query = new WP_Query($args);
                
                if ($query->have_posts()) {
                    _e("<h2 style='font-weight:bold;color:#000;margin-bottom:3rem;'>Search Results for: " . get_query_var('s') . "</h2>");
                    while ($query->have_posts()) {
                        $query->the_post(); 
                        get_template_part('content', get_post_format());
                        ?>
                    <?php
                }
                ?>
                    <div class="page-pagination">
                        <?php
                        echo paginate_links(array(
                            'format'  => '?s=' . $search . '&submit=/page/%#%',
                            'current' => $paged,
                            'total'   => $query->max_num_pages,
                            'prev_text'       => __('&laquo; Précedent'),
                            'next_text'       => __('Suivant &raquo;')
                        ));
                        ?>
                    </div>
                <?php
            } else {
                ?>
                    <h2 style='font-weight:bold;color:#000;margin-bottom:3rem;'>Nothing Found</h2>
                    <div class="alert alert-info">
                        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                    </div>
                <?php } ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>