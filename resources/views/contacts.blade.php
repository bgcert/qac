@extends('layouts.app')

@section('content')
<section class="hero contacts">
    <h1>Свържете се с нас</h1>
</section>

<section class="segment info">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <i>test</i>
                <h3>Адрес</h3>
                <p>София, бул. Цар Борис III 168</p>
            </div>
            <div class="col-4">
                <i>test</i>
                <h3>E-mail</h3>
                <p>office@qac-bg.com</p>
            </div>
            <div class="col-4">
                <i>test</i>
                <h3>Телефони</h3>
                <p>+359 40 32 400</p>
            </div>
        </div>
    </div>
</section>

<div class="segment high">

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div style="width: 100%">
                    <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=sofia%20%D1%86%D0%B0%D1%80%20%D0%B1%D0%BE%D1%80%D0%B8%D1%81%203%20168+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        <a href="https://www.maps.ie/map-my-route/">Create route map</a>
                    </iframe>
                </div>
            </div>
            <div class="col-6">
                <h3>Изпратете запитване</h3>
                <form class="mt-4">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Име</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Фирма</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Телефон</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputAddress2">Относно</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Изпрати</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 