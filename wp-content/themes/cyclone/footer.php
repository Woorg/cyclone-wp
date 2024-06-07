<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyclone
 */

?>

<?php

	$phone = get_field('phone', 'option');

?>

    <div class="page__footer">
        <footer class="footer">
            <div class="footer__container container flex flex_vertical">
                <div class="footer__col footer__col_logo">
                    <div class="footer__logo logo logo_second">
                        <div class="logo__text"><?php bloginfo('name'); ?></div>
                        <svg class="logo__image" width="240px" height="48px">
                            <use xlink:href="#logo"></use>
                        </svg>

                    </div>
                </div>
                <div class="footer__col footer__col_copy">
                    <div class="footer__copyright">&copy; <?php echo date('Y'); ?> <?php the_field( 'copyright', 'option' ); ?></div>
                </div>
                <div class="footer__col footer__col_created">
                    <svg class=" footer__created" width="139" height="47px">
                        <use xlink:href="#igit"></use>
                    </svg>

                </div>
                <div class="footer__col footer__col_address">
                    <div class="footer__address">199155, Санкт-Петербург, наб. реки Смоленки, 33</div>
                </div>
                <div class="footer__col footer__col_phone"><a class="footer__phone" href="<?php echo 'tel:+' . str_replace( array(
										"+",
										")",
										"(",
										" ",
                    "-",
                    "<",
                    ">",
                    "/",
                    "s",
                    "p",
                    "a",
                    "n"
									), "", $phone ); ?>"><?php echo $phone; ?></a>
                </div>
                <div class="footer__col footer__col_email"><a class="footer__email" href="mailto:<?php the_field( 'email', 'option' ); ?>"><?php the_field( 'email', 'option' ); ?></a>
                </div>
            </div>
        </footer>
    </div>

<div id="popup-auth" class="popup popup_auth mfp-hide">
	<div class="popup__tabs tabs">
		<ul class="popup__tabs-nav tabs__nav flex" data-tabs>
			<li class="popup__nav-item tabs__nav-item flex"><a href="#auth-tab-1" class="popup__nav-link tabs__nav-link button button_big" data-tabby-default>вход</a></li>
			<li class="popup__nav-item  tabs__nav-item flex"><a href="#auth-tab-2" class="popup__nav-link tabs__nav-link button button_big">регистрация</a></li>
		</ul>
		<div class="popup__content tabs__content">
			<div id="auth-tab-1" class="tabs__tab">вход</div>
			<div id="auth-tab-2" class="tabs__tab">регистрация</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>





</body>
</html>
