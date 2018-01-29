<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Korigan Design | Media and Web Design";
/*load the HTML head tag: head-utils.php*/
require_once("php/partials/head-utils.php");
?>

	<!-- Navigation Bar -->

<header>
	<nav class="navbar fixed-top navbar-default navbar-expand-md navbar-light bg-light">
		<a class="navbar-brand brand-text" href="#"><img class="nav-icon space" src="<?php echo $PREFIX;?>images/KD.png"><strong> Korigan Design</strong></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarToggler">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="text-light" href="<?php echo $PREFIX;?>index.php">Home </a>
				</li>
				<li class="nav-item">
					<a class="text-light" href="<?php echo $PREFIX;?>services/index.php"> Services </a>
				</li>
				<li class="nav-item">
					<a class="text-light" href="<?php echo $PREFIX;?>about/index.php"> About </a>
				</li>
				<li class="nav-item">
					<a class="text-light" href="<?php echo $PREFIX;?>portfolio/index.php"> Portfolio </a>
				</li>
				<li class="nav-item">
					<a class="text-light" href="<?php echo $PREFIX;?>contact/index.php"> Contact </a>
				</li>
			</ul>
		</div>
	</nav>
</header>

	<!-- Main Content -->

	<div class="home" id="wrapper">

		<!-- Slide 1 -->

		<div>
			<div class="home-text">
				<h2><a href="<?php echo $PREFIX;?>about/index.php" class="home-link text-dark">We think, we solve, we design.</a></h2>
				<p><a href="<?php echo $PREFIX;?>about/index.php" class="home-link text-dark">Creating high-end design solutions through print, web, and video to help your business maximize brand strategy and marketing</a></p>
			</div>
			<div class="home-pic">
				<img class="home-images" src="<?php echo $PREFIX;?>images/all.jpg" alt="Software Development">
			</div>
		</div>

		<!-- Slide 2 -->

		<div>
			<div class="home-text">
				<h2><a href="<?php echo $PREFIX;?>services/index.php#webDesign" class="text-dark home-link">Web Design and Development</a></h2>
				<p><a href="<?php echo $PREFIX;?>services/index.php#webDesign" class="text-dark home-link">We provide solutions to web design and development needs.</a></p>
			</div>
			<div class="home-pic">
				<img class="home-images" src="<?php echo $PREFIX;?>images/coding.png" alt="Web Development">
			</div>
		</div>

		<!-- Slide 3 -->

		<div>
			<div class="home-text">
				<h2><a href="<?php echo $PREFIX;?>services/index.php#photography" class="text-dark home-link">Photography and Video Production</a></h2>
				<p><a href="<?php echo $PREFIX;?>services/index.php#photography" class="text-dark home-link">Custom photos and assist in commercial writing and producing your video.</a></p>
			</div>
			<div class="home-pic">
				<img class="home-images" src="<?php echo $PREFIX;?>images/photography.jpg" alt="Photography">
			</div>
		</div>

		<!-- Slide 4 -->

		<div>
			<div class="home-text">
				<h2><a href="<?php echo $PREFIX;?>services/index.php#graphicDesign" class="text-dark home-link">Graphic Design and Branding</a></h2>
				<p><a href="<?php echo $PREFIX;?>services/index.php#graphicDesign" class="text-dark home-link">Full visual branding services including strategy and implementation.</a></p>
			</div>
			<div class="home-pic">
				<img class="home-images" src="<?php echo $PREFIX;?>images/graphic-design.jpg" alt="Graphic Design">
			</div>
		</div>
	</div>

	<!-- Footer -->

<footer class="footer mt-0 fixed-bottom">
	<div class="bg text-dark nav p-2">
		<p class="foot-text">&copy; 2018<a class="text-dark" href="https://koriganpayne.com" target="_blank"> Korigan Payne</a></p>
	</div>
</footer>

<!-- Additional Javascript -->

<script src="<?php echo $PREFIX;?>js/slick.js" type="text/javascript"></script>
<script src="<?php echo $PREFIX;?>js/main.js" type="text/javascript"></script>

</body>
</html>
