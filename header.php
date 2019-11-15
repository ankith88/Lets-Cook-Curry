<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="images/lcc_logo.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/lcc_logo.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/lcc_logo.png">
	<link rel="manifest" href="assets/ico/manifest.json">
	<link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="images/lcc_logo.png">
	<meta name="msapplication-config" content="assets/ico/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<title>Let's Cook Curry</title>

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/lightbox/css/lightbox.min.css">
	<link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<!-- CSS Global -->
	<!-- build:css assets/css/theme.min.css -->
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- endbuild -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3B1H5SZSKW"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-3B1H5SZSKW');
	</script>
	<script type="text/javascript">
		$( "#html_element" ).click(function() {
			var response = grecaptcha.getResponse();
    		if(response.length == 0) {
        		document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        		return false;
    		}
    		return true;
		});
		function verifyCaptcha() {
   			document.getElementById('g-recaptcha-error').innerHTML = '';
		}
	</script>

  </head>
  <body ng-app="myApp">