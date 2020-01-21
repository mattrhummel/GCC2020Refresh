<?php
/**
* Default page template.
*
*
* Template Name: Landing Page
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  
  <div class="row expanded page-hero">
    <div class="row hero-content">
      
      <div class="page-hero-caption">
        <h1><?php the_title(); ?></h1>
        
        <p class="lead">Germanna offers open admissions. There's no application fee and no deadline to apply.</p>
        
        <p><a href="/spring" class="button">Get started</a></p>
      </div>

    </div>
    
  </div>

  <div class="row expanded content-area">
    
    <div class="row">
      <div class="small-12 medium-12 large-8 float-left columns" >
        <?php // if the page has a featured image
        if  (has_post_thumbnail( ) )  { ?>
        <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
          <?php the_post_thumbnail('', array ('class' => 'lazy'));  ?>
        </div>
        <?php  }  else {  //.pagesubbanner
        // if page doesn't have a featured image
        ?>
        <?php } ?>
        
        <div class="entry-content" id="main" tabindex="0">
          
          <?php
          the_content();
          ?>
          <h2>At Germanna Community College<br>you're already accepted</h2>
          <p class="lead">Ready to make a change? You've come to the right place. Become one of nearly 13,000 students who choose Germanna to start a career, start their college degree or just start learning. </p>
          <p class="lead">There's no wrong decision, get started today.</p>
          
          <h2>What kind of Germanna student are you?</h2>

          <div class="card">
            <div class="card-image-bg">
              <div class="card-image">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/DE-student2.jpg" alt="College and University Transfer Students">
              </div>
            </div>
            <div class="card-section">
              <h3 class="card-title">I'm a College &amp; University Transfer Student</h3>
              <p class="card-text">I want to save money on my college degree by starting at Germanna and transfering to a four-year school.</p>
              <a href="#" class="button primary">You're move</a>
            </div>
          </div>
          <div class="card">
            <div class="card-image-bg">
              <div class="card-image">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/DE-student.jpg" alt="Career and Techical Students">
                
              </div>
            </div>
            <div class="card-section">
              <h3 class="card-title">I'm a Career &amp; Technical Student</h3>
              <p class="card-text">I want to work with my hands, learn how <em>to do</em> to start working.</p>
              <a href="#" class="button primary">You're move</a>
            </div>
          </div>
          <div class="card">
            <div class="card-image-bg">
              <div class="card-image">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/DE-student2.jpg" alt="College and University Transfer Students">
              </div>
            </div>
            <div class="card-section">
              <h3>I'm a Continuing Education Student</h3>
              <p>I want to continue to learn new skills or earn an industry-recognized credential to start earning.</p>
              <a href="#" class="button primary">You're move</a>
            </div>
          </div>
          <div class="card">
            <div class="card-image-bg">
              <div class="card-image">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/undecided.png" alt="College and University Transfer Students">
              </div>
            </div>
            <div class="card-section">
              <h3 class="card-title">I'm an Undecided Student</h3>
              <p class="card-text">I'm ready to find out what's right for me, explore different subjects to start something new.</p>
              <a href="#" class="button primary">You're move</a>
            </div>
          </div>
          
        </div>
      </div>
          <aside class="small-12 medium-12 large-4 columns right page-nav hide-for-print" id="section-menu" data-toggler="hide">
    
    <nav class="nav-panel">
    <ul class="">
            <li><a href="">College &amp; University Transfer Students</a></li>
            <li><a href="">Career &amp; Technical Students</a></li>
            <li><a href="">Continuing Education Students</a></li>
             <li><a href="">High School Dual-Enrollment Students</a></li>
             <li><a href="">Apprenticeship Students</a></li>
             <li><a href="">International Students</a></li>
             <li><a href="">Senior Students</a></li>
             <li><a href="">Visiting College Students</a></li>
             <li><a href="">Undecided Students</a></li>
         </ul>
    </nav>

    </aside>
      <footer class="entry-footer">
        <?php gcc_wp_2018_entry_footer(); ?>
        </footer><!-- .entry-footer -->
        
        </div><!--.pagecontent-->
      </div>
      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();