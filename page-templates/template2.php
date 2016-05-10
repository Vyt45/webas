<?php
/*
Template Name: template2
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
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit2.jpg"/>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit3.jpg"/>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit4.jpg"/>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit5.jpg"/>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit6.jpg"/>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit7.jpg"/>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit8.jpg"/>
</li>
<li class="orbit-slide">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/orbit9.jpg"/>
</li>
</ul>
</div>
<hr/>
<div class="row">
<div class="large-4 columns">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/langas3.jpg"/>
<h4>Patikimos kokybės langai</h4>
<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
</div>
<div class="large-4 columns">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/win1.jpg"/>
<h4>Ilgaamžiški medienos gaminiai</h4>
<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
</div>
<div class="large-4 columns">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/granules.jpg"/>
<h4>Plastiko produktai</h4>
<p>Polipropileno granulės Polipropilenas (PP) yra populiariausias šiandien naudojamas termoplastikas. Paklausa ir toliau auga dėl polipropileno gebėjimo prisitaikyti prie užpildų, jo gebėjimo imituoti aukštesnės kainos plastiko savybes mažesnėmis sąnaudomis ir galimybe gaminti lengvesnes bei plonesnes dalis.</p>
</div>
</div>
 
<div class="row">
<div class="large-12 columns">
<div class="panel">
<div class="row">
<div class="large-9 columns">
</div>
<div class="large-3 columns">
<a href="#" class="radius button right">Contact Us</a>
</div>
</div>
</div>
</div>
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

<?php get_footer();
