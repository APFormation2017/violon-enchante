<?php/*
        Template Name: Modèle page VIOLON EXCEPTION NOUVEAU
*/?>





<?php get_header(); ?>





<?php
/*   APPEL DU CONTENU DE LA PAGE " Page Modèle – Violon d’exception "   -----------------------------------  */
     $args= array(
    'post_type' => 'page',
    'page_id' => 48
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
    'page_id' => 40
);

     $the_query = new WP_Query($args);
     while ($the_query->have_posts()) : $the_query->the_post();

?>

    <div class="presentationViolonDexception">
        <div class="boxPresentation container">
            <h1><?php the_title(); ?></h1>
            <?php the_content();?>
        </div>
    </div> 
      
<?php endwhile; ?>





<?php
    /*   DEBUT ZONE APPEL DES ARTICLES DE LA CATEGORIE VIOLON EXCEPTION   -----------------------------------  */ 
?>
<section class="blocDerniereTrouvaille">
        <div class="container">
            <h1>Nos dernières trouvailles</h1>
            <div class="ligneBloc flex">

<?php
    /*   BOUCLE D'APPEL DES ARTICLES DE LA CATEGORIE VIOLON EXCEPTION   -----------------------------------  */
    $args= array(
    'showposts' => 3, /* nombre d'article */
    'category_name'  => 'violons-dexceptions', /* nom de la catégorie (identifiant sans accent et majuscule) */
    'orderby' => 'date', /* ordre par date */
);
        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) : $the_query->the_post();
        
?>
                <a href="<?php the_permalink(); ?>">
                <article class="articleLigne">
                   
                    <div class="filtreCouleur"> </div>
                    
                    <div class="imageArticle">
                        <img src="<?php the_post_thumbnail() ?>" alt="Violon d'exception Dolosy Delay">
                    </div>
                    
                    <div class="textArticle">
                        <h2><?php the_title(); ?></h2>
                        <hr>
                        <?php the_excerpt(); ?>
                    </div>
                
                </article>
                </a>
            <?php endwhile; ?>
            </div>
            </div>
</section>





<?php
/*   APPEL DU CONTENU DE " Bon de commande " (VIOLON EXCEPTION)   -----------------------------------  */
     $args= array(
    'post_type' => 'page',
    'page_id' => 56
);

     $the_query = new WP_Query($args);
     while ($the_query->have_posts()) : $the_query->the_post();

?>

    <div class="presentationViolonDexception2">
        <div class="boxPresentation container">
            <h1><?php the_title(); ?></h1>
            <?php the_content();?>
        </div>
    </div> 
      
<?php endwhile; ?>





<?php get_footer(); ?>