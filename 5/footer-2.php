							</div>
						</nav>
					</div>
					<div class="contact">
						<a href="mailto:g2g.supp.@gmail.com"><div class="ico-email"></div>G2g.supp.@gmail.com</a>
						<a href="tel:+380985143906"><div class="ico-kievstar"></div>+380 (98) 514-39-06</a>
					</div>
				</div>
				<div class="footer-right">
					<div class="links-1">
						<a href="#" class="facebook"></a>
						<a href="#" class="youtube"></a>
						<a href="#" class="instagram"></a>
						<a href="#" class="vkontakte"></a>
					</div>
					<div class="links-2">
						<a href="#" class="twitter"></a>
						<a href="#" class="telegram"></a>
						<a href="viber://chat?number=+380985143906" class="viber"></a>
						<a href="https://wa.me/380985143906" class="whatsapp"></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">Все права защищены 2020.</div>

	<!-- jQuery & Slider -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/main.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="slick/slick.min.js"></script>

	<script>
		$('.slider-single').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: false,
			adaptiveHeight: true,
			infinite: true,
			useTransform: true,
			speed: 400,
			cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
			autoplay: true,
			autoplaySpeed: 2000,
		});
		$('.slider-nav')
			.on('init', function(event, slick) {
				$('.slider-nav .slick-slide.slick-current').addClass('is-active');
			})
			.slick({
				slidesToShow: 4,
				slidesToScroll: 4,
				dots: false,					/*точкм*/
				focusOnSelect: false,
				infinite: true,
				responsive: [{
					breakpoint: 1024,
					settings: {
						slidesToShow: 5,
						slidesToScroll: 5,
					}
				}, {
					breakpoint: 640,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4,
					}
				}, {
					breakpoint: 420,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
				}
				}]
			});

		$('.slider-single').on('afterChange', function(event, slick, currentSlide) {
			$('.slider-nav').slick('slickGoTo', currentSlide);
			var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
			$('.slider-nav .slick-slide.is-active').removeClass('is-active');
			$(currrentNavSlideElem).addClass('is-active');
		});

		$('.slider-nav').on('click', '.slick-slide', function(event) {
			event.preventDefault();
			var goToSingleSlide = $(this).data('slick-index');

			$('.slider-single').slick('slickGoTo', goToSingleSlide);
		});

	</script>
</body>
</html>