@extends('layouts.app')

@section('content')

<div class="page">
    <div class="header markirovka">
        <div class="container">
            <div class="text-center">
                <div class="h1 title">
                    Маркировка CE
                </div>
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
                    <div class="col-7">
                        <div class="h2 title">Какво представлява CE маркировката</div>
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
                    <div class="col-5 mark-logo">
                        <img src="/img/ce-mark.png" alt="">
                    </div>
                </div>

            </div>

            <div class="how">
                <div class="text-center">
                    <div class="h2 title">Как ви помагаме?</div>
                    <!-- <p>
                        Нашият кип ще Ви води през всяка стъпка от процеса по маркиране на продукта, който е описан по-долу:
                    </p> -->
                </div>
                <div class="row">
                    <div class="col-6">
                        <i data-feather="check-square"></i>
                        <p>
                            Нашият екип ще Ви води през целия процес
                        </p>
                    </div>
                    <div class="col-6">
                        <i data-feather="check-square"></i>
                        <p>
                            Предоставяме Ви точна и безпристрастна информация, съобразена с действащото законодателство
                        </p>
                    </div>

                    <div class="col-6">
                        <i data-feather="check-square"></i>
                        <p>
                            Даваме насоки без да Ви затрупваме с правни жаргони и излишна техническа документация
                        </p>
                    </div>

                    <div class="col-6">
                        <i data-feather="check-square"></i>
                        <p>
                            Ние предлагаме прагматичен и икономически ефективен подход за постигане на CE маркировка и помощ за спазване на изискванията за продуктите
                        </p>
                    </div>
                </div>
                <p class="text-center mt-4">
                    <a href="#" class="btn btn-danger btn-lg">Запитване</a>
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
                                    Първата стъпка е да се определи дали вашият продукт може да има CE маркировка или не.
                                    Не всички продукти трябва да имат маркировка „CE“, а само продуктите, които попадат в обхвата на поне една от директивите за маркировката „CE“.
                                    Има повече от 20 продуктови директиви и регламенти, които обхващат редица продукти.
                                    Такива продукти включват (но не се ограничават до) електрическо оборудване, машини, медицински изделия, играчки, оборудване под налягане, ЛПС,
                                    безжични устройства и строителни продукти.
                                </p>
                                <p>
                                    Определянето на това, което законодателство може да бъде приложимо, включва просто упражнение за четене на обхвата на всяка директива / регламент.
                                    След това трябва да приложите обхвата на продукта си, за да установите кои от тях се прилагат (Пример за обхвата на Директивата за ниско напрежение по-долу).
                                    Не забравяйте, че може да има повече от една Директива / Наредба, която се прилага за Вашия продукт!
                                    Не забравяйте, че ако вашият продукт не попада в обхвата на която и да е от директивите за маркировката СЕ,
                                    тогава вашият продукт не трябва да има маркировка СЕ, но е вероятно да попадне в обхвата на други директиви за продукти.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div>#2 Идентифициране на приложимите изисквания</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="box-body">
                                <p>
                                    Всяка директива има малко по-различни методи за доказване на съответствието.
                                    Това обикновено зависи от класификацията на продукта и предназначението му.
                                    Всяка директива има редица „съществени изисквания“, на които продуктът трябва да отговаря.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div>#3 Определяне на подходящ подход към съответстие</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="box-body">
                                <P>
                                    Процесът на маркиране на СЕ винаги е процес на самодеклариране, но може да се наложи да включите трета страна.
                                    Това е изложено в „системата за атестация“ и ще се различава в различните директиви.
                                    Някои продукти (като инвазивни медицински изделия или пожароизвестителни системи)
                                    могат до известна степен да имат задължително изискване за включване на оторизирана трета страна.
                                </P>
                                <p>
                                    Има различни маршрути за атестиране, които включват:
                                </p>
                                <ul>
                                    <li>Оценка на продукта от производителя.</li>
                                    <li>Оценка на продукта от производителя, като допълнително изискване за извършване на задължителни одити на производствения контрол от трета страна.</li>
                                    <li>Оценка от трета страна (напр. Типово изпитване на ЕО), като изискването за задължителни одити на производствения контрол се извършва от трета страна.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <div>#4 Оценка на съответствието</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="box-body">
                                <p>
                                    Когато всички изисквания са установени, имате нужда от доказателства, че продуктът отговаря на съществените изисквания на директивата (ите).
                                </p>
                                <p>
                                    Това обикновено включва известна оценка и / или изпитване.
                                    Това често включва гарантиране, че са изпълнени изискванията на приложимите хармонизирани стандарти,
                                    които са били идентифицирани в стъпка 2.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <div>#5 Изготвяне на техническа документация</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="box-body">
                                <p>
                                    Необходимо е да се състави техническа документация, свързана с продукта или гамата от продукти.
                                    Тази информация следва да обхваща всеки аспект, свързан със съответствието и е вероятно да включва подробности за проектирането,
                                    разработването и производството на продукта. Техническата документация може да бъде известна като Техническото досие или Техническото досие.
                                </p>
                                <p>
                                    Техническата документация обикновено включва:
                                </p>
                                <ul>
                                    <li>Техническо описание.</li>
                                    <li>Чертежи, схеми и снимки.</li>
                                    <li>Бил с материали.????</li>
                                    <li>Спецификация и, където е приложимо, декларации за съответствие за използваните критични компоненти и материали.</li>
                                    <li>Подробности за всички изчислителни проекти.</li>
                                    <li>Доклади за тестове и / или оценки.</li>
                                    <li>Инструкции.</li>
                                    <li>Копие от Декларацията.</li>
                                </ul>
                                <p>
                                    Техническата документация може да бъде предоставена във всякакъв формат (т.е. хартиен или електронен)
                                    и трябва да се съхранява за период до 10 години след производството на последната единица и в повечето случаи се намира в
                                    Европейското икономическо пространство (ЕИП).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <div>#6 Създаване на декларацията и прилагане на маркировката</div>
                            <i data-feather="plus"></i>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="box-body">
                                <p>
                                    Когато производителят, вносителят или упълномощеният представител се уверят,
                                    че продуктът им отговаря на приложимите директиви за маркировката на ЕО, те трябва да попълнят декларация.
                                    Според повечето директиви тя е известна като Декларация за съответствие на ЕС, но съществуват и други термини.
                                    Такива са декларацията за вграждане за частично завършени машини и декларация за експлоатационни характеристики за строителни продукти.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="directives">
                <div class="text-center heading">
                    <div class="h2 title">Директиви и регламенти</div>
                    <p>
                        Съществуват над 20 бр. Законодателство за СЕ маркиране (Директиви и Регламенти) и ако един или повече от тях важат за Вашия продукт,
                        то е законово изискване (в повечето случаи) да се маркира СЕ.
                    </p>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-6">
                        <div class="h3">Кои директиви/регламенти се отнасят за моя продукт?</div>
                        <p>
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
                    <div class="col-6">
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
</div>

@endsection