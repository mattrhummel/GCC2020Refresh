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


  <div class="row expanded gutter-small content-area">
    <div class="row">
      <?php get_sidebar();?>
      
      <div class="columns small-12 medium-12 large-8">
        <div class="entry-content" id="main" tabindex="0">
          <div class="owl-carousel" style="z-index: 0; height: 640px;">

  <div class="item" style="height: 640px;">
    
    <div class="row column expanded no-gutter hero" style="background-image:url('https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/revslider/workforce-nov-4/workforce-spring-2020-class-schedule.jpg'); ">

  <div class="row">
    
    <div class="hero-content">
              
         <div class="hero-caption">

              <h2>Get started today!</h2>
              <p class="lead">New Workforce January – June 2020 class schedule </p>
              
              <p>
                <a href="https://germanna.augusoft.net/" class="button">Register Online</a>
             </p>

             </div>

    </div>
  
  </div>

</div>

</div>

  <div class="item">
    
    <div class="row column expanded no-gutter hero" style="background-image:url('https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/revslider/workforce-nov-4/fastforward-featured-image.jpg')">

  <div class="row">
    
    <div class="hero-content">
              
         <div class="hero-caption">

              <h2>FastForward tuition assistance </h2>
              <p class="lead">Change your future in weeks. Not years.</p>
              
              <p>
                <a href="/workforce/tuition-assistance/" class="button">Learn More</a>
             </p>

             </div>

    </div>
  
  </div>

</div>

</div>

</div>


          <div class="callout primary small">
            
            <h3><?php the_field('box_1_heading'); ?></h3>
            <div class="small-12 medium-6 columns">
              <?php
              $box_1_image = get_field('box_1_image');
              // vars
              $url = $box_1_image['url'];
              $title = $box_1_image['title'];
              $alt = $box_1_image['alt'];
              $caption = $box_1_image['caption'];
              // thumbnail
              $size = 'large';
              $thumb = $box_1_image['sizes'][ $size ];
              $width = $box_1_image['sizes'][ $size . '-width' ];
              $height = $box_1_image['sizes'][ $size . '-height' ];
              if( !empty($box_1_image) ):   ?>
              <img src="<?php echo $box_1_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
              <?php endif; ?>
            </div>
            <div class="small-12 medium-6 columns">
              
              <p class="description"><?php the_field('box_1_description'); ?></p>
              <a href="<?php the_field('box_1_url');?>" class="button primary" ><?php the_field('box_1_button_text'); ?></a>
            </div>
          </div>
          <div class="callout primary small">
            <h2><?php the_field('box_2_heading');  ?></h2>
            <div class="small-12 medium-6 columns">
              <?php //credentials box
              $box_2_image = get_field('box_2_image');
              // vars
              $url = $box_2_image['url'];
              $title = $box_2_image['title'];
              $alt = $box_2_image['alt'];
              $caption = $box_2_image['caption'];
              // thumbnail
              $size = 'large';
              $thumb = $box_2_image['sizes'][ $size ];
              $width = $box_2_image['sizes'][ $size . '-width' ];
              $height = $box_2_image['sizes'][ $size . '-height' ];
              if( !empty($box_2_image) ): ?>
              <img src="<?php echo $box_2_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
              <?php endif; ?>
            </div>
            <div class="small-12 medium-6 columns">
              <p class="description"><?php the_field('box_2_description'); ?></p>
              <a href="<?php the_field('box_2_url');?>" class="button primary" ><?php the_field('box_2_button_text'); ?></a>
            </div>
          </div>
          <div class="callout primary small">
            <h3><?php the_field('box_3_heading');  ?></h3>
            <div class="small-12 medium-6 columns">
              <?php //tuition assistance box
              $box_3_image = get_field('box_3_image');
              // vars
              $url = $box_3_image['url'];
              $title = $box_3_image['title'];
              $alt = $box_3_image['alt'];
              $caption = $box_3_image['caption'];
              // thumbnail
              $size = 'large';
              $thumb = $box_3_image['sizes'][ $size ];
              $width = $box_3_image['sizes'][ $size . '-width' ];
              $height = $box_3_image['sizes'][ $size . '-height' ];
              if( !empty($box_3_image) ): ?>
              <img src="<?php echo $box_3_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
              <?php endif; ?>
            </div>
            <div class="small-12 medium-6 columns">
              <p class="description"><?php the_field('box_3_description'); ?></p>
              <a href="<?php the_field('box_3_url');?>" class="button primary" ><?php the_field('box_3_button_text'); ?></a>
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

        
        <div class="simple-subscription-form">
          <form action="<?php the_field('sign_up_box_action_url', 113);?>" method="post" >
            <div class="row expanded">
              
              <h2><?php the_field('sign_up_box_heading', 113);?></h2>
              <p><?php the_field('sign_up_box_description', 113); ?></p>
              <div class="input-group">
                <span class="input-group-label">
                  <span class="fa fa-envelope"></span>
                </span>
                <input class="input-group-field" type="email" placeholder="<?php esc_html_e('Email', 'gcc-wp-2018'); ?>" required>
                <input type="submit" name="go" value="<?php the_field('sign_up_box_button_text', 113)?>" title="<?php the_field('sign_up_box_button_text',  113)?>" class="button secondary"/>
              </div>
            </div>
          </form>
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