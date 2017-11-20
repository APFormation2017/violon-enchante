<?php
/*
Template Name: Modele page WOO
 */
?>

    <?php get_header(); ?>

    <section id="woocommerce">

        <article class="container">

            <?php while (have_posts()) : the_post(); ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <hr />
            <?php the_content(); ?>
            <?php endwhile; ?>


        </article>

    </section>


    <?php get_footer(); ?>
