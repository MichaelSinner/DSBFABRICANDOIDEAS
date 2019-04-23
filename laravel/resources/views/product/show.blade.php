@extends('layouts.category')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ver Producto
  </div>
  <div class="card-body">
      <div class="form-group">
          @csrf
          <label for="id">ID del producto:</label>
          <input type="text" class="form-control" name="id" value="{{$product->id}}" readonly/>
      </div>
      <div class="form-group">
          <label for="name">Nombre del producto:</label>
          <input type="text" class="form-control" name="name" value="{{$product->name}}" readonly/>
      </div>
      <div class="form-group">
          <label for="description">Descripción del producto:</label>
          <input type="text" class="form-control" name="description" value="{{$product->description}}" readonly/>
      </div>
  </div>
</div>
@endsection