<?php get_header(); ?>

<section id="intro">

</section>
<section class="gf">
    <div class="container flex">
        <div class="bloc-boutique">
            <div class="bloc-boutique-fond">
            </div>
                <!--           PAGE BOUTIQUE-->
                <?php
            $args= array(
                'post_type' => 'page',
                'page_id' => 4
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) : $the_query->the_post();
            ?>

                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
        </div>


        <div class="bloc-atelier">
            <div class="bloc-atelier-fond">
            </div>
                <!--           PAGE ATELIER-->
                <?php
            $args= array(
                'post_type' => 'page',
                'page_id' => 16
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section id="presentation" class="bv">
    <div class="container">
        <div class="resume-section">
            <!--           PAGE PRESENTATION-->
            <?php
            $args= array(
                'post_type' => 'page',
                'page_id' => 19
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                <h2 class="titre-section">
                    <span>- </span>
                    <?php the_title(); ?><span> -</span>
                </h2>
                <?php the_content(); ?>
                <div class="bouton">
					<a href="http://violon-enchante.alwaysdata.net/?page_id=16">Lire la suite</a>
				</div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </div>


</section>
<section id="concerts" class="bg-i-concerts">
    <div class="container">
        <div class="resume-section">
            <!--           PAGE CONCERTS-->
            <?php
            $args= array(
                'post_type' => 'page',
                'page_id' => 24
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                <h2 class="titre-section">
                    <span>- </span>
                    <?php the_title(); ?><span> -</span>
                </h2>
                <?php the_excerpt(); ?>
			<div class="bouton">
                <a href="<?php the_permalink(); ?>">Réserver</a>
			</div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section id="exception" class="bg-i-exception">
    <div class="container">
        <div class="resume-section">
            <!--           PAGE VIOLONS EXCEPTIONS-->
            <?php
            $args= array(
                'post_type' => 'page',
                'page_id' => 40
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                <h2 class="titre-section">
                    <span>- </span>
                    <?php the_title(); ?><span> -</span>
                </h2>
                <?php the_content(); ?>
			<div class="bouton">
                <a href="<?php the_permalink(); ?>">En savoir plus</a>
			</div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
