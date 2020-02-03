<?php
/**
* Default page template.
*
*
* Template Name: Landing Page
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>

    <?php if ( have_rows( 'landing_page_row_content' ) ) : ?>
   
    <?php while ( have_rows( 'landing_page_row_content') ) : the_row(); ?>

     <?php //the_sub_field( 'sub_field_name' ); ?>
      
  <?php // ACF Image Object
  $image     = get_sub_field( 'promo_image' );
  $url       = $image['url'];
  
  ?>

<?php //if content to the left ?>
<div class="promo-box" id="content" style="background-image: url('<?php echo $url ?>');">
  
  <div class="container promo-hero">

    <?php if( get_sub_field('promo_alignment') == 'left' ) { ?>
  
    <div class="row">
        
        <div class="medium-7 columns">
          
          <div class="header">
            <h2><?php the_sub_field( 'promo_heading' ); ?></h2>
          </div>
          
          <div class="promo-content">

             <h3><?php the_sub_field( 'promo_subheading' ); ?></h3>
            
          <p class="lead"><?php the_sub_field( 'promo_lead' ); ?></p>
            
            <?php the_sub_field('promo_text') ?>

            <?php the_sub_field( 'promo_form_shortcode' ); ?>



              <a href="<?php the_sub_field( 'promo_button_url' ); ?>" class="button"><?php the_sub_field( 'promo_button_text' ); ?></a>
            
          </div>
          
        </div>
        
          <div class="medium-5 columns">
            
            
          </div>
        
      </div>


    <?php  } elseif (get_sub_field('promo_alignment') == 'right') { ?>

    <div class="row">

          <div class="medium-5 columns">
            
            
          </div>
        
        <div class="medium-7 columns">
          
          <div class="header">
            <h2><?php the_sub_field( 'promo_heading' ); ?></h2>
          </div>
          
          <div class="promo-content">
            
            <h3><?php the_sub_field( 'promo_subheading' ); ?></h3>
            
            <p class="lead"><?php the_sub_field( 'promo_lead' ); ?></p>
            
            <?php the_sub_field('promo_text') ?>


            <?php the_sub_field( 'promo_form_shortcode' ); ?>


              <a href="<?php the_sub_field( 'promo_button_url' ); ?>" class="button"><?php the_sub_field( 'promo_button_text' ); ?></a>
            
          </div>
          
        </div>
      
        
      </div>

      <?php } ?>


    </div>

  </div>

<?php endwhile; ?>

 <?php endif; ?>

 <?php endwhile; // End of the loop. ?>
</article>


<?php
get_footer();