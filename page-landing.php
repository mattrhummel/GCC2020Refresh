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
  
    <div class="spring-save">
    
    <div class="container spring-hero">
      <div class="row">
        
        <div class="medium-7 columns">
          
          <div class="header"><h2><?php the_field( 'row_2_heading' ); ?></h2></div>
          
          <div class="spring-form">
            
            <h3><?php the_field( 'row_2_subheading' ); ?></h3>
            
            <h2><?php the_field( 'row_2_lead' ); ?></h2>
            
            <p><?php the_field('row_2_text') ?></p>
            
          </div>
          
        </div>
        
        <div class="medium-5 columns">
          
          
        </div>
        
      </div>
    </div>
    
  </div> 


<div class="row expanded spring-box" id="content" style="background-image:url(/media/hero.jpg);">
  
  <div class="spring-hero">
    
    <div class="row">
      
      <div class="medium-5 columns">
        
        
        
      </div>
      <div class="medium-7 columns">
        
        <div class="header"><h1><?php the_field( 'row_1_heading' );  ?></h1></div>
        
        <div class="spring-form">
          
          <h2><?php the_field( 'row_1_lead' ); ?></h2>
          
              <h3><?php the_field( 'row_1_subheading' ); ?></h3>
              <?php the_field( 'row_1_form' ); ?>
             
            
          </div>
          
        </div>
        
      </div>
    </div>
    
  </div>


 <div class="spring-skill" style="background-image:url(/media/spring-skill.jpg);">
    
    <div class="spring-hero">
      
      <div class="row">
      
        
        <div class="medium-7 columns">
          
          <div class="header"><h2><?php the_field( 'row_3_heading' ); ?></h2></div>
          
          <div class="spring-form">
            
            <h3><?php the_field( 'row_3_subheading' );  ?></h3>
            
            <h2><?php the_field( 'row_3_lead' ); ?></h2>
            
            <p><?php the_field('row_3_text') ?></p>          
            
          </div>
          
        </div>

             <div class="medium-5 columns">
          
          
          
        </div>
        
      </div>
    </div>
    
  </div> 



 <?php endwhile; // End of the loop. ?>
</article>


<?php
get_footer();