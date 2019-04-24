<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Консултации, обучения, международни стандарти, маркировка CE, aqap, iso9001, iso13485, iso27001, iso14001, iso45001">
    <meta name="author" content="Qac Ltd.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Кю Ей Си ООД - Център за осигуряване на качеството</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css?v=2" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138874124-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-138874124-1');
    </script>
</head>

<body>

    <div class="site-wrap">

        <section class="qac-top-services" id="services">
            <div class="text-center">
                <div class="h1 title">
                    Ако се интересувате от:
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="service-box">
                        <div class="image">
                            <img src="/img/ce-mark-home.png" alt="">
                        </div>
                        <div class="service-title">
                            <h2 class="h5">Подготовка за продуктова сертификация</h2>
                        </div>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    Маркировка CE
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    Маркировка GS
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    И други
                                </div>
                            </li>
                        </ul>
                        <p>
                            Покрийте задължителните условия за пускането на продуктите Ви на пазара на Европейското и световното икономическо пространство.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-4">
                    <div class="service-box">
                        <div class="image">
                            <img src="/img/iso-home.png" alt="">
                        </div>
                        <div class="service-title">
                            <h2 class="h5">Внедряване на международни стандарти</h2>
                        </div>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    ISO 9001
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    ISO 13485
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    ISO 27001
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    ISO 14001
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    ISO 45001
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    И други
                                </div>
                            </li>
                        </ul>
                        <p>
                            <a href="/standarti">&rarr; Внедряването на кои международни стандарти подпомагаме?</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="service-box">
                        <div class="image">
                            <img src="/img/aqap-home.png" alt="">
                        </div>
                        <div class="service-title">
                            <h2 class="h5">Внедряване на изискванията на НАТО</h2>
                        </div>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <div>
                                    AQAP 2110
                                </div>
                            </li>
                        </ul>
                        <p>
                            Какви са изискванията НАТО към производителите и доставяните изделия за отбраната и как да ги изпълните?
                        </p>
                        <p>
                            <a href="#inquiry" class="btn btn-danger">Свържете се с нас</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="qac-in-focus">

            <div class="box ce-mark">
                <div class="row">
                    <div class="col-lg-9 col-12 content">
                        <div class="h1">Маркировка CE</div>
                        <div class="h5">Как да отговаряте на условията на <strong>(500 милионния) европейския пазар?</strong></div>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <div class="text">
                                    Нашият екип ще Ви води през целия процес
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <div class="text">
                                    Даваме насоки без да Ви затрупваме с правни жаргони и излишна техническа документация
                                </div>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <div class="text">
                                    Предоставяме Ви точна и безпристрастна информация, съобразена с действащото законодателство
                                </div>
                            </li>
                            <li>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>
                                <div class="text">
                                    Ние предлагаме прагматичен и икономически ефективен подход за постигане на CE маркировка и помощ за спазване на изискванията за продуктите
                                </div>
                            </li>
                        </ul>
                        <p><a href="/#inquiry" class="btn btn-danger btn-lg">Изпратете запитване</a></p>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <img src="/img/ce-mark-tr.png" class="img-fluid" alt="Маркировка CE">
                    </div>
                </div>
            </div>
        </section>

        <section class="qac-assistance">
            <div class="text-center">
                <div class="h1 title">
                    За да успее бизнесът Ви, предлагаме:
                </div>
            </div>
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-6 col-12">
                    <img src="/img/inspection.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content consultation">
                        <div>
                            <div class="h1">Бизнес консултации</div>
                            <p>
                                За повече от 20 годишния опит сме консултирали внедряването на редица международни стандарти и публикации на НАТО от стотици фирми.
                            </p>
                            <p>
                                Някои от тях използват регулярни консултации и одит за осигуряване на продължаващото свое развитие.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <img src="/img/meeting.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content education">
                        <div>
                            <div class="h1">Практически обучения</div>
                            <p>
                                Удовлетворяваме Вашия интерес и необходимост от знания и умения на Вашите специалисти чрез специализирани обучения за придобиване на ключови компетенции.
                            </p>
                            <p>
                                Високите оценки на обучените от нас над <strong>4500 специалисти</strong> потвърждават качеството на нашите курсове.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="qac-work-with-us">
            <div class="text-center title">
                <div class="h1">Защо да работите с нас?</div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="text-center col-lg-6 col-12">
                    <p>
                        Всички проекти по внедряване на системи за управление, подготовка за сертификация на продукти и обучения,
                        изпълнявани от "Кю Ей Си" ООД се реализират в условията на изградена и сертифицирана система за управление на качеството.
                    </p>
                </div>
            </div>
        </section>

        <section class="qac-clients">
            <div class="text-center title">
                <div class="h1">Фирмите, които ни се довериха</div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="row col-9 justify-content-center">
                    <div class="col-lg-3 col-12 client-item">
                        <img src="/img/clients/actavis.png" alt="test">
                    </div>
                    <div class="col-lg-3 col-12 client-item">
                        <img src="/img/clients/aec.png" alt="test">
                    </div>
                    <div class="col-lg-3 col-12 client-item">
                        <img src="/img/clients/glassco.png" alt="test">
                    </div>
                    <div class="col-lg-3 col-12 client-item">
                        <img src="/img/clients/kentamed.png" alt="test">
                    </div>
                    <div class="col-lg-3 col-12 client-item">
                        <img src="/img/clients/kontrax.png" alt="test">
                    </div>
                    <div class="col-lg-3 col-12 client-item">
                        <img src="/img/clients/ochna_optika.png" alt="test">
                    </div>
                    <div class="col-lg-3 col-12 client-item">
                        <img src="/img/clients/persi.png" alt="test">
                    </div>
                </div>
            </div>
        </section>

        @include('partials.inquiry')
    </div>


</body>

</html>