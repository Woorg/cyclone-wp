<section class="capabilities">
  <div class="capabilities__container container">
      <h2 class="capabilities__title title title_big"><?php the_field( 'title' ); ?></h2>


      <?php if ( have_rows( 'list' ) ) : $i = 0; ?>
      <ul class="capabilities__list flex flex_top">
        <?php while ( have_rows( 'list' ) ) : the_row(); $i++; ?>
          <li class="capabilities__item flex flex_vertical">
              <svg class="capabilities__icon" width="94" height="94">
                  <use xlink:href="#capable-<?php echo $i; ?>"></use>
              </svg>

              <div class="capabilities__text"><?php the_sub_field( 'text' ); ?></div>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

    <?php if ( have_rows( 'list_second' ) ) : ?>
      <div class="capabilities__bottom flex flex_top">
          <ul class="capabilities__advantages list flex flex_top">
              <?php while ( have_rows( 'list_second' ) ) : the_row(); ?>
              <li class="list__item flex flex_top">
                  <svg class="list__icon" width="32" height="32">
                      <use xlink:href="#list-icon"></use>
                  </svg>

                  <div class="list__text"><?php the_sub_field( 'text' ); ?></div>
              </li>
              <?php endwhile; ?>
          </ul>
          <?php $post_object = get_field( 'more' ); ?>

          <?php if ( $post_object ): ?>
          <?php $post = $post_object; ?>
          <?php setup_postdata( $post ); ?>
          <a class="capabilities__button button" href="<?php the_permalink($post->ID); ?>">Подробнее</a>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>


      </div>
    <?php endif; ?>
  </div>
</section>