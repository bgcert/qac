@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $service->title }}</h1>
    <p>
        {{ $service->body }}
    </p>
</div>
@endsection
