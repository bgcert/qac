@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Клиенти</h3>

        <div class="row">

            @foreach($clients as $client)
                <div class="col-2 my-3">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <img src="{{ $client->logo }}" class="card-img-top" alt="{{ $client->name }}" title="{{ $client->name }}">

                    </div>
                    <!-- Card -->
                </div>
            @endforeach
            
        </div>
    </div>

@endsection