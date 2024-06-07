<?php $image = get_field( 'image' ); ?>

<section class="hero lazy" data-bg="url('<?php echo get_template_directory_uri(); ?>/front/static/prod/assets/images/general/waves.png')">
  <div class="hero__container container flex flex_bottom">
    <?php if ( $image ) { ?>
    <div class="hero__image">
      <?php echo wp_get_attachment_image( $image, 'full' ); ?>
    </div>
    <?php } ?>
    <div class="hero__w">
      <h1 class="hero__title title"><?php the_field( 'title' ); ?></h1>
      <div class="hero__text"><?php the_field( 'text' ); ?></div>
    </div>
  </div>
</section>
<!-- end hero -->