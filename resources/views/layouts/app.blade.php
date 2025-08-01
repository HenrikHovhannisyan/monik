<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Динамические SEO‑мета‑теги с разумными значениями по умолчанию --}}
    <meta name="description" content="@yield('meta_description', __('index.meta_products_description'))" />
    <meta name="keywords" content="@yield('meta_keywords', __('index.meta_products_keywords'))" />

    {{-- Open Graph (для соцсетей) --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', __('index.meta_products_og_description'))">
    <meta property="og:image" content="@yield('og_image', asset('images/logo.png'))">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- PWA -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#202325">
    <link rel="apple-touch-icon" href="{{ asset('images/pwa/icon-192x192.png') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Title & Favicon -->
    <title>{{ config('app.name', 'Monik') }} @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media="all">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Main CSS (Laravel Mix) -->
    <link rel="stylesheet" href="{{ mix('css/site.min.css') }}">

    <!-- Yandex.Metrika -->
    <script type="text/javascript" defer>
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){ (m[i].a=m[i].a||[]).push(arguments) };
            m[i].l=1*new Date();
            for (let j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) return;
            }
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a);
        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(98547249, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/98547249" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
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
            {{ __("index.copied") }}: <span id="copiedSKU"></span>
        </div>

        <a href="#" class="scrollup" style="display: none">
            <i class="fa-solid fa-chevron-up"></i>
        </a>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer crossorigin="anonymous"></script>

    <!-- Yandex Maps -->
    <script src="https://api-maps.yandex.ru/2.1/?lang={{ App::getLocale() }}&apikey=69788c43-a05a-4647-a75e-a9e4f7625d6f" defer></script>

    <!-- Main JS (Laravel Mix) -->
    <script src="{{ mix('js/site.min.js') }}" defer></script>

    @yield('script')
</body>
</html>
