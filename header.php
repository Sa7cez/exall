<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Exall - Bitcoin everywhere</title>

    <meta property="og:title" content="Exall - Bitcoin everywhere">
    <meta property="og:description" content="Bitcoin exchange service">
    <meta property="og:locale" content="en_EN">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://elyshev-dev.ru/exall">
    <meta property="og:image" content="http://elyshev-dev.ru/exall/assets-lossy/footer_logo.jpg">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600,400,300,100&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    
    <!-- SVG icons -->
    <link rel="stylesheet" href="fonts/fontello/css/exall.css?ver=4.3.1" type="text/css" media="all" />
    <link rel="stylesheet" href="fonts/fontello/css/exall-codes.css?ver=4.3.1" type="text/css" media="all" />
    <link rel="stylesheet" href="fonts/fontello/css/exall-ie7.css?ver=4.3.1" type="text/css" media="all" />
    <link rel="stylesheet" href="fonts/fontello/css/exall-ie7-codes.css?ver=4.3.1" type="text/css" media="all" />

    <!-- Main style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets-lossy/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets-lossy/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets-lossy/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets-lossy/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets-lossy/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets-lossy/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets-lossy/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets-lossy/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets-lossy/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="assets-lossy/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets-lossy/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="assets-lossy/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets-lossy/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets-lossy/manifest.json">
    <link rel="mask-icon" href="assets-lossy/safari-pinned-tab.svg" color="#555555">
    <link rel="shortcut icon" href="assets-lossy/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Exall">
    <meta name="application-name" content="Exall">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="assets-lossy/mstile-144x144.png">
    <meta name="msapplication-config" content="assets-lossy/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- /Favicons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- Facebook loader -->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- /Facebook -->
    
    <div class="container">
      <div id="secure_open"><i class="icon-lock"></i> <span>Убедитесь в безопасности нашего сервиса</span></div>
    </div>
    
    <!-- Fix header in landing page -->
    <header <?php if($_SERVER['REQUEST_URI'] == '/exall/') { echo 'class="fixed"'; } ?>>
      <div class="container">

        <div class="mainlogo">
          <a href="#" class="logo"></a>
        </div>
        
        <div class="pricing">
          <table>
            <tr>
              <td>Last price:</td>
              <td>243</td>
            </tr>
            <tr>
              <td>High:</td>
              <td>254</td>
            </tr>
            <tr>
              <td>Low:</td>
              <td>237</td>
            </tr>
          </table>
        </div>

        <a href="#" class="hidden-mobile">
          <span class="login open_popup">Log in <i class="icon-arrow-right"></i></span>
        </a>

        <div class="flags">
          <a href="/en"><div class="flag en active"></div></a>
          <a href="/ru"><div class="flag ru"></div></a>
          <a href="/ru"><div class="flag ch"></div></a>
          <div class="flags_changer" onclick="$(this).parent().toggleClass('opened'); $('header .mobile').toggle();"></div>
        </div>
        
        <nav class="hidden-mobile">
          <ul>
            <li><a href="about">About us</a></li>
            <li><a href="how_it_works">How it works?</a></li>
            <li><a href="safety">Safety</a></li>
            <li><a href="reviews">Reviews</a></li>
            <li><a href="limits">Limits</a></li>
          </ul>
        </nav>

        <div class="mobile" onclick="$('header .mobile_menu').fadeToggle();">
          <i class="icon-hamburger"></i>
          <ul class="mobile_menu" style="display:none">
            <li><a href="#" class="open_popup">Log in <i class="icon-arrow-right"></i></a></li>
            <li><a href="about">About us</a></li>
            <li><a href="how_it_works">How it works?</a></li>
            <li><a href="safety">Safety</a></li>
            <li><a href="reviews">Reviews</a></li>
            <li><a href="limits">Limits</a></li>
          </ul>
        </div>

        <div class="clearfix"></div>
  
      </div>
    </header>
    
