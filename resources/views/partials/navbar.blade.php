<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="/">
            <img src="/img/logo.png" alt="logo">
        </a>
        <!-- <a class="navbar-brand" href="/">Кю Ей Си ООД</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">За нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Обучения</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Услуги
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @php
                            $service_items = Cache::rememberForever('service_items', function() {
                                return \App\Service::orderBy('priority', 'asc')->get();
                            });
                        @endphp

                        @foreach($service_items as $service)
                        <a class="dropdown-item" href="/services/{{ $service->slug }}">{{ $service->title }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clients">Клиенти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts">Контакти</a>
                </li>
            </ul>
        </div>
    </div>

</nav> 