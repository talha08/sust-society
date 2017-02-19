<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>{!! $title or  "SUST Society" !!}</title>

    <link rel="shortcut icon" href="frontend/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="frontend/images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="frontend/images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="frontend/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="frontend/images/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="frontend/images/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="frontend/images/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="frontend/images/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="frontend/images/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/images/apple-touch-icon-180x180.png" />


    {!! Html::style('frontend/rs-plugin/css/settings.css') !!}
    {!! Html::style('frontend/fonts/font-awesome-4.3.0/css/font-awesome.min.css') !!}
    {!! Html::style('frontend/css/bootstrap.css') !!}
    {!! Html::style('frontend/css/animate.css') !!}
    {!! Html::style('frontend/css/menu.css') !!}
    {!! Html::style('frontend/css/carousel.css') !!}
    {!! Html::style('frontend/css/style.css') !!}
    {!! Html::style('frontend/css/style2.css') !!}
            <!-- Toastr style -->
    {!! Html::style('css/plugins/toastr/toastr.min.css') !!}

    <!-- COLORS -->
    {!! Html::style('frontend/css/custom.css') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {!! Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
    {!! Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
    <![endif]-->
    @yield('style')
</head>