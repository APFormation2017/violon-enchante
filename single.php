<?php
/*
Template Name: Page article concerts
*/
?>
<?php get_header(); ?>


   <div class="fondarticle-ll">
<!--   Article de page -->
   <article class="concert-ll container2-ll">
    <?php while (have_posts()) : the_post(); ?>
        <!--     Titre de l'article-->
         <h1 class="bv"><?php the_title(); ?></h1>
    
    <!--    Image de l'article-->
    <div class="imgarticle">
         <a href="#"></a>
    </div>

    <div class="bv contenuarticle-ll">
    <!--   Description article -->
    <h2>- Description -</h2>
    <hr class="hr1"/>
    <p><?php the_content(); ?></p>
    
    <!--    Présentation de l'artiste du concert-->
    <h3><?php the_field('nom_artiste'); ?></h3>
    <hr class="hr2"/>
    <div class="presentationartisteLL">
    
    <!--    Photo de l'artiste-->
    <div class="imgartiste-ll"><?php the_field('imageArtiste'); ?>
    </div>

    <p><?php the_field('description'); ?></p>
    </div>
		
	<?php if ( in_category(16) ) {
	echo '<div class="btnresa"><a href="<?php the_permalink(); ?>">Réserver un concert</a></div>';
	}?>
	

    </div>
    <?php endwhile; ?>
    
    </article>
    </div>




<?php get_footer(); ?>
