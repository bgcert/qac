@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark homepage-nav">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Услуги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Клиенти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Контакти</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

<div id="carouselExampleControls" class="carousel slide homepage-carousel" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="overlay">
                <div class="content text-center">
                    <h1 class="display-3">
                        <strong>Качеството</strong> - реално бъдеще.
                    </h1>
                    <div class="h2">
                        Качеството - реално бъдеще.
                    </div>
                    <div>
                        <a href="#" class="btn btn-light btn-lg">За нас</a>
                        <a href="#" class="btn btn-lg btn-danger">Услуги</a>
                    </div>
                </div>
            </div>
            <img src="/img/1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="/img/2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="/img/3.jpeg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="segment high">
    <div class="container text-center">
        <h1>Кю Ей Си - Център за осигуряване на качеството</h1>
        <p class="large">
            Компанията съществува за да повишава конкурентността и растежа на Вашия бизнес.
        </p>
        <p>
            От 1997 г. до днес компанията предлага специализирани консултантски услуги и обучение в специфичните области на сертификацията и управлението.
        </p>
    </div>
</div>

<div class="segment alt high">
    <div class="container text-center">
        <h1 class="segment__title">Услуги</h1>
        <div class="card-deck">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title">Маркировка СЕ</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title">Европейски фондове 2014 - 2020</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <h5 class="card-title">Експертна подкрепа и бизнес консултации</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="segment high">
    <div class="container">
        <div class="segment__title">
            Кю Ей Си ООД
        </div>
        <p>
            "Кю Ей Си" ООД е една от малкото фирми, които работят активно на консултантския пазар от 1997 г. до днес.
            Още от създаването си, ние поддържаме висок рейтинг като консултанти и обучаващи в областта на сертификацията и проектния мениджмънт.
        </p>

        <p>
            Обхватът на двете основни направления на предоставяните услуги (КОНСУЛТАЦИИ и СПЕЦИАЛИЗИРАНО ОБУЧЕНИЕ) постоянно се разширява.
            Дружеството предлага консултации по проектен мениджмънт и внедряване на системи за управление практически по всички действащи стандарти.
            Нещо повече, ние сме от малкото консултанти, които се ангажират с тежката задача за постигане на продуктово съответствие и сертификация по едни от най-тежките директиви
            и стандарти като Медицинска директива, Директива за плавателни съдове за отдих и други.
        </p>

        <p>
            Нашето мото е: <strong>Качеството - реално бъдеще!</strong> и насочваме цялата си дейност и резултатите от нея към изпълнението му.
            <a href="/about-us" class="btn btn-link">Научете повече <span>&#187;</span></a>
        </p>
        <p>
            <img src="/img/1.jpeg" class="img-fluid rounded" alt="Качеството - реално бъдеще!">
        </p>

        <p>
            Натрупаният практически опит в консултациитепо изграждане, внедряване и развитие на Системи за управление по международни стандарти и
            постигане на съответствие на продуктите със съществените изисквания и "СЕ" маркировка е основа за разработване и провеждане на
            ефикасни практически-приложни курсове. В специализираните обучения са участвали над 3300 специалисти от различни организации в цяла България.
            Участието на специалисти и от други консултантски организации в наши курсове за нас означава Доверие.
        </p>

        <p>
            За да постигаме все по-предизвикателни цели и да удовлетворяваме изискванията на все по-претенциозните клиенти, ние разчитаме на висок професионализъм на персонала и сътрудниците. За работа по програмите на "Кю Ей Си" ООД от нашите сътрудници се изисква висока компетентност, включително притежаването на поне един сертификат от международна организация.
        </p>

        <p>
            Всички проекти по внедряване на системи за управление, подготовка за сертификация и обучения, изпълнявани от "Кю Ей Си" ООД се реализират
            в условията на изградена и сертифицирана система за управление на качеството.
        </p>

        <p>
            В нашият екип не се говори за количество внедрени и сертифицирани системи за управление.
            Нашата цел е да изградим трайни взаимоотношения с клиентите на дружеството. Убедени, че постигат желания ефект от изпълнената консултантска дейност,
            нашите клиенти почти винаги се обръщат отново и отново към нас. Това не може да не ни радва!
        </p>
    </div>
</div>

<div class="segment alt high">
    <div class="container">
        <div class="segment__title">
            Нашите клиенти
        </div>

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($clients as $client)
                <div class="carousel-item @if($loop->index == 0) active @endif" data-interval="2500">
                    <div class="row">
                        @foreach($client as $item)
                        <div class="col-2">
                            <img src="{{ $item['logo'] }}?id={{ $item['id'] }}" alt="test">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <ol class="carousel-indicators">
                @foreach($clients as $client)
                <li data-target="#carouselExampleInterval" data-slide-to="{{ $loop->index }}" @if($loop->index == 0) class="active" @endif></li>
                @endforeach
            </ol>
        </div>
    </div>
</div>

<div class="segment high">
    <div class="container">
        <div class="segment__title">
            Референции
        </div>

        <blockquote class="blockquote">
            <p>
                ... За краткия период на курсовете за обучение водещите успяха да потопят всички участници в изключително приятна и ползотворна работна атмосфера,
                в условията на която под формата на игри и симулиране на ситуации, обучаемите успяха да систематизират и усвоят теоретичен материал,
                касаещ общуването, конфликтните ситуации и евентуален подход към тях при внедряването, поддържането, развитието на
                системата за управление и провеждането на вътрешни одитори ....
            </p>
            <footer class="blockquote-footer">Eлeктрон Прогрес АД - София</footer>
        </blockquote>

        <blockquote class="blockquote">
            <p>
                ... Високата квалификация на лекторите на Кю Ей Си ООД, добре изготвените учебни материали и подходящо проведените практически упражнения ни дават
                възможност да прилагаме придобитите знания в работата си по подобряване на нашата система за управление на качеството...
            </p>
            <footer class="blockquote-footer">АЕЦ Козлодуй ЕАД</footer>
        </blockquote>

        <blockquote class="blockquote">
            <p>
                ... С изпълнение на сключения договор и с крайния резултат, фирма "Кю Ей Си" ООД потвърди, че има голям опит в изграждането на системи за управление
                на качеството на обучение, а лично г-н Емил Петров показа висока професионална подготовка в проектирането на системи за управление на
                качеството по ISO 9001: 2000 ...
            </p>
            <footer class="blockquote-footer">НВУ "Васил Левски" - Велико Търново</footer>
        </blockquote>

        <blockquote class="blockquote">
            <p>
                ... Изборът на Кю Ей Си ООД от фирма АДИКС като доставчик за въвеждане на системата за управление на качеството в цялата работа на АДИКС ООД бе сполучлив
                и напълно задоволителен. Благодарим на целия екип на Кю Ей Си ООД за високото качество на обучението, консултирането, извършения одит,
                както и за готовността през цялото време да отговарят на наши въпроси, което доведе до успешно въвеждане на системата в нашата фирма ...
            </p>
            <footer class="blockquote-footer">АДИКС ООД</footer>
        </blockquote>
    </div>
</div>

@endsection 