<section class="mobile">
  <div class="mobile__container container">
      <h2 class="mobile__title title title_big"><?php the_field( 'title' ); ?></h2>

      <div class="mobile__row flex flex_top">
        <?php $image = get_field( 'image' ); ?>
        <?php if ( $image ) { ?>
          <div class="mobile__image">
          <?php echo wp_get_attachment_image( $image, 'full' ); ?>
          </div>
        <?php } ?>

          <div class="mobile__w flex flex_top">
              <div class="mobile__col">
                  <?php the_field( 'text' ); ?>
              </div>
              <div class="mobile__col">
                  <p><?php the_field( 'text_2' ); ?></p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- end mobile -->