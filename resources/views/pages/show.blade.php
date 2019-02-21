@extends('layouts.app')

@section('content')

<div class="container">
    <div class="segment">
        <div class="segment__title">
            {{ $page->title }}
        </div>
        {!! $page->body !!}
    </div>
</div>
    
@endsection
