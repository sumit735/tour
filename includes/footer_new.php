<footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
                </div>
                <div class="col-md-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>© Citytours 2018</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->
	
	
<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="js/functions.js"></script>


	    <!-- SLIDER REVOLUTION SCRIPTS  -->
		<script src="rev-slider-files/js/jquery.themepunch.tools.min.js"></script>
	<script src="rev-slider-files/js/jquery.themepunch.revolution.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="rev-slider-files/js/extensions/revolution.extension.video.min.js"></script>
	<script>
		var tpj = jQuery;
		var revapi54;
		tpj(document).ready(function () {
			if (tpj("#rev_slider_54_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_54_1");
			} else {
				revapi54 = tpj("#rev_slider_54_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "rev-slider-files/js/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								touchOnDesktop:"off",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"uranus",
								enable:true,
								hide_onmobile:true,
								hide_under:778,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								}
							}
						},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1240, 1024, 778, 480],
					gridheight: [700, 550, 860, 480],
					lazyType: "none",
					parallax: {
						type: "mouse",
						origo: "slidercenter",
						speed: 2000,
						levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
						disable_onmobile: "on"
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "on",
					stopAfterLoops: 0,
					stopAtSlide: 1,
					shuffle: "off",
					autoHeight: "off",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/
	</script>
	
	<!-- NOTIFY BUBBLES  -->
	<script src="js/notify_func.js"></script>


</body>

</html>