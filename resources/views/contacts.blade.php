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
                <p>София, бул. Цар Борис III 168</p>
            </div>
            <div class="col-4">
                <div class="circle">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <i data-feather="mail"></i>
                    </div>
                </div>
                <!-- <i data-feather="mail"></i> -->
                <h3>E-mail</h3>
                <p>office@qac-bg.com</p>
            </div>
            <div class="col-4">
                <div class="circle">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <i data-feather="phone"></i>
                    </div>
                </div>
                <!-- <i data-feather="phone"></i> -->
                <h3>Телефони</h3>
                <p>+359 40 32 400</p>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="text-center">
            <div class="h1 title">
                За нас
            </div>
        </div>
        <div class="col-7">
            <p>
                "Кю Ей Си" ООД е една от малкото фирми, които работят активно на консултантския пазар от 1997 г. до днес.
            </p>
            <p>
                Още от създаването си, ние поддържаме висок рейтинг като консултанти и обучаващи в областта на сертификацията и проектния мениджмънт.
            </p>
        </div>
    </div>
</section>

<section class="map">
    <iframe width="100%" height="450" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=sofia%20%D1%86%D0%B0%D1%80%20%D0%B1%D0%BE%D1%80%D0%B8%D1%81%203%20168+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        <a href="https://www.maps.ie/map-my-route/">Create route map</a>
    </iframe>
</section>
<section class="test">
    <div class="container py-4">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        Debitis nesciunt, pariatur dolorem nobis sint eaque ipsum asperiores distinctio accusamus reiciendis odio?
        Ratione eos nam qui id animi saepe sunt earum.
    </div>
</section>
@endsection