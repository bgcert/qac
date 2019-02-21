@extends('layouts.admin')

@section('content')
    <h3>Страници</h3>

    <div class="text-right">
        <a href="{{ route('pages.create') }}" class="btn btn-link">Добави</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
                <th scope="col">Приоритет</th>
                <th scope="col">Инструменти</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
                <tr>
                    <th scope="row">{{ $page->id }}</th>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->priority }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning btn-outline">edit</a>
                            <a href="{{ route('pages.destroy', $page->id) }}" class="btn btn-danger">delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection