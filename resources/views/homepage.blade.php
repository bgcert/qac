@extends('layouts.app')

@section('content')

<section class="slider">
    <div class="container h-100">
        <div class="col-6 h-100 d-flex align-items-center">
            <div class="content">
                <div class="display-4">
                    the company
                </div>
            </div>
        </div>
    </div>
</section>
<div class="site-heading"></div>

<section class="clients">
    <div class="container">
        <div class="row">

            @for($i = 0; $i <= 5; $i++) <div class="col-2 logo-item">
                <img src="/img/dummy-logo.png" class="img-fluid" alt="">
        </div>
        @endfor
    </div>
    </div>
</section>

<section class="service-range">
    <div class="container">
        <div class="title h2">
            Как можем да съдействаме на бизнеса Ви?
        </div>
        <div class="row">
            <div class="col-4">
                <div class="box orange">
                    <div class="h5">
                        Консултации и обучения &rarr;
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="h4">
                        Маркировка CE
                    </div>
                    <P>Паспортът на продиктите за европейския пазар</P>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="h4">
                        Международни стандарти
                    </div>
                    <p>Изграждане и внедряване на системи за управление</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-7">
            <div class="h3">
                Консултанска дейност по маркиране на продукт
            </div>
            <p>Ние предлагаме широка гама от услуги за оценка на съответствието, свързани с директивите на ЕС за безопасност на продуктите:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i data-feather="check"></i>Процес на сертифициране по CE-маркировка</li>
                <li class="list-group-item"><i data-feather="check"></i>Оценки на съответствието и одити</li>
                <li class="list-group-item"><i data-feather="check"></i>Проверка на дизайна</li>
                <li class="list-group-item"><i data-feather="check"></i>Анализ и оценки на риска</li>
                <li class="list-group-item"><i data-feather="check"></i>Производствен надзор и тестване на проби, включително ЕМС</li>
            </ul>
            <p class="mt-4">
                <a href="#" class="btn btn-danger">Изпратете запитване</a>
                <a href="#" class="btn btn-outline-secondary">Научете повече</a>
            </p>
        </div>
    </div>
</section>

<section class="ce-marking">
    <div class="container">
        <div class="h4 title">Изисква ли продуктът CE маркировка?</div>
        <div class="text-center">
            <div class="h1">Маркировка CE</div>
        </div>
        <div class="row">
            <div class="col-6">
                <p>Вашият продукт изисква CE маркировка?</p>
                <p>Маркировката CE е необходима, ако клиентите Ви се намират в определени страни и ако купуват определени видове продукти от Вас.</p>
                <p><a href="#">Списък с държавите, които изискват CE маркировка</a></p>
            </div>
            <div class="col-6">
                <p>Ние предлагаме широка гама от услуги за оценка на съответствието, свързани с директивите на ЕС за безопасност на продуктите:</p>
                <ul>
                    <li>Консултантска дейност по CE маркиране</li>
                    <li>Процес на сертифициране по CE-маркировка</li>
                    <li>Оценки на съответствието и одити</li>
                    <li>Проверка на дизайна</li>
                    <li>Анализ и оценки на риска</li>
                    <li>Производствен надзор и тестване на проби, включително ЕМС</li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <div class="h4 mt-4">Продуктите Ви се нуждаят от сертифициране?</div>
            <a href="#" class="btn btn-primary">Изпратете запитване за оферта</a>
        </div>
        <hr>
        <div class="row">
            <div class="col-5 img-bg">
                <!-- <img src="/img/forest1.jpg" class="img-fluid" alt=""> -->
            </div>
            <div class="col-1"></div>
            <div class="col-6 content">
                <div class="h2">
                    Маркировка CE
                </div>

                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Консултантска дейност по CE маркиране</li>
                            <li>Процес на сертифициране по CE-маркировка</li>
                            <li>Оценки на съответствието и одити</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row benefits">
            <div class="col-6">
                <h4>Целеви клиенти</h4>
                <p>Тази услуга е насочена към всеки бизнес, който иска да продава продуктите си в ЕС.</p>
            </div>
            <div class="col-6">
                <h4>Ключови ползи за клиента</h4>
                <p>
                    Опитът ни в тази област помага за постигане на маркировка CE бързо и безстресово постигане на съответствие директивите,
                    за да може достъпът до пазарите на ЕС да стартира без излишно забавяне.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="standards">
    <div class="container">
        standarts
    </div>
</section>

@endsection 