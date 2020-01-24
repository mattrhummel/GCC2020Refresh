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
         <a href="https://germanna.wpengine.com/" class="logo" rel="home" title="germanna.edu home"><?php _e('Back to Germanna Community College Homepage') ?></a>     
    </div>
    
  </div>
  <div class="small-12 medium-12 large-8 columns footer-content">
    <div class="medium-7 columns footer-contacts">
      <h3><?php bloginfo( 'name' ); ?></h3>
      
      <p><?php the_field('primary_address', 'option'); ?><br/>
        
        <a href="tel:<?php the_field('primary_phone_number', 'option'); ?>">
        <?php the_field('primary_phone_number', 'option'); ?></a>
        
      </p>
      <h4><?php _e('#germanna', 'gcc-wp-2018'); ?></h4>
      <div class="social">       
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/<?php the_field('facebook_id', 'option'); ?>"><span class="fa fa-facebook-f" aria-hidden="true"><span class="icon-text"><?php _e('Facebook', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://twitter.com/<?php the_field('twitter_id', 'option'); ?>"><span class="fa fa-twitter"  aria-hidden="true"><span class="icon-text"><?php _e('Twitter', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.instagram.com/<?php the_field('instagram_id', 'option'); ?>"><span class="fa fa-instagram"  aria-hidden="true"><span class="icon-text"><?php _e('Instagram', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.youtube.com/user/<?php the_field('youtube_id', 'option'); ?>"><span class="fa fa-youtube"  aria-hidden="true"><span class="icon-text"><?php _e('Youtube', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.flickr.com/photos/<?php the_field('flickr_id', 'option'); ?>"><span class="fa fa-flickr"  aria-hidden="true"><span class="icon-text"><?php _e('Flickr', 'gcc-wp-2018');?></span></span></a></li>
          <li><a href="https://www.linkedin.com/school/<?php the_field('linkedin_id', 'option'); ?>"><span class="fa fa-linkedin"  aria-hidden="true"><span class="icon-text"><?php _e('LinkedIn', 'gcc-wp-2018');?></span></span></a></li>
        </ul>
      </div>

        <p><?php _e('&copy;', 'gcc-wp-2018'); ?>
        <?php bloginfo( 'name' ); ?></p>
      
    </div>
    <div class="medium-5 columns button-column">
        <?php  //function located in inc/main-navigation.php
        gcc_wp_2018_footer_calltos_menu(); ?>
    </div>
  </div>
</div>
<div class="site-footer-bottom hide-for-print">
  <div class="bottom-footer-content">
    <div class="row">
      
      <div class="small-12 medium-7 columns">      
          <?php  //function located in inc/main-navigation.php
          gcc_wp_2018_footer_links_menu(); ?>
      </div>
      
      <div class="small-12 medium-5 columns">
        <?php the_field('bottom_footer_text', 'option'); ?>  
      </div>

    </div>
  </div>
</div>
</footer>

    <?php if( get_field('banner_text', 'options') ): ?>
    
    <div id="bannerAnnouncement" class="bottom-banner hide-for-print" data-closable>
      
      <div class="row expanded">
        <div class="row">
          <div class="small-12 medium-8 columns ">
            <p><?php the_field( 'banner_text', 'options' ); ?></p>
          </div>
          <div class="small-12 medium-4 columns">
            <div class="button-group show-for-medium">
              
              <a href="<?php echo the_field( 'banner_button_1_url', 'options' ); ?>" class="button banner-button-hollow apply-button">
                <?php the_field( 'banner_button_1_text', 'options' ); ?>
              </a>
              <a href="<?php echo the_field( 'banner_button_2_url', 'options' ); ?>" class="button banner-button request-button">
                <?php the_field( 'banner_button_2_text', 'options' ); ?>
              </a>
            </div>
          </div>
          
          <button id="closeButton-banner" class="close-button-banner" aria-label="Dismiss alert" type="button" data-close>
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>

    <?php endif; ?>

<?php wp_footer(); ?>
<?php
if ( is_page('107') || $post->post_parent == '107' ) {  ?>
<!-- begin SnapEngage code for testing -->
<script type="text/javascript">
(function() {
var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
se.src = '//storage.googleapis.com/code.snapengage.com/js/3d972e28-153d-4d31-978a-36c1648909ba.js';
var done = false;
se.onload = se.onreadystatechange = function() {
if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
done = true;
/* Place your SnapEngage JS API code below */
/* SnapEngage.allowChatSound(true); Example JS API: Enable sounds for Visitors. */
}
};
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
})();
</script>
<!-- end SnapEngage code -->
<?php
}
?>
<?php
if ( is_page('44') || $post->post_parent == '44' ) {  ?>
<!-- begin SnapEngage code for counseling -->
<script type="text/javascript">
(function() {
var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
se.src = '//storage.googleapis.com/code.snapengage.com/js/6c8b2bc0-51a5-4181-817e-709cb15c4910.js';
var done = false;
se.onload = se.onreadystatechange = function() {
if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
done = true;
/* Place your SnapEngage JS API code below */
/* SnapEngage.allowChatSound(true); Example JS API: Enable sounds for Visitors. */
}
};
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
})();
</script>
<!-- end SnapEngage code -->
<?php
}
?>

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