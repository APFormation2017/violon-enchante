<?php/*
        Template Name: Modèle page concerts
*/?>



<?php get_header(); ?>




<?php
/*   APPEL DU CONTENU DE LA PAGE " Page Modèle – Violon d’exception "   -----------------------------------  */
     $args= array(
    'post_type' => 'page',
    'page_id' => 204
);

     $the_query = new WP_Query($args);
     while ($the_query->have_posts()) : $the_query->the_post();

?>

      <?php the_content();?>
<?php endwhile; ?>





<?php
/*   APPEL DU CONTENU DE " Violon d’exception " (PRESENTATION)   -----------------------------------  */
     $args= array(
    'post_type' => 'page',
    'page_id' => 24
);

     $the_query = new WP_Query($args);
     while ($the_query->have_posts()) : $the_query->the_post();

?>

    <div class="presentationConcert">
        <div class="boxPresentation container">
            <h1><?php the_title(); ?></h1>
            <?php the_content();?>
        </div>
    </div> 
      
<?php endwhile; ?>





<?php
    /*   DEBUT ZONE APPEL DES ARTICLES DE LA CATEGORIE VIOLON EXCEPTION   -----------------------------------  */ 
?>
                <div class="fondarticle-ll">
        <!--   Article de page -->

<?php
    /*   BOUCLE D'APPEL DES ARTICLES DE LA CATEGORIE VIOLON EXCEPTION   -----------------------------------  */
    $args= array(
    'showposts' => 3, /* nombre d'article */
    'category_name'  => 'Concerts', /* nom de la catégorie (identifiant sans accent et majuscule) */
    'orderby' => 'date', /* ordre par date */
);
        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) : $the_query->the_post();
        
?>
        <article class="concert-ll container2-ll">
            <!--     Titre de l'article-->
            <h1 class="bv">
                <?php the_title(); ?>
            </h1>

            <!--    Image de l'article-->
            <div class="imgarticle">
                <a href="#">
                    <?php the_post_thumbnail('large'); ?>
                </a>
            </div>

            <div class="bv contenuarticle-ll">
                <!--   Description article -->
                <h2>- Description -</h2>
                <hr class="hr1" />
                <p>
                    <?php the_content(); ?>
                </p>

                <!--    Présentation de l'artiste du concert-->
                <h3>
                    <?php the_field('nom_artiste'); ?>
                </h3>
                <hr class="hr2" />
                <div class="presentationartisteLL">

                    <!--    Photo de l'artiste-->
                    <div class="imgartiste-ll"><img src="<?php the_field('image'); ?>">
                    </div>

                    <p>
                        <?php the_field('description'); ?>
                    </p>
                </div>

                <?php if ( in_category(16) ) {
	echo '<div class="btnresa"><a href="<?php the_permalink(); ?>">Réserver un concert</a>
            </div>'; }?>


    </div>

    </article>
    <?php endwhile; ?>
    </div>





<?php get_footer(); ?>
