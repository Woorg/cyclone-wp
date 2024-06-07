<section class="functions">
  <div class="functions__container container">
      <h2 class="functions__title title title_big"><?php the_field( 'title' ); ?></h2>

      <div class="functions__tabs tabs flex flex_top">
        <?php if ( have_rows( 'tabs' ) ) : $i = 0; ?>
          <div class="functions__w">
            <?php while ( have_rows( 'tabs' ) ) : the_row(); $i++; ?>
              <?php $image = get_sub_field( 'image' ); ?>
              <div class="functions__item" id="tab-<?php echo $i; ?>">
                  <div class="functions__content">
                    <?php if ( $image ) { ?>
                      <div class="functions__image">
                        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                      </div>
                    <?php } ?>
                      <div class="functions__text wysiwyg">
                        <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>
          <?php endwhile; ?>


          </div>
        <?php endif; ?>

          <div class="functions__nav-w">
            <?php if ( have_rows( 'tabs' ) ) :  $ii = 0; ?>
              <ul class="functions__nav tabs__nav" data-tabs>
                <?php while ( have_rows( 'tabs' ) ) : the_row(); $ii++; ?>
                  <?php $data_attr = $ii > 1 ? '' : 'data-tabby-default '; ?>
                  <li class="tabs__item">
                    <a class="tabs__link" href="#tab-<?php echo $ii; ?>" <?php echo $data_attr; ?> data-text="<?php the_sub_field( 'title' ); ?>"><?php the_sub_field( 'title' ); ?></a>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>

          </div>
      </div>

      <?php if ( have_rows( 'list_bottom' ) ) : ?>
      <div class="functions__bottom flex flex_top">
          <ul class="functions__list list flex flex_top">
            <?php while ( have_rows( 'list_bottom' ) ) : the_row(); ?>
              <li class="list__item flex flex_vertical">
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
          <a class="functions__button button" href="<?php the_permalink( $post->ID ); ?>">Подробнее</a>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

      </div>
      <?php endif; ?>
  </div>
</section>

<!-- end functions -->