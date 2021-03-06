<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
<?php //closing main container, do not remove ?>
</main>


<footer class="site-footer hide-for-print">
<div class="row top-footer">
  <div class="small-12 medium-12 large-4 columns">
    
    <div class="footer-logo">      
       <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_theme_mod( 'gcc_wp_2018_mobile_logo' ); ?> " alt="white germanna logo"/></a>
    </div>
    
  </div>
  <div class="small-12 medium-12 large-8 columns footer-content">
    <div class="large-7 columns footer-contacts">
      <h3><?php bloginfo( 'name' ); ?></h3>
      
      <p><?php the_field('primary_address', 'option'); ?><br/>
        
      <a href="tel:<?php _e('540-891-3000', 'gcc-wp-2019') ?>">
        <?php _e('(540) 891-3000', 'gcc-wp-2019') ?></a>
        
      </p>

      <p><a href="/admissions/contact-us/">Contact Us</a></p>

      <h4><?php _e('#germanna', 'gcc-wp-2018'); ?></h4>
      <div class="social">       
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/<?php the_field('facebook_id', 'option'); ?>"><span class="fa fa-facebook-f" aria-hidden="true" title="Germanna on Facebook"><span class="icon-text"><?php _e('Facebook', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://twitter.com/<?php the_field('twitter_id', 'option'); ?>"><span class="fa fa-twitter"  aria-hidden="true"><span class="icon-text" title="Germanna on Twitter"><?php _e('Twitter', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.instagram.com/<?php the_field('instagram_id', 'option'); ?>"><span class="fa fa-instagram"  aria-hidden="true" title="Germanna on Instagram"><span class="icon-text"><?php _e('Instagram', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.youtube.com/user/<?php the_field('youtube_id', 'option'); ?>" title="Germanna on Youtube"><span class="fa fa-youtube"  aria-hidden="true"><span class="icon-text"><?php _e('Youtube', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.flickr.com/photos/<?php the_field('flickr_id', 'option'); ?>"><span class="fa fa-flickr"  aria-hidden="true" title="Germanna on Flickr"><span class="icon-text"><?php _e('Flickr', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.linkedin.com/school/<?php the_field('linkedin_id', 'option'); ?>"><span class="fa fa-linkedin"  aria-hidden="true" title="Germanna on LinkedIn"><span class="icon-text"><?php _e('LinkedIn', 'gcc-wp-2018');?></span></span></a></li>
        </ul>
      </div>

    </div>
    <div class="small-12 medium-only-12 large-5 columns button-column">
        <?php  //function located in inc/main-navigation.php
        gcc_wp_2018_footer_calltos_menu(); ?>
    </div>
  </div>
</div>
<div class="site-footer-bottom hide-for-print">
  <div class="bottom-footer-content">
    <div class="row">
      
      <div class="small-12 medium-only-12 large-7 columns">      
          <?php  //function located in inc/main-navigation.php
          gcc_wp_2018_footer_links_menu(); ?>

        <div class="tips">
          
          <a href="<?php echo get_field( 'tips_url', 'options' ); ?>" class="tips-logo" aria-hidden="true">
          
          <span><?php echo get_field( 'tips_text', 'options' ); ?><span class="hide-text"><?php _e('report an incident', 'gcc-wp-2018')?></span></span></a>
        
        </div>
      </div>
      
      <div class="small-12 medium-only-12 large-5 columns">
        <?php the_field('bottom_footer_text', 'option'); ?> 
        <p class="copywrite"><?php _e('&copy;', 'gcc-wp-2018'); ?>
           <?php bloginfo( 'name' ); ?></p> 
      </div>

    </div>
  </div>
</div>
</footer>

    <?php if( get_field('banner_text', 'options') ): ?>
    
<!-- <div id="bannerAnnouncement" class="bottom-banner hide-for-print" data-closable>
      
      <div class="row expanded">
        <div class="row">
          <div class="small-12 medium-8 columns ">
            <p><?php //the_field( 'banner_text', 'options' ); ?></p>
          </div>
          <div class="small-12 medium-4 columns">
            <div class="button-group show-for-medium">
              
              <a href="<?php //echo the_field( 'banner_button_1_url', 'options' ); ?>" class="button banner-button-hollow apply-button">
                <?php //the_field( 'banner_button_1_text', 'options' ); ?>
              </a>
              <a href="<?php //echo the_field( 'banner_button_2_url', 'options' ); ?>" class="button banner-button request-button">
                <?php //the_field( 'banner_button_2_text', 'options' ); ?>
              </a>
            </div>
          </div>
          
          <button id="closeButton-banner" class="close-button-banner" aria-label="Dismiss alert" type="button" data-close>
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div> -->

    <?php endif; ?>

<?php wp_footer(); ?>


<?php if (is_page('donate')):?>
     
<script type="text/javascript">
window.bboxInit = function () {
   bbox.showForm('7ac5f578-b467-4690-815f-dc7eab20bca5');
};
(function () {
   var e = document.createElement('script'); e.async = true;
   e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
   document.getElementsByTagName('head')[0].appendChild(e);
} ());
</script>

<?php endif; ?>
</body>
</html>