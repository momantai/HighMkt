<?php include "sections/header.php" ?>

<!-- Aquí inicia el HTML -->


<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
					<div class="container-fluid">
						<div class="row align-items-center">

							<div class="col">
								<div class="row">
									<div class="col-md-12 align-self-center p-static order-2 text-center">
										<div class="overflow-hidden pb-2">
											<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100"><?php echo $lang['portfolio'] ?></h2>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</section>


<div class="container py-2" style="margin-top: 35px; margin-bottom: 200px;">

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
								<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#"><?php echo $lang['showall'] ?></a></li>
								<li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#"><?php echo $lang['websites'] ?></a></li>
								<!-- <li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#">Logos</a></li> -->
							</ul>

							<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
								<div class="row portfolio-list sort-destination" data-sort-id="portfolio">


									<div class="col-sm-6 col-lg-3 isotope-item websites">
										<div class="portfolio-item">
											<a href="#" data-href="projects/<?php echo $lang['option-lang-folder']?>/diseno-web-high.php" data-ajax-on-page>
												<span class="thumb-info thumb-info-lighten border-radius-0">
													<span class="thumb-info-wrapper border-radius-0">
                                                        <img src="projects/img/diseno-web-high.php.png" class="img-fluid border-radius-0" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Diseño web HighMarketing</span>
															<span class="thumb-info-type">Web site</span>
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
