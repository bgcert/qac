@extends('layouts.admin')

@section('content')

<form method="POST" action="{{ route('pages.update', $page->id) }}">
    @method('PATCH')
    @csrf
  <div class="form-group">
    <label for="title">Заглавие</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Заглавие" value="{{ $page->title }}">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" name="slug" class="form-control" id="slug" aria-describedby="slugHelp" placeholder="Slug" value="{{ $page->slug }}">
    <small id="slugHelp" class="form-text text-muted">Трябва да съдържа само думи на латиница разделени с " - ".</small>
  </div>
  <div class="form-group">
    <label for="priority">Приоритет</label>
    <input type="number" name="priority" class="form-control" id="priority" value="{{ $page->priority }}">
  </div>
  <div class="form-group">
    <label for="body">Съдържание</label>
    <textarea name="body" id="body" cols="30" rows="10">{{ $page->body }}</textarea>
  </div>
  <div class="text-right">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
    
@endsection
