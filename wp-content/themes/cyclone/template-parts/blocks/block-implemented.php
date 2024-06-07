<div class="implemented">
  <div class="implemented__container container">
      <?php if ( have_rows( 'list' ) ) : ?>
      <ul class="implemented__grid flex flex_top">
        <?php while ( have_rows( 'list' ) ) : the_row(); ?>
          <li class="implemented__item">
            <?php $icon = get_sub_field( 'icon' ); ?>
            <?php if ( $icon ) { ?>
              <div class="implemented__image">
              <?php echo wp_get_attachment_image( $icon, 'full' ); ?>
              </div>
            <?php } ?>
            <?php if ( have_rows( 'Industries' ) ) : ?>
              <ul class="implemented__list">
                <?php while ( have_rows( 'Industries' ) ) : the_row(); ?>
                  <li class="implemented__category">
                    <span class="implemented__tag"><?php the_sub_field( 'Industry' ); ?></span>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
  </div>
</div>
<!-- end implemented -->