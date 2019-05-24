<?php
get_header(); ?>
<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <?php
                while (have_posts()) : the_post(); ?>
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
                                <a href=""><?php echo get_comments_number(); ?> <?php echo get_comments_number() > 1 ? 'Comments' : 'Comment' ?></a>
                            </div>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Widgets Labs")) : ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="comments">
            <h2>Comments (<?php echo get_comments_number(); ?>)</h2>
            <ul class="comment-list">
                <?php $id = get_the_ID();
                $comments = get_comments('post_id=' . $id);
                foreach ($comments as $comment) { ?>
                    <li>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri() . "/img/avatar/01.jpg"; ?>" alt="">
                        </div>
                        <div class="commetn-text">
                            <h3><?php echo $comment->comment_author . ' | ' . $comment->comment_date . ' | ' . 'Reply'?></h3>
                            <p><?php echo $comment->comment_content; ?></p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <?php
        if (comments_open() || get_comments_number()) :
            comments_template('/templates/comments.php');
        endif;
        ?>
    </div>
</div>
<!-- page section end-->


<?php get_footer(); ?>