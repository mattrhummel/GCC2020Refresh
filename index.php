<?php
/**
 * The template for displaying all post.
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
get_header();?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


  <header>

    <div class="row expanded hero-section-text">

      <div class="row header-content">
     
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="post-meta">
      <?php if ( 'post' === get_post_type() ) : ?>
    <p><strong></span><?php gcc_wp_2018_posted_on();
  ?> | <?php gcc_wp_2018_entry_footer(); ?> </strong></p>
  <?php endif; ?>
</div>
  
        <div class="crumbs-container">
     
            <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
              <?php custom_breadcrumbs();?>
            </nav>
    
        </div>

    </div>

  </div>
    
</header>

 <div class="row expanded content-area">
  
    <div class="row">

      <?php get_sidebar();?>

      
      <!--Page Content-->

    <div class="small-12 medium-9 entry-content" id="main" tabindex="0">

      <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

      $args =  array (

      'post_type' => 'post',
      'posts_per_page'=>10,
      'paged'          => $paged
      );
      ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>

      <div class="row latest-post">

          <div class="medium-12 columns">
              
              <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

              <p><?php the_date(); ?></p>
         
          </div>

      </div>

<?php endwhile;  ?>


      <?php wp_reset_postdata(); ?>

      <?php else : ?>

      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>

      <?php endif; ?>


      <div class="nav-previous alignleft"><?php next_posts_link( '<span class="fa fa-chevron-left" aria-hidden="true" style="padding-right: .5rem;"></span>Older posts' ); ?></div>
      <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts <span class="fa fa-chevron-right" aria-hidden="true" style="padding-left: .5rem;"></span>' ); ?>
      </div>



</div>


      </div>

    </div>

</article>

<?php
get_footer();
