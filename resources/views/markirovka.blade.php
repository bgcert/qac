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
                    <a href="#">Начало &#187;</a><span> / Маркировка CE</span>
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

            <div class="process">
                <div class="text-center">
                    <div class="h2 title">Какъв е процесът</div>
                    <p>
                        Нашият кип ще Ви води през всяка стъпка от процеса по маркиране на продукта, който е описан по-долу:
                    </p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <i data-feather="check-square"></i>
                        <p>
                            Маркировката „CE“ показва дали продуктът е в съответствие със законодателството на ЕС и позволява свободното му движение на европейския пазар.
                        </p>
                    </div>
                    <div class="col-6">
                        <i data-feather="check-square"></i>
                        <p>
                            Определяне на изискванията на ЕС свързани с ръководствата на потребитя
                        </p>
                    </div>

                    <div class="col-6">
                        <i data-feather="check-square"></i>
                        <p>
                            Определете подходящия хармонизиран стандарт за инструктиране на потребителите. Най-често срещаните от тях са: EN-IEC 82079-1
                        </p>
                    </div>

                    <div class="col-6">
                        <i data-feather="check-square"></i>
                        <p>
                            Изгответе ръководството за потребителя (и друга техническа документация) в съответствие с изискванията на ЕС
                        </p>
                    </div>
                </div>
                <p class="text-center mt-4">
                    <a href="#" class="btn btn-danger btn-lg">Запитване</a>
                </p>
            </div>

            <div class="directives">
                <div class="row d-flex justify-content-between">
                    <div class="col-4">
                        <div class="h3">Актуалните директиви</div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Molestias nihil voluptates fuga dolorum repellat cum temporibus consequatur atque dolorem laboriosam.
                            Aspernatur est et voluptatem velit quidem dignissimos error suscipit omnis?
                        </p>
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">The Simple Pressure Vessels Directive - 2014/29/EU</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">The Electromagnetic Compatibility Directive - 2014/30/EU</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">The Non-automatic Weighing Instruments Directive - 2014/31/EU</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">The Measuring Instruments Directive - 2014/32/EU</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">The Lifts Directive - 2014/33/EU</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">The ATEX Directive - 2014/34/EU</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <div class="h5">The Low Voltage Directive - 2014/35/EU</div>
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