@extends('layouts.app')

@section('content')
<section class="qac-page-header">
    <div class="text-center">
        <div class="h1">
            За нас
        </div>
    </div>
</section>

<section class="qac-about">
    <div class="d-flex justify-content-center">
        <div class="col-7">
            <div class="text-center">
                <div class="h1 title">
                    Подкрепа на бизнеса
                </div>
            </div>
            <P>
                <strong>От 1997 г. КЮ ЕЙ СИ ООД подкрепя бизнеса по пътя на успешната сертификация!</strong>
            </P>
            <p>
                Нашата цел е да съдействаме на компаниите да получат маркировка CE и успешно да продават продуктите си в Европа.
            </p>
            <p>
                Придобитите специфични знания и опит ни дават увереност в успеха на нашите клиенти.
            </p>
            <div class="text-center">
                <div class="h1 title">
                    Нашите ценности
                </div>
            </div>
            <p>Компетентност - Нашият опит е нашата сила</p>
            <p>Отговорност - Ние сме до Вас преди, по време и след сертифицирането</p>
            <p>Съпричастност - Ние осъзнаваме и защитаваме Вашите интереси</p>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="/#services" class="btn btn-lg btn-primary mr-3">Нашите услуги</a>
        <a href="/#services" class="btn btn-lg btn-outline-secondary">Контакти</a>
    </div>
</section>
@include('partials.inquiry')
@endsection