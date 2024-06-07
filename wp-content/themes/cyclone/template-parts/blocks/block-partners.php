<section class="partners">
  <div class="partners__container container">
      <h2 class="partners__title title title_big"><?php the_field( 'title' ); ?></h2>
      <?php if ( have_rows( 'list' ) ) : ?>
      <ul class="partners__list flex flex_top">
        <?php while ( have_rows( 'list' ) ) : the_row(); ?>
          <?php $image = get_sub_field( 'image' ); ?>

          <li class="partners__item">
              <?php if ( $image ) { ?>
              <div class="partners__image">
                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
              </div>
              <?php } ?>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>


      <?php $post_object = get_field( 'more' ); ?>
      <?php if ( $post_object ): ?>
      <?php $post = $post_object; ?>
      <?php setup_postdata( $post ); ?>
      <div class="partners__button-w">
        <a class="partners__button button" href="<?php the_permalink( $post->ID ); ?>">Подробнее</a>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>


  </div>
</section>
<!-- end partners -->