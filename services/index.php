<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Korigan Design | Services";
/*load the HTML head tag: head-utils.php*/
require_once("../php/partials/head-utils.php");
?>

	<!-- Navigation Bar -->

<?php require_once("../php/partials/header.php");?>

	<!-- Main Content -->

	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<img class="services-image" src="<?php echo $PREFIX;?>images/web-developer.jpg">
			</div>
		</div>
	</div>

	<h1>Services</h1>

	<h2 id="webDesign">Web Design and Development</h2>

	<h2 id="photography">Photography and Video Production</h2>

	<h2 id="graphicDesign">Graphic Design and Branding</h2>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>