@extends('layouts.app')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($slides as $slide)
        <div class="carousel-item @if($loop->index == 0) active @endif">
            <div class="slider-image" style="background-image: url('/img/{{ $slide->cover }}?id={{ $slide->id }}');" alt="{{ $slide->title }}">
                <div class="image-overlay">
                    <div class="slider__content d-flex justify-content-center align-items-center">
                        <div class="content__container">
                            <div class="primary-text">{{ $slide->title }}</div>
                            <div class="secondary-text">{{ $slide->subtitle }}</div>
                            <div class="slider__action">
                                <a href="/{{ $slide->action }}">Прочетете още</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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

<!-- <section class="hero">
    <div class="hero_centered_content">
        <div class="title">
            Качеството - реално бъдеще!
        </div>
    </div>
</section> -->

<div class="segment alt">
    <div class="container">
        <div class="segment__title">
            Кю Ей Си ООД
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
                    <a href="/about-us" class="btn btn-link">Научете повече <span>&#187;</span></a>
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
            @foreach($services as $service)
            <a href="/services/{{ $service->slug }}" class="service col-4">
                <div class="service__icon">
                    <div class="circle">
                        <i data-feather="{{ $service->icon }}"></i>
                    </div>
                </div>
                <div class="title">
                    {{ $service->title }}
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<div class="segment alt">
    <div class="container">
        <div class="segment__title">
            Нашите клиенти
        </div>

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($clients as $client)
                <div class="carousel-item @if($loop->index == 0) active @endif" data-interval="2500">
                    <div class="row">
                        @foreach($client as $item)
                        <div class="col-2">
                            <a href="#" class="client-logo" style="background-image: url('{{ $item['logo'] }}?id={{ $item['id'] }}')">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <ol class="carousel-indicators">
                @foreach($clients as $client)
                <li data-target="#carouselExampleInterval" data-slide-to="{{ $loop->index }}" @if($loop->index == 0) class="active" @endif></li>
                @endforeach
            </ol>
            <!-- <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>
</div>

@endsection 