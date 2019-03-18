@extends('layouts.app')

@section('content')

<section class="slider">
  <div class="container">
      <div class="row">
        <div class="col-4">
            <img src="/img/logo-grey-transparent.png" alt="">
        </div>
      </div>
    <h1 class="display-6">Съдействие за успешен бизнес</h1>
    <p class="lead">От 1997 г. до днес компанията предлага специализирани консултантски услуги и обучение в специфичните области на сертификацията и управлението.</p>
  </div>
</section>

<section class="main-services">
    <div class="container">
        <div class="d-flex justify-content-center text-center">
            <div class="col-9">
                <div class="h1 service-lead">
                    Над 20 годишен опит в консултациите и обученията
                </div>
                <p class="service-content">
                    От 1997 г. до днес компанията предлага специализирани консултантски услуги и
                    обучение в специфичните области на сертификацията и управлението.
                </p>
            </div>
        </div>
        <div class="h4 service-title">
            Основни направления
        </div>
        <div class="row no-gutters">
            <div class="col-6">
                <div class="service-box" style="background: url('/img/homepage1.jpeg');">
                    <div class="overlay">
                        <div class="h4">Внедряване на системи за управление</div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="service-box" style="background: url('/img/safety.jpg');">
                    <div class="overlay">
                        <div class="h4">Продуктова безопасност</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <hr>
    </div>
</section>

<section class="contact-link">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="h4">Имате допълнителни въпроси?</div>
            <a href="#" class="btn btn-outline-primary">Свържете се с нас</a>
        </div>
    </div>
</section>

<section class="standarts">
    <div class="container">
        <div class="h3 title">
            Стандартите, които внедряваме
        </div>
        <div class="row no-gutters">
            <div class="col-4">
                <div class="standart-box" style="background-image: url('/img/iso9001.jpg');">
                    <div class="content">
                        <div class="h3">ISO 9001</div>
                        <p>Системи за управление на качеството</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="standart-box" style="background-image: url('/img/environment.jpg');">
                    <div class="content">
                        <div class="h3">ISO 14001</div>
                        <p>Управление на околната среда</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="standart-box" style="background-image: url('/img/ohsas.jpg');">
                    <div class="content">
                        <div class="h3">OHSAS 18001</div>
                        <p>Безопасни условия на труд</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br><br>

<section class="product-certification">
    <div class="container">
        <div class="row">
            <div class="col-6">
            
            </div>
            <div class="col-6 d-flex align-items-center">
                <div>
                    <div class="h3">
                        Продуктова безопасност и маркировка CE
                    </div>
                    <p>
                        Как можем да Ви съдействаме:
                    </p>
                    <ul>
                        <li>
                            Проверка на изискванията конкретно за Вашия продукт
                        </li>
                        <li>
                            Идентифициране на приложимите стандарти и директиви
                        </li>
                        <li>
                            Оценка на продукта и преглед на съответствието с приложимите изисквания.
                        </li>
                    </ul>
                    <p>
                        <a href="#">Научете повече</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="h4">
                    Споделен опит
                </div>
                <p>
                    Кю Ей Си" ООД предлага динамично интерактивно обучение на специалисти от фирмите с пряка практическа насоченост.
                </p>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-6">
                        <p>img</p>
                        <p>title</p>
                    </div>
                    <div class="col-6">
                        <p>img</p>
                        <p>title</p>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Всички обучения</a>
            </div>
        </div>

    </div>
</section>

<section class="clients">
    <div class="container">
        <div class="text-center">
            Нашите клиенти
        </div>
        <ul>
            <li>Лого 1</li>
            <li>Лого 2</li>
        </ul>
    </div>
</section>

<section class="about-us">
    <div class="container text-center">
        <div class="h1">
            За нас
        </div>
        <p>
            Някво инфо
        </p>
        <a href="#" class="btn btn-primary">Контакти</a>
    </div>
</section>

@endsection 