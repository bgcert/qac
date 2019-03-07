@extends('layouts.app')

@section('content')

<div id="carouselExampleControls" class="carousel slide homepage-carousel" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="overlay">
                <div class="content text-center">
                    <div class="display-4 mb-3">
                        <strong>Качеството</strong> - реално бъдеще.
                    </div>
                    <div class="h2">
                        Качеството - реално бъдеще.
                    </div>
                    <div class="mt-3">
                        <a href="#" class="btn btn-outline-light btn-lg">За нас</a>
                        <a href="#" class="btn btn-lg btn-danger">Услуги</a>
                    </div>
                </div>
            </div>
            <img src="/img/1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="/img/2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="/img/3.jpeg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="segment high">
    <div class="container text-center">
        <h1>Кю Ей Си - Център за осигуряване на качеството</h1>
        <p class="large">
            Компанията съществува за да повишава конкурентността и растежа на Вашия бизнес.
        </p>
        <p>
            От 1997 г. до днес компанията предлага специализирани консултантски услуги и обучение в специфичните области на сертификацията и управлението.
        </p>
    </div>
</div>

<div class="segment alt about">
    <div class="container">
        <div class="h1">За нас</div>
        <div class="row my-4">
            <div class="col-6">
                <p>
                    <strong>Кю Ей Си - Център за осигуряване на качеството</strong>
                </p>
                <p>
                    Компанията съществува за да повишава конкурентността и растежа на Вашия бизнес.
                </p>
                <p>
                    От 1997 г. до днес компанията предлага специализирани консултантски услуги и обучение в специфичните области на сертификацията и управлението.
                </p>
                <p>
                    <a href="/about-us" class="btn btn-outline-primary btn-lg">Научете повече</a>
                </p>
            </div>
            <div class="col-6">
                <img src="/img/homepage1.jpeg" alt="test" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="segment high">
    <div class="container">
        <h1 class="segment__title">Услуги</h1>
            @foreach($services as $service)
            <div class="row my-4">
                <div class="col-6">
                    <div style="height: 300px; overflow: hidden;">
                        <img src="/img/{{ $service->cover }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-6 d-flex align-items-center">
                    <div>
                        <div class="h1">{{ $service->title }}</div>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="segment high">
    <div class="container">
        <div class="segment__title">
            Кю Ей Си ООД
        </div>
        <p>
            "Кю Ей Си" ООД е една от малкото фирми, които работят активно на консултантския пазар от 1997 г. до днес.
            Още от създаването си, ние поддържаме висок рейтинг като консултанти и обучаващи в областта на сертификацията и проектния мениджмънт.
        </p>

        <p>
            Обхватът на двете основни направления на предоставяните услуги (КОНСУЛТАЦИИ и СПЕЦИАЛИЗИРАНО ОБУЧЕНИЕ) постоянно се разширява.
            Дружеството предлага консултации по проектен мениджмънт и внедряване на системи за управление практически по всички действащи стандарти.
            Нещо повече, ние сме от малкото консултанти, които се ангажират с тежката задача за постигане на продуктово съответствие и сертификация по едни от най-тежките директиви
            и стандарти като Медицинска директива, Директива за плавателни съдове за отдих и други.
        </p>

        <p>
            Нашето мото е: <strong>Качеството - реално бъдеще!</strong> и насочваме цялата си дейност и резултатите от нея към изпълнението му.
            <a href="/about-us" class="btn btn-link">Научете повече <span>&#187;</span></a>
        </p>
        <p>
            <img src="/img/1.jpeg" class="img-fluid rounded" alt="Качеството - реално бъдеще!">
        </p>

        <p>
            Натрупаният практически опит в консултациитепо изграждане, внедряване и развитие на Системи за управление по международни стандарти и
            постигане на съответствие на продуктите със съществените изисквания и "СЕ" маркировка е основа за разработване и провеждане на
            ефикасни практически-приложни курсове. В специализираните обучения са участвали над 3300 специалисти от различни организации в цяла България.
            Участието на специалисти и от други консултантски организации в наши курсове за нас означава Доверие.
        </p>

        <p>
            За да постигаме все по-предизвикателни цели и да удовлетворяваме изискванията на все по-претенциозните клиенти, ние разчитаме на висок професионализъм на персонала и сътрудниците. За работа по програмите на "Кю Ей Си" ООД от нашите сътрудници се изисква висока компетентност, включително притежаването на поне един сертификат от международна организация.
        </p>

        <p>
            Всички проекти по внедряване на системи за управление, подготовка за сертификация и обучения, изпълнявани от "Кю Ей Си" ООД се реализират
            в условията на изградена и сертифицирана система за управление на качеството.
        </p>

        <p>
            В нашият екип не се говори за количество внедрени и сертифицирани системи за управление.
            Нашата цел е да изградим трайни взаимоотношения с клиентите на дружеството. Убедени, че постигат желания ефект от изпълнената консултантска дейност,
            нашите клиенти почти винаги се обръщат отново и отново към нас. Това не може да не ни радва!
        </p>
    </div>
</div>

<div class="segment sunflower high">
    <div class="container">
        <div class="segment__title">
            Нашите клиенти
        </div>

        <div class="row">
            @foreach($clients as $client)
            <div class="col-3 p-4">
                <img src="/img/dummy-logo.png" class="img-fluid" alt="test">
            </div>
            <div class="col-3 p-4">
                <img src="/img/dummy-logo2.png" class="img-fluid" alt="test">
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="segment high quotes">
    <div class="container">
        <div class="segment__title">
            Референции
        </div>

        <div class="row">
            @foreach($quotes as $quote)
            <div class="col-6 p-2">
                <blockquote class="blockquote">
                    <p>
                        <img src="/img/{{ $quote->logo }}" alt="{{ $quote->author }}">
                    </p>
                    <p>
                        {{ $quote->body }}
                    </p>
                    <footer class="blockquote-footer">{{ $quote->author }}</footer>
                </blockquote>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection 