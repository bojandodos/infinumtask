<?php get_header(); ?>

<main>
<?php 
if (have_posts()) {
    while (have_posts()) {
        the_post();
    $thumb = get_the_post_thumbnail_url(); ?> 
    <div class="single-intro" style="background-image: url('<?php echo $thumb;?>')">
        <div class="single-intro-overlay">
            <div class="single-intro-content">
                <h1><?php the_title(); ?></h1>
                <div class="author-info">
                <img src="<?php bloginfo('template_directory'); ?>/icons/ic-writer.svg" alt=""><span><?php the_author(); ?></span>
                </div>
            </div>
        </div>
        <a class="back-to-home-link" href="<?php echo get_home_url(); ?>">Back to blog</a>
    </div>
    <div class="container">
        <div class="single-content">
            <?php the_content(); ?>
        </div>
    </div>  
    <?php 
    } // end while
  } // end if
?>  
    <section class="rand-post">
        <h2 class="more-magic-title">More magic</h2>
        <div class="container">
            <?php 

                $args = array(
                    'post_type' => 'post',
                    'orderby'   => 'rand',
                    'posts_per_page' => 1,
                );

                $the_query = new WP_Query( $args ); ?>


                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     
                    <div class="rand-post-left">

                        <?php the_post_thumbnail(); ?>

                    </div>
                   
                    <div class="rand-post-right">

                        <h3><?php the_title(); ?></h3>

                        <?php the_excerpt(); ?>

                        <a href="<?php the_permalink(); ?>"><span class="more-link">Read more...</span></a>

                    </div>   

                <?php endwhile; ?>
                        
                <?php wp_reset_postdata(); ?>
                    
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>