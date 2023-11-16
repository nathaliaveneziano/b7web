<form action="<?= get_site_url(); ?>" method="get">
  <input type="search" name="s" placeholder="<?= __('Search Here', 'minimag'); ?>" value="<?php the_search_query(); ?>" class="search-input">
  <input type="submit" value="<?= __('Search', 'minimag'); ?>" class="search-submit">
</form>