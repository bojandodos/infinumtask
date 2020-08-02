<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <button type="submit" role="button" class="search-button"><span class="glyphicon-search"><img src="<?php bloginfo('template_directory'); ?>/icons/ic-search.svg"></span></button>
  <input type="search" class="search-field" placeholder="Search blog" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</form>