@extends('layouts.app')

@section('content')

<div class="page">
    <div class="header markirovka">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Маркировка CE</h1>
                <p>
                    <a href="/">Начало</a><span> &#187; Маркировка CE</span>
                </p>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container">
            <div class="main">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <h2 class="title">Какво представлява CE маркировката</h2>
                        <ul>
                            <li>
                                <i data-feather="check-circle"></i>
                                <p>
                                    Маркировката „CE“ показва дали продуктът е в съответствие със законодателството на ЕС и позволява свободното му движение на европейския пазар.
                                </p>
                            </li>
                            <li>
                                <i data-feather="check-circle"></i>
                                Когато производител поставя маркировката СЕ на своя продукт, той отговорно декларира, че неговият продукт отговаря на всички законови изисквания.
                            </li>
                            <li>
                                <i data-feather="check-circle"></i>
                                Ето защо той гарантира валидността на този продукт да бъде продаван в ЕИП, 27-те държави-членки на ЕС и страните от Европейската асоциация за свободна търговия - Исландия, Норвегия, Лихтенщайн и Турция.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-lg-block d-none mark-logo">
                        <img src="/img/ce-mark.png" alt="">
                    </div>
                </div>

            </div>

            <div class="how">
                <div class="text-center">
                    <div class="h2 title">Как ви помагаме?</div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <i data-feather="check-square"></i>
                        <p>
                            Нашият екип ще Ви води през целия процес
                        </p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <i data-feather="check-square"></i>
                        <p>
                            Предоставяме Ви точна и безпристрастна информация, съобразена с действащото законодателство
                        </p>
                    </div>

                    <div class="col-lg-6 col-12">
                        <i data-feather="check-square"></i>
                        <p>
                            Даваме насоки без да Ви затрупваме с правни жаргони и излишна техническа документация
                        </p>
                    </div>

                    <div class="col-lg-6 col-12">
                        <i data-feather="check-square"></i>
                        <p>
                            Ние предлагаме прагматичен и икономически ефективен подход за постигане на CE маркировка и помощ за спазване на изискванията за продуктите
                        </p>
                    </div>
                </div>
                <p class="text-center mt-4">
                    <a href="#inquiry" class="btn btn-secondary btn-lg">Запитване</a>
                </p>

                <p>
                    <div class="h4 mt-4">
                        <a href="#directives">&rarr; Разгледайте кои групи изделия попадат под задължителните изисквания на ЕС – списък директиви и регламенти</a>
                    </div>
                </p>
            </div>
        </div>
        <div class="process">
            <div class="container">
                <div class="h3 title">Какъв е процесът на маркиране</div>
                <div class="accordion" id="accordionExample">
                    <div class="box">
                        <div class="box-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <div>#1 Идентифициране на приложимите директиви</div>
                            <i data-feather="plus"></i>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="box-body">
                                <p>
                                    Първата стъпка в процеса по оценка на съответствието е да се определ дали продукта попада в обхвата на директивите за безопаност на продуктите.
                                </p>
                                <p>
                                    Има повече от 20 директиви и регламенти, обхващат редица продукти - електрическо оборудване, медицински изделия, машини, играчки, оборудване под налягане,
                                    ЛПС, безжични устройства, строителни продукти.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div>#2 Идентифициране на приложимите стандарти</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="box-body">
                                <p>
                                    Всяка директива представя ред за доказване на съответствието и „съществени изисквания“, конкретизирани в прилежащите към нея стандарти.
                                </p>
                                <p>
                                    Процедурата и изискванията за постигане на съответствие и маркировката „CE“ зависи от предназначението на продукта и класификацията му.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div>#3 Оценка на съответствието</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="box-body">
                                <P>
                                    Когато приложимите изисквания към продукта са идентифицирани, се пристъпва към доказване на продуктовото съответствие с приложимите стандарти.
                                </P>
                                <p>
                                    При по-рискови продукти, по време на този процес се налага намесата на трета страна – нотифициран орган.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <div>#4 Изготвяне на техническо досие</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="box-body">
                                <p>
                                    Техническата документация коплектова в т.н. техническо досие. Тази информация обхваща всички обективни доказателства,
                                    че изискванията за безопасност към продукта са спазени.
                                </p>
                                <p>
                                    Техническата документация коплектова в т.н. техническо досие. Тази информация обхваща всички обективни доказателства,
                                    че изискванията за безопасност към продукта са спазени.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <div>#5 Декларация за съответствие и CE маркировка</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="box-body">
                                <p>
                                    Когато производителят, вносителят или упълномощеният представител се уверят, че продуктът им отговаря на приложимите директиви,
                                    те трябва да декларират този факт чрез Декларация за съответствие на ЕС и да поставят CE маркировката.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="directives" id="directives">
                <div class="text-center heading">
                    <div class="h2 title">Директиви и регламенти</div>
                    <p>
                        Съществуват над 20 бр. Законодателство за СЕ маркиране (Директиви и Регламенти) и ако един или повече от тях важат за Вашия продукт,
                        то е законово изискване (в повечето случаи) да се маркира СЕ.
                    </p>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-6 mb-4">
                        <div class="h3">Кои директиви/регламенти се отнасят за моя продукт?</div>
                        <p class="mt-4">
                            Всяко законодателство (директива или регламент) има обхват, който описва подробно видовете продукти, за които се прилага.
                            Обхватът често е отворен за тълкуване, което може да създаде объркване за производителите,
                            които се опитват да решат дали дадена директива или регламент се прилага за техния продукт.
                        </p>
                        <p>
                            За да се усложнят още повече нещата, често има припокривания с друго законодателство и специфични изключения за някои видове продукти.
                            Например електрически уред с електрическо захранване, който попада в обхвата на директивите за електромагнитна съвместимост и ниско напрежение,
                            ще бъде изключен от обхвата на тези директиви, ако уредът трябва да бъде деклариран в съответствие с директивата за медицинските изделия.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Low Voltage Directive (LVD)</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Electromagnetic Compatibility (EMC)</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Radio Equipment Directive (RED)</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Machinery</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Lifts</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Noise Emissions for Outdoor Equipment</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Pressure Equipment</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Simple Pressure Vessels</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Medical Devices</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">Active Implantable Medical Devices</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">In Vitro Diagnostic Medical Devices</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.inquiry')
</div>

@endsection