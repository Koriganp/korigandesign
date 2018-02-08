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
			<h1 class="poiret font-weight-bold"><span class="first-letter">W</span>hat We Do</h1>
		</div>
	</div>
	<hr>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="<?php echo $PREFIX;?>images/web-developer.jpg" alt="Web Design" class="about-image">
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<h4></h4>
				<p></p>
			</div>
		</div>

	</div>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>