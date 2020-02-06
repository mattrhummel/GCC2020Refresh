<?php
/**
* Default page template.
*
*
* Template Name: Landing Page Columns
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="landing-page">

  <?php
  while ( have_posts() ) : the_post(); ?>

   <header>

      <div class="row expanded landing-header" style="background-image:url('https://gccstaging1.wpengine.com/wp-content/uploads/revslider/highlight-carousel511/fall-enrollment-slide-2019.jpg');">

        <div class="landing-header-container">

          <div class="row landing-header-content">
         
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

        </div>

      </div>
    
  </header>

  <div class="entry-content">
    
    <?php if ( have_rows( 'landing_page_row_content' ) ) : ?>
   
    <?php while ( have_rows( 'landing_page_row_content') ) : the_row(); ?>

     <?php //the_sub_field( 'sub_field_name' ); ?>
      

<?php //if content to the left ?>
<div class="row expanded">
  

  
    <div class="row box-row left" data-equalizer data-equalize-on="medium" id="boxes">
        
        <div class="medium-12 large-6 columns">

          <div class="box-content" data-equalizer-watch> 
          
          <div class="box-header">
            <h2><?php the_sub_field( 'promo_heading' ); ?></h2>
          </div>
          
          <h3><?php the_sub_field( 'promo_subheading' ); ?></h3>
            
          <p class="lead"><?php the_sub_field( 'promo_lead' ); ?></p>
            
            <?php the_sub_field('promo_text') ?>

            <?php the_sub_field( 'promo_form_shortcode' ); ?>

              <a href="<?php the_sub_field( 'promo_button_url' ); ?>" class="button primrary"><?php the_sub_field( 'promo_button_text' ); ?></a>
            
         </div>

      </div>
        
          <div class="medium-12 large-6 columns">

            <div class="box-image-container" data-equalizer-watch>

              <?php // ACF Image Object
               $image     = get_sub_field( 'promo_image' );
                $url       = $image['url'];
  
              ?>
            
            <div class="box-image" style="background-image: url('<?php echo $url ?>');"></div>
            
          </div>

        </div>
        
      </div>

</div>

<?php endwhile; ?>

 <?php endif; ?>

 <?php endwhile; // End of the loop. ?>

 </div>

</div>

</article>


<?php
get_footer();