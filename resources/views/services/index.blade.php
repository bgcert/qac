@extends('layouts.admin')

@section('content')

    <div class="container">
        <h3>Услуги</h3>

        <div class="row">

            @foreach($services as $service)
                <li>
                    <a href="/{{ $service->slug }}">{{ $service->title }}</a>
                </li>
            @endforeach
            
        </div>
    </div>

@endsection