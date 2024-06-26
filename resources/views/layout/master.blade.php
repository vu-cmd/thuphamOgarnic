<!DOCTYPE html>
<html lang="vi-VN" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <link rel="shortcut icon" href="data/Flash/ne1EP1589167991.png" type="image/x-icon" />
        <base href = "https://tk10.halink.asia/" />
    <meta name = "keywords" content = "" />
    <meta name = "description" content = "	" />
    <meta name = "abstract" content = "	" />
    <meta name="robots" content="noodp"/>
    <meta name='revisit-after' content='1 days' />

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,900italic,900,700italic,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <link rel= "stylesheet" type = "text/css" href = "https://tk10.halink.asia/public/template/css/font-awesome.min.css" />
    <link rel= "stylesheet" type = "text/css" href = "https://tk10.halink.asia/public/template/css/bootstrap.min.css" />

    <!-- <link rel= "stylesheet" type = "text/css" href = "https://tk10.halink.asia/public/template/css/owl.carousel.css" /> -->
     <link rel="stylesheet" type="text/css" href="{{ asset('css/banhang/owl.carousel.css') }}">
    <!-- <link rel= "stylesheet" type = "text/css" href = "https://tk10.halink.asia/public/theme/css/call.css"/> -->
	 <link rel="stylesheet" type="text/css" href="{{ asset('css/banhang/call.css') }}">
    <!-- <link rel= "stylesheet" type = "text/css" href = "https://tk10.halink.asia/public/theme/css/style.css"/> -->
	 <link rel="stylesheet" type="text/css" href="{{ asset('css/banhang/style.css') }}">
    <!-- <link rel= "stylesheet" type = "text/css" href = "https://tk10.halink.asia/public/theme/css/animate.css"/> -->
		 <link rel="stylesheet" type="text/css" href="{{ asset('css/banhang/animate.css') }}">
    
   <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"> -->


    <script type="text/javascript" src="https://tk10.halink.asia/public/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://tk10.halink.asia/public/js/website.js"></script>
    <script type="text/javascript" src="https://tk10.halink.asia/public/js/owl.carousel.js"></script>
    <script type="text/javascript" src="https://tk10.halink.asia/public/js/jssor.slider.min.js"></script>
    
    <script type="text/javascript" src="https://tk10.halink.asia/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://tk10.halink.asia/public/theme/js/wow.min.js"></script>
    
    
    <script type="text/javascript" src="https://tk10.halink.asia/public/theme/js/script.js"></script>
    
    <script type="text/javascript" src="https://tk10.halink.asia/public/theme/js/cloudzoom.js"></script> 

    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script> 
    
    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css"
      >


    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
      @yield('style')
</head>
<body>
     @include('layout.header')  
  <main>
      @yield('content')
  </main>
  @include('layout.footer')
</body>
</html>