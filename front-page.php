<?php get_header(); ?>

<main>
                <div class="container">
                    <section class="home-intro"> 
                        <h1 class="main-header-home">The Unicorn & a Duck</h1>
                        <div class="home-search">
                            <?php get_search_form(); ?>
                        </div>
                    </section> 
                    <section class="featured-article">
                        <div class="featured-article-thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?>/images/img-featured.png">
                        </div>
                        <div class="featured-article-content">
                            <?php

                                $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                                'post__in' => array(44)
                                );

                                $the_query = new WP_Query( $args ); ?>

                                <?php if ( $the_query->have_posts() ) : ?>

                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                        <p class="published"><?php the_time('F jS, Y'); ?></p>
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_excerpt(); ?>... <a href="<?php the_permalink(); ?>"><span class="more-link">Read more</span></a></p>

                                   <?php endwhile; ?>
                            
                            
                            <?php wp_reset_postdata(); ?>
                        
                        <?php else : ?>

                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

                          <?php endif; ?>

                           
                        </div>
                    </section>
                    <section class="articles-home">

                        <?php 

                        $args1 = array(
                            'post_type' => 'post',
                            'post_per_page' => -1,
                        );
                        $the_query = new WP_Query( $args1 ); 


                        $args = array(
                            'post_type' => 'post',
                            'paged' => 1,
                        );

                        $the_query = new WP_Query( $args ); ?>

                        <div id="posts" data-count="<?php echo ceil($the_query->found_posts/6); ?>">                    

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

                            <?php endif; ?>

                        </div> 

                        <div class="load-more-container">
                            <button id="load_more">Load more</button>
                        </div>

                    </section>
                </div>
            </main>
<?php get_footer(); ?>