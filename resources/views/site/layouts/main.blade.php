<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('frontend/img/favicon/safari-pinned-tab.svg') }}" color="#4c9017">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="googlebot" content="all">
    <meta name="robots" content="all">
    <meta name="yandex" content="all" />
    <!-- favicon end -->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="stylesheet" href="{{ asset('frontend/css/critical.css') }}">
    <script defer src="{{ asset('frontend/js/script.js') }}"></script>

   <!--  <meta name="google-site-verification" content="djU7QCogw_T42v_Jr6ZxuoWq_Fy-giRQiiuxm4hkneE" /> -->
    <meta name="yandex-verification" content="1811d7fb98bdaac0" />
    <meta name="google-site-verification" content="nAvMDNi00O6Xe5HGhZRNv63vy8Nw02PVm5heqbB2tOo" />


    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92353844, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92353844" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <style>
        html, body, #map {
            width: 100%;
            height: 50%;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<header>
    @include('site.inc.header')
</header>

@yield('header_title')

<main>
    @yield('content')
</main>

@include('site.inc.footer')

@include('site.inc.modal_window')



<script>
    function loadStyle(url) {
        let link = document.createElement('link');
        link.href = url;
        link.rel = 'stylesheet';
        document.body.appendChild(link);
    }

    loadStyle("{{ asset('frontend/css/style.css') }}");
    loadStyle('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;700&family=Oswald:wght@400;500;700&display=swap');
</script>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=159d1b30-bef0-463b-a7f6-b69cba7ec8e9" type="text/javascript"></script>
<!-- <script src="../../../../public/frontend/js/snowfall.js"></script>
<script src='../../../../public/frontend/js/snow.js'></script> -->
<script src='../../../../public/frontend/js/map.js'></script>
<script src="https://res.smartwidgets.ru/app.js" defer></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer>
        const TOKEN ='5712282898:AAFrkaHw7Y-KDAPm1z6LBGj5lgG8YM6L_Uc';
        const CHAT_ID = '-1001709775142';
        const uri_api = `https://api.telegram.org/bot${TOKEN}/sendMessage`;

        document.getElementById('tg').addEventListener('submit', function(e){
            e.preventDefault();



            let message =`<b>????????????</b>\n`;
            message += `<b>??????????????????????:</b> ${this.name.value}\n`;
            message += `<b>??????????????:</b> ${this.phone.value}\n`;


            axios.post(uri_api,{
                chat_id: CHAT_ID,
                parse_mode: 'html',
                text: message
            })

        })

    </script> -->

</body>
</html>
