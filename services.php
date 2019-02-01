<?php
    include('sections/header.php');
    include('service.php');
    $texto=service();
?>
		<div class="body">
			<div role="main" class="main">
				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">

							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="text-dark">
                  <?php echo $texto['name'];?>
                </h1>
<span class="sub-title text-dark"><?php echo $texto['description'];?></span>
							</div>


							<div class="col-md-4 order-1 order-md-2 align-self-center">
							</div>
						</div>
					</div>
				</section>
				<div class="container py-4">

					<div class="row py-3 justify-content-center">
						<div class="col-sm-8 col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
							<article>
								<div class="row">
									<div class="col">
										<a href="#" class="text-decoration-none">
											<img src="img/generic/generic-corporate-3-1-full.jpg" class="img-fluid hover-effect-2 mb-3" alt="" />
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h4 class="mb-0"><a href="#" class="text-2 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">Mobile Apps</a></h4>
										<p class="mb-2 lead text-4">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
										<p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus pulvinar.</p>
									</div>
								</div>
							</article>
						</div>
					</div>

				</div>
				<div class="container">
					<div class="row justify-content-center pt-4 mt-5 mb-5">
						<div class="col-lg-8 text-center">
							<div class="overflow-hidden mb-3">
								<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp">Learn more about our process</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</p>
							</div>
						</div>
					</div>
					<div class="pricing-table pricing-table-no-gap mt-3 mb-5 pb-5">
							<div class="col-md-6 col-lg-3">
									<div class="plan">
											<div class="plan-header">
													<h3>Enterprise</h3>
											</div>
											<div class="plan-price">
													<span class="price"><span class="price-unit">$</span>59</span>
													<label class="price-label">PER MONTH</label>
											</div>
											<div class="plan-features">
													<ul>
															<li>10GB Disk Space</li>
															<li>100GB Monthly Bandwith</li>
															<li>20 Email Accounts</li>
															<li>Unlimited Subdomains</li>
													</ul>
											</div>
											<div class="plan-footer">
													<a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">Choose Plan</a>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-3">
									<div class="plan">
											<div class="plan-header">
													<h3>Professional</h3>
											</div>
											<div class="plan-price">
													<span class="price"><span class="price-unit">$</span>29</span>
													<label class="price-label">PER MONTH</label>
											</div>
											<div class="plan-features">
													<ul>
															<li>5GB Disk Space</li>
															<li>50GB Monthly Bandwith</li>
															<li>10 Email Accounts</li>
															<li>Unlimited Subdomains</li>
													</ul>
											</div>
											<div class="plan-footer">
													<a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">Choose Plan</a>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-3">
									<div class="plan plan-featured">
											<div class="plan-header bg-primary">
													<h3>Standard</h3>
											</div>
											<div class="plan-price">
													<span class="price"><span class="price-unit">$</span>17</span>
													<label class="price-label">PER MONTH</label>
											</div>
											<div class="plan-features">
													<ul>
															<li>3GB Disk Space</li>
															<li>25GB Monthly Bandwith</li>
															<li>5 Email Accounts</li>
															<li>Unlimited Subdomains</li>
													</ul>
											</div>
											<div class="plan-footer">
													<a href="#" class="btn btn-primary btn-modern rounded-0 py-2 px-4">Choose Plan</a>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-3">
									<div class="plan">
											<div class="plan-header">
													<h3>Basic</h3>
											</div>
											<div class="plan-price">
													<span class="price"><span class="price-unit">$</span>9</span>
													<label class="price-label">PER MONTH</label>
											</div>
											<div class="plan-features">
													<ul>
															<li>1GB Disk Space</li>
															<li>10GB Monthly Bandwith</li>
															<li>2 Email Accounts</li>
															<li>Unlimited Subdomains</li>
													</ul>
											</div>
											<div class="plan-footer">
													<a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">Choose Plan</a>
											</div>
									</div>
							</div>
					</div>
					</div>
				<section class="section bg-color-primary section-height-3 border-0 mt-4 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-md-10 py-3 mx-md-auto">
								<div class="row pt-2 clearfix">
									<div class="col-lg-6">
										<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
											<div class="feature-box-icon">
												<i class="icon-user-following icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-2 text-5 text-color-light">Customer Support</h4>
												<p class="mb-4 text-color-light opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
											<div class="feature-box-icon">
												<i class="icon-layers icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-2 text-5 text-color-light">Sliders</h4>
												<p class="mb-4 text-color-light opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
											<div class="feature-box-icon">
												<i class="icon-calculator icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-2 text-5 text-color-light">HTML5</h4>
												<p class="mb-4 text-color-light opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
											<div class="feature-box-icon">
												<i class="icon-star icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-2 text-5 text-color-light">Icons</h4>
												<p class="mb-4 text-color-light opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
											<div class="feature-box-icon">
												<i class="icon-drop icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-2 text-5 text-color-light">Colors</h4>
												<p class="mb-0 text-color-light opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
											<div class="feature-box-icon">
												<i class="icon-mouse icons text-color-light"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-2 text-5 text-color-light">Buttons</h4>
												<p class="mb-0 text-color-light opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

        <div class="container-services">
          <div class="title-service">
            <h3>Portafolio</h3>
          </div>
            <div class="services">

            <div class="service">

            </div>
            <div class="service">

            </div>
            <div class="service">

            </div>

            <div class="service">

            </div>
          </div>

        </div>

				</div>
			</div>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>		<script src="vendor/popper/umd/popper.min.js"></script>		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>		<script src="vendor/common/common.min.js"></script>		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>		<script src="vendor/isotope/jquery.isotope.min.js"></script>		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>		<script src="vendor/vide/jquery.vide.min.js"></script>		<script src="vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
	</body>
	<?php
	    include('sections/footer.php');
	?>
</html>
