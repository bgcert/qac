@extends('layouts.app')

@section('content')

<section class="slider">
    <div class="overlay">
        <div class="container">
            <div class="h1">
                <strong>Кю Ей Си ООД</strong> - Център за осигуряване на качестваото
            </div>

            <div class="h3">
                Повишете конкурентността на Вашия бизнес
            </div>

            <p>
                <a href="#" class="btn btn-lg btn-warning">Услуги</a>
                <a href="#" class="btn btn-link">Контакти</a>
            </p>

        </div>
    </div>
</section>

<section class="home-links">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h5 class="card-title">Маркировка CE</h5>
            </div>
            <div class="col-4">
                <h5 class="card-title">Внедряване на международни стандарти</h5>
            </div>
            <div class="col-4">
                <h5 class="card-title">Кандидатстване за безвъзмездно финансиране</h5>
            </div>
        </div>

    </div>

</section>

<section class="services">

    <div class="container">
        <div class="row">
            <div class="col-5 mr-auto">
                <img src="/img/inspection.jpeg" class="rounded img-fluid" alt="">
            </div>
            <div class="col-6 d-flex align-items-center">
                <div>
                    <div class="h1">
                        Постигане на съответствие
                    </div>
                    <p>
                        Маркировка CE и сертификация на продуктите за европейския и международен пазар
                    </p>
                    <p>
                        <a href="#">Научете повече &rarr;</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="standarts">

    <div class="container">
        <div class="text-center">
            <div class="h1">
                Системи за управление на бизнеса
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="h4">
                    Изграждане и внедряване
                </div>

                <p> на системи за управление по международни стандарти</p>
            </div>

            <div class="col-4">
                <div class="h4">
                    Поддържане и развитие
                </div>

                <p> бизнесът Ви има нужда от ъпгрейд</p>
            </div>

            <div class="col-4">
                <div class="h4">
                    Публикации на НАТО
                </div>

                <p>международни стандарти и публикации на НАТО</p>
            </div>
        </div>

        <div class="standarts__list">
            <div class="row">
                <div class="col-3">
                    <div class="row my-4">
                        <div class="col-md-4">
                            <img src="/img/3.jpeg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">ISO 9001:2008</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="row my-4">
                        <div class="col-md-4">
                            <img src="/img/3.jpeg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">BS OHSAS 18001:2007</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="row my-4">
                        <div class="col-md-4">
                            <img src="/img/3.jpeg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">ISO 14001:2004</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="row my-4">
                        <div class="col-md-4">
                            <img src="/img/3.jpeg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">Серия ISO/IEC 17000</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="row my-4">
                        <div class="col-md-4">
                            <img src="/img/3.jpeg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">ISO 9001:2008</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="row my-4">
                        <div class="col-md-4">
                            <img src="/img/3.jpeg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">BS OHSAS 18001:2007</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="row my-4">
                        <div class="col-md-4">
                            <img src="/img/3.jpeg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">ISO 14001:2004</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="funding">
    <div class="container">
        <div class="cover">
            <div>
                <h1>Безвъзмездно финансиране</h1>
                <p>Подготовка за Кандидатстване по европейски програми</p>
                <p><a href="#" class="btn btn-light btn-lg">Научете повече</a></p>
            </div>
        </div>
    </div>
</section>

<section class="about-us">

    <div class="container d-flex justify-content-center">
        <div class="col-10 text-center">
            <div class="title">
                Качеството - реално бъдеще
            </div>
            <p>
                От 1997 г. до днес компанията предлага специализирани консултантски услуги и обучение в специфичните области на сертификацията и управлението.
            </p>
            <p>
                <a href="#" class="btn btn-primary btn-lg"> Научете повече</a>
            </p>
        </div>
    </div>

</section>

<section class="clients">

    <div class="container">
        <div class="row">

            @for($i = 0; $i <= 20; $i++) <div class="col-2 client">
                <a href="#">
                    <img src="/img/dummy-logo.png" class="img-fluid" alt="">
                </a>
        </div>
        @endfor

    </div>

    </div>

</section>

<section class="references">

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>
                    Как ни оценяват клиентите ни
                </h2>
                <p class="header">
                    За нас фактът че бивши клиенти се обръщат пак към нас за следваща консултация, означава много.
                    По-добра оценка за нашата работа не може да има.
                </p>
            </div>
            @for($i = 0; $i <= 6; $i++) <div class="col-6 p-2">
                <blockquote class="blockquote h-100 reference-box">
                    <p>
                        <img src="/img/dummy-logo.png" alt="Eлeктрон Прогрес АД - София">
                    </p>
                    <p>
                        ... За краткия период на курсовете за обучение водещите успяха да потопят всички участници в изключително приятна и ползотворна работна атмосфера, в условията на която под формата на игри и симулиране на ситуации, обучаемите успяха да систематизират и усвоят теоретичен материал, касаещ общуването, конфликтните ситуации и евентуален подход към тях при внедряването, поддържането, развитието на системата за управление и провеждането на вътрешни одитори ....
                    </p>
                    <footer class="blockquote-footer">Eлeктрон Прогрес АД - София</footer>
                </blockquote>
        </div>
        @endfor
    </div>
    </div>

</section>

<section class="contact-link">
    <div class="container text-center">
        <div class="h3">
            Имате нова визия за бъдещето на своя бизнес?
            <br>
            Ние ще Ви помогнем да я реализирате.
        </div>
        <p>
            <a href="#" class="btn btn-primary btn-lg">Свържете се с нас</a>
        </p>
    </div>
</section>
@endsection 