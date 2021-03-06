@extends('layouts.app')

@section('content')

<section class="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="circle">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <i data-feather="map"></i>
                    </div>
                </div>
                <h3>Адрес</h3>
                <p>
                    София, бул. Цар Борис III 168, <br>
                    Бизнес център "АНДРОМЕДА", <br>
                    ет. 3, офис 31
                </p>
            </div>
            <div class="col-4">
                <div class="circle">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <i data-feather="mail"></i>
                    </div>
                </div>
                <!-- <i data-feather="mail"></i> -->
                <h3>E-mail</h3>
                <p>
                    office@qac-bg.com <br>
                    consult@qac-bg.com
                </p>
            </div>
            <div class="col-4">
                <div class="circle">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <i data-feather="phone"></i>
                    </div>
                </div>
                <!-- <i data-feather="phone"></i> -->
                <h3>Телефони</h3>
                <p>
                    +359 02 40 32 400 <br>
                    +359 02 40 32 409
                </p>
            </div>
        </div>
    </div>
</section>

<section class="company-info">
        <div class="d-flex justify-content-center">
            <div class="col-6">
                <div class="h4">Данни за фирмата:</div>
                <table class="table table-bordered">
                    <tr>
                        <th>Фирма:</th>
                        <td>"Кю Ей Си" ООД</td>
                    </tr>
                    <tr>
                        <th>ЕИК:</th>
                        <td>121390582</td>
                    </tr>
                    <tr>
                        <th>Регистрация по ДДС:</th>
                        <td>BG121390582</td>
                    </tr>
                    <tr>
                        <th>IBAN:</th>
                        <td>BG08UNCR75271080547410</td>
                    </tr>
                    <tr>
                        <th>Банка:</th>
                        <td>УниКредит Булбанк ф-л Цар Борис III</td>
                    </tr>
                    <tr>
                        <th>Банков код:</th>
                        <td>UNCRBGSF</td>
                    </tr>
                    <tr>
                        <th>Годишен отчет:</th>
                        <td>виж <a href="http://www.brra.bg/">Търговски регистър</a></td>
                    </tr>
                    <tr>
                        <th>Адрес за кореспонденция:</th>
                        <td>
                            София 1618, бул. "Цар Борис ІІІ" 168, <br>
                            Бизнес център "АНДРОМЕДА", <br>
                            ет. 3, офис 31
                        </td>
                    </tr>
                    <tr>
                        <th>Управител:</th>
                        <td>инж. ик. Емил Петров </td>
                    </tr>
                    <tr>
                        <th>Управител:</th>
                        <td>инж. Анелия Замфирова</td>
                    </tr>
                </table>
            </div>
        </div>
</section>

<section class="map">
    <iframe width="100%" height="450" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=sofia%20%D1%86%D0%B0%D1%80%20%D0%B1%D0%BE%D1%80%D0%B8%D1%81%203%20168+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        <a href="https://www.maps.ie/map-my-route/">Create route map</a>
    </iframe>
</section>

<!-- <section class="about">
    <div class="container">
        <div class="text-center">
            <div class="h1 title">
                За нас
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-7">
                <h4>Подкрепа на бизнеса</h4>

                <P><strong>От 1997 г. КЮ ЕЙ СИ ООД подкрепя бизнеса по пътя на успешната сертификация!</strong></P>
                <p>Нашата цел е да съдействаме на компаниите да получат маркировка CE и успешно да продават продуктите си в Европа.</p>
                <p>Придобитите специфични знания и опит ни дават увереност в успеха на нашите клиенти.</p>

                <h4>Нашите ценности</h4>
                
                <p>Компетентност - Нашият опит е нашата сила</p>
                <p>Отговорност - Ние сме до Вас преди, по време и след сертифицирането</p>
                <p>Съпричастност - Ние осъзнаваме и защитаваме Вашите интереси</p>
            </div>
        </div>
    </div>
</section> -->

@include('partials.inquiry')
@endsection