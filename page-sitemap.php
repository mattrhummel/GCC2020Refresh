<?php
//Names the page template for each section
/*
Template Name: Site Map
*/
get_header(); ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 <?php
 	while ( have_posts() ) : the_post(); ?>

  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>

  <div class="row gutter-small expanded content-area">
    <div class="row collapse">
    <div class="columns small-12">
      <div class="entry-content" id="main" tabindex="0">

          <?php
              the_content();
           ?>

           <?php  ?>



              </div>

         </div>

    </div>



      <footer class="entry-footer">
        <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->


 		</div>

 <?php endwhile; // End of the loop. ?>

 </article>

 <?php
 get_footer();
