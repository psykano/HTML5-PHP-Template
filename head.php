<!--
Contains information about the website.
Also has links to scripts and style sheets.
-->
<head>
	<!-- 
	Specify the character encoding to be UTF-8 (unicode) since this covers
	all the common characters and symbols used in any language.
	-->
	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- General information and important for SEO (Search Engine Optimization)-->
	<title><?php echo $title; ?></title>
        <meta name="author" content="<?php echo $author; ?>" />
        <meta name="description" content="<?php echo $description; ?>" />
	<meta name="Copyright" content="<?php echo $copyright; ?>" />

	<!-- 
	Specify how the website will look on mobile devices.
	More information can be found at:
	https://developer.mozilla.org/en/docs/Mozilla/Mobile/Viewport_meta_tag
	-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Links to style sheets -->
	
	<!--
	This gives us a base style to work with across all browsers.
	It should always be the first style you link!
	More information can be found at:
	http://html5reset.org/
	-->
	<link rel="stylesheet" href="../assets/css/reset.css">

	<!--
	This gives us some classes to help with our website's layout.
	It should always be linked before your own style sheet.
	-->
	<link rel="stylesheet" href="../assets/css/layout.css">
	
	<!-- Our own style sheet -->
	<link rel="stylesheet" href="../assets/css/style.css">

	<!-- Links to fonts -->
	<!-- (Note that it is a very good idea to not link fonts your website will not use) -->

	<!-- 
	Google fonts are pretty and completely free to use. Take advantage of them!
	You can check them all out at https://www.google.com/fonts
	-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,800' rel='stylesheet' type='text/css'>

	<!-- Links to blocking scripts -->
	<!-- (Note that it is a very good idea to not link scripts your website will not use) -->

	<!-- The extremely popular jQuery. Read about it at http://jquery.com/ -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Grab the local copy if we can't get it from Google's CDN above -->
	<script>
		if (!window.jQuery) {
		    document.write('<script src="../assets/js/jquery-1.11.1.min.js"><\/script>');
		}
	</script>

	<!--
	These libraries can be extremely helpful if you plan to support
	Internet Explorer versions 8 and under.
	More information on html5shiv can be found at: https://code.google.com/p/html5shiv/
	More information on Selectivizr can be found at: http://selectivizr.com/

	There is also CSS3Pie for support of more features like border-radius, however,
	it is not as simple as linking a script.
	If you would like to use it, you can find more information at http://css3pie.com/
	-->
	<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv-printshiv.min.js"></script>
		<script src="../assets/js/selectivizr-min.js"></script>
	<![endif]-->
</head>

