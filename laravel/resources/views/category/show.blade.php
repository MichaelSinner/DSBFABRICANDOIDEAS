@extends('layouts.category')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ver Categoría
  </div>
  <div class="card-body">
      <div class="form-group">
          @csrf
          <label for="id">ID de la categoría:</label>
          <input type="text" class="form-control" name="id" value="{{$categories->id}}" readonly/>
      </div>
      <div class="form-group">
          <label for="name">Nombre de la categoría</label>
          <input type="text" class="form-control" name="name" value="{{$categories->name}}" readonly/>
      </div>
  </div>
</div>
@endsection