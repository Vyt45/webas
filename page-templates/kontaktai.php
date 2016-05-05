<?php
/*
Template Name: kontaktai
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
          
          <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
<ul class="orbit-container">
<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
<li class="orbit-slide is-active">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit1.jpg"/>
<div class="orbit-caption">
      Geriausi langai
    </div>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit2.jpg"/>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit3.jpg"/>
</li>
<li class="orbit-slide">
<img src="http://placehold.it/2000x750">
</li>
</ul>
</div>
<hr/>
<div class="row">
<div class="small-2 large-4 columns"></div> 
<div class="small-4 large-4 columns">
<h3>Susisiekite mumis!</h3>
<p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
<div class="section-container tabs" data-section>
<section class="section">
<h5 class="title"><a href="#panel1">Contact Our Company</a></h5>
<div class="content" data-slug="panel1">
<form>
<div class="row collapse">
<div class="large-2 columns">
<label class="inline">Your Name</label>
</div>
<div class="large-10 columns">
<input type="text" id="yourName" placeholder="Jane Smith">
</div>
</div>
<div class="row collapse">
<div class="large-2 columns">
<label class="inline"> Your Email</label>
</div>
<div class="large-10 columns">
<input type="text" id="yourEmail" placeholder="jane@smithco.com">
</div>
</div>
<label>What's up?</label>
<textarea rows="4"></textarea>
<button type="submit" class="radius button">Submit</button>
</form>
</div>

</div>
</div><!-- large-8 columns -->
<div class="small-6 large-4 columns"></div>
</div>
 

<hr/>

      </div><!-- entry content -->
      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.12.3.js'><\/script>".replace("HOST", location.hostname));
</script>

<?php get_footer();

