<form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="s">Search for</label>
    <input type="text" class="field" name="s" placeholder="Search a post" value="<?php echo get_search_query(); ?>" />
    <button type="submit" class="search-btn" name="submit"><i class="flaticon-026-search"></i></button>
</form>