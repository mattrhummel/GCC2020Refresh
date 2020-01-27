<?php
/**
* Template part for displaying single post heading section in single.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
?>

  <header>

    <div class="row expanded hero-section-text">

      <div class="row header-content">
     
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="post-meta">
      <?php if ( 'post' === get_post_type() ) : ?>
    <p><strong></span><?php gcc_wp_2018_posted_on();
  ?> | <?php gcc_wp_2018_entry_footer(); ?> </strong></p>
  <?php endif; ?>
</div>
  
        <div class="crumbs-container">

     
            <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
              <?php custom_breadcrumbs();?>
            </nav>
    
        </div>

    </div>

  </div>
    
</header>

