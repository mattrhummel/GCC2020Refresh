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
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row expanded content-area">
    
    <div class="row">

      <?php get_sidebar();?>

      <div class="columns small-12 medium-12 large-8">
      
        <div class="entry-content" id="main">
          
          <?php  //donate form for on donate page
          if (is_page('international-admissions')):?>
          <script src="https://studyinthestates.dhs.gov/assets/widget/sits-widget.js" type="text/javascript"></script>
          <?php endif; ?>
          
          <?php
          the_content();
          ?>

         <footer class="entry-footer">
                <?php $u_time = get_the_time('U'); 
$u_modified_time = get_the_modified_time('U'); 
if ($u_modified_time >= $u_time + 86400) { 
echo "<p>Last modified on "; 
the_modified_time('F j, Y'); 
"</p> "; }  ?>
          <?php gcc_wp_2018_entry_footer(); ?>
          </footer><!-- .entry-footer -->

          </div>
          
          </div><!--.pagecontent-->
     
        </div>
        <?php endwhile; // End of the loop. ?>

   

      </article>
      <?php
      get_footer();