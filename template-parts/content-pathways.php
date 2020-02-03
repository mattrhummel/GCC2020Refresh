<?php
//highlights section
$programs_button_url = get_field('programs_button_url');
$programs_button_text = get_field('programs_button_text');
?>

<div id="pathways" class="row gutter-small expanded">

  <div class="row">

<div class="pathways-content">

  <h2 class="text-center">
    <?php the_field('pathways_heading'); ?>
  </h2>

<div class="row gutter-small expanded">

<div class="columns small-12" id="main" tabindex="0">

<?php
$args =  array (

'post_type' => 'pathways_home',
'posts_per_page' => 9

);
?>

<?php $query = new WP_Query( $args ); ?>

<?php if ( $query->have_posts() ) : ?>

<?php while ( $query->have_posts() ) : $query->the_post();?>

<div class="small-12 medium-6 large-4 columns pathway" data-equalizer-watch>

  <div class="pathways-block">
    <a href="<?php the_field('pathway_url');?>">

      <?php // ACF Image Object
      
            $image = get_field('pathway_image');
          // vars
          $url = $image['url'];
        
      ?>

     <div class="pathway-image" style="background-image: url('<?php echo $url ?>');"></div>

     <div class="block-section">
      <?php the_title('<h3>', '</h3>'); ?>
    </div>
    
    </a>
  </div>

</div>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php else : ?>

	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>

<?php endif; ?>


</div>


</div>


</div>

</div>

</div>
