<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @php $setting = App\Models\Setting::find($currentLang->id); @endphp
    <!-- Page Title -->
    <title>@yield('title')</title>

    <!-- Meta Data -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('meta')">
    <link rel="canonical" href="{{url()->current()}}">
    <meta name="keywords" content="{{$setting->keywords}}" />
    <meta name="publisher" content="{{url()->current()}}">
    <meta name="copyright" content="Copyright (c) {{$setting->title}}" />
    <meta name="author" content="{{$setting->author}}" />
    <meta name="contact" content="{{$setting->contact}}" />

    <meta name="revisit-after" content="7 Days" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="subjects" content="{{$setting->title}}" />
    <meta name="classification" content="{{$setting->title}}" />

    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('meta')">
    <meta itemprop="image" content="{{route('home')}}{{$setting->photo ? '/images/media/' . $setting->photo->file : '/img/200x200.png'}}">

    @if($setting->OGgraph_switch == 1)

    <meta property="og:title" content="@yield('title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:image" content="{{route('home')}}{{$setting->photo ? '/images/media/' . $setting->photo->file : '/img/200x200.png'}}" />
    <meta property="og:site_name" content="{{$setting->author}}" />
    <meta property="og:description" content="@yield('meta')" />

    @endif

    @if($setting->analytics_switch == 1)


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$setting->analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{$setting->analytics}}');
    </script>

    @endif

    @if($setting->facebook_pixel_switch == 1)

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '{{$setting->facebook_pixel}}');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id={{$setting->facebook_pixel}}&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{$setting->favicon}}" type="image/x-icon">
    <link rel="icon" href="{{$setting->favicon}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">


    @if($currentLang->rtl == 1)
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    @else
        <link href="{{$setting->font}}" rel="stylesheet">
    @endif
    <!-- Styles -->
    <link href="{{ asset('css/front/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/libs/fontawesome.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/front/owl.carousel.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/front/venor.css') }}" type="text/css" rel="stylesheet">


    @yield('styles')

    @if($currentLang->rtl == 1)
        <link href="{{ asset('css/front/rtl.css') }}" type="text/css" rel="stylesheet">
    @endif


    <!-- Inline Styles -->
    <style>
        body {
            @if($currentLang->rtl == 1)
                font-family: 'Cairo', sans-serif;
            @else
                font-family: 'Inter', sans-serif;
            @endif
        }
    </style>

    @if($setting->custom_css)
        <style>
            {!! $setting->custom_css !!}
        </style>
    @endif

    <link rel='dns-prefetch' href='//www.google.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='dns-prefetch' href='//i0.wp.com' />
    <link rel='dns-prefetch' href='//c0.wp.com' />
    <link rel="alternate" type="application/rss+xml" title="Final Kid Films &raquo; Feed" href="https://www.finalkid.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Final Kid Films &raquo; Comments Feed" href="https://www.finalkid.com/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.finalkid.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0"}};
        /*! This file is auto-generated */
        !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'  href='https://c0.wp.com/c/6.0/wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mediaelement-css'  href='https://c0.wp.com/c/6.0/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css'  href='https://c0.wp.com/c/6.0/wp-includes/js/mediaelement/wp-mediaelement.min.css' type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
    </style>
    <link rel='stylesheet' id='contact-form-7-css'  href='{{asset('css/libs/styles.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='nectar-slider-css'  href='{{asset('css/libs/nectar-slider.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='nectar-portfolio-css'  href='{{asset('css/libs/portfolio.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='salient-social-css'  href='https://www.finalkid.com/wp-content/plugins/salient-social/css/style.css?ver=1.1' type='text/css' media='all' />
    <style id='salient-social-inline-css' type='text/css'>

        .sharing-default-minimal .nectar-love.loved,
        body .nectar-social[data-color-override="override"].fixed > a:before,
        body .nectar-social[data-color-override="override"].fixed .nectar-social-inner a,
        .sharing-default-minimal .nectar-social[data-color-override="override"] .nectar-social-inner a:hover {
            background-color: #00e1af;
        }
        .nectar-social.hover .nectar-love.loved,
        .nectar-social.hover > .nectar-love-button a:hover,
        .nectar-social[data-color-override="override"].hover > div a:hover,
        #single-below-header .nectar-social[data-color-override="override"].hover > div a:hover,
        .nectar-social[data-color-override="override"].hover .share-btn:hover,
        .sharing-default-minimal .nectar-social[data-color-override="override"] .nectar-social-inner a {
            border-color: #00e1af;
        }
        #single-below-header .nectar-social.hover .nectar-love.loved i,
        #single-below-header .nectar-social.hover[data-color-override="override"] a:hover,
        #single-below-header .nectar-social.hover[data-color-override="override"] a:hover i,
        #single-below-header .nectar-social.hover .nectar-love-button a:hover i,
        .nectar-love:hover i,
        .hover .nectar-love:hover .total_loves,
        .nectar-love.loved i,
        .nectar-social.hover .nectar-love.loved .total_loves,
        .nectar-social.hover .share-btn:hover,
        .nectar-social[data-color-override="override"].hover .nectar-social-inner a:hover,
        .nectar-social[data-color-override="override"].hover > div:hover span,
        .sharing-default-minimal .nectar-social[data-color-override="override"] .nectar-social-inner a:not(:hover) i,
        .sharing-default-minimal .nectar-social[data-color-override="override"] .nectar-social-inner a:not(:hover) {
            color: #00e1af;
        }
    </style>
    <link rel='stylesheet' id='mc4wp-form-themes-css'  href='https://www.finalkid.com/wp-content/plugins/mailchimp-for-wp/assets/css/form-themes.css?ver=4.8.7' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='https://www.finalkid.com/wp-content/themes/salient/css/font-awesome.min.css?ver=4.6.4' type='text/css' media='all' />
    <link rel='stylesheet' id='salient-grid-system-css'  href='https://www.finalkid.com/wp-content/themes/salient/css/grid-system.css?ver=11.0.2' type='text/css' media='all' />
    <link rel='stylesheet' id='nectar-header-perma-transparent-css'  href='https://www.finalkid.com/wp-content/themes/salient/css/header/header-perma-transparent.css?ver=11.0.2' type='text/css' media='all' />
    <link rel='stylesheet' id='main-styles-css'  href='{{asset('css/libs/style.css')}}' type='text/css' media='all' />

    <link rel='stylesheet' id='magnific-css'  href='{{asset('css/libs/magnific.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='nectar_default_font_open_sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='https://www.finalkid.com/wp-content/themes/salient/css/responsive.css?ver=11.0.2' type='text/css' media='all' />
    <link rel='stylesheet' id='select2-css'  href='https://www.finalkid.com/wp-content/themes/salient/css/plugins/select2.css?ver=6.2' type='text/css' media='all' />
    <link rel='stylesheet' id='skin-material-css'  href='{{asset('css/libs/skin-material.css')}}' type='text/css' media='all' />
    <!--[if lt IE 9]>
    <link rel='stylesheet' id='vc_lte_ie9-css'  href='https://www.finalkid.com/wp-content/plugins/js_composer_salient/assets/css/vc_lte_ie9.min.css?ver=6.0.5' type='text/css' media='screen' />
    <![endif]-->
    <link rel='stylesheet' id='js_composer_front-css'  href='https://www.finalkid.com/wp-content/plugins/js_composer_salient/assets/css/js_composer.min.css?ver=6.0.5' type='text/css' media='all' />
    <link rel='stylesheet' id='dynamic-css-css'  href='https://www.finalkid.com/wp-content/themes/salient/css/salient-dynamic-styles.css?ver=45828' type='text/css' media='all' />
    <style id='dynamic-css-inline-css' type='text/css'>
        .no-rgba #header-space{display:none;}@media only screen and (max-width:999px)
        {body #header-space[data-header-mobile-fixed="1"]{display:none;}#header-outer[data-mobile-fixed="false"]{position:absolute;}}

        @media only screen and (max-width:999px){body:not(.nectar-no-flex-height) #header-space[data-secondary-header-display="full"]:not([data-header-mobile-fixed="false"])
        {display:block!important;margin-bottom:-50px;}#header-space[data-secondary-header-display="full"][data-header-mobile-fixed="false"]{display:none;}}
        @media only screen and (min-width:1000px){#header-space{display:none;}
            .nectar-slider-wrap.first-section,.parallax_slider_outer.first-section,.full-width-content.first-section,
            .parallax_slider_outer.first-section .swiper-slide .content,
             .nectar-slider-wrap.first-section .swiper-slide .content,#page-header-bg,.nder-page-header,#page-header-wrap,.full-width-section.first-section{margin-top:0!important;}
            body #page-header-bg,body #page-header-wrap{height:60px;}  }
        @media only screen and (min-width:1000px){#page-header-wrap.fullscreen-header,#page-header-wrap.fullscreen-header #page-header-bg,html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,#nectar_fullscreen_rows:not(.afterLoaded) > div{height:100vh;}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:100vh;}#page-header-bg[data-alignment-v="middle"] .span_6 .inner-wrap,#page-header-bg[data-alignment-v="top"] .span_6 .inner-wrap{padding-top:50px;}.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh + 2px)!important;}.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh - 30px)!important;}}@media only screen and (max-width:999px){#page-header-bg[data-alignment-v="middle"]:not(.fullscreen-header) .span_6 .inner-wrap,#page-header-bg[data-alignment-v="top"] .span_6 .inner-wrap{padding-top:34px;}.vc_row.top-level.full-width-section:not(.full-width-ns) > .span_12,#page-header-bg[data-alignment-v="bottom"] .span_6 .inner-wrap{padding-top:24px;}}@media only screen and (max-width:690px){.vc_row.top-level.full-width-section:not(.full-width-ns) > .span_12{padding-top:34px;}.vc_row.top-level.full-width-content .nectar-recent-posts-single_featured .recent-post-container > .inner-wrap{padding-top:24px;}}@media only screen and (max-width:999px){.full-width-ns .nectar-slider-wrap .swiper-slide[data-y-pos="middle"] .content,.full-width-ns .nectar-slider-wrap .swiper-slide[data-y-pos="top"] .content{padding-top:30px;}}
        /* Overlay Thumbnail same size as original Thumbnail*/
        .vert-center {
            width: 100% !important;
            height:100% !important;
        }


        /* Remove ReCaptcha Badge on Mobile*/
        .grecaptcha-badge {
            visibility: hidden;
        }

        /* Fix Video thumbnail broken animation*/
        .portfolio-items[data-ps="7"] .col:hover .work-info .vert-center {
            -webkit-transform: scale(1) perspective(1px) translateY(-50%) translateX(-50%) !important;
            -ms-transform: scale(1) perspective(1px) translateY(-50%) translateX(-50%) !important;
            transform: scale(1) perspective(1px) translateY(-50%) translateX(-50%) !important;
        }



        /* Fix text scaling on bigger monitors*/
        @media only screen and (min-width: 2500px) {
            .container, body[data-header-format="left-header"] .container, .woocommerce-tabs .full-width-content .tab-container, .nectar-recent-posts-slider .flickity-page-dots, .post-area.standard-minimal.full-width-content article.post
            {
                max-width: 100% !important;
            }
            header#top nav > ul > li > a, .span_3 .pull-left-wrap > ul > li > a, #header-secondary-outer .nectar-center-text, #slide-out-widget-area .secondary-header-text {
                font-size: 1.3vw !important;
            }
            p {
                font-size: 1.2vw !important;
                line-height: 1.2vw !important;
            }

            .about-fk-textbox
            {
                margin-top: 400px !important;
            }

            .portfolio-items[data-col-num="elastic"] {
                margin: auto !important;
                transform: translateX(-50%) !important;
            }
            .portfolio-wrap {
                left: 50% !important;
            }

        }
        /* Fix scaling in big screen mode*/
        .portfolio-items .col .work-info .vert-center .custom-content {
            height:auto;
        }
        body .portfolio-items .col .work-item .work-info .custom-content a {
            display: block;
            width: 100%;
            height:auto;
        }


        /* Hardcode footer font size*/
        #footer-outer a,#footer-outer p {
            font-size: 14px !important;
        }


        /* Remove 1px border between portfolio items*/
        body div.portfolio-items[data-gutter="1px"][data-col-num="elastic"], body .portfolio-items[data-gutter="1px"] .col.elastic-portfolio-item{
            padding: 0px!important;
        }


        .portfolio-items .work-info {
            padding: 0px 0px !important;
        }

        .work-info-bg {
            background-color: rgba(0,0,0,0) !important;
        }


        .portfolio-items .work-item[data-custom-content="on"] .work-info {
            padding: 0 0px !important;
        }


        /* Fix the offset of the overlay thumbnail video and make bg transparent*/
        a.default-link.gallery.magnific {
            padding: 0px !important;
            margin: 0px !important;
            background-color: rgba(0,0,0,0) !important;
        }



        /* ? */
        .main-content .wpb_row:first-child {
            margin-bottom: 0px !important;
        }


        /* For Blog page */
        body .meta-author {
            display: none !important;
        }
        body .meta-category {
            display: none !important;
        }
        body .grav-wrap {
            display: none !important;
        }

        /* For Blog Single Pages */
        body #single-below-header {
            display: none !important;
        }


        /* hide date and love on masonry blog */
        body #post-area.masonry article.post .post-meta {
            display: none!important;
        }

        article.post .content-inner {
            border-bottom: none;
        }
    </style>

    <link rel='stylesheet' id='jetpack_css-css'  href='https://c0.wp.com/p/jetpack/11.0/css/jetpack.css' type='text/css' media='all' />
    <script type='text/javascript' src='https://c0.wp.com/c/6.0/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' src='https://c0.wp.com/c/6.0/wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>

    <style>
        img#wpstats{display:none}</style>
    <script type="text/javascript"> var root = document.getElementsByTagName( "html" )[0]; root.setAttribute( "class", "js" ); </script><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127571880-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127571880-1');
    </script><style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
    <style type="text/css">
        /* If html does not have either class, do not show lazy loaded images. */
        html:not( .jetpack-lazy-images-js-enabled ):not( .js ) .jetpack-lazy-image {
            display: none;
        }
    </style>
    <script>
        document.documentElement.classList.add(
            'jetpack-lazy-images-js-enabled'
        );
    </script>

    <style type="text/css" data-type="vc_custom-css">
        .hiderow12{
            visibility:hidden !important;
        }
    </style>
    <noscript>
        <style> .wpb_animate_when_almost_visible { opacity: 1; }
        </style>
    </noscript>

</head>
<body class="@if($currentLang->rtl == 1) rtl @endif"
class="home page-template-default page page-id-1531 material wpb-js-composer js-comp-ver-6.0.5 vc_responsive"
      data-footer-reveal="false" data-footer-reveal-shadow="none" data-header-format="centered-logo-between-menu"
      data-body-border="off" data-boxed-style="" data-header-breakpoint="1000" data-dropdown-style="minimal" data-cae="easeOutCubic"
      data-cad="750" data-megamenu-width="contained" data-aie="none" data-ls="magnific" data-apte="standard" data-hhun="0" data-fancy-form-rcs="1"
      data-form-style="default" data-form-submit="see-through" data-is="minimal" data-button-style="default" data-user-account-button="false"
      data-flex-cols="true" data-col-gap="default" data-header-inherit-rc="false" data-header-search="false" data-animated-anchors="true"
      data-ajax-transitions="false" data-full-width-header="true" data-slide-out-widget-area="true" data-slide-out-widget-area-style="slide-out-from-right"
      data-user-set-ocm="off" data-loading-animation="none" data-bg-header="true" data-responsive="1" data-ext-responsive="true" data-header-resize="0"
      data-header-color="custom" data-cart="false" data-remove-m-parallax="1" data-remove-m-video-bgs="" data-force-header-trans-color="light" data-smooth-scrolling="0" data-permanent-transparent="1"
>

    <header class="header">
        <div class="header__content__venor">
            <div class="header__logo">
                <a href="{{url('/')}}" title="{{$setting->title}}">
                    <img width="105" height="22" class="img-fluid logo-front"
                         src="{{$setting->photo ? '/images/media/' . $setting->photo->file : '/img/200x200.png'}}" alt="logo">
                </a>
            </div>

            <form action="{{ route('search') }}" class="header__search__venor" method="GET">
                <input id="search" type="text" name="term" placeholder="{{clean( trans('niva-backend.search_text') , array('Attr.EnableID' => true))}}" autocomplete="off">
                <button type="submit"><i class="fas fa-search"></i></button>
                <button type="button" class="close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
                </button>
                <div id="project_list"></div>
            </form>


            <div class="header__menu__venor">


                <ul class="header__nav">

                    @foreach( $menus->sortBy('order') as $prod )

                        @if($prod->on_off_submenu == 1)
                           <li class="header__nav-item dropdown">
                                <a class="header__nav-link dropdown-toggle" href="{{$prod->link}}"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$prod->name}}
                                </a>
                                {!! $prod->submenu !!}

                            </li>
                        @else
                             <li class="header__nav-item"> <a title="{{$prod->name}}" class="header__nav-link" href="{{$prod->link}}">{{$prod->name}}</a> </li>
                        @endif
                    @endforeach

                </ul>
            </div>

            <div class="header__actions__venor">

                <div class="header__action header__action--search">
                    <button class="header__action-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
                </div>

                <div class="header__lang">

                    @if (!empty($currentLang) && count($langs) > 1)


                        <a class="header__lang-btn" href="#" role="button" id="dropdownLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img width="16" height="16" src="{{$currentLang->photo ? '/images/media/' . $currentLang->photo->file : '/img/200x200.png'}}" alt="flag">
                            <span>{{$currentLang->name}}</span>
                        </a>


                        <ul class="dropdown-menu header__lang-dropdown" aria-labelledby="dropdownLang">
                            @foreach ($langs as $key => $lang)
                            <li><a title="{{$lang->name}}"  href='{{ route('changeLanguage', $lang->code) }}'><img width="16" height="16" src="{{$lang->photo ? '/images/media/' . $lang->photo->file : '/img/200x200.png'}}" alt="flag"><span>{{$lang->name}}</span></a></li>
                            @endforeach
                        </ul>
                    @endif

                </div>

                <div class="header__action header__action--signin">
                    <a class="header__action-btn header__action-btn--start-project" href="{{$headerfooter->sidebar_description}}">
                        <span>{{$headerfooter->sidebar_title}}</span>
                    </a>
                </div>
            </div>

            <button class="header__btn__venor" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>



    @yield('content')

    <div class="typed-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                        <h4 class="parent-typed-text">
                        <span class="mt_typed-beforetext">{{$headerfooter->typed_title}} </span>
                            <span class="mt_typed_text"></span>

                        </h4>
                </div>
                <div class="col-md-4 text-right">
                    <a href="{{$headerfooter->typed_buttonlink}}" target="_self" class="btn btn-style1"><span>{{$headerfooter->typed_buttontext}}</span></a>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-section">
        <div class="footer-wrapper">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="footer-left">
                        <div class="inner">
                            <span>{{$headerfooter->footer_col1_subtitle}}</span>
                            <h4>{{$headerfooter->footer_col1_title}}</h4>
                            <a class="btn btn-style2" href="{{$headerfooter->footer_col1_buttonlink}}"> <span>{{$headerfooter->footer_col1_buttontext}}</span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-right">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="footer-widget">
                                    <div class="footer-widget widget_nav_menu">
                                        <h4 class="title">{{$headerfooter->footer_col2_title1}}</h4>
                                        <span class="venor-animate-border"></span>
                                        <div class="menu-quick-link-container">
                                            {!!$headerfooter->footer_col2_html1!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="footer-widget">
                                    <div class="widget widget_custom_html">
                                        <h4 class="title">{{$headerfooter->footer_col2_title2}}</h4>
                                        <span class="venor-animate-border"></span>
                                        <div class="custom-html-widget">
                                            {!!$headerfooter->footer_col2_html2!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="copyright-text">
                                    {!!$headerfooter->footer_copyright!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>





    @if($setting->SchmeaORG_switch == 1)

    <div class="hidden"  itemscope="" itemtype="https://schema.org/LocalBusiness">
        <span itemprop="description">@yield('meta')</span>
        <a itemprop="url" href="{{route('home')}}"> </a>
        <div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
        <img src="{{route('home')}}{{$setting->photo ? '/images/media/' . $setting->photo->file : '/img/200x200.png'}}" alt="logo" width="120" itemprop="url"></div>
        <span itemprop="name">{{$setting->title}}</span>
        <em><span itemprop="priceRange">{{$setting->price_range}}</span></em>
        <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
            <span itemprop="addressLocality">{{$setting->address}}</span> |
            <span itemprop="addressCountry">{{$setting->country}}</span> |
            <span itemprop="telephone">{{$setting->phone}}</span> |
            <span itemprop="email">{{$setting->contact}}</span>
        </div>
    </div>

    @endif


    @if($setting->whatsapp == 1)
    <a target="_blank" class="codeless-add-purchase-button" href="https://wa.me/{{$setting->phone}}"><i class="icon"><svg height="682pt" viewBox="-23 -21 682 682.66669" width="682pt" xmlns="http://www.w3.org/2000/svg"><path d="m544.386719 93.007812c-59.875-59.945312-139.503907-92.9726558-224.335938-93.007812-174.804687 0-317.070312 142.261719-317.140625 317.113281-.023437 55.894531 14.578125 110.457031 42.332032 158.550781l-44.992188 164.335938 168.121094-44.101562c46.324218 25.269531 98.476562 38.585937 151.550781 38.601562h.132813c174.785156 0 317.066406-142.273438 317.132812-317.132812.035156-84.742188-32.921875-164.417969-92.800781-224.359376zm-224.335938 487.933594h-.109375c-47.296875-.019531-93.683594-12.730468-134.160156-36.742187l-9.621094-5.714844-99.765625 26.171875 26.628907-97.269531-6.269532-9.972657c-26.386718-41.96875-40.320312-90.476562-40.296875-140.28125.054688-145.332031 118.304688-263.570312 263.699219-263.570312 70.40625.023438 136.589844 27.476562 186.355469 77.300781s77.15625 116.050781 77.132812 186.484375c-.0625 145.34375-118.304687 263.59375-263.59375 263.59375zm144.585938-197.417968c-7.921875-3.96875-46.882813-23.132813-54.148438-25.78125-7.257812-2.644532-12.546875-3.960938-17.824219 3.96875-5.285156 7.929687-20.46875 25.78125-25.09375 31.066406-4.625 5.289062-9.242187 5.953125-17.167968 1.984375-7.925782-3.964844-33.457032-12.335938-63.726563-39.332031-23.554687-21.011719-39.457031-46.960938-44.082031-54.890626-4.617188-7.9375-.039062-11.8125 3.476562-16.171874 8.578126-10.652344 17.167969-21.820313 19.808594-27.105469 2.644532-5.289063 1.320313-9.917969-.664062-13.882813-1.976563-3.964844-17.824219-42.96875-24.425782-58.839844-6.4375-15.445312-12.964843-13.359374-17.832031-13.601562-4.617187-.230469-9.902343-.277344-15.1875-.277344-5.28125 0-13.867187 1.980469-21.132812 9.917969-7.261719 7.933594-27.730469 27.101563-27.730469 66.105469s28.394531 76.683594 32.355469 81.972656c3.960937 5.289062 55.878906 85.328125 135.367187 119.648438 18.90625 8.171874 33.664063 13.042968 45.175782 16.695312 18.984374 6.03125 36.253906 5.179688 49.910156 3.140625 15.226562-2.277344 46.878906-19.171875 53.488281-37.679687 6.601563-18.511719 6.601563-34.375 4.617187-37.683594-1.976562-3.304688-7.261718-5.285156-15.183593-9.253906zm0 0" fill-rule="evenodd"/></svg></i></a>
    @endif

    <script src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('js/front/popper.min.js') }}"></script>
    <script src="{{ asset('js/front/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/front/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/front/simpleParallax.min.js') }}" defer></script>
    <script src="{{ asset('js/front/countTO.js') }}" defer></script>
    <script src="{{ asset('js/front/typed.min.js') }}" defer></script>
    <script src="{{ asset('js/front/shuffleLetters.js') }} " defer></script>
    <script src="{{ asset('js/front/tilt.jquery.min.js') }} " defer></script>
    <script src="{{ asset('js/front/magnific.min.js') }}" defer></script>
    <script src="{{ asset('js/front/venor.js') }}" defer></script>




    @include('cookieConsent::index')



    <script type="text/javascript">
    ( function ( $ ) {
        'use strict';
        $( document ).ready( function () {
            /* TYPED TEXT */
            $(function(){
                $(".mt_typed_text").typed({
                  strings: {!! $headerfooter->typed_text !!}, //blade / php dynamic functionality
                  typeSpeed: 1,
                  backDelay: 2000,
                  loop: true
                });
            });
        })
    } ( jQuery ) )
    </script>

    @if($setting->custom_css)
        <script type="text/javascript">
            {!! $setting->custom_js !!} //blade / php dynamic functionality
        </script>
    @endif

    @yield('scripts')


    <!--/ocm-effect-wrap-->
    <script>(function() {function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields) {
                for (var j=0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField);
                }
            }
        })();

    </script>
    /script><script type='text/javascript' src='https://c0.wp.com/p/jetpack/11.0/_inc/build/photon/photon.min.js' id='jetpack-photon-js'></script>
    <script type='text/javascript' src='https://c0.wp.com/c/6.0/wp-includes/js/dist/vendor/regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='https://c0.wp.com/c/6.0/wp-includes/js/dist/vendor/wp-polyfill.min.js' id='wp-polyfill-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {"api":{"root":"https:\/\/www.finalkid.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.6.1' id='contact-form-7-js'></script>
    <script type='text/javascript' src="{{asset('js/libs/anime.js')}}" id='anime-js'></script>
    <script type='text/javascript' id='nectar-slider-js-extra'>
        /* <![CDATA[ */
        var nectar_theme_info = {"using_salient":"true"};
        /* ]]> */
    </script>
    <script type='text/javascript' src="{{asset('js/libs/nectar-slider.js')}}" id='nectar-slider-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/salient-portfolio/js/third-party/imagesLoaded.min.js?ver=4.1.4' id='imagesLoaded-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/salient-portfolio/js/third-party/isotope.min.js?ver=7.6' id='isotope-js'></script>
    <script type='text/javascript' id='salient-portfolio-js-js-extra'>
        /* <![CDATA[ */
        var nectar_theme_info = {"using_salient":"true"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/salient-portfolio/js/salient-portfolio.js?ver=1.4' id='salient-portfolio-js-js'></script>
    <script type='text/javascript' id='salient-social-js-extra'>
        /* <![CDATA[ */
        var nectarLove = {"ajaxurl":"https:\/\/www.finalkid.com\/wp-admin\/admin-ajax.php","postID":"1531","rooturl":"https:\/\/www.finalkid.com","loveNonce":"1d28582cf4"};
        /* ]]> */
    </script>

    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/salient-social/js/salient-social.js?ver=1.1' id='salient-social-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/jquery.easing.js?ver=1.3' id='jquery-easing-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/jquery.mousewheel.js?ver=3.1.13' id='jquery-mousewheel-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/priority.js?ver=11.0.2' id='nectar_priority-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/transit.js?ver=0.9.9' id='nectar-transit-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/waypoints.js?ver=4.0.1' id='nectar-waypoints-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/modernizr.js?ver=2.6.2' id='modernizer-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/hoverintent.js?ver=1.9' id='hoverintent-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/magnific.js?ver=7.0.1' id='magnific-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/salient-core/js/third-party/touchswipe.min.js?ver=1.0' id='touchswipe-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/salient-portfolio/js/third-party/caroufredsel.min.js?ver=7.0.1' id='caroufredsel-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/superfish.js?ver=1.4.8' id='superfish-js'></script>
    <script type='text/javascript' src='{{asset('js/libs/superfish.js')}}' id='superfish-js'></script>
    <script type='text/javascript' id='nectar-frontend-js-extra'>
        /* <![CDATA[ */
        var nectarLove = {"ajaxurl":"https:\/\/www.finalkid.com\/wp-admin\/admin-ajax.php","postID":"1531","rooturl":"https:\/\/www.finalkid.com","disqusComments":"false","loveNonce":"1d28582cf4","mapApiKey":"AIzaSyBakt2YBOWWYSz3Y7Ay2I-z-AzLf0o26IU"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/init.js?ver=11.0.2' id='nectar-frontend-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/themes/salient/js/third-party/select2.min.js?ver=3.5.2' id='select2-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-lazy-images/dist/intersection-observer.js?minify=false&#038;ver=f5a9d453c5a79e347f9ee90353c1abdf' id='jetpack-lazy-images-polyfill-intersectionobserver-js'></script>
    <script type='text/javascript' id='jetpack-lazy-images-js-extra'>
        /* <![CDATA[ */
        var jetpackLazyImagesL10n = {"loading_warning":"Images are still loading. Please cancel your print and try again."};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-lazy-images/dist/lazy-images.js?minify=false&#038;ver=25eafb3f2ad93939cdfaaa7782cb8b85' id='jetpack-lazy-images-js'></script>
    <script type='text/javascript' src='https://www.google.com/recaptcha/api.js?render=6Le_94cUAAAAALV3CMnF_j_Y92b790c8WoNgx4Rb&#038;ver=3.0' id='google-recaptcha-js'></script>
    <script type='text/javascript' id='wpcf7-recaptcha-js-extra'>
        /* <![CDATA[ */
        var wpcf7_recaptcha = {"sitekey":"6Le_94cUAAAAALV3CMnF_j_Y92b790c8WoNgx4Rb","actions":{"homepage":"homepage","contactform":"contactform"}};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=5.5.6.1' id='wpcf7-recaptcha-js'></script>
    <script type='text/javascript' src='https://www.finalkid.com/wp-content/plugins/js_composer_salient/assets/js/dist/js_composer_front.min.js?ver=6.0.5' id='wpb_composer_front_js-js'></script>
    <script type='text/javascript' defer src='https://www.finalkid.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.8.7' id='mc4wp-forms-api-js'></script>
    <script src='https://stats.wp.com/e-202223.js' defer></script>
</body>
</html>
