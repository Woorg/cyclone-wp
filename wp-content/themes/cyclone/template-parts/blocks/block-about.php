<div class="about">
    <div class="about__container container">
        <?php if ( have_rows( 'columns' ) ) : ?>
        <div class="about__row flex flex_top">
            <?php while ( have_rows( 'columns' ) ) : the_row(); ?>
            <div class="about__col wysiwyg">
                <?php the_sub_field( 'text' ); ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- end about -->