<?php
/**
 * Template functions used for the site footer.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

if ( ! function_exists( 'shop_isle_footer_widgets' ) ) {
	/**
	 * Display the footer widgets
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_widgets() {
		?>
		<!-- Widgets start -->

		<?php if ( is_active_sidebar( 'sidebar-footer-area-1' ) || is_active_sidebar( 'sidebar-footer-area-2' ) || is_active_sidebar( 'sidebar-footer-area-3' ) || is_active_sidebar( 'sidebar-footer-area-4' ) ) : ?>

		<div class="module-small bg-dark shop_isle_footer_sidebar">
			<div class="container">
				<div class="row">

					<?php if ( is_active_sidebar( 'sidebar-footer-area-1' ) ) : ?>
						<div class="col-sm-6 col-md-3 footer-sidebar-wrap">
							<?php dynamic_sidebar( 'sidebar-footer-area-1' ); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->

					<?php if ( is_active_sidebar( 'sidebar-footer-area-2' ) ) : ?>
						<div class="col-sm-6 col-md-3 footer-sidebar-wrap">
							<?php dynamic_sidebar( 'sidebar-footer-area-2' ); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->

					<?php if ( is_active_sidebar( 'sidebar-footer-area-3' ) ) : ?>
						<div class="col-sm-6 col-md-3 footer-sidebar-wrap">
							<?php dynamic_sidebar( 'sidebar-footer-area-3' ); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->


					<?php if ( is_active_sidebar( 'sidebar-footer-area-4' ) ) : ?>
						<div class="col-sm-6 col-md-3 footer-sidebar-wrap">
							<?php dynamic_sidebar( 'sidebar-footer-area-4' ); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->

				</div><!-- .row -->
			</div>
		</div>

	<?php endif; ?>

		<?php
	}
}// End if().

if ( ! function_exists( 'shop_isle_footer_copyright_and_socials' ) ) {
	/**
	 * Display the theme copyright and socials
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_copyright_and_socials() {

		?>
		<!-- Footer start -->
		 <footer class="footer">
              <div class="wrapper">
                <div class="footer__content">
                  <div class="footer__item">
                    <?php

                    echo '<div class="shop_isle_header_title"><div class="shop-isle-header-title-inner">';

                    // Logo selected
                    the_custom_logo();

                    echo '</div></div>';
                    ?>

                  </div>
                  <div class="footer__item">
                    <div class="info">
                      <div class="info__contacts">
                        <div class="info__contacts-item">
                          <div class="subtitle info__subtitle">Опт:</div>
                          <a href="tel:89787706417" class="info__tel">8 (978) 770-6417</a>
                        </div>
                      </div>
                      <div class="info__address">
                        <p>г. Симферополь, ул. Данилова, 43</p>
                      </div>
                      <div class="info__mail">
                        <a href="mailto:info@kafelmarket.com">info@kafelmarket.com</a>
                      </div>
                    </div>
                  </div>
                  <div class="footer__item">
                    <div class="info">
                      <div class="info__contacts">
                        <div class="info__contacts-item">
                          <div class="subtitle info__subtitle" for="retail">Розница:</div>
                          <a href="tel:89797705923" id="retail" class="info__tel">8 (979) 770-5923</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer__item">
                      <div class="info">
                          <div class="info__social">
                              <a href="https://www.instagram.com/kafel_market_showroom/" target="_blank" class="info__social-link link-inverse"><i class="fab fa-instagram"></i></a>
                              <a href="https://vk.com/kafel_market" target="_blank" class="info__social-link link-inverse"><i class="fab fa-vk"></i></a>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </footer>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">О нас</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <video id="about-us-video" class="video-js vjs-default-skin" controls
                    preload="auto" width="100%" height="" poster="">
                    <source src="./wp-content/uploads/videos/about-us.mp4" type='video/mp4'>
                    </video>
                  </div>

                </div>
              </div>
            </div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
		<!-- Footer end -->
		<?php
	}
}// End if().


if ( ! function_exists( 'shop_isle_footer_wrap_open' ) ) {
	/**
	 * Display the theme copyright and socials
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_wrap_open() {
		echo '</div><div class="bottom-page-wrap">';
	}
}


if ( ! function_exists( 'shop_isle_footer_wrap_close' ) ) {
	/**
	 * Display the theme copyright and socials
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_wrap_close() {
		echo '</div><!-- .bottom-page-wrap -->';
	}
}

