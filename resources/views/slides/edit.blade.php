@extends('layouts.admin')

@section('content')

<form method="POST" action="{{ route('admin.slides.update', $slide->id) }}">
    @method('PATCH')
    @csrf
  <div class="form-group">
    <label for="title">Заглавие</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Заглавие" value="{{ $slide->title }}">
  </div>
  <div class="form-group">
    <label for="title">Подзаглавие</label>
    <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Подзаглавие" value="{{ $slide->subtitle }}">
  </div>

  <div class="form-group">
        <label for="action">Връзка към адрес</label>
        <input type="text" name="action" class="form-control" id="action" placeholder="Адрес" value="{{ $slide->action }}">
    </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="visible" id="visible" {{ ($slide->visible) ? 'checked' : '' }}>
      <label class="form-check-label" for="visible">
        Визуализиране
      </label>
    </div>
  </div>

  <div class="form-group">
    <label for="priority">Приоритет</label>
    <input type="number" name="priority" class="form-control" id="priority" value="{{ $slide->priority }}">
  </div>

  <div class="text-right">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
    
@endsection
