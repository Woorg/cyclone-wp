<section class="import">
  <div class="import__container container">
      <h2 class="import__title title title_big"><?php the_field( 'title' ); ?></h2>
      <div class="import__row flex flex_top">
        <?php if ( have_rows( 'cols' ) ) : ?>
          <?php while ( have_rows( 'cols' ) ) : the_row(); ?>
          <div class="import__col wysiwyg">
            <?php the_sub_field( 'text' ); ?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>

      <div class="import__note wysiwyg">
         <?php the_field( 'text' ); ?>
      </div>

  </div>
</section>
<!-- end import -->