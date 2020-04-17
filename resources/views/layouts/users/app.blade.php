<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:127.0.0.1:8000\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.10"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' href='{{ asset('wp-includes/css/dist/block-library/style.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('wp-content/plugins/contact-form-7/includes/css/styles.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('wp-content/themes/epaphras/style.css') }}' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('wp-includes/js/jquery/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-includes/js/jquery/jquery-migrate.min.js') }}'></script>
    <style>
        .hero .thumbnail-inner, .hero-home .thumbnail-inner { opacity: ; }
    </style>

    <style>
        /* Couleur principale */
        .audioplayer-bar-played, .audioplayer-volume-adjust div div, .btn:hover, .sep, .gospel-home, input[type="submit"], .sidebar .widget-social li a, .post-entry .post-img {
            background:  ;
        }
        a, .btn, .btn-full-white, .btn i, .btn-full-white i, .btn-white:hover, .btn-white:hover i, .btn-full-white, .btn-full-white i, .btn-full-white:hover, .home-section blockquote .quote-icon, .event-entry h3 a:hover, .post-entry h3 a:hover, .entry-predic h4 a:hover, .meta li a:hover, header .sub-menu li a:hover {
            color: ;
        }
        .btn, .btn:hover, input[type="submit"] {
            border-color: ;
        }
        /* Couleur de survol */
        a:hover {
            color: ;
        }
        input[type="submit"]:hover, .sidebar .widget-social li a:hover, .btn-full:hover {
            background: ;
        }
        input[type="submit"]:hover, .btn-full:hover {
            border-color: ;
        }
    </style>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>
<body class="home page-template page-template-template-accueil page-template-template-accueil-php page page-id-96 wp-custom-logo">
    <div class="wrapper">
        @include('layouts.users.partials._navbar')

        @yield('content')

        @include('layouts.users.partials._footer')
    </div>

    <script type='text/javascript' src='{{ asset('wp-content/plugins/contact-form-7/includes/js/scripts.js') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/epaphras/js/jquery-2.1.4.js') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/epaphras/js/owl.carousel.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/epaphras/js/main.js') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/epaphras/js/audioplayer.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/epaphras/js/skip-link-focus-fix.js') }}'></script>

	<script>
        $('audio').audioPlayer({
            classPrefix: 'audioplayer',
            strPlay: 'Play',
            strPause: 'Pause',
            strVolume: 'Volume'
        });
	</script>

    <script>
        $(document).ready(function(){
            $('.owl-slider').owlCarousel({
                items:1,
                margin:0,
                nav:true,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                loop:true,
                autoHeight:true,
                autoplay:true,
                autoplayTimeout:'5000',
            });
        });
    </script>
</body>
</html>
