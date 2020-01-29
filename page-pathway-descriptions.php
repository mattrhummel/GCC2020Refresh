<?php
/*
Template Name: Pathway Descriptions
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
  while ( have_posts() ) : the_post(); ?>

    <?php //Page Heading
    get_template_part( 'template-parts/content', 'page-heading' );
    ?>

    <!--Page Content-->
    <div class="row gutter-small expanded content-area">

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

      </div>
  </div>

    </div><!--.pagecontent-->

</div>

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
