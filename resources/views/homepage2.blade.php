@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark homepage-nav">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Услуги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Клиенти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Контакти</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="overlay">
                <div class="content text-center">
                    <h1 class="display-3">
                        <strong>Качеството</strong> - реално бъдеще.
                    </h1>
                    <div class="h2">
                        Качеството - реално бъдеще.
                    </div>
                    <div>
                        <a href="#" class="btn btn-light btn-lg">За нас</a>
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
        <p>
            Компанията съществува за да повишава конкурентността и растежа на Вашия бизнес.
        </p>
        <p>
            От 1997 г. до днес компанията предлага специализирани консултантски услуги и обучение в специфичните области на сертификацията и управлението.
        </p>
    </div>
</div>

<div class="segment alt">
    <div class="container text-center">
        <h1 class="segment__title">Услуги</h1>
        <div class="card-deck">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title">Маркировка СЕ</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title">Европейски фондове 2014 - 2020</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title">Експертна подкрепа и бизнес консултации</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection 