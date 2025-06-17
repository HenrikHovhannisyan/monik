<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="Henrik" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
        name="description"
        content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods."
    />
    <meta
        name="keywords"
        content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store"
    />

    <!-- Connecting the manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#202325">

    <!-- Support for iOS -->
    <link rel="apple-touch-icon" href="{{ asset('images/pwa/icon-192x192.png?v=' . time()) }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Monik') }} @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico?v=' . time()) }}"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"/>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/site.min.css?v=' . time()) }}">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(98547249, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/98547249" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</head>
<body>
    <div id="app">
        @include('vendor.modal.ad')
        @include('vendor.modal.logout')
        @include('vendor.modal.address')
        @include('vendor.modal.success-message')
        @include('vendor.modal.products-filter')
        @include('layouts.header')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')


        <div id="successMessage" class="message success hidden">
            {{ __("index.copied_sku") }}: <span id="copiedSKU"></span>
        </div>
        <a href="#" class="scrollup" style="display: none">
            <i class="fa-solid fa-chevron-up"></i>
        </a>
    </div>
    <!--  Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- yandex js -->
    <script src="https://api-maps.yandex.ru/2.1/?lang={{ App::getLocale() === 'am' ? 'hy' : App::getLocale() }}&apikey=69788c43-a05a-4647-a75e-a9e4f7625d6f" type="text/javascript"></script>
    <!-- Script -->
    <script src="{{ asset('js/site.min.js?v=' . time()) }}" defer></script>
    @yield('script')
</body>
</html>
