@extends('layouts.app')

@section('content')

<div class="container">
    <div class="segment">
        <div class="segment__title">
            {{ $service->title }}
        </div>
        {!! $service->body !!}
        test
    </div>
</div>
    
@endsection
