<?php
/*
Template Name: Modele page test
 */
?>

<?php get_header(); ?>

<section id="cj_template">

<article class="cj_article-template">

   <?php while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
    <hr />
<?php the_content(); ?>
<?php endwhile; ?>


</article>

</section>


<?php get_footer(); ?>
