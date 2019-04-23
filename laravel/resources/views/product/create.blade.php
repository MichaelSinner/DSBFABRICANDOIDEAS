@extends('layouts.category')

@section('title', 'DSB FABRICANDO IDEAS - Crear Producto')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Agregar Producto
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Nombre del producto:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="description">Descripción del producto:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
            <select name="category_id" id="category_id" required>
              <option selected disabled>Seleccione la categoría</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>  
          </div>

          <div class="form-group">
              @csrf
              <div class="input-group control-group increment" >
                <input type="file" name="imagename[]" class="form-control">
                <div class="input-group-btn"> 
                  <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Agregar Imagen</button>
                </div>
              </div>
              <div class="clone hide">
                <div class="control-group input-group" style="margin-top:10px">
                  <input type="file" name="imagename[]" class="form-control">
                  <div class="input-group-btn"> 
                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i>Remover Imagen</button>
                  </div>
                </div>
              </div>
          </div>

          <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
  </div>
</div>





