<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package gccwp-2018
*/
get_header(); ?>

<?php
  while ( have_posts() ) : the_post(); ?>

  <header>

    <div class="row expanded header-section">

      <div class="row header-container">

        <div class="header-content">

       <div class="columns small-10 medium-10">

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  
        <div class="crumbs-container">  

            <p><?php echo get_the_date();  ?></p>
              
        </div>

    </div>

    </div>

  </div>

  </div>
    
</header>

  <div class="row expanded content-area gutter-small" >
    
    <div class="row">

    <div class="mobile-sidebar" data-responsive-toggle="example-menu" data-hide-for="large">
      
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="example-menu"><?php _e('In this section', 'gcc-wp-2018'); ?></button>
  
   </div>

    <aside class="columns large-4 nav-panel hide-for-print mobile-sidebar" id="example-menu">

      <?php dynamic_sidebar( 'single-widgets' ); ?>

   </aside>

      <div class="columns small-12 medium-12 large-8">
      
        <div class="entry-content" id="main">
        
        <?php
        the_content();?>

<?php the_title( '<h1>', '</h1>' ); ?>  

<p class="program-lead"><?php the_field( 'program_lead' ); ?><p>

<div><?php the_field( 'program_description' ); ?></div>

<!--program details-->
<div class="callout small primary">

<h2>Program Details</h2>

  <div class="row expanded">

    <div class="small-12 medium-5 columns">

<p style="margin-bottom: 0; paddin-bottom: 0;"><strong>Type of Degree: </strong><?php the_field( 'type_of_degree' ); ?></p>
 
<p style="margin-bottom: 0; paddin-bottom: 0;"><strong>Number of Credits: </strong><?php the_field( 'number_of_credits' ); ?></p>

<?php
  $field = get_field_object( 'online_program' );
  $value = $field['value'];
  $label = $field['choices'][ $value ];
?>
<p  style="margin-bottom: 0; paddin-bottom: 0;"><strong>Online Program</strong>: <?php echo esc_html($label); ?></p>

<p style="margin-bottom: 0; paddin-bottom: 0;"><strong>Program Cost</strong>: <?php the_field( 'program_cost' ); ?></p>

<?php
  $field = get_field_object( 'oer-textbooks-required' );
  $value = $field['value'];
  $label = $field['choices'][ $value ];
?>

<p style="margin-bottom: 0; paddin-bottom: 0;"><strong>Textbooks requied:</strong> <?php echo esc_html($label); ?></p>

<?php
  $field = get_field_object( 'financial_aid_eligible' );
  $value = $field['value'];
  $label = $field['choices'][ $value ];
?>

<p  style="margin-bottom: 0; paddin-bottom: 0;"><strong>Financial Aid Eligible:</strong> <?php echo esc_html($label); ?></p>

<?php
$field = get_field_object( 'program_time' );
$value = $field['value'];
$label = $field['choices'][ $value ];
?>

<p  style="margin-bottom: 0; paddin-bottom: 0;"><strong>Program Time:</strong> <?php echo esc_html($label); ?></p>

<?php
$field = get_field_object( 'stackable' );
$value = $field['value'];
$label = $field['choices'][ $value ];
?>
<p  style="margin-bottom: 0; paddin-bottom: 0;"><strong>Stackable:</strong> <?php echo esc_html($label); ?></p>

<p style="margin-bottom: 0; paddin-bottom: 0;"><strong>Program Dean: </strong><?php the_field( 'program_dean' ); ?></p>

<p  style="margin-bottom: 0; paddin-bottom: 0;"><strong>Locations: </strong></p>
<?php
$locations = get_field('locations');

if( $locations ): ?>

  <ul class="list-style-none">

    <?php foreach( $locations as $location ): ?>
  
        <li><?php echo $location; ?> </li>

    <?php endforeach; ?>

</ul>
<?php endif; ?>

</div>

<div class="small-12 medium-7 columns">

  <div class="flex-video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/N9RrAbga3bM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

</div>

</div>

</div><!--.programdetails-->


<div class="row expanded" data-equalizer data-equalizer-mq="medium-up">

  <div class="small-12 medium-6 columns">

      <div class="callout secondary small" data-equalizer-watch>

      <h2>Curriculum Details</h2>

      <p>For the most up-to-date information about this program, including courses, credits, and other requirements, please refer to our College Catalog.</p>

      <a href="<?php the_field( 'program_curriculum_url' ); ?>" class="button secondary"><?php _e('View Curriculum', 'gcc-wp-2018') ?></a>
        
      </div>

  
  </div>
  
  <div class="small-12 medium-6 columns">

      <div class="callout secondary small" data-equalizer-watch>

        <h2>Career Coach</h2>

        <p>Learn more about a career in this field, how much it typically pays, what the demand is, and how your education can help you become qualified.</p>

        <a href="<?php the_field( 'career_coach_url' ); ?>" class="button secondary"><?php _e('Browse Career Information', 'gcc-wp-2018') ?></a>
        
      </div>
    
  </div>

</div>

<?php if( have_rows('testimonial') ): ?>
    <?php while( have_rows('testimonial') ): the_row(); 

        ?>
          <div class="testimonial">
             
            <p class="lead"><?php the_sub_field('testimonial_text'); ?></p>
                 
            <p class="testimonial-name">- <?php the_sub_field( 'testimonial_name' ); ?></p> 
              
          </div>

          <style type="text/css">
              .testimonial {
                  background-color: #f5f5f5;
                  padding:  1.4rem;
              }
              .testimonial-name {
                color:  #666666;
                font-size:  1.2rem;
              }
          </style>

        <?php endwhile; ?>
        <?php endif; ?>

           </div>

              </div>

        </div>
        </div>
        </div>
        </div>

</article>
<?php endwhile; // End of the loop. ?>

<?php
get_footer();