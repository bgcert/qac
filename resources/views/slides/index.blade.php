@extends('layouts.admin')

@section('content')

    <h3>Слайдове</h3>

    <div class="text-right">
        <a href="{{ route('admin.slides.create') }}" class="btn btn-link">Добави</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Корица</th>
                <th scope="col">Заглавие</th>
                <th scope="col">Приоритет</th>
                <th scope="col">Визуализирана</th>
                <th scope="col">Инструменти</th>
            </tr>
        </thead>
        <tbody>
            @foreach($slides as $slide)
                <tr>
                    <th scope="row">{{ $slide->id }}</th>
                    <td>
                        <img src="/img/{{ $slide->cover }}" alt="{{ $slide->title }}" width="75">
                    </td>
                    <td>{{ $slide->title }}</td>
                    <td>{{ $slide->priority }}</td>
                    <td><i data-feather="{{ ($slide->visible) ? 'check-circle' : 'x-circle' }}"></i></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.slides.edit', $slide->id) }}" class="btn btn-warning btn-outline">edit</a>
                            <a href="{{ route('admin.slides.destroy', $slide->id) }}" class="btn btn-danger">delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection