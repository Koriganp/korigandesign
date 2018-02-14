<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Korigan Design | About";
/*load the HTML head tag: head-utils.php*/
require_once("../php/partials/head-utils.php");
?>

	<!-- Navigation Bar -->

<?php require_once("../php/partials/header.php");?>

	<!-- Main Content -->

	<div class="container-fluid move-down">
		<div class="row justify-content-center mb-5">
			<h1 class="poiret font-weight-bold"><span class="first-letter">O</span>ur Business</h1>
		</div>
	</div>
	<hr>

	<div class="container my-4">
		<div class="row py-5 my-5">
			<div class="col-md-6">
				<img src="<?php echo $PREFIX;?>images/web-developer.jpg" alt="Web Design" class="about-image">
			</div>
			<div class="col-md-6 my-3">
				<h4 class="font-weight-bold"><span class="first-letter">K</span>origan Design is an Albuquerque based web software company.</h4>
				<p>We know how to provide the right solution for you. We take stunning graphics and pair it with powerful technology to provide web based business solutions that work for you and your customers. After your project launches, we follow it up with unparalleled support to make sure you are taken care of. Our team specializes in software development, design and cyber security which makes us uniquely qualified to troubleshoot complex projects. Let us help you become a leader in your industry with a strong online presence.</p>
			</div>
		</div>
	</div>

	<hr>
	<div class="container my-4">
		<div class="row py-5 my-5">
			<div class="col-md-6 order-lg-12">
				<a href="https://koriganpayne.com/" target="_blank">
					<img src="<?php echo $PREFIX;?>images/korigan.jpg" alt="Korigan Payne" class="about-image">
				</a>
			</div>
			<div class="col-md-6 order-lg-1 my-3">
				<h4 class="mt-2 font-weight-bold"><span class="first-letter">Y</span>our Designer</h4>
				<p>I'm Korigan Payne, and I'm the owner and lead developer at Korigan Design. I build good-looking, custom, responsive websites at affordable prices for individuals and small businesses everywhere. I am passionate about customer service, and have over 10 years experience meeting customers' needs. I studied marketing at North Western Oklahoma State University and Computer Science At Central New Mexico Community College. I enjoy spending time with my wife, our amazing teenage son, our two dogs, two cats, and one very lazy bearded dragon.</p>
			</div>
		</div>
	</div>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>