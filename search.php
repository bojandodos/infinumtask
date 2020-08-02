<?php get_header(); ?>

<main>
  <div class="container">
  <h1>Search results for: <?php the_search_query() ?></h1>
    <?php
      global $query_string;
      $query_args = explode("&", $query_string);
      $search_query = array();

      foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
      } // foreach

      $the_query = new WP_Query($search_query);
      if ( $the_query->have_posts() ) : 
      ?>
      <!-- the loop -->

      <section class="articles-home">   

        <div id="posts" data-count="<?php echo ceil($the_query->found_posts/6); ?>"> 

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
        <article><a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail(); ?>

            <h3><?php the_title(); ?></h3>

            <p class="published"><?php the_time('F jS, Y'); ?></p>

            <p><?php the_excerpt(); ?><span class="more-link">Read more...</span></p>

            </a></article>

        <?php endwhile; ?>

        </div>

        <div class="load-more-container">

            <button id="load_more">Load more</button>

        </div>

      </section>
      <!-- end of the loop -->

      <?php wp_reset_postdata(); ?>

  <?php else : ?>

    <p>Sorry, no posts matched your criteria.</p>
    
    
  <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>