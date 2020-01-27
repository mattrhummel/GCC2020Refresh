<?php
/**
 * Template part for displaying single post heading section in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
?>
<?php // if the page has a featured image
if  (has_post_thumbnail( ) )  {?>

<div class="row gutter-small expanded">

<header class="hero-section">

    <?php the_post_thumbnail(); ?>

    <div class="hero-section-text">
       <h1><?php single_cat_title(); ?></h1>
    </div>

  <div class="row expanded crumbs-container">

    <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
      <?php custom_breadcrumbs();?>
    </nav>

  </div>

</header>

</div>


<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>


<div class="row gutter-small expanded">

<header class="hero-section-plain">

  <div class="hero-section-text">
     <?php  the_title( '<h1 class="entry-title">', '</h1>', 'gcc-wp-2018' ); ?>
  </div>

  <div class="crumbs-container">

      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
        <?php the_breadcrumb() ?>
      </nav>

  </div>

</header>

</div>

<?php } ?>
