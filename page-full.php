<?php
//Names the page template for each section
/*
Template Name: Full Width
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>

  <div class="row gutter-small expanded content-area">
    <div class="row">
    <div class="columns small-12 medium-8">
      <div class="entry-content" id="main" tabindex="0">
    
        <?php
        the_content();
        ?>

          <?php if (is_page('40255')) : ?>

          <?php
          $args =  array (
          'post_type' => 'bhm_events',
          'meta_key'      => 'event_date',
          'orderby'     => 'meta_value',
          'order'       => 'ASC',
          'posts_per_page'=> -1,
          );
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
              
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

              <p style="margin-bottom: 0;"><?php the_field( 'event_date' ); ?></p>

              <p style="margin-bottom: 0;"><?php the_field( 'event_location' ); ?></p>

              <?php if( get_field('event_start_time') ): ?>
              <p><?php the_field('event_start_time'); ?>   <?php endif; ?> 
              <?php if( get_field('event_end_time') ): ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?>
                 <?php endif; ?> 
              </p>

              <?php if( get_field('event_details') ): ?>
              
                       <?php the_field( 'event_details' ); ?>

              <?php endif; ?>
            <hr/>
          
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no events to display', 'gcc-wp-2018'); ?></p>
        <?php endif; ?>
 


        <?php endif; ?>
      </div>
    </div>

    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
    </footer><!-- .entry-footer -->

    </div>

    </div>
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();