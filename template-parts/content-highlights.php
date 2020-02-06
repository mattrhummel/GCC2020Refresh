<?php
//highlights section
$highlights_heading = get_field('highlights_heading');
 ?>


<div class="row expanded highlights" data-equalizer>

  <h2 class="text-center"><?php the_field('highlights_heading'); ?></h2>
  <p  class="text-center"><?php the_field('highlights_section_text'); ?></p>

<div class="row" data-equalizer data-equalize-on="medium">  
  <?php

  $args =  array (

  'post_type' => 'post',
  'posts_per_page'=>6

  );
  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>

      <div class="small-12 large-4 columns post-box">

          <div class="post-box-content"  data-equalizer-watch>

            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            
            <p><?php echo get_the_date();  ?></p>

          </div>

      </div>

<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else : ?>

	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>

<?php endif; ?>

</div>

<!-- <div class="large-4 columns collapse">

<aside class="trending">
  <div class="widget">
    
	  <?php //Latest Stories Widget Container
	    // if ( is_active_sidebar( 'latest-stories-widgets' ) ) : ?>
	    <?php //dynamic_sidebar( 'latest-stories-widgets' ); ?>
	    // <?php //endif; //End of Important Links Widget Container
	  ?>

      <h3 class="text-center"><?php// esc_html_e('@GermannaCC', 'gcc-wp-2018') ?></h3>

      <a class="twitter-timeline" data-lang="en" data-tweet-limit="2" data-link-color="#a30a36" href="https://twitter.com/germannacc?ref_src=twsrc%5Etfw"  data-aria-polite="assertive"><?php //_e('Latest Tweets', 'gcc-wp-2018') ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
</aside>


</div> -->


</div>
