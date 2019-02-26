@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Клиент</h1>
    @foreach($clients as $client)
        <li>{{ $client->name }}</li>
    @endforeach
</div>
@endsection
