<section class="benefits">
  <div class="benefits__container container">
      <h2 class="benefits__title title title_big"><?php the_field( 'title' ); ?></h2>
      <?php if ( have_rows( 'list' ) ) : ?>
      <ul class="benefits__list list list_theme_secondary flex flex_top">
        <?php while ( have_rows( 'list' ) ) : the_row(); ?>
          <li class="benefits__item list__item">
              <svg class="list__icon" width="32" height="32">
                  <use xlink:href="#list-icon"></use>
              </svg>

              <div class="list__text"><?php the_sub_field( 'text' ); ?></div>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>

  </div>
</section>
<!-- end benefits -->