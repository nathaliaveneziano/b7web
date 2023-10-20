<form action="<?= get_site_url(); ?>" method="get">
  <input type="search" name="s" placeholder="Search Here" value="<?php the_search_query(); ?>" class="search-input">
  <input type="submit" value="Search" class="search-submit">
</form>