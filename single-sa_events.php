<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <header class="hero-section">
    <?php //if the child page doesn't have a featured images
    //gcc_featured_image_on_child(); ?>
    <div class="row expanded hero-section-text">
      <div class="row header-content">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <p><?php the_date(); ?></p>
        <div class="crumbs-container">
          <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
            <?php custom_breadcrumbs();?>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="row expanded content-area gutter-small" >
    
    <div class="row">

      <?php get_sidebar();?>
   
      <div class="columns small-12 medium-12 large-8" style="padding: 0">
      
        <div class="entry-content" id="main">

        <?php
        the_content( sprintf(
        wp_kses(
        /* translators: %s: Name of current post. Only visible to screen readers */
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
        array(
          'span' => array(
            'class' => array(),
          ),
        )
        ),
        get_the_title()
        )
        ); ?>
        <div class="row">

 
               
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

              <p><?php _e('<strong>Event Description: </strong>', 'gcc-wp-2018'); the_field( 'event_description' ); ?></p>

              <p><?php _e('<strong>Event Date: </strong>', 'gcc-wp-2018');  the_field( 'event_date' ); ?></p>

              <p><?php _e('<strong>Event Location: </strong>', 'gcc-wp-2018');  the_field( 'event_location' ); ?></p>

              <?php if( get_field('event_start_time') ): ?>
              <p><?php _e('<strong>Event Time: </strong>', 'gcc-wp-2018'); the_field('event_start_time'); ?>   <?php endif; ?> 
              <?php if( get_field('event_end_time') ): ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?>
                 <?php endif; ?> 
              </p>
              

              <?php if( get_field('event_details') ): ?>

              <?php the_field( 'event_details' ); ?>

            <?php endif; ?>

          </div>
      
      </div>

    </div>
  


    <?php endwhile; // End of the loop. ?>

  </div>
</div>
  </article>
  <?php
  get_footer();