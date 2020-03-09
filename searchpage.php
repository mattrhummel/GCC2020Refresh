<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>

<div class="row">
  <div class="columns small-12">
      <div class="mobile-sidebar" data-responsive-toggle="example-menu" data-hide-for="large">
         <button class="button expanded mobile-sidebar-button" type="button" data-toggle="example-menu"><?php _e('In this section', 'gcc-wp-2018'); ?>
         </button> 
      </div>
</div>
</div>

  <div class="row content-area">
    
      <?php get_sidebar();?>

      <div class="columns small-12 medium-12 large-8 float-right">
      
        <div class="entry-content" id="main">
          
        
          
       			<?php get_search_form(); ?>


          
          </div><!--.pagecontent-->
     
        </div>

    </div>

      </article>


        <div class="row">

          <div class="small-12 columns entry-footer">

                  <footer>
              <?php $u_time = get_the_time('U'); 
$u_modified_time = get_the_modified_time('U'); 
if ($u_modified_time >= $u_time + 86400) { 
echo "<p>Last modified on "; 
the_modified_time('F j, Y'); 
"</p> "; }  ?>
          <?php gcc_wp_2018_entry_footer(); ?>
          </footer><!-- .entry-footer -->

        </div>

    </div>

        <?php endwhile; // End of the loop. ?>

      <?php
      get_footer();