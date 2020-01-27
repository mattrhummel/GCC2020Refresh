<?php
/**
* Template part for displaying single post heading section in single.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
?>
<div class="row expanded">
  <header class="hero-section">
    <?php //if the child page doesn't have a featured images
    //gcc_featured_image_on_child(); ?>
    <div class="hero-section-text">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </div>
    <div class="post-meta">
      <?php if ( 'post' === get_post_type() ) : ?>
    <p><strong></span><?php gcc_wp_2018_posted_on();
  ?> | <?php gcc_wp_2018_entry_footer(); ?> </strong></p>
  <?php endif; ?>
</div>
<div class="row expanded crumbs-container gutter-small">
     <div class="small-12 medium-8 large-9 columns">    
      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
        <?php custom_breadcrumbs();?>
    </nav>
  </div>
  <div class="small-12 medium-4 large-3 columns show-for-landscape">
    <?php gcc_wp_2018_page_icons() ?>
  </div>
</div>
</header>
</div>