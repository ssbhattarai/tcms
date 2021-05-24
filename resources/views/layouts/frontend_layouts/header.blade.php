<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! SEO::generate() !!}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('metatag')

    @if (isset($script))
        @foreach ($script as $item)
            {!!$item->script!!}
        @endforeach
    @endif
    <title>Grill and Bakes</title>

    {{-- meta tags --}}
     <meta name="description"
        content="">
    <meta name="keywords"
        content="">

    <link rel="icon"
      type="image/png"
      href="{{asset('/assets/images/grillandbakes.png')}}">

    <meta property="og:url" content="http://grillbakes.com/" />
    <meta property="og:title" content="Grill and Bakes" />
    {{-- <meta property="fb:app_id" content="300869417436002" /> --}}

    <meta property="og:description"
        content="" />
    <meta property="og:image"
        content=""" />
    <meta name="keywords" content="" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-01LJTPMVVH"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-01LJTPMVVH');
    </script>



    {{-- css --}}
    <link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/assets/fontawesome/css/all.css/')}}">
    @stack('styles')


    {{-- script tags --}}
    <!-- Scripts -->
    <script  src="{{asset('/assets/bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ mix('/js/frontend.js') }}" defer></script>
    <script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

    {{-- recaptcha --}}
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js?render=explicit&hl=eng }}' async defer></script>
    @stack('script')

     <script type="application/javascript">
         function toggleNav(){
            if ($('.nav-links').css('display') == 'flex') {
                $('.nav-links').css('animation','nav_out 0.5s ease-out');
                setTimeout(() => {
                    $('.nav-links').css('display','none');
                }, 400);

            }else{
                $('.nav-links').css('display','flex');
                $('.nav-links').css('animation','nav_in 0.5s ease-in');
            }
        }

        function showLogin(){
            $('.login').css('display','block');
        }


    </script>
</head>
<body>

<div id="alert-message"></div>
