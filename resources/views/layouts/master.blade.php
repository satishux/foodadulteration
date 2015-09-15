<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Food Adulteration</title>
    <meta name="description" content="Responsive Multi-Purpose HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#222222"> <!-- Android 5.0 Tab Color -->
    <link rel="shortcut icon" href="/img/logo/favicon.png">

    <!-- Google Fonts -->
    <!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>-->
    <!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    <!-- Icon Fonts CSS -->
    {{--<link rel="stylesheet" href="/css/knight-iconfont.css">--}}
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="/css/reset.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/jquery.fs.shifter.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/shortcodes.css">
    <link rel="stylesheet" href="/css/custom-bg.css">
    <link rel="stylesheet" href="/css/custom.css">

    <!-- JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body class="shifter shifter-left offcanvas-menu-left offcanvas-menu-dark mobile-header-style2 sticky-header sticky-dark">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('layouts.mobile-header')
@include('layouts.off-canvas-mobile-menu')

<div class="main-wrapper shifter-page">

    <!-- Start main-header -->
    <header class="main-header style2 overlay-header">
        <div class="main-header-inner">
            {{--@include('layouts.top-infobar')--}}
            <div class="main-bar padding-37 dark-bg top-nav">
                <div class="container clearfix">
                    @include('layouts.top-logo')
                    @include('layouts.top-nav')
                </div><!-- /container -->
            </div><!-- /main-bar -->
        </div><!-- /main-header-inner -->

        @include('layouts.breadcrumbs')
    </header>
    <!-- End main-header -->

    <!-- Start main-contents -->
    <section class="main-contents">
        <div id="wrapper">
            @yield('content')
        </div>
    </section>
    <!-- End main-contents -->

    <!-- Start main-footer -->
        @include('layouts.footer')


</div><!-- /main-wrapper -->

<!-- JS -->
{{--<script src="/js/jquery.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/js/jquery.fs.shifter.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.appear.js"></script>
{{--<script src="/js/bootstrap.min.js"></script>--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>