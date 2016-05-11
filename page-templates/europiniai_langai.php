<?php
/*
Template Name: europiniai-langai
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      
    
<hr/>
<h2 class="centered">Mūsų produktai</h2>
<p>Mediniai langai gaminami iš trijų sluoksnių klijuotos medienos tašų be šakų ir defektų, išoriniai sluoksniai - radialinio pjovimo mediena. Tokios medienos panaudojimas užtikrina gaminių atsparumą deformacijoms. Gaminiams naudojama pušies, meranti, maumedžio, ąžuolo klijuota mediena. Langai iš medienos suteikia namui jaukumą, natūralumą. Medinius gaminius galima atnaujinti.</p>
 

<hr/>
<div class="row">
<div class="large-4 columns">
<h4>Skandinaviški langai</h4>
<a href="#" data-toggle="motion-example-4" aria-controls="motion-example-4"><img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/skand.jpg"/></a>
<div data-toggler="e05qst-toggler" data-animate="fade-in fade-out" class="callout secondary ease" id="motion-example-4" aria-expanded="true" style="display: none; background-color: transparent;">
<p>Šio tipo mediniai langai ypač paplitę Skandinavijos šalyse ir Jungtinėje Karalystėje. Šiuose kraštuose siaučiantys stiprūs vėjai ir dažni lietūs tokį langą dar labiau prispaudžia prie rėmo, taip sumažėja pralaidumas orui ir vandeniui.</p>
<button class="button">Placiau</button>
</div>
</div>
<div class="large-4 columns">
<h4>Euro 94 langai</h4>
<a href="#" data-toggle="motion-example-3" aria-controls="motion-example-3"><img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/langas3.jpg"/></a>
<div data-toggler="e05qst-toggler" data-animate="fade-in fade-out" class="callout secondary ease" id="motion-example-3" aria-expanded="true" style="display: none; background-color: transparent;">
<p>Lango stiklo paketo storis 48 mm (4*18*4*18*4). Stiklo paketo šiluminis laidumas 0,53 W (m2K). Lango šilumos laidumas 0,87 W /(m²·K). Kljuotas keturių sluoksnių tašas. Trys sandarinimo tarpinės.</p>
<button class="button">Placiau</button>
</div>
</div>

<div class="large-4 columns">
<h4>Euro 78 langai</h4>
<a href="#" data-toggle="motion-example-2" aria-controls="motion-example-2"><img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/78euro.jpg"/></a>

<div data-toggler="e05qst-toggler" data-animate="fade-in fade-out" class="callout secondary ease" id="motion-example-2" aria-expanded="true" style="display: none; background-color: transparent;">
      <p>Rėmo ir varčios storis 78 mm;
Lango stiklo paketas 24mm arba 32mm storio;
Stiklo paketo šiluminis laidumas 1,1 arba 0,8 W (m2K);
Lango šilumos laidumas 1,6 arba 1,1 W /(m²·K);
Klijuotas trijų sluoksnių tašas.</p>
      <button class="button">Placiau</button>
    </div>

</div>
</div>












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
