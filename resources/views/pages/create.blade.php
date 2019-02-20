@extends('layouts.admin')

@section('content')

<form>
  <div class="form-group">
    <label for="title">Заглавие</label>
    <input type="text" class="form-control" id="title" placeholder="Заглавие">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" aria-describedby="slugHelp" placeholder="Slug">
    <small id="slugHelp" class="form-text text-muted">Трябва да съдържа само думи на латиница разделени с " - ".</small>
  </div>
  <div class="form-group">
    <label for="body">Съдържание</label>
    <textarea name="text-area" id="body" cols="30" rows="10"></textarea>
  </div>
  <div class="text-right">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    
@endsection
