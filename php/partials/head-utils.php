<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/
// include the appropriate number of dirname() functions
// on line 8 to correctly resolve your directory's path
require_once(dirname(dirname(__DIR__)) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>

		<!-- Metadata -->

		<meta charset="utf-8"/>
		<meta name="viewport" content="width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<meta name="author" content="Korigan Payne"/>
		<meta name="description" content="Korigan Design, LLC is an Albuquerque based wed design and software development company. We also specialize in media and graphic design, branding, and photography."/>

		<!-- Bootstrap CSS -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"/>

		<!-- Google Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Lora|Poiret+One|Raleway" rel="stylesheet">

		<!-- Font Awesome -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

		<!-- Animate.css -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

		<!-- Slick Carousel -->

		<link rel="stylesheet" href="<?php echo $PREFIX;?>styles/slick.css">
		<link rel="stylesheet" href="<?php echo $PREFIX;?>styles/slick-theme.css">

		<!-- My CSS -->

		<link href="<?php echo $PREFIX;?>styles/style.css" rel="stylesheet"/>

		<!-- jQuery, Popper.js, Bootstrap JS -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- JavaScript Form Validator File -->

		<script src="<?php echo $PREFIX;?>js/form-validate.js" type="text/javascript"></script>

		<!-- Google reCAPTCHA -->

		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

		<!-- Favicon -->

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $PREFIX;?>images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $PREFIX;?>images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $PREFIX;?>images/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $PREFIX;?>images/favicon/manifest.json">
		<link rel="mask-icon" href="<?php echo $PREFIX;?>images/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">

		<!-- Rich Snippet -->

		<script type="application/ld+json">
	{
  	"@context": "http://schema.org",
  	"@type": "LocalBusiness",
  	"additionalType": [ "http://www.productontology.org/id/Web_design",
  	"http://www.productontology.org/id/Software_developer",
  	"http://www.productontology.org/id/Graphic_design"
  	],
  	"@id": "https://korigandesign.com",
  	"url": "https://korigandesign.com",
  	"logo": "https://korigandesign.com/images/KD.png",
  	"contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+1-505-304-5104",
    "contactType": "customer service"
  }],
  	"email": "info@korigandesign.com",
  	"address": {
    "@type": "PostalAddress",
    "streetAddress": "1039 June St NE",
    "addressLocality": "Albuquerque",
    "addressRegion": "NM",
    "postalCode":"87112"
  	},
  	"description": "Custom Software Development, Web and Media Design, and Branding",
  	"name": "Korigan Design, LLC",
  	"telephone": "+1-505-304-5104",
  	"openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "09:00",
      "closes": "18:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "09:00",
      "closes": "14:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Sunday",
      "opens": "00:00",
      "closes": "00:00"
    }
  ],
  	"geo": {
    "@type": "GeoCoordinates",
    "latitude": "35.091745",
    "longitude": "-106.523707"
 		},
 	"priceRange": "$100-$30000",
 	"image": "https://korigandesign.com/images/KD.png",
  	"sameAs" : [ "https://www.koriganpayne.com",
    "https://www.designbykorigan.com",
    "https://twitter.com/KoriganP",
    "https://github.com/Koriganp"
    ]
	}
</script>

		<!-- Page Title -->

		<title><?php echo $PAGE_TITLE;?></title>

	</head>
	<body>

