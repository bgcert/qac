@extends('layouts.app')

@section('content')

<section class="container-fluid slider">
    <div class="container">
        <div class="col-7">
            <div class="h1">Съдействие за Вашия бизнес</div>
            <div class="divider"></div>
            <p>
                КЮ ЕЙ СИ ООД - Център за осигуряване на качеството съществува за да повишава конкурентността и растежа на Вашия бизнес.
            </p>
            <p>
                От 1997 г. до днес компанията предлага специализирани консултантски услуги и обучение в специфичните области на сертификацията и управлението.
            </p>
            <p>
                <a href="#" class="btn btn-outline-light btn-lg">Научете повече</a>
            </p>
        </div>
    </div>
</section>

<section class="about">

    <div class="container">
        <div class="d-flex justify-content-center text-center">
            <div class="col-7">
                <div class="h1">
                    Кю Ей Си ООД - Център за осигуряване на качеството
                </div>
                <p>
                    съществува за да повишава конкурентността и растежа на Вашия бизнес.
                    От 1997 г. до днес компанията предлага специализирани консултантски услуги и обучение в специфичните области на сертификацията и управлението.
                </p>
                <div class="divider"></div>
            </div>
        </div>
    </div>

</section>

<section class="services">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="h1 title">
                    Основни направления
                </div>
            </div>
            <div class="col-6 d-flex align-items-center">
                <div class="box">
                    <div class="h6">Консултации и обучения</div>
                    <div class="h1">
                        Маркировка CE
                    </div>
                    <p>
                       <strong>Как да отговаряте на условията на европейския пазар?</strong>
                    </p>
                    <p>
                        Ние предлагаме пълно съдействие по проучване, анализ и подготовка на продуктите за оценка на съответствието и маркировка CE
                    </p>
                    <p>
                        <a href="/markirovka-ce">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 16 16 12 12 8"></polyline>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="box">
                    <div class="h6">Консултации и обучения</div>
                    <div class="h1">
                        ISO 9001:2016
                    </div>
                    <p>
                        Ние ще ви помогнем да разберете и приложите изискванията на системата за управление на качеството, като същевременно гарантирате, че програмата ви ще се осъществява безпроблемно.
                    </p>

                    <p>
                        <a href="/standarti">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 16 16 12 12 8"></polyline>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center text-center">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <div class="h1 title">
                            Как съдействаме за успеха Ви?
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="circle">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <i data-feather="book"></i>
                            </div>
                        </div>
                        <div class="h4">Консултации</div>
                        <div class="divider"></div>
                        <p>
                            Екипът ни има над 20 годишен опит във внедряването на системите за управление
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="circle">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <i data-feather="book"></i>
                            </div>
                        </div>
                        <div class="h4">Обучение</div>
                        <div class="divider"></div>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, temporibus. Doloremque possimus quaerat iste
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-secondary btn-lg">Научете повече</a>
        </div>

    </div>

</section>

<section class="clients">
    <div class="container">
        <div class="h2">Компаниите, които ни се доверяват</div>
        <div class="divider"></div>

        <div class="row">
            @for($i = 0; $i <= 10; $i++) <div class="client-logo col-2">
                <img src="/img/dummy-logo.png" class="img-fluid" alt="">
        </div>
        @endfor
    </div>
    </div>
</section>

<section class="contact">

    <div class="container d-flex justify-content-center">

        <div class="col-7">
            <div class="text-center">
                <div class="h1">
                    Имате нужда от повече информация за нашите услуги?
                </div>
                <div class="divider"></div>
                <p>
                    Можете да попълните формата за запитване и ние ще Ви отговорим в най-кратки срокове
                </p>
            </div>

            <div class="contact-form">

                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Име *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Моля въведете Вашето име">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">E-mail *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Телефон</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Относно:</label>
                        <select class="custom-select">
                            <option selected>Моля, изберете от списъка</option>
                            <option>Внедряване на международен стандарт</option>
                            <option>Маркировка CE на продукт</option>
                            <option>Друго</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Запитване</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <a href="#" class="btn btn-secondary btn-lg">Изпращане</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection 