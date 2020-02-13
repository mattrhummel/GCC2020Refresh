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

    <div class="row expanded header-section">

      <div class="row header-container">

        <div class="header-content">

       <div class="columns small-10 medium-10">

      
        <h1 class="entry-title"><?php echo get_cat_name(1); ?></h1>

  
        <div class="crumbs-container">    
        </div>

    </div>

    </div>

  </div>

  </div>
    
</header>

 <div class="row expanded content-area">
  
    <div class="row">

<div class="mobile-sidebar" data-responsive-toggle="example-menu" data-hide-for="large">
   <button class="button expanded mobile-sidebar-button" type="button" data-toggle="example-menu"><?php _e('In this section', 'gcc-wp-2018'); ?></button>

   
</div>

<aside class="column large-4 nav-panel hide-for-print mobile-sidebar" id="example-menu">

    <?php dynamic_sidebar( 'single-widgets' ); ?>

</aside>

  
      <!--Page Content-->

    <div class="columns small-12 large-8 entry-content" id="main" tabindex="0">

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

            <div class="callout primary">
              
              <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

              <p><?php the_date(); ?></p>

            </div>
         
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
