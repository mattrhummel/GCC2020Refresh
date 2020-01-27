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

<?php if (is_page('success')): ?>
  
     <div class="row expanded gutter-small">

          <?php
          
          $args =  array (
          'post_type' => 'success_stories',
          'order' => 'ASC',
          'orderby' => 'title',
          'posts_per_page'=>-1,
          );
          // the query
          $the_query = new WP_Query( $args ); ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <!-- pagination here -->
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          
        <div class="small-12 medium-6 columns stories">
        
          <div class="card">
      
        <?php // ACF Image Object
              
          $image = get_field('story_image_home_thumb');
          // vars
          $url = $image['url'];
                
        ?>

        <div class="stories-image" style=" background-image: url('<?php the_field('story_image_home_thumb'); ?>');"></div> 
                  
          <div class="card-section" data-equalizer-watch>
            <h3><a href="<?php the_field('video_url'); ?>"><?php the_title(); ?></a></h3>
          </div>
         
         </div>
        
        </div>

          <?php endwhile; ?>
          <!-- end of the loop -->
          <!-- pagination here -->
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

  </div>

  <hr/>

<h2><?php _e('Submit your story', 'gcc-wp-2018'); ?></h2>

<?php echo do_shortcode('[wpforms id="26617" title="false" description="false"]'); ?>

<?php endif; ?>

          <?php  if (is_page('student-activities')):?>
          <div class="row expanded" style="margin-top: 20px;"  data-equalizer data-equalize-on="medium" id="sa-events">
            <?php
            $args =  array (
            'post_type' => 'sa_events',
            'meta_key'      => 'event_date',
            'posts_per_page'=> 4 ,
            'orderby'     => 'meta_value',
            'order'       => 'ASC'
            );
            ?>
            <?php
            $query = new WP_Query( $args ); ?>
            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <div class="small-12 medium-12 large-6 columns">
              <div class="callout primary small"  data-equalizer-watch>
                
                <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>
                <p  style="margin-bottom: 0;"><?php the_field( 'event_date' ); ?></p>
                <p style="margin-bottom: 0;"><?php the_field( 'event_location' ); ?></p>
                <?php if( get_field('event_start_time') ): ?>
                <p><?php the_field('event_start_time'); ?> - <?php the_field('event_end_time'); ?></p>
                <?php endif; ?>
                <p style="margin-bottom: 0;"><?php the_field( 'event_description' ); ?></p>
                <?php if( get_field('event_details') ): ?>
                <a href="<?php echo the_permalink(); ?>" class="button primary"><?php _e('Learn more', 'gcc-wp-2018'); ?></a>
                <?php endif; ?>
              </div>
              
            </div>
            
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no current events to display', 'gcc-wp-2018'); ?></p>
            <?php endif; ?>
            
          </div>
          <div class="row">
            <a class="button expanded primary" href="/student-activities/events">View all events</a>
          </div>
          <?php endif; ?>
          <?php  //donate form for on donate page
          if (is_page('local-scholarship-aid')):?>
          <div class="row" data-equalizer data-equalize-on="medium" id="sa-events">
            <?php // get raw date
            $date = get_field('scholarship_deadline', false, false); ?>
            <?php // make date object
            $date = new DateTime($date); ?>
            <?php
            $args =  array (
            'post_type' => 'local_scholarships',
            'meta_key'      => 'scholarship_deadline',
            'orderby'     => 'meta_value_numb',
            'order'       => 'ASC',
            'posts_per_page'=> -1,
            );
            ?>
            <?php
            $query = new WP_Query( $args ); ?>
            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            
            <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>
            <p><?php the_field( 'scholarship_short_description' ); ?></p>
            <p><strong>Scholarship Deadline:</strong> <?php the_field( 'scholarship_deadline' ); ?></p>
            <?php if( get_field('scholarship_information') ): ?>
            <ul class="accordion" data-accordion data-allow-all-closed="true">
              
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Scholarship Details</a>
                <div class="accordion-content" data-tab-content>
                  
                  <?php the_field( 'scholarship_information' ); ?>
                </div>
              </li>
              
            </ul>
            <?php endif; ?>
            <?php if( get_field('scholarship_application_url') ): ?>
            
            <a href="<?php the_field( 'scholarship_application_url' ); ?>"><?php the_field( 'scholarship_application_button_text' ); ?></a>
            <?php endif; ?>
            <?php if( get_field('scholarship_information_url') ): ?>
            <a href="<?php the_field( 'scholarship_information_url' ); ?>"><?php the_field( 'scholarship_information_button_text' ); ?></a>
            <?php endif; ?>
            <hr>
            
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no scholarships display', 'gcc-wp-2018'); ?></p>
            <?php endif; ?>
            
          </div>
          <?php endif; ?>
          
          <?php  //donate form for on donate page
          if (is_page('donate')):?>
          
          <div id="bbox-root"></div>
          <?php endif; ?>


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