<?php
/*
Template Name: Page article concerts
*/
?>

<?php get_header(); ?>


            <?php while (have_posts()) : the_post(); ?>
    <section class="fondarticle-ll">
        <!--   Article de page -->
        <article class="concert-ll container2-ll">
            <!--     Titre de l'article-->
            <h1 class="bv">
                <?php the_title(); ?>
            </h1>

            <!--    Image de l'article-->
            <div class="imgarticle">
                <img src="<?php the_field('image-grande'); ?>">
            </div>

            <div class="bv contenuarticle-ll">
                <!--   Description article -->
                <h2>- Description -</h2>
                <hr class="hr1" />
                <?php the_content(); ?>


<?php if ( in_category(16) ) {
    echo '<h3>';
    the_field('nom_artiste');
    echo '</h3>';
    echo '<hr class="hr2"/>';
    echo '<div class="presentationartisteLL">';


    echo '<div class="imgartiste-ll"><img src=" ';
    the_field('image-artiste');
    echo ' " ></div><p> ';

    the_field('description');
    echo '</p></div>';

    echo '<div class="btnresa"><a href="http://violon-enchante.alwaysdata.net/reservation/">Réserver un concert</a></div>
	 </div>';
    
 }; ?>
            </div>
        </article>
    </section>
    <?php endwhile; ?>


<?php get_footer(); ?>
