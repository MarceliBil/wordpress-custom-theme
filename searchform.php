<form action="/" method="get" class="search__form">
    <label for="search"></label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="szukaj w serwisie..." required />
    <button name="action" value="search" class="search__button"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="search-icon"></button>
</form>