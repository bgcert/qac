@extends('layouts.app')

@section('content')

<section class="page-header markirovka"></section>

<section>

    <div class="d-flex justify-content-center">
        <div class="col-6">
            <div class="h1">Какво представлява CE маркировката</div>
            <p>
                Маркировката „CE“ показва дали продуктът е в съответствие със законодателството на ЕС и позволява свободното му движение на европейския пазар.
            </p>
            <p>
                Когато производител поставя маркировката СЕ на своя продукт, той отговорно декларира, че неговият продукт отговаря на всички законови изисквания.
            </p>
            <p>
                Ето защо той гарантира валидността на този продукт да бъде продаван в ЕИП, 27-те държави-членки на ЕС и страните от Европейската асоциация за свободна търговия - Исландия, Норвегия, Лихтенщайн и Турция.
            </p>
        </div>
    </div>
    <div class="container">
        <img src="/img/inspection.jpeg" class="img-fluid" alt="">
    </div>

</section>

<section class="ce-mark-consultation">
    <div class="container">
        <div class="text-center header">
            <div class="h1">Какъв е процесът</div>
            <p>Нашият кип ще Ви води през всяка стъпка от процеса по маркиране на продукта, който е описан по-долу:</p>
        </div>
        <div class="content">
            <div class="row d-flex justify-content-between">
                <div class="col-5">
                    <div class="h3">Какъв е процесът</div>
                    <p>Нашият кип ще Ви води през всяка стъпка от процеса по маркиране на продукта, който е описан по-долу:</p>
                </div>
                <div class="col-7">
                    <ul>
                        <li>Определяне на директивите и хармонизираните стандарти специфични за Вашия продукт</li>
                        <!-- <li>Determine the directives and the harmonised standards specific to the product.</li> -->
                        <li>Определяне на изискванията на ЕС свързани с ръководствата на потребитя ...</li>
                        <!-- <li>Determine the EU requirements for user manuals as specified in the applicable, relevant CE marking product legislation.</li> -->
                        <li>Определете подходящия хармонизиран стандарт за инструктиране на потребителите. Най-често срещаните от тях са:  EN-IEC 82079-1 .</li>
                        <!-- <li>Determine the appropriate harmonised standard to instruct users. The most common of these is: EN-IEC 82079-1.</li> -->
                        <!-- <li>Determine the appropriate harmonised standard to instruct users. The most common of these is: EN-IEC 82079-1.</li> -->
                        <li>Изгответе ръководството за потребителя (и друга техническа документация) в съответствие с изискванията на ЕС.</li>
                        <!-- <li>Draw up the user manual (and other technical documentation) according to the EU requirements.</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="directives">
    <div class="container">
        <div class="text-center header">
            <div class="h1">Директиви, по които консултираме</div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
        <div class="content">
            <div class="row d-flex justify-content-between">
                <div class="col-4">
                    <div class="h3">Директиви, по които консултираме</div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Molestias nihil voluptates fuga dolorum repellat cum temporibus consequatur atque dolorem laboriosam.
                        Aspernatur est et voluptatem velit quidem dignissimos error suscipit omnis?
                    </p>
                </div>
                <div class="col-7">
                    <div class="row">
                        <div class="col-6">
                            <div class="box">
                                <div class="h5">The Simple Pressure Vessels Directive - 2014/29/EU</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box">
                                <div class="h5">The Electromagnetic Compatibility Directive - 2014/30/EU</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box">
                                <div class="h5">The Non-automatic Weighing Instruments Directive - 2014/31/EU</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box">
                                <div class="h5">The Measuring Instruments Directive - 2014/32/EU</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box">
                                <div class="h5">The Lifts Directive - 2014/33/EU</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box">
                                <div class="h5">The ATEX Directive - 2014/34/EU</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box">
                                <div class="h5">The Low Voltage Directive - 2014/35/EU</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 