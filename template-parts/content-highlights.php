<?php
//highlights section
$highlights_heading = get_field('highlights_heading');
 ?>


<div id="highlights" class="row expanded" data-equalizer>

<div class="row">

<div class="highlights-content">

<h2  class="text-center"><?php the_field('highlights_heading'); ?></h2>

<div id="4080701046" class="large-8 columns collapse">

    

  <?php

  $args =  array (

  'post_type' => 'post',
  'posts_per_page'=>10

  );
  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>

    <?php if ( has_post_thumbnail() ) : ?>

      <div class="row latest-post">
      <div class="medium-12 columns">
      
       <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

       <p><?php the_date(); ?></p>

      </div>
      </div>

    <?php else: ?>

      <div class="row latest-post">
      <div class="medium-12 columns">
      <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   <p><?php the_date(); ?></p>

      </div>
      </div>

<?php endif; ?>

<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else : ?>

	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>

<?php endif; ?>


    <a href="<?php esc_html_e('/blog/', 'gcc-wp-2018' ); ?>" class="button expanded"><?php esc_html_e('View all Highlights', 'gcc-wp-2018' ); ?></a>


</div>

<div class="large-4 columns collapse">

<aside class="trending">
  <div class="widget">
    
    <div class="events-calendar">
    
    <a href="https://calendar.activedatax.com/germanna/default.aspx?type=&#038;view=Summary" id="calendar-widget">

      <div class="calendar-widget"></div>

      </a> 

    </div>

	  <?php //Latest Stories Widget Container
	    if ( is_active_sidebar( 'latest-stories-widgets' ) ) : ?>
	    <?php dynamic_sidebar( 'latest-stories-widgets' ); ?>
	    <?php endif; //End of Important Links Widget Container
	  ?>

      <h3 class="text-center"><?php esc_html_e('@GermannaCC', 'gcc-wp-2018') ?></h3>

      <a class="twitter-timeline" data-lang="en" data-tweet-limit="3" data-link-color="#a30a36" href="https://twitter.com/germannacc?ref_src=twsrc%5Etfw"  data-aria-polite="assertive"><?php _e('Latest Tweets', 'gcc-wp-2018') ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
</aside>


</div>

</div>

</div>


</div>
