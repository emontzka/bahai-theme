<form action="/" method="get" class="search-form">
    <label for="search"><span class="screen-reader-text">Search for:</span></label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class="button primary" type="submit" alt="Search" value="Search" />
</form>