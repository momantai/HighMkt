<?php 
    include('sections/header.php');
?>


<div role="main" class="main">
            <div class="content-video">
                <div class="videoopening">
                    <video src="media/INTROSERVICESHIGHMARKETING<?php echo $lang['option-lang-folder'] ?>.mp4" loop autoplay preload muted></video>
                </div>
            </div>
            <div class="home-intro home-intro-quaternary" id="home-intro">
                <div class="container">
                    <div class="row text-center">
                        <div class="col">
                            <p class="mb-0">
                                <?php echo $lang['slogan'] ?> <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-light text-color-light font-weight-semibold text-5"><?php echo $lang['thinking'] ?></span>
                                <span><?php echo $lang['postslogan'] ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-7 pr-5 " data-appear-animation="fadeInRightShorter">
                        <h2 class="font-weight-normal text-6 mb-4"><?php echo $lang['whowearetext'] ?></h2>
                        <p class="lead pr-2 mb-4"><?php echo $lang['whoweare'][0] ?></p>
                        <p class="mb-4"><?php echo $lang['whoweare'][1] ?></p>
                        <!-- <a class="btn btn-light text-uppercase text-primary text-1 py-2 px-4 mb-1" href="#"><strong>VIEW MORE</strong><i class="fas fa-chevron-right text-2 pl-2"></i></a> -->
                    </div>
                    <div class="col-lg-5">
                        <div class="row mt-5 mt-lg-0">
                            <div class="col-md-6 col-lg-5 text-lg-left text-center s-left hitem">
                                <img class="img-fluid m-3 my-0 mt-lg-5 pt-lg-5 " src="img/somos/creatividad.svg" alt="Office" data-appear-animation="expandIn" data--delay="200">
                            </div>
                            <div class="col-md-6 col-lg-4 pl-lg-0  text-lg-left text-center s-right hitem">
                                <img class="img-fluid m-3 my-0 " src="img/somos/crecimiento.svg" alt="Office" data-appear-animation="expandIn" data--delay="400">
                                <img class="img-fluid m-3 my-0 " src="img/somos/negocio.svg" alt="Office" data-appear-animation="expandIn" data--delay="200">
                            </div>

                            <div class="somos s-second">
                                <img class="img-fluid m-3 my-0  " src="img/somos/creatividad.svg" alt="Office" data-appear-animation="expandIn" data--delay="200">
                                <img class="img-fluid m-3 my-0 " src="img/somos/crecimiento.svg" alt="Office" data-appear-animation="expandIn" data--delay="400">
                                <img class="img-fluid m-3 my-0 " src="img/somos/negocio.svg" alt="Office" data-appear-animation="expandIn" data--delay="200">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Nuestros servicios -->

            <section class="section bg-color-grey-scale-1 section-height-3 section-no-border " data-appear-animation="fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col text-center " data-appear-animation="fadeInUpShorter" data--delay="200">
                            <h2 class="font-weight-normal text-6 mb-5"><?php echo $lang['ourservicestext'] ?></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mb-4 " data-appear-animation="fadeInLeftShorter" data--delay="400">
                            <div class="feature-box feature-box-secondary feature-box-style-4">
                                <div class="feature-box-icon">
                                    <i class="icon-service icon-dgraph"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 font-weight-bold"><?php echo $lang['name-design-graph'] ?></h4>
                                    <p><?php echo $lang['xt-design-graph'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 " data-appear-animation="fadeIn" data--delay="200">
                            <div class="feature-box feature-box-secondary feature-box-style-4">
                                <div class="feature-box-icon">
                                <i class="icon-service icon-dweb"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 font-weight-bold"><?php echo $lang['name-web-design'] ?></h4>
                                    <p><?php echo $lang['xt-web-design'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 " data-appear-animation="fadeInRightShorter" data--delay="400">
                            <div class="feature-box feature-box-secondary feature-box-style-4">
                                <div class="feature-box-icon">
                                <i class="icon-service icon-photo"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 font-weight-bold"><?php echo $lang['name-photograph'] ?></h4>
                                    <p><?php echo $lang['xt-photograph'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-lg-3">
                        <div class="col-lg-4 mb-4 mb-lg-0 " data-appear-animation="fadeInLeftShorter" data--delay="400">
                            <div class="feature-box feature-box-secondary feature-box-style-4">
                                <div class="feature-box-icon">
                                <i class="icon-service icon-ads"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 font-weight-bold"><?php echo $lang['name-ads'] ?></h4>
                                    <p><?php echo $lang['xt-ads'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0 " data-appear-animation="fadeIn" data--delay="200">
                            <div class="feature-box feature-box-secondary feature-box-style-4">
                                <div class="feature-box-icon">
                                <i class="icon-service icon-social"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 font-weight-bold"><?php echo $lang['name-social'] ?></h4>
                                    <p><?php echo $lang['xt-social'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 " data-appear-animation="fadeInRightShorter" data--delay="400">
                            <div class="feature-box feature-box-secondary feature-box-style-4">
                                <div class="feature-box-icon">
                                <i class="icon-service icon-vip"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2 font-weight-bold"><?php echo $lang['name-special'] ?></h4>
                                    <p><?php echo $lang['xt-special'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Nuestros paquetes -->

            <div class="container">
                <div class="row pt-4 mt-5">
                    <div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <h2 class="font-weight-normal text-6 mb-5"><?php echo $lang['ourprices'] ?></h2>
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



<?php
    include('sections/footer.php');
?>