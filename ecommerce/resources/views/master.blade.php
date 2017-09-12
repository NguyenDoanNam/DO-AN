<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <!-- /Added by HTTrack -->
  <meta charset="utf-8">
  <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Accord, premium HTML5 &amp; CSS3 template</title>
  <!-- Favicons Icon -->
  <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon">
  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- CSS Style -->
  <!--<link rel="stylesheet" href="css/animate.css" type="text/css">-->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/slider.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700,400italic" rel="stylesheet" type="text/css"> </head>

<body class="cms-index-index">
  <div class="page">
    <!-- Header -->
    @include('header')
    <!-- end header -->
    <!-- Navbar -->
    @include('menu')

    <!-- end nav -->
    
    @yield ('content')
    @include('brandlogo')
    <!-- Footer -->
   @include('footer')
    <!-- End Footer -->
  </div>
 @include('helpsite')
  
  <!-- JavaScript -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/parallax.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/slider.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript">
    //<![CDATA[
	jQuery(function() {
		jQuery(".slideshow").cycle({
			fx: 'scrollHorz', easing: 'easeInOutCubic', timeout: 10000, speedOut: 800, speedIn: 800, sync: 1, pause: 1, fit: 0, 			pager: '#home-slides-pager',
			prev: '#home-slides-prev',
			next: '#home-slides-next'
		});
	});
    //]]>
  </script>
  <!-- Giao dien duoc chia se mien phi tai www.ptheme.net [Free HTML Download]. SKYPE[ptheme.net] - EMAIL[ptheme.net@gmail.com].-->
</body>

</html>