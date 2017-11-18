<?php
/*
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package violonenchante
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