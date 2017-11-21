<?php get_header(); ?>

<section id="woocommerce">

    <article class="container">

<!--       MISE EN PLACE DU FIL D'ARIANE -->
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>
            ');
        }
        ?>

<!--        AFFICHAGE BOUTIQUE-->
        <?php woocommerce_content(); ?>


    </article>

</section>


<?php get_footer(); ?>
