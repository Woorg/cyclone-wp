<section class="feature">
  <div class="feature__container container">
      <h2 class="feature__title title title_big"><?php the_field( 'title' ); ?></h2>
      <div class="feature__row flex flex_top">
        <?php $image = get_field( 'image' ); ?>
        <?php if ( $image ) { ?>
          <div class="feature__image">
          <?php echo wp_get_attachment_image( $image, 'full' ); ?>
          </div>
        <?php } ?>

          <div class="feature__text wysiwyg">
             <?php the_field( 'text' ); ?>
             <?php if ( have_rows( 'list' ) ) : ?>
              <ul class="feature__list list list_theme_secondary">
                <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                  <li class="list__item">
                      <svg class="list__icon" width="32" height="32">
                          <use xlink:href="#list-icon"></use>
                      </svg>
                      <div class="list__text"><?php the_sub_field( 'text' ); ?></div>
                  </li>
                <?php endwhile; ?>
              </ul>
              <?php endif; ?>
          </div>
      </div>
  </div>
</section>