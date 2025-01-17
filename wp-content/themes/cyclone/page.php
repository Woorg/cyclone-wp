<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyclone
 */

get_header(); ?>


<main class="page__inner">

  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile;
    endif;
  ?>

</main>


<?php get_footer();
