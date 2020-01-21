<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Pathways List
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>

  <div class="row expanded content-area">
    <div class="small-12 medium-12 large-9 float-left columns" >
      
      <?php // if the page has a featured image
      
      if  (has_post_thumbnail( ) )  { ?>
      
      <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('class' => 'lazy'));  ?>
      </div>

      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      
      <div class="entry-content" id="main" tabindex="0">

      <?php $post_type = 'pathways';
        // Get all the taxonomies for this post type
        $taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );
        foreach( $taxonomies as $taxonomy ) :
        // Gets every "category" (term) in this taxonomy to get the respective posts
        $terms = get_terms( $taxonomy );
        ?>
        
        <?
        foreach( $terms as $term ) : ?>
        <?$posts = new WP_Query( "taxonomy=program_category&term=$term->name&posts_per_page=-1&orderby=title&order=ASC" ); ?>
        
        <h2><?php
        //gets the title of the term(category)
        echo $term->name; ?></h2>

        <p><?php 
        //get the description of the term(category)
        echo $term->description; ?></p> 

        <?php if( $posts->have_posts() ): ?>

          <ul>
            <? while( $posts->have_posts() ) : $posts->the_post();
            //Do you general query loop here
            ?>
            <li><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
          </ul>
        
          <?php endif; ?>
            
          <? endforeach;
            endforeach;
          ?>

         <footer class="entry-footer">
            <?php gcc_wp_2018_entry_footer(); ?>
         </footer><!-- .entry-footer -->

      </div>
    
    </div>

    <?php get_sidebar();?>
    
    </div><!--.pagecontent-->
 
 
    </article>
    <?php
    get_footer();