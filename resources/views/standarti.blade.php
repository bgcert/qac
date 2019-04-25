@extends('layouts.app')

@section('content')

<!-- <section class="page-header standarti"></section> -->

<!-- <section class="page">

    <div class="container">
        <div class="content">
            <div class="d-flex justify-content-center">
                <div class="col-8 text-center">
                    <div class="h1">Качеството - реално бъдеще!</div>
                    <p>
                        Убедени, че постигат желания ефект от изпълнената консултантска дейност, нашите клиенти почти винаги се обръщат отново и отново към нас.
                        Това не може да не ни радва! Нашата цел е да изградим трайни взаимоотношения с клиентите на дружеството.
                    </p>
                    <div class="h1">Защо да работите с нас</div>
                    <p>
                        Всички проекти по внедряване на системи за управление, подготовка за сертификация и обучения,
                        изпълнявани от "Кю Ей Си" ООД се реализират в условията на изградена и сертифицирана система за управление на качеството.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="qac-page-header">
    <div class="text-center">
        <h1>Внедряване на международни стандарти</h1>
    </div>
</section>

<section class="qac-standards">
    <div class="text-center sub-title">
        <div class="h1">
            Какви са ползите?
        </div>
    </div>
    <div class="benefits">
        <p class="col-lg-7 col-12">
            Реализирането на бизнес в Европа и света почти е невъзможно,
            ако доставчика не е внедрил и сертифицирал своята Система за управление по поне един международен стандарт.
        </p>
    </div>
    <div class="text-center sub-title">
        <div class="h1">
            Стандартите, които внедряваме:
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="item">
                        <div class="h4">
                            ISO 9001:2015
                        </div>
                        Системи за управление на качеството.
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="item">
                        <div class="h4">
                            ISO 13485:2016
                        </div>
                        Медицински изделия. Системи за управление на качеството.
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="item">
                        <div class="h4">
                            ISO/IEC 27001:2017
                        </div>
                        Информационни технологии. Методи за сигурност. Системи за управление на сигурността на информацията.
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="item">
                        <div class="h4">
                            ISO 14001:2018
                        </div>
                        Системи за управление по отношение на околната среда.
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="item">
                        <div class="h4">
                            ISO 45001:2018
                        </div>
                        Системи за управление на здравето и безопасността при работа. 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center sub-title">
        <div class="h1">
            Как Ви съдействаме?
        </div>
    </div>
    <div class="benefits">
        <p class="col-lg-7">
            Ние предлагаме комплексни услуги, включващи диагностика и анализ на действащата Ваша Система за управление,
            планиране, разработка на документация, съдействие при внедряване и развитие на процесите,
            изпълнение на одити и периодични прегледи, подготовка и подпомагане на процеса на сертификация,
            следващо поддържане и продължаващо развитие на системите за осигуряване на високо доверие на клиентите.
        </p>
    </div>
</section>
@include('partials.inquiry')

@endsection 