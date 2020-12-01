<?php
/**
 * Template functions used for the site header.
 *
 * @package shop-isle
 */

if ( ! function_exists( 'shop_isle_primary_navigation' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_primary_navigation() {

		$navbar_class = '';
		$hide_top_bar = get_theme_mod( 'shop_isle_top_bar_hide', true );
		if ( (bool) $hide_top_bar === false ) {
			$navbar_class .= ' header-with-topbar ';
		}

		$shop_isle_blog_case             = 0;
		$shop_isle_front_page_case       = 0;
		$shop_isle_default_template_case = 0;

		$shop_isle_wporg_flag = get_option( 'shop_isle_wporg_flag' );

		if ( ! empty( $shop_isle_wporg_flag ) && ( 'true' === $shop_isle_wporg_flag ) ) {

			if ( 'page' == get_option( 'show_on_front' ) ) {
				$shop_isle_keep_old_fp_template = get_theme_mod( 'shop_isle_keep_old_fp_template' );
				if ( ! $shop_isle_keep_old_fp_template && is_front_page() ) {
					$shop_isle_front_page_case = 1;
				}
			}
		} else {
			if ( 'posts' == get_option( 'show_on_front' ) && is_front_page() ) {
				$shop_isle_front_page_case = 1;
			}
		}

		if ( $shop_isle_front_page_case ) {
			$navbar_class .= ' navbar-color-on-scroll navbar-transparent ';
		}

		?>
		<!-- Navigation start -->

		<div class="wrapper">
		<div class="header__content">

		<?php

		echo '<div class="header__item shop_isle_header_title">';
        echo '<div class="shop-isle-header-title-inner">';
		// Logo selected
        the_custom_logo();

        echo '</div>';
        echo '
              <div class="info visible-xs">
                  <div class="info__social">
                      <a href="https://www.instagram.com/kafel_market_showroom/" target="_blank" class="info__social-link link-inverse"><i class="fab fa-instagram"></i></a>
                      <a href="https://vk.com/kafel_market" target="_blank" class="info__social-link link-inverse"><i class="fab fa-vk"></i></a>
                  </div>
              </div>
                      ';
		echo '</div>';
		?>



        <div class="header__item">
            <div class="info">
                <div class="info__contacts">
                    <div class="info__contacts-item">
                      <div class="subtitle info__subtitle">Опт:</div>
                      <a href="tel:89787706417" class="info__tel">8 (978) 770-6417</a>
                    </div>

                    <div class="info__contacts-item">
                      <div class="subtitle info__subtitle" for="retail">Розница:</div>
                      <a href="tel:89797705923" id="retail" class="info__tel">8 (979) 770-5923</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__item hidden-xs">
            <div class="info">
                <div class="info__social">
                    <a href="https://www.instagram.com/kafel_market_showroom/" target="_blank" class="info__social-link link-inverse"><i class="fab fa-instagram"></i></a>
                    <a href="https://vk.com/kafel_market" target="_blank" class="info__social-link link-inverse"><i class="fab fa-vk"></i></a>
                </div>
            </div>
        </div>

        <?php

        /*wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav navbar-nav navbar-right',
            )
        );*/
        ?>


        <?php if ( class_exists( 'WooCommerce', false ) ) : ?>

            <div class="header__item">

                <form role="search" method="get" class="main-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" class="main-search__input" placeholder="Я ищу..." value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'shop-isle' ); ?>" />
                    <input type="submit" value="" class="main-search__submit-input" />
                    <input type="hidden" name="post_type" value="product" />
                </form>

            </div>


        <?php endif; ?>

            </div>
        </div>

		<!-- Navigation end -->
		<?php
	}
}// End if().
