<form role="search" method="get" id="searchform" class="sidebar__sidebar-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="sidebar__sidebar-input" type="text" placeholder="Поиск..." value="<?php echo get_search_query(); ?>" name="s" id="s">
    <button class="sidebar__sidebar-button" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><i class="icon-search"></i></button>
</form>