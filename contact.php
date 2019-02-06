<?php include('sections/header.php'); ?>


<div role="main" class="main">

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map mt-0" style="height: 500px;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14935.301899167785!2d-105.2231848!3d20.6359694!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x30910a14774212d2!2sPDI+Companies!5e0!3m2!1ses-419!2smx!4v1507220529644" style="border:0" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<div class="container">

					<div class="row py-4">
						<div class="col-lg-6">

							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold"><?php echo $lang['contactus'] ?></h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400"><?php echo $lang['feel'] ?></p>
							</div>

							<form id="contactForm" class="contact-form appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
								<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
									<?php echo $lang['successsend'] ?>
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
									<?php echo $lang['errorsend'] ?>
									<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
								</div>
								
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark"><?php echo $lang['fullname'] ?></label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark"><?php echo $lang['emailaddress'] ?></label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark"><?php echo $lang['subject'] ?></label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark"><?php echo $lang['message'] ?></label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
									<div class="g-recaptcha" data-sitekey="6Le5R44UAAAAAPJM55FCcASwbgCSgef0ehZyV4dS"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="<?php echo $lang['sendmessage'] ?>" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1"><?php echo $lang['ouroffice'] ?></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark"><?php echo $lang['address'] ?>:</strong> Pez Espada #177, Col. Las Gaviotas, Puerto Vallarta, Jalisco.</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark"><?php echo $lang['phone'] ?>:</strong> MEX:+52 1 322 178 2993 <br>USA:1 (855) 221 1748 <br>CAN:1 (855) 421 8966</li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:info@highmktstudio.com">info@highmktstudio.com</a></li>
								</ul>
							</div>

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<h4 class="pt-5"><?php echo $lang['bussineshours'] ?></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> <?php echo $lang['daystext'][0] ?>: 9am - 6pm</li>
									<li><i class="far fa-clock top-6"></i> <?php echo $lang['daystext'][1] ?></li>
								</ul>
							</div>

							<!-- <h4 class="pt-5">Get in <strong>Touch</strong></h4>
							<p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
							<div class="lead">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHighMKT%2F&tabs=timeline&width=290&height=250&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="290" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
							</div>
							<div class="sharethis-inline-share-buttons"></div>
						</div>

					</div>

				</div>

			</div>
</div>

<script src="formul.js"></script>
<!-- <script src='https://www.google.com/recaptcha/api.js?render=6LeLR44UAAAAAEdwWK0U6RbYJ12I0hwKEGaXYfzc'></script> -->

<?php include "call-to-action.php" ?>
<?php include('sections/footer.php'); ?>