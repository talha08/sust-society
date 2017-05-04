<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <title>{!! $title or  "SUST Society" !!}</title>
    <meta name="description" content="Gallaxy Responsive HTML5/CSS3 Template from FIFOTHEMES.COM">
    <meta name="author" content="FIFOTHEMES.COM">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,700,800,900' rel='stylesheet' type='text/css'>



    <!-- Library CSS -->
    {!! Html::style('frontend/css/bootstrap.css') !!}
    {!! Html::style('frontend/css/bootstrap-theme.css') !!}
    {!! Html::style('frontend/css/fonts/font-awesome/css/font-awesome.css') !!}
    {!! Html::style('frontend/css/animations.css') !!}
    {!! Html::style('frontend/css/superfish.css') !!}
    {!! Html::style('frontend/css/revolution-slider/css/settings.css') !!}
    {!! Html::style('frontend/css/revolution-slider/css/extralayers.css') !!}
    {!! Html::style('frontend/css/prettyPhoto.css') !!}
    <!-- Theme CSS -->
    {!! Html::style('frontend/css/style.css') !!}
    <!-- Skin -->
    {!! Html::style('frontend/css/colors/green.css') !!}
    <!-- Responsive CSS -->
    {!! Html::style('frontend/css/theme-responsive.css') !!}
    <!-- Switcher CSS -->
    {!! Html::style('frontend/css/switcher.css') !!}
    {!! Html::style('frontend/css/spectrum.css') !!}



    <!-- Favicons -->
    <link rel="shortcut icon" href="frontend/img/ico/favicon.ico">
    <link rel="apple-touch-icon" href="frontend/img/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="frontend/img/ico/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="frontend/img/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="frontend/img/ico/apple-touch-icon-144.png">
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="frontend/js/respond.min.js"></script>
    <![endif]-->
    <!--[if IE]>
    <link rel="stylesheet" href="frontend/css/ie.css">
    <![endif]-->


    @yield('style')
</head>