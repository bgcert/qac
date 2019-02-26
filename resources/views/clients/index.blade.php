@extends('layouts.admin')

@section('content')

    <h3>Клиенти</h3>

    <div class="text-right">
        <a href="{{ route('admin.clients.create') }}" class="btn btn-link">Добави</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Лого</th>
                <th scope="col">Фирма</th>
                <th scope="col">Приоритет</th>
                <th scope="col">Визуализирана</th>
                <th scope="col">Инструменти</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>
                        <img src="{{ $client->logo }}" alt="{{ $client->name }}" width="75">
                    </td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->priority }}</td>
                    <td>{{ $client->visible }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-warning btn-outline">edit</a>
                            <a href="{{ route('admin.clients.destroy', $client->id) }}" class="btn btn-danger">delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection