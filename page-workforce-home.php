<?php
/**
* Template Name: Workforce Home New
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

  <div class="row expanded gutter-small content-area" id="workforce">
    
    <div class="row">
      <?php get_sidebar();?>
      
      <div class="columns small-12 medium-12 large-8" style="padding: 0">
        <div class="entry-content" id="main" tabindex="0">

            <?php if ( have_rows( 'wf_slider') ) : ?>
            <div class="slider-wrap-workforce">
              
            <div id="sync1" class="owl-carousel owl-theme" style="z-index: 0;">

              <?php
              //while there are slide items
              while ( have_rows( 'wf_slider') ) : the_row(); ?>
              <?php // ACF Image Object
              
                $image = get_sub_field('wf_slider_image');
                // vars
                $url = $image['url'];
              
              ?>
              <div class="item">
                <div class="row column expanded no-gutter hero" style="background-image: url('<?php echo $url ?>');">
                  <div class="row">
                    <div class="hero-content">
                      
                      <div class="hero-caption">
                        <h2><?php the_sub_field( 'wf_slider_heading' ); ?></h2>
                        <p class="lead"><?php the_sub_field( 'wf_slider_lead_text' ); ?></p>
                        
                    
                          <a href="<?php the_sub_field( 'wf_slider_button_url' ); ?>" class="button"><?php the_sub_field( 'wf_slider_button_text' ); ?></a>
                   

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>

            </div>
            </div>
            <?php endif; //end workforce slider?>

          <div class="row expanded workforce-callout">
           
           <div class="small-12 medium-7 columns">
               <h3><?php the_field('box_1_heading'); ?></h3>
              <p class="description"><?php the_field('box_1_description'); ?></p>
              <a href="<?php the_field('box_1_url');?>" class="button primary" ><?php the_field('box_1_button_text'); ?></a>
            </div>
           
            <div class="small-12 medium-5 columns" style="padding-right: 0">
              <?php
              $box_1_image = get_field('box_1_image');
              // vars
              $url = $box_1_image['url'];
            
              if( !empty($box_1_image) ):   ?>

                <div class="workforce-promo-image" style="background-image: url('<?php echo $box_1_image['url']; ?>');" ></div>
             
              <?php endif; ?>
            </div>

          </div>

          <div class="row expanded workforce-callout">

           <div class="small-12 medium-7 columns">
          <h3><?php the_field('box_2_heading');  ?></h3>
              <p class="description"><?php the_field('box_2_description'); ?></p>
              <a href="<?php the_field('box_2_url');?>" class="button primary" ><?php the_field('box_2_button_text'); ?></a>
            </div>

            <div class="small-12 medium-5 column" style="padding-right: 0">
              <?php //credentials box
              $box_2_image = get_field('box_2_image');
              // vars
              $url = $box_2_image['url'];
             
              if( !empty($box_2_image) ): ?>

             <div class="workforce-promo-image" style="background-image: url('<?php echo $box_2_image['url']; ?>');" ></div>
              <?php endif; ?>
            </div>

          </div>

          <div class="row expanded workforce-callout">

            <div class="small-12 medium-7 column">
                   <h3><?php the_field('box_3_heading');  ?></h3>
              <p class="description"><?php the_field('box_3_description'); ?></p>
              <a href="<?php the_field('box_3_url');?>" class="button primary" ><?php the_field('box_3_button_text'); ?></a>
            </div>
            
            <div class="small-12 medium-5 column" style="padding-right: 0">
              <?php //tuition assistance box
              $box_3_image = get_field('box_3_image');
              // vars
              $url = $box_3_image['url'];
              
              if( !empty($box_3_image) ): ?>
              
             <div class="workforce-promo-image" style="background-image: url('<?php echo $box_3_image['url']; ?>');" ></div>

              <?php endif; ?>
            </div>
          </div>
        
          <div class="callout primary small">
            <h3><?php the_field('box_4_heading'); ?></h3>
            <?php //online training box
            if( !empty($box_4_image) ): ?>
            <img src="<?php echo $box_4_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="64" width="94" class="img-responsive" />
            <?php endif; ?>
            <p class="description"><?php the_field('box_4_description'); ?></p>
            <a href="<?php the_field('box_4_url');?>" class="button primary" ><?php  the_field('box_4_button_text'); ?></a>
          </div>
          <div class="callout primary small">
            
            <h2><?php the_field('box_5_heading');  ?></h2>
            <?php
            if( !empty($box_5_image) ): ?>
            <img src="<?php echo $box_5_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="64" width="94" class="img-responsive" />
            <?php endif; ?>
            <p class="description"><?php the_field('box_5_description');  ?></p>
            <a href="<?php the_field('box_5_url');?>" class="button primary" ><?php  the_field('box_5_button_text'); ?></a>
          </div>
        
  <div data-equalizer data-equalize-by-row="true" data-equalize-on="medium">
          
            <h2>Workforce Updates</h2>
            <?php
            $args =  array (
            'post_type' => 'workforce_news_post',
            'paged' => get_query_var('paged'),
            'posts_per_page'=>4,
            );
            ?>
            <?php
            $query = new WP_Query( $args ); ?>
            <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post();?>
            <?php if ( has_post_thumbnail() ) : ?>
            
            <div class="columns medium-6">
              <div class="callout callout-workforce-highlights primary small" data-equalizer-watch>
                <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_post_thumbnail( 'full', array('class' => 'callout-image')); ?>
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>

            <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
           
            <?php endif; ?>

        </div>

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