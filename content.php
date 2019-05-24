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
            <a href="<?php echo get_the_author_link(); ?>"><?php the_author(); ?></a>
            <?php
            $tags = get_the_tags();
            if ($tags) :
                foreach ($tags as $tag) {
                    ?><a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name; ?></a>
                <?php
            }
        endif ?>
            <a href="<?php the_permalink(get_the_ID()); ?>"><?php echo get_comments_number(); ?> <?php echo get_comments_number() > 1 ? 'Comments' : 'Comment' ?></a>
        </div>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>
    </div>
</div>