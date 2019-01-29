<?php include "sections/header.php" ?>

<!-- Aquí inicia el HTML -->

<div class="container py-2" style="margin-top: 35px;">

					<div class="row">
						<div class="col pb-5">

							<div id="porfolioAjaxBox" class="ajax-box ajax-box-init">

								<div class="bounce-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>

								<div class="ajax-box-content" id="porfolioAjaxBoxContent"></div>

							</div>

							<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
								<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
								<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#">Websites</a></li>
								<li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li>
								<li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#">Brands</a></li>
								<li class="nav-item" data-option-value=".medias"><a class="nav-link text-1 text-uppercase" href="#">Medias</a></li>
							</ul>

							<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
								<div class="row portfolio-list sort-destination" data-sort-id="portfolio">


									<div class="col-sm-6 col-lg-3 isotope-item brands">
										<div class="portfolio-item">
											<a href="#" data-href="ajax/portfolio-ajax-project.html" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Presentation</span>
															<span class="thumb-info-type">Brand</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>

									<div class="col-sm-6 col-lg-3 isotope-item medias">
										<div class="portfolio-item">
											<a href="#" data-href="ajax/portfolio-ajax-project-1.html" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<span class="owl-carousel owl-theme dots-inside m-0" data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}"><span><img src="img/projects/project-1.jpg" class="img-fluid border-radius-0" alt=""></span><span><img src="img/projects/project-1-2.jpg" class="img-fluid border-radius-0" alt=""></span></span>
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Porto Watch</span>
															<span class="thumb-info-type">Media</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>

									<div class="col-sm-6 col-lg-3 isotope-item logos">
										<div class="portfolio-item">
											<a href="#" data-href="ajax/portfolio-ajax-project-2.html" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/projects/project-2.jpg" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Identity</span>
															<span class="thumb-info-type">Logo</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>

									<div class="col-sm-6 col-lg-3 isotope-item websites">
										<div class="portfolio-item">
											<a href="#" data-href="ajax/portfolio-ajax-project-3.html" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/projects/project-27.jpg" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Porto Screens</span>
															<span class="thumb-info-type">Website</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>

									<div class="col-sm-6 col-lg-3 isotope-item logos">
										<div class="portfolio-item">
											<a href="#" data-href="ajax/portfolio-ajax-project-4.html" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/projects/project-4.jpg" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Three Bottles</span>
															<span class="thumb-info-type">Logo</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>

									<div class="col-sm-6 col-lg-3 isotope-item brands">
										<div class="portfolio-item">
											<a href="#" data-href="ajax/portfolio-ajax-project-5.html" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/projects/project-5.jpg" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Company T-Shirt</span>
															<span class="thumb-info-type">Brand</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>

									<div class="col-sm-6 col-lg-3 isotope-item websites">
										<div class="portfolio-item">
											<a href="#" data-href="ajax/portfolio-ajax-project-6.html" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/projects/project-6.jpg" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Mobile Mockup</span>
															<span class="thumb-info-type">Website</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>

									<div class="col-sm-6 col-lg-3 isotope-item medias">
										<div class="portfolio-item">
											<a href="#" data-href="ajax/portfolio-ajax-project-7.html" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
														<img src="img/projects/project-7.jpg" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Porto Label</span>
															<span class="thumb-info-type">Media</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>
									
								</div>
							</div>

						</div>
					</div>

				</div>

<!-- Aquí termina el HTML -->

<?php include "sections/footer.php" ?>