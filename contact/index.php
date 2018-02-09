<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Korigan Design | Contact";
/*load the HTML head tag: head-utils.php*/
require_once("../php/partials/head-utils.php");
?>

	<!-- Navigation Bar -->

<?php require_once("../php/partials/header.php");?>

	<!-- Information -->

	<section class="contact-content">
		<div class="contact-background">
			<div class="container move-down contact-info">
				<div class="row">
					<div class="col-3"></div>
					<div class="col-6">
						<h2 class="font-weight-bold"><span class="first-letter">O</span>ur goal is your success.</h2>
						<p class="mt-5">We believe that the best business model is to treat people with respect. Not only the investment they are making, but their time as well.</p>
						<p class="mt-5">When you hire us, you get professionalism. That means we are responsive to your needs and are available to answer any questions or concerns you have along the way, either by email, text, phone, or in-person, we will be there.</p>
						<p class="mt-5">Would you like to discuss a potential project? You can send us a message using our contact form, or give us a call by using the contact information on the right.</p>
					</div>
					<div class="col-3"></div>
				</div>
			</div>
		</div>
	</section>

		<!-- Structure for Form -->

		<main class="jumbotron-fluid bg-light pt-5">
			<div class="row row-flex content-wrap">



				<!-- Form -->

				<div class="col-1"></div>

				<div class="col-6 content-panel pr-5 ml-2">
					<div>

						<!-- Name Line -->

						<form id="contact-form" action="<?php echo $PREFIX;?>php/mailer.php" method="post" novalidate>
							<div class="form-group">
								<label for="name">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>

							<!-- Email Line -->

							<div class="form-group">
								<label for="email">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>

							<!-- Subject Line -->

							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>

							<!-- Message Field -->

							<div class="form-group">
								<label for="message">Message <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment" aria-hidden="true"></i>
									</div>
									<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->

							<div class="d-flex justify-content-center mt-5">
								<div class="g-recaptcha" data-sitekey="6LdcLUIUAAAAAHL9DW76Chfmj4pW70UmqHGk3PDt"></div>
							</div>

							<!-- Submit/Reset Buttons -->

							<div class="d-flex justify-content-center mt-3 mb-5 pb-5">
								<button class="btn btn-info mr-1" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-default ml-1" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</div>
						</form>

						<!-- Space for output -->

						<div class="row">
							<div class="col">
								<div id="output-area"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Spacing -->

				<div class="col-1"></div>

				<!-- Contact Info -->

				<div class="col-2 pl-5 pt-5">
					<div>
						<h5 class="font-weight-bold"><span class="first-letter">A</span>lbuquerque</h5>
						<p class="ml-3">1039 June St NE</p>
						<p class="ml-3">Albuquerque, NM 87112</p>
						<p class="ml-3">505.304.5104</p>
					</div>
					<div class="my-3">
						<h5 class="font-weight-bold"><span class="first-letter">G</span>eneral Inquiries</h5>
						<p class="ml-3">info@korigandesign.com</p>
					</div>
					<div class="my-3">
						<h5 class="font-weight-bold"><span class="first-letter">S</span>ales</h5>
						<p class="ml-3">sales@korigandesign.com</p>
					</div>
					<div class="my-3">
						<h5 class="font-weight-bold"><span class="first-letter">S</span>upport</h5>
						<p class="ml-3">support@korigandesign.com</p>
					</div>
				</div>
			</div>
		</main>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>