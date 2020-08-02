<?php

/*
    ==========================================
     Include scripts
    ==========================================
*/

function main_enqueue() {

	//css

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

	
	//js
     
	wp_deregister_script('jquery');
	wp_register_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js", true, null);
	wp_enqueue_script('jquery');
  

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'main_enqueue');

/*
    ==========================================
     Activate thumbnails
    ==========================================
*/

add_theme_support( 'post-thumbnails' ); 

/*
    ==========================================
     Load more
    ==========================================
*/

add_action( 'wp_footer', 'my_action_javascript' ); 

function my_action_javascript() { ?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {

    var page = 2;
  
    var post_count = jQuery('#posts').data('count');

    var ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>"

    jQuery('#load_more').click(function(){

          var data = {
            'action': 'my_action',
            'page': page
          };

          jQuery.post(ajaxurl, data, function(response) {

            jQuery('#posts').append(response);

            if(post_count == page) {

              jQuery('#load_more').hide();

            }

            page++;

          });

     });
    
	});
	</script> <?php
}


add_action( 'wp_ajax_my_action', 'my_action' );

function my_action() {
  
  $args = array(

    'post_type' => 'post',

    'paged' => $_POST['page'],

  );

  $the_query = new WP_Query( $args ); ?>


  <?php if ( $the_query->have_posts() ) : ?>
 
    
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
      <article><a href="<?php the_permalink(); ?>">

          <?php the_post_thumbnail(); ?>

          <h3><?php the_title(); ?></h3>

          <p class="published"><?php the_time('F jS, Y'); ?></p>

          <p><?php the_excerpt(); ?><span class="more-link">Read more...</span></p>

      </a></article>
		
    <?php endwhile; ?>
   
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>

    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    
<?php endif;

	wp_die(); // this is required to terminate immediately and return a proper response
}

