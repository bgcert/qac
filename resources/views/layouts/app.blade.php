<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="header">
            @include('partials.navbar')

            <main>
                @yield('content')
            </main>
        </section>
    </div>

    <section class="footer">
        <div class="segment footer">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p>
                            <img src="/img/logo.png" alt="Кю Ей Си ООД">
                        </p>
                        <p>
                            Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no.
                            Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.
                        </p>
                    </div>
                    <div class="col-3">
                        <h5>Полезни връзки</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Услуги</a>
                            </li>
                            <li>
                                <a href="#">Клиенти</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5>Свържете се с нас</h5>
                        <ul class="list-unstyled">
                            <li>
                                +369 4032 400
                            </li>
                            <li>
                                office@qac-bg.com
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="sub-footer">
                    <div class="copywright">
                        © 2019 Кю Ей Си ООД
                    </div>
                    <div class="design">
                        <a href="#">design: website</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Icons plugin -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html> 