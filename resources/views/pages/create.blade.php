@extends('layouts.admin')

@section('content')

<form method="POST" action="{{ route('pages.store') }}">
    @csrf
  <div class="form-group">
    <label for="title">Заглавие</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Заглавие" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" name="slug" class="form-control" id="slug" aria-describedby="slugHelp" placeholder="Slug" value="{{ old('slug') }}">
    <small id="slugHelp" class="form-text text-muted">Трябва да съдържа само думи на латиница разделени с " - ".</small>
  </div>
  <div class="form-group">
    <label for="priority">Приоритет</label>
    <input type="number" name="priority" class="form-control" id="priority" value="{{ old('priority') }}">
  </div>
  <div class="form-group">
    <label for="body">Съдържание</label>
    <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
  </div>
  <div class="text-right">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    
@endsection
