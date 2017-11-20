<?php get_header(); ?>

<section id="woocommerce">

    <article class="container">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>
            ');
        }
        ?>
        <?php woocommerce_content(); ?>


    </article>

</section>


<?php get_footer(); ?>
