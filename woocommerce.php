<?php get_header(); ?>

<section id="woocommerce">

    <article class="container">
<!--     MENU BOUTIQUE -->
      <div id="menu-boutique">
                   <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'flex', 'container' => 'nav'
										   ) ); ?>
				</div>

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
