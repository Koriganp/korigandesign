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

	<div class="container-fluid move-down">
		<div class="row justify-content-center mb-5">
			<h1 class="poiret font-weight-bold"><span class="first-letter">W</span>hat We Do</h1>
		</div>
	</div>
	<hr>

	<div class="container bg-white page-top">
		<div class="row py-5 my-5">
			<div class="col-s-12 col-md-6 col-lg-8">
				<img src="<?php echo $PREFIX;?>images/web-design.jpg" alt="Web Design" class="service-image"/>
			</div>
			<div class="col-s-12 col-md-6 col-lg-4 text-dark pl-5">
				<h3 class="service-title my-4"><span class="first-letter">W</span>eb Design and Development</h3>
				<p class="font-weight-bold justify-content-center">A professionally designed website is one of the best ways to attract and retain customers in today’s Internet-savvy world. Korigan Design streamlines your advertising by providing web design services based on the distinct needs of your business. We provide affordable web design services with unmatched quality in design, functionality, and service. Whether you are looking for a complete multiple page design, E-commerce or a monthly maintenance plan, Korigan Design has got you covered. <a href="<?php echo $PREFIX;?>contact/index.php" class="service-contact-link">Contact us</a> today for a no obligation consultation.</p>
				<div id="photography"></div>
			</div>
		</div>
	</div>

	<hr>
	<div class="container bg-white">
		<div class="row py-5 my-5">
			<div class="col-s-12 col-md-6 col-lg-4 text-dark pr-5">
				<h3 class="service-title my-4"><span class="first-letter">P</span>hotography and Video Production</h3>
				<p class="font-weight-bold justify-content-center">Korigan Design provides high quality commercial photography & video production, the key to staying ahead and staying connected. We capture images. We are photographers, filmmakers, storytellers. We produce superior photo and video content for your advertising, marketing, and promotional needs. We are hands-on with every client. We’re a small team. We’re artists and entrepreneurs, supporters of our local community, world travelers and appreciate family time. We’re always plugged in. We like tech. We love art. And dance. And music. And film. We deliver photography and video content you can use. <a href="<?php echo $PREFIX;?>contact/index.php" class="service-contact-link">Contact us</a> today to see how we can help you.</p>
				<div id="graphicDesign"></div>
			</div>
			<div class="col-s-12 col-md-6 col-lg-8">
				<img src="<?php echo $PREFIX;?>images/photography.jpg" alt="Web Design" class="service-image"/>
			</div>
		</div>
	</div>

	<hr>
	<div class="container bg-white">
		<div class="row py-5 my-5">
			<div class="col-s-12 col-md-6 col-lg-8">
				<img src="<?php echo $PREFIX;?>images/graphic-design.jpg" alt="Web Design" class="service-image"/>
			</div>
			<div class="col-s-12 col-md-6 col-lg-4 text-dark pl-5">
				<h3 class="service-title my-4"><span class="first-letter">G</span>raphic Design and Branding</h3>
				<p class="font-weight-bold justify-content-center">One of the most important ways to market your business is through smart, professional logo design. Research shows that having a strong logo can determine whether a customer chooses your company over another. Our graphic designers use verbal and visual language to convey the meaning behind your brand. Through smart logo design by our creative artists, you will properly frame your company in the minds of your customers. With professional graphic design, you’ll raise awareness of your brand so that it is recognizable anywhere. We also create custom graphics for your Facebook, Twitter and other social media accounts through our social media marketing services. <a href="<?php echo $PREFIX;?>contact/index.php" class="service-contact-link">Contact us</a> today!</p>
				<div id="seo"></div>
			</div>
		</div>
	</div>

	<hr>
	<div class="container bg-white">
		<div class="row py-5 my-5">
			<div class="col-s-12 col-md-6 col-lg-4 text-dark pr-5">
				<h3 class="service-title my-4"><span class="first-letter">S</span>earch Engine Optimization</h3>
				<p class="font-weight-bold justify-content-center">SEO is a marketing discipline focused on growing visibility in organic (non-paid) search engine results. SEO encompasses both the technical and creative elements required to improve rankings, drive traffic, and increase awareness in search engines. There are many aspects to SEO, from the words on your page to the way other sites link to you on the web. Sometimes SEO is simply a matter of making sure your site is structured in a way that search engines understand. SEO isn't just about building search engine-friendly websites. It's about making your site better for people too. At Korigan Design, we believe these principles go hand-in-hand. If you want to learn more about how this works, and whether we would be a good fit for your website needs <a href="<?php echo $PREFIX;?>contact/index.php" class="service-contact-link">Contact us</a> today.</p>
			</div>
			<div class="col-s-12 col-md-6 col-lg-8">
				<img src="<?php echo $PREFIX;?>images/seo.jpg" alt="Search Engine Optimization" class="service-image"/>
			</div>
		</div>
	</div>

	<!-- Footer -->

<?php require_once("../php/partials/footer.php");?>