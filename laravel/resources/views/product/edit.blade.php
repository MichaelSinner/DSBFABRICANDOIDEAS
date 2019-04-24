@extends('layouts.category')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Categoria
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
      <form method="post" action="{{ route('products.update', $product->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nombre del producto:</label>
          <input type="text" class="form-control" name="name" value={{ $product->name }} />
        </div>

        <div class="form-group">
          <label for="description">Descripción:</label>
          <input type="text" class="form-control" name="description" value={{ $product->description }} />
        </div>

        <div class="form-group">
          <label for="category_id">Categoría del producto:</label>
          <select name="category_id" id="category_id" required>
              <option selected disabled>Seleccione la categoría:</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>  
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  </div>
</div>
@endsection
