<section class="advantages">
  <div class="advantages__container container">
      <h2 class="advantages__title title title_big"><?php the_field( 'title' ); ?></h2>

      <div class="advantages__text wysiwyg">
         <?php the_field( 'text' ); ?>
      </div>
      <h2 class="advantages__title title title_big"><?php the_field( 'title_2' ); ?></h2>
      <div class="advantages__text wysiwyg">
          <?php the_field( 'text_2' ); ?>
      </div>

      <h2 class="advantages__title title title_big"><?php the_field( 'title_3' ); ?></h2>

      <?php if ( have_rows( 'list' ) ) : ?>
      <ul class="advantages__list flex flex_top">
        <?php while ( have_rows( 'list' ) ) : the_row(); ?>
          <li class="advantages__item">
            <?php $icon = get_sub_field( 'icon' ); ?>
            <?php if ( $icon ) { ?>
            <div class="advantages__image">
              <?php echo wp_get_attachment_image( $icon, 'full' ); ?>
            </div>
            <?php } ?>
              <div class="advantages__item-title"><?php the_sub_field( 'text' ); ?></div>
          </li>
        <?php endwhile; ?>

      </ul>
      <?php endif; ?>
      <div class="advantages__note wysiwyg">
          <?php the_field( 'text_3' ); ?>
      </div>

  </div>
</section>
<!-- end advantages -->