<?php
/*
Template Name: Modèle page réservation
*/
?>
    <?php get_header(); ?>

    <div class="gf">
        <div class="imagederriere">
            <div class="couleurrd">
                <div class="reservation">

                    <?php while (have_posts()) : the_post(); ?>
                    <div class="interieur">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <?php the_post_thumbnail('thumbnail') ?>
                    <!-- Image à la une affichage vignette -->
                    <?php the_content(); ?>


                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <!--
<div id="rdreservation">

<input type="text" name="nom" placeholder="Nom" required />
<input type="text" name="prenon" placeholder="Prenom" required />
<input type="email" name="Votre Email"  required />
<input type="date" name="Date concert" id="date" />
<input type="text" name="NB de personne"  required />
<textarea name="votre message" rows="10" cols="35"  ></textarea>

</div>
-->







    <?php get_footer(); ?>
