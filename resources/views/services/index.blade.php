@extends('layouts.admin')

@section('content')

    <h3>Услуги</h3>

    <div class="text-right">
        <a href="{{ route('admin.services.create') }}" class="btn btn-link">Добави</a>
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
            @foreach($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->priority }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning btn-outline">edit</a>
                            <a href="{{ route('admin.services.destroy', $service->id) }}" class="btn btn-danger">delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection