<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Korigan Design | Portfolio";
/*load the HTML head tag: head-utils.php*/
require_once("../php/partials/head-utils.php");
?>

	<!-- Navigation Bar -->

<?php require_once("../php/partials/header.php");?>

	<!-- Page Heading -->

	<div class="container-fluid move-down">
		<div class="row justify-content-center mb-5">
			<h1 class="poiret font-weight-bold"><span class="first-letter">F</span>eatured Work</h1>
		</div>
	</div>
	<hr>

	<!-- Main Content -->

	<main>

		<!-- C Square Custom Cupcakes -->

		<div class="container bg-white">
			<div class="row py-5 my-5">
				<div class="col-md-6">
					<img src="<?php echo $PREFIX;?>images/csquare.jpg" alt="C Square Custom Cupcakes" class="portfolio-image"/>
				</div>
				<div class="col-md-6 text-dark px-3">
					<h3 class="portfolio-title my-4"><span class="first-letter">C<sup>2</sup></span> Custom Cupcakes</h3>
					<p><strong>Problem:</strong> Not showing up on Google or Bing Searches</p>
					<p><strong>Solution:</strong> Custom SEO to optimize search results to include this website in searches for custom cupcakes.</p>
					<p><strong>Our Work:</strong> Search Engine Optimization</p>
					<p><strong>Go There: </strong><a href="http://csquarecustomcupcakes.com/"  target="_blank">CSquareCustomCupcakes.com</a></p>
				</div>
			</div>
		</div>
		<hr>

		<!-- Korigan Payne -->

		<div class="container bg-white">
			<div class="row py-5 my-5">
				<div class="col-md-6 order-lg-12">
					<img src="<?php echo $PREFIX;?>images/korigan.jpg" alt="Korigan Payne Personal Website" class="portfolio-image"/>
				</div>
				<div class="col-md-6 order-lg-1 text-dark px-3">
					<h3 class="portfolio-title my-4"><span class="first-letter">P</span>ersonal Website Design</h3>
					<p><strong>Problem:</strong> Needed a custom multi-page website</p>
					<p><strong>Solution:</strong> Created a site complete with contact form and external authentication from scratch.</p>
					<p><strong>Our Work:</strong> Full Site Development</p>
					<p><strong>Go There: </strong><a href="https://koriganpayne.com/" target="_blank">KoriganPayne.com</a></p>
				</div>
			</div>
		</div>
		<hr>

		<!-- Design By Korigan -->

		<div class="container bg-white">
			<div class="row py-5 my-5">
				<div class="col-md-6">
					<img src="<?php echo $PREFIX;?>images/wp.jpg" alt="Design By Korigan" class="portfolio-image"/>
				</div>
				<div class="col-md-6 text-dark px-3">
					<h3 class="portfolio-title my-4"><span class="first-letter">W</span>ordpress Website</h3>
					<p><strong>Problem:</strong> Needed Wordpress Site</p>
					<p><strong>Solution:</strong> Used a Themify template to provide a custom design and ease of maintaining.</p>
					<p><strong>Our Work:</strong> Word Press installation and upkeep. Web hosting.</p>
					<p><strong>Go There: </strong><a href="https://designbykorigan.com/" target="_blank">DesignByKorigan.com</a></p>
				</div>
			</div>
		</div>
	</main>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>