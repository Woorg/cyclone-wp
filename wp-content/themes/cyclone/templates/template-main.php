<?php
 /**
 * Template Name: Main Template
 * Template Post Type: post, page
 */

 ?>


<?php get_header(); ?>

<main class="page__inner">

  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile;
    endif;
  ?>

</main>

<?php get_footer(); ?>



