@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero_centered_content">
        <div class="title">
            Качеството - реално бъдеще!
        </div>
    </div>
</section>

<div class="segment">
    <div class="container">
        <div class="segment__title">
            Услуги
        </div>
        <div class="row services">
            <div class="service col-4">
                <div>
                    <div class="circle">
                        <ion-icon name="help-buoy"></ion-icon>
                    </div>
                </div>
                <div class="title">
                Експертна подкрепа и бизнес консултации
                </div>
            </div>
            <div class="service col-4">
                <div>
                    <div class="circle">
                        <ion-icon name="ribbon"></ion-icon>
                    </div>
                </div>
                <div class="title">
                Сертификация
                </div>
            </div>
            <div class="service col-4">
                <div>
                    <div class="circle">
                        <ion-icon name="pricetag"></ion-icon>
                    </div>
                    <ion-icon name="pricetag"></ion-icon>
                </div>
                <div class="title">
                Маркировка СЕ
                </div>
            </div>
            <div class="service col-4">
                <div>
                    <div class="circle">
                        <ion-icon name="wallet"></ion-icon>
                    </div>
                    <ion-icon name="wallet"></ion-icon>
                </div>
                <div class="title">
                Европейски фондове
                </div>
            </div>
            <div class="service col-4">
                <div>
                    <ion-icon name="information-circle-outline"></ion-icon>
                </div>
                <div class="title">
                    Информация
                </div>
            </div>
            <div class="service col-4">
                <div>
                    <ion-icon name="book"></ion-icon>
                </div>
                <div class="title">
                Обучение
                </div>
            </div>
            <div class="service col-4">
                <div>
                    <ion-icon name="document"></ion-icon>
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

<div class="segment footer">
    <div class="container">
        footer
    </div>
</div>

@endsection
