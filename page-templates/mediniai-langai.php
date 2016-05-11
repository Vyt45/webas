<?php
/*
Template Name: mediniai-langai
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
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/skand.jpg"/>
<h4>Skandinaviški langai</h4>
<p>Šio tipo mediniai langai ypač paplitę Skandinavijos šalyse ir Jungtinėje Karalystėje. Šiuose kraštuose siaučiantys stiprūs vėjai ir dažni lietūs tokį langą dar labiau prispaudžia prie rėmo, taip sumažėja pralaidumas orui ir vandeniui.</p>
</div>
<div class="large-4 columns">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/europe2.jpg"/>
<h4>Europiniai langai</h4>
<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
</div>
<div class="large-4 columns">
<img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/granules.jpg"/>
<h4>Durys</h4>
<p>Polipropileno granulės Polipropilenas (PP) yra populiariausias šiandien naudojamas termoplastikas. Paklausa ir toliau auga dėl polipropileno gebėjimo prisitaikyti prie užpildų, jo gebėjimo imituoti aukštesnės kainos plastiko savybes mažesnėmis sąnaudomis ir galimybe gaminti lengvesnes bei plonesnes dalis.</p>
</div>
</div>


<div class="row">
<div class="large-4 columns">
<a href="#"><img src="/wordpress/wp-content/themes/FoundationPress-master/assets/images/langas3.jpg"/></a>
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
