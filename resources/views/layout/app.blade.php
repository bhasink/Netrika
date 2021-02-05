<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="https://v2.zopim.com/?55Ou5BBykurPNgA0hvO9ntpNIUI3MgFN";z.t=+new Date;$.
            type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
<head>
 

    @php

        $data_metas_s = \AppHelper::bladeHelper();

    @endphp


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    @if(isset($data_metas))
<link rel="icon" href="/img/32x32.jpg" type="image/png" sizes="16x16">
    <title>{{$data_metas['meta_title']}}</title>
    <meta name="description" content="{{$data_metas['meta_description']}}">
    <meta name="keywords" content="{{$data_metas['meta_keywords']}}">

    @elseif(isset($data_metas_s))

        <title>{{$data_metas_s['meta_title']}}</title>
        <meta name="description" content="{{$data_metas_s['meta_description']}}">
        <meta name="keywords" content="{{$data_metas_s['meta_keywords']}}">


    @else

        <title>Netrika | Global Leader in Security and Risk Management Services</title>
        <meta name="description" content="Leading  corporate security and risk consulting firm advising corporates in managing strategic and operational risks.">

    @endif


    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/img/32x32.jpg" type="image/jpg" sizes="16x16">
    
    <meta name="msapplication-TileImage" content="{{asset('/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#003883">
    <link  rel='stylesheet'   href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%26subset%3Dlatin%2Cgreek%2Cgreek-ext%2Cvietnamese%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%7CPoppins%3A300%2C400%2C500%2C600%2C700&#038;ver=6.7' type='text/css' media='all' />
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css?v=46')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome.cs')}}s">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fancy.css?v=3')}}">
    <link rel="stylesheet" href="{{asset('/css/anim.css?v=3')}}">
    <link rel="stylesheet" href="{{asset('/css/component.css')}}" />
    <script src="{{asset('/js/modernizr.custom.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106636868-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-106636868-1');
    </script>


    <!-- Globalkb site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z4G39D7VEB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Z4G39D7VEB');
    </script>

   <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W536WZP');</script>
  <!-- End Google Tag Manager -->
	
	<!-- Google Tag Manager -->

<!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-KNZFS4Q');</script>-->

<!-- End Google Tag Manager -->

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

fbq('init', '305586064230337');

fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=305586064230337&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->

<script type="text/javascript">

_linkedin_partner_id = "2775898";

window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];

window._linkedin_data_partner_ids.push(_linkedin_partner_id);

</script><script type="text/javascript">

(function(){var s = document.getElementsByTagName("script")[0];

var b = document.createElement("script");

b.type = "text/javascript";b.async = true;

b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";

s.parentNode.insertBefore(b, s);})();

</script>

<noscript>

<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2775898&fmt=gif" />

</noscript>

    @yield('style')

</head>
<body>

<!-- Google Tag Manager (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W536WZP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript)

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNZFS4Q"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->



    @include('layout.header')

        @yield('content')

    @include('layout.footer')




    



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.0/oyethemes_onscroll_animation.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.2/animation_utility.css">
    <script src="{{asset('/js/slick.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}?v=3e"></script>
    <script src="{{asset('/js/bootstrap-select.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="{{asset('/js/jquery.dlmenu.js')}}"></script>


    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        window.onload = function() {
            var $recaptcha = document.querySelector('#g-recaptcha-response');

            if($recaptcha) {
                $recaptcha.setAttribute("required", "required");
            }
        };
    </script>

    <script>
        $(function() {
            $( '#dl-menu' ).dlmenu({
                animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
            });
        });
    </script>
    <script>
        $(document).ready(function(e) {
            $('.selectpicker').selectpicker();
        });

        (function($){
            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');

                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });

                return false;
            });
        })(jQuery);
    </script>


    {{--<script>--}}
        {{--(function() {--}}
            {{--if(!window.location.hash) {--}}
                {{--window.location = window.location + '#googtrans(en|ar)';--}}
                {{--window.location.reload();--}}
            {{--}--}}


            {{--$("#ar").click(function(e) {--}}
                {{--window.location = window.location + '#googtrans(en|ar)';--}}
                {{--Response.Cookies["googtrans"].Value = ar;--}}
                {{--window.location.reload();--}}
            {{--});--}}

        {{--})();--}}
    {{--</script>--}}
    {{----}}
    {{--<script type="text/javascript">--}}
        {{--function googleTranslateElementInit() {--}}
            {{--new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,ar'}, 'google_translate_element');--}}
        {{--}--}}
    {{--</script>--}}
    {{--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>--}}


<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    // WORK IN PROGRESS BELOW

    $('document').ready(function () {


        // RESTYLE THE DROPDOWN MENU
        $('#google_translate_element').on("click", function () {
            //
            // // Change font family and color
            // $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
            //     .css({
            //         'color': '#544F4B',
            //         'font-family': 'Roboto',
            //         'width':'100%'
            //     });
            // // Change menu's padding
            // $("iframe").contents().find('.goog-te-menu2-item-selected').css ('display', 'none');
            //
            // // Change menu's padding
            // $("iframe").contents().find('.goog-te-menu2').css ('padding', '0px');
            //
            // // Change the padding of the languages
            // $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');
            //
            // // Change the width of the languages
            // $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
            // $("iframe").contents().find('td').css('width', '100%');
            //
            // // Change hover effects
            // $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
            //     $(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
            // }, function () {
            //     $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
            // });
            //
            // // Change Google's default blue border
            // $("iframe").contents().find('.goog-te-menu2').css('border', 'none');
            //
            // // Change the iframe's box shadow
            // $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');
            //
            //
            //
            // // Change the iframe's size and position?
            // $(".goog-te-menu-frame").css({
            //     'height': '100%',
            //     'width': '100%',
            //     'top': '0px'
            // });
            // // Change iframes's size
            // $("iframe").contents().find('.goog-te-menu2').css({
            //     'height': '100%',
            //     'width': '100%'
            // });
        });
    });

</script>

        @yield('script')

</body>
</html>
