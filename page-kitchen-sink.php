<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
* Template Name: Kitchen Sink
*/
get_header(); ?>

 <?php
  while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row content-area" >
    
      <?php //get_sidebar();?>

      <div class="columns small-12 medium-12">
      
        <div class="entry-content" id="main">

          <h2>Heading</h2>
          
          <h1>h1. This is a very large header.</h1>
          <h2>h2. This is a large header.</h2>
          <h3>h3. This is a medium header.</h3>
          <h4>h4. This is a moderate header.</h4>
          <h5>h5. This is a small header.</h5>
          <h6>h6. This is a tiny header.</h6>

          <hr>

          <h2>Breadcrumbs</h2>

          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="#0">Home</a></li>
              <li><a href="#0">Features</a></li>
              <li class="disabled">Gene Splicing</li>
              <li>
                <span class="show-for-sr">Current: </span> Cloning
              </li>
            </ul>
          </nav>

          <hr>

          <h2>Paragraphs</h2>

          <p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, did you know that there are storms occurring on Jupiter that are larger than the Earth? Pretty cool. Wrap strong around type to <strong>make it bold!</strong>. You can also use em to <em>italicize your words</em>.</p>
<hr>
                    <h2>Lead Paragraphs</h2>

          <p class="lead">This is a lead paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, did you know that there are storms occurring on Jupiter that are larger than the Earth? Pretty cool. Wrap strong around type to <strong>make it bold!</strong>. You can also use em to <em>italicize your words</em>.</p>

                    <hr>


          <h2>Links</h2>

          <p>Links are very standard, and the color is preset to the Foundation primary color. <a href="global.html">Learn more about Foundation's global colors.</a></p>
          <hr>


<h2>Buttons</h2>
<a class="button tiny" href="#">So Tiny</a>
<a class="button small" href="#">So Small</a>
<a class="button" href="#">So Basic</a>
<a class="button large" href="#">So Large</a>
<a class="button expanded" href="#">Such Expand</a>
<a class="button small expanded" href="#">Wow, Small Expand</a>

          <hr>


  <h2>Button Colors</h2>

  <a class="button primary" href="#">Primary</a>
<a class="button secondary" href="#">Secondary</a>
<a class="button success" href="#">Success</a>
<a class="button alert" href="#">Alert</a>
<a class="button warning" href="#">Warning</a>

          <hr>


          <h2>Dividers</h2>

          <hr/>

    <h2>Labels</h2>

<span class="label primary">Primary Label</span>
<span class="label secondary">Secondary Label</span>
<span class="label success">Success Label</span>
<span class="label alert">Alert Label</span>
<span class="label warning">Warning Label</span>

<hr>

<h2>Badges</h2>
<span class="primary badge">1</span>
<span class="secondary badge">2</span>
<span class="success badge">3</span>
<span class="alert badge">A</span>
<span class="warning badge">B</span>

<hr>


<h2>Orbit</h2>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/999?text=Slide-1" alt="Space">
          <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/888?text=Slide-2" alt="Space">
          <figcaption class="orbit-caption">Lets Rocket!</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/777?text=Slide-3" alt="Space">
          <figcaption class="orbit-caption">Encapsulating</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/666&text=Slide-4" alt="Space">
          <figcaption class="orbit-caption">Outta This World</figcaption>
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr">First slide details.</span>
      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
    </button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>

<hr>

          <h2>Forms</h2>

          <form>
  <label>Input Label
    <input type="text" placeholder=".small-12.columns" aria-describedby="exampleHelpText">
  </label>
  <p class="help-text" id="exampleHelpText">Here's how you use this input field!</p>
  <label>
    How many puppies?
    <input type="number" value="100">
  </label>
  <label>
    What books did you read over summer break?
    <textarea placeholder="None"></textarea>
  </label>
  <label>Select Menu
    <select>
      <option value="husker">Husker</option>
      <option value="starbuck">Starbuck</option>
      <option value="hotdog">Hot Dog</option>
      <option value="apollo">Apollo</option>
    </select>
  </label>
  <div class="grid-x grid-margin-x">
    <fieldset class="cell large-6">
      <legend>Choose Your Favorite</legend>
      <input type="radio" name="pokemon" value="Red" id="formRed" required><label for="formRed">Red</label>
      <input type="radio" name="pokemon" value="Blue" id="formBlue"><label for="formBlue">Blue</label>
      <input type="radio" name="pokemon" value="Yellow" id="formYellow"><label for="formYellow">Yellow</label>
    </fieldset>
    <fieldset class="cell large-6">
      <legend>Check these out</legend>
      <input id="formCheckbox1" type="checkbox"><label for="formCheckbox1">Checkbox 1</label>
      <input id="formCheckbox2" type="checkbox"><label for="formCheckbox2">Checkbox 2</label>
      <input id="formCheckbox3" type="checkbox"><label for="formCheckbox3">Checkbox 3</label>
    </fieldset>
  </div>
  <div class="grid-x grid-margin-x">
    <div class="cell small-3">
      <label for="middle-label" class="text-right middle">Label</label>
    </div>
    <div class="cell small-9">
      <input type="text" id="middle-label" placeholder="Right- and middle-aligned text input">
    </div>
  </div>
  <div class="input-group">
    <span class="input-group-label">$</span>
    <input class="input-group-field" type="url">
    <div class="input-group-button">
      <input type="submit" class="button" value="Submit">
    </div>
  </div>
</form>

                    <hr/>


          <h2>Unordered List</h2>

          <ul>
  <li>List item with a much longer description or more content.</li>
  <li>List item</li>
  <li>List item
    <ul>
      <li>Nested list item</li>
      <li>Nested list item</li>
      <li>Nested list item</li>
    </ul>
  </li>
  <li>List item</li>
  <li>List item</li>
  <li>List item</li>
</ul>
          <hr>

<h2>Ordered List</h2>

<ol>
  <li>Cheese (essential)</li>
  <li>Pepperoni</li>
  <li>Bacon
    <ol>
      <li>Normal bacon</li>
      <li>Canadian bacon</li>
    </ol>
  </li>
  <li>Sausage</li>
  <li>Onions</li>
  <li>Mushrooms</li>
</ol>

          <hr>


<h2>Definition List</h2>

<dl>
  <dt>Time</dt>
  <dd>The indefinite continued progress of existence and events in the past, present, and future regarded as a whole.</dd>
  <dt>Space</dt>
  <dd>A continuous area or expanse that is free, available, or unoccupied.</dd>
  <dd>The dimensions of height, depth, and width within which all things exist and move.</dd>
</dl>

          <hr>


<h2>Blockquotes</h2>
<blockquote>
  Those people who think they know everything are a great annoyance to those of us who do.
  <cite>Isaac Asimov</cite>
</blockquote>

          <hr>


<h2>Abbreviations</h2>

<p>In my dream last night, I saw <abbr title="John Ronald Reuel">J. R. R.</abbr> Tolkien and George <abbr title="Raymond Richard">R. R.</abbr> Martin hanging out on Sunset <abbr title="Boulevard">Blvd</abbr>.</p>

          <hr>


<h2>Accordion</h2>
          
      <ul class="accordion" data-accordion>
  <li class="accordion-item is-active" data-accordion-item>
    <!-- Accordion tab title -->
    <a href="#" class="accordion-title">Accordion 1</a>

    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    <div class="accordion-content" data-tab-content>
      <p>Panel 1. Lorem ipsum dolor</p>
      <a href="#">Nowhere to Go</a>
    </div>
  </li>
    <li class="accordion-item" data-accordion-item>
    <!-- Accordion tab title -->
    <a href="#" class="accordion-title">Accordion 1</a>

    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    <div class="accordion-content" data-tab-content>
      <p>Panel 1. Lorem ipsum dolor</p>
      <a href="#">Nowhere to Go</a>
    </div>
  </li>
  <!-- ... -->
</ul>

          <hr>


<h2>Tabs</h2>

<ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Tab 1</a></li>
  <li class="tabs-title"><a href="#panel2c">Tab 2</a></li>
  <li class="tabs-title"><a href="#panel3c">Tab 3</a></li>
  <li class="tabs-title"><a href="#panel4c">Tab 4</a></li>
</ul>

<div class="tabs-content" data-tabs-content="collapsing-tabs">
  <div class="tabs-panel is-active" id="panel1c">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <div class="tabs-panel" id="panel2c">
    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
  </div>
  <div class="tabs-panel" id="panel3c">
    <img class="thumbnail" src="assets/img/generic/rectangle-3.jpg">
  </div>
  <div class="tabs-panel" id="panel4c">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>

          <hr>


<h2>Callouts</h2>
<div class="callout primary small">
  <h2>This is a small callout</h2>
  <p>It has an easy to override <a href="">visual style</a>, and is appropriately subdued.</p>
  <a class="button primary" href="#">Primary</a>
</div>

<div class="callout primary large">
  <h2>This is a large callout</h2>
  <p>It has an easy to override<a href=""> visual style</a>, and is appropriately subdued.</p>
   <a class="button primary" href="#">Primary</a>
</div>

<div class="callout primary">
  <h2>This is a primary callout</h2>
  <p>It has an easy to override <a href="">visual style</a>, and is appropriately subdued.</p>
  <a href="#"  class="button primary">It&#39;s dangerous to go alone, take this.</a>
</div>

<div class="callout success">
  <h3>This is a success callout</h3>
  <p>It has an easy to override <a href="">visual style</a>, and is appropriately subdued.</p>
  <a href="#"  class="button primary">It&#39;s dangerous to go alone, take this.</a>
</div>

<div class="callout warning">
  <h4>This is a warning callout</h4>
  <p>It has an easy to override <a href="">visual style</a>, and is appropriately subdued.</p>
  <a href="#"  class="button primary">It&#39;s dangerous to go alone, take this.</a>
</div>

<div class="callout alert">
  <h5>This is an alert callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#" class="button primary">It&#39;s dangerous to go alone, take this.</a>
</div>


          <hr>


<h2>Cards</h2>

<div class="card" style="width: 300px;">
  <div class="card-divider">
    <h4>I'm featured</h4>
  </div>
  <img src="http://localhost:3000/refresh/wp-content/uploads/campus-tour-promo.jpeg">
  <div class="card-section">
    <p>This card makes use of the card-divider element.</p>
  </div>
</div>

          <hr>


<h2>Tables</h2>

<table>
  <thead>
    <tr>
      <th width="200">Table Header</th>
      <th>Table Header</th>
      <th width="150">Table Header</th>
      <th width="150">Table Header</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
  </tbody>
</table>

          </div>
        </div>
    </div>
  </article>
      
  
        <?php endwhile; // End of the loop. ?>

      <?php
      get_footer();