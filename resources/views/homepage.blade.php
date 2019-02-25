@extends('layouts.app')

@section('content')

<section class="header">
    @include('partials.navbar-alt')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider-image" style="background-image: url('/img/3.jpeg');" alt="First slide">
                    <div class="image-overlay">
                        <div class="slider__content d-flex justify-content-center align-items-center">
                            <div class="content__container">
                                <div class="primary-text">Качеството - реално бъдеще</div>
                                <div class="secondary-text">някакво подзаглавие</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-image" style="background-image: url('/img/2.jpeg');" alt="First slide">
                    <div class="image-overlay"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-image" style="background-image: url('/img/4.jpeg');" alt="First slide">
                    <div class="image-overlay"></div>
                </div>
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
</section>

<section class="hero">
    <div class="hero_centered_content">
        <div class="title">
            Качеството - реално бъдеще!
        </div>
    </div>
</section>

<div class="segment alt">
    <div class="container">
        <div class="segment__title">
            За нас
        </div>
        <div class="row">
            <div class="col-6">
                <p>
                    "Кю Ей Си" ООД е една от малкото фирми, които работят активно на консултантския пазар от 1997 г. до днес.
                    Още от създаването си, ние поддържаме висок рейтинг като консултанти и обучаващи в областта на сертификацията и проектния мениджмънт.
                </p>
                <p>
                    Нашето мото е:
                    <strong>
                        Качеството - реално бъдеще!
                    </strong>
                    и насочваме цялата си дейност и резултатите от нея към изпълнението му.
                </p>
                <p>
                    Обхватът на двете основни направления на предоставяните услуги (КОНСУЛТАЦИИ и СПЕЦИАЛИЗИРАНО ОБУЧЕНИЕ) постоянно се разширява.
                    Дружеството предлага консултации по проектен мениджмънт и внедряване на системи за управление практически по всички действащи стандарти.
                    Нещо повече, ние сме от малкото консултанти, които се ангажират с тежката задача за постигане на продуктово съответствие и сертификация по едни от най-тежките директиви
                    и стандарти като Медицинска директива, Директива за плавателни съдове за отдих и други.
                </p>
                <div class="text-right">
                    <a href="/aboutus" class="btn btn-link">Научете повече <span>&#187;</span></a>
                </div>
            </div>
            <div class="col-6">
                <img src="/img/1.jpeg" class="img-fluid rounded" alt="Качеството - реално бъдеще!">
            </div>
        </div>
    </div>
</div>

<div class="segment">
    <div class="container">
        <div class="segment__title">
            Услуги
        </div>
        <div class="row services">
            <div class="service col-4">
                @foreach($services as $service)
                <div class="service__icon">
                    <div class="circle">
                        <ion-icon name="help-buoy"></ion-icon>
                    </div>
                </div>
                <div class="title">
                    {{ $service->title }}
                </div>
                @endforeach
            </div>
            <div class="service col-4">
                <div class="service__icon">
                    <div class="circle">
                        <ion-icon name="ribbon"></ion-icon>
                    </div>
                </div>
                <div class="title">
                    Сертификация
                </div>
            </div>
            <div class="service col-4">
                <div class="service__icon">
                    <div class="circle">
                        <ion-icon name="pricetag"></ion-icon>
                    </div>
                </div>
                <div class="title">
                    Маркировка СЕ
                </div>
            </div>
            <div class="service col-4">
                <div class="service__icon">
                    <div class="circle">
                        <ion-icon name="wallet"></ion-icon>
                    </div>
                </div>
                <div class="title">
                    Европейски фондове
                </div>
            </div>
            <div class="service col-4">
                <div class="service__icon">
                    <div class="circle">
                        <ion-icon name="information-circle-outline"></ion-icon>
                    </div>
                </div>
                <div class="title">
                    Информация
                </div>
            </div>
            <div class="service col-4">
                <div class="service__icon">
                    <div class="circle">
                        <ion-icon name="book"></ion-icon>
                    </div>
                </div>
                <div class="title">
                    Обучение
                </div>
            </div>
            <div class="service col-4">
                <div class="service__icon">
                    <div class="circle">
                        <ion-icon name="document"></ion-icon>
                    </div>
                </div>
                <div class="title">
                    Консултации и подготовка на документи и защита при проверки от "Надзор на пазара" и КЗП
                </div>
            </div>
        </div>
    </div>
</div>

<div class="segment alt">
    <div class="container">
        segment alt
    </div>
</div>

@endsection 