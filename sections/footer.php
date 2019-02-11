<!-- Pie de pagina -->

<footer id="footer">
				<div class="container">
					<!-- Aquì el contenido -->
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="" class="logo pr-0 pr-lg-3">
									<img alt="Porto Website Template" src="img/high-logo.png" class="opacity-5" height="33">
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright 2019. High Marketing Studio.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li><i class="fas fa-angle-right"></i><a href="contact.php" class="ml-1 text-decoration-none"> <?php echo $lang['menu-option-contact'] ?></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>

        </div>
    </div>
    <!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<!-- <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script> -->
		<!-- <script src="vendor/popper/umd/popper.min.js"></script> -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<!-- <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script> -->
		<!-- <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script> -->
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<!-- <script src="vendor/isotope/jquery.isotope.min.js"></script> -->
		<!-- <script src="vendor/owl.carousel/owl.carousel.min.js"></script> -->
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!-- <script src="vendor/vide/jquery.vide.min.js"></script> -->
		<!-- <script src="vendor/vivus/vivus.min.js"></script> -->

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<?php if($_SERVER['PHP_SELF'] === '/portfolio.php') echo "<script src='js/examples/portfolio.js'></script> \n <script src='vendor/isotope/jquery.isotope.min.js'></script>" ?>
</body>
</html>
