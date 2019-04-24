<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Консултации, обучения, международни стандарти, маркировка CE, aqap, iso9001, iso13485, iso27001, iso14001, iso45001">
    <meta name="author" content="Qac Ltd.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Кю Ей Си ООД - Център за осигуряване на качеството</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css?v=2" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138874124-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-138874124-1');
    </script>
</head>

<body>
    <div id="app">
        <div class="site-wrap">
            <section class="navigation">
                @include('partials.navbar')
            </section>

            <main>
                @yield('content')
            </main>

            <section class="footer">

                <div class="container">
                    <div class="row text-lg-left text-center">
                        <div class="col-lg-4 col-12 mb-4">
                            <div class="h5">Връзки</div>
                            <ul>
                                <li><a href="/za-nas">За нас</a></li>
                                <li><a href="/#services">Услуги</a></li>
                                <li><a href="/kontakti">Контакти</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-12 mb-4">
                            <div class="h5">Адрес</div>
                            <ul>
                                <li>София,</li>
                                <li>бул. Цар Борис III 168,</li>
                                <li>бизнес център Андромеда,</li>
                                <li>ет. 3, офис 31</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="h5">Контакти</div>
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <a href="mailto:office@qac-bg.com">office@qac-bg.com</a></li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    02 / 4032 400
                                </li>
                                <!-- <li><a href="#">Международни стандарти</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bottom-footer">
                    <div class="container">
                        © 2019 Кю Ей Си ООД
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Icons plugin -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>