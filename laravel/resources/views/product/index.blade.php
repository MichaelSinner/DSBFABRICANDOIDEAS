@extends('layouts.category')

@section('content')
  <style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripción</td>
            <td colspan="2">Acciones</td>
          </tr>
      </thead>
      <tbody>
          @foreach($products as $product)
          <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->description}}</td>
              <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Editar</a></td>
              <td>
                  <form action="{{ route('products.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  <div>
@endsection 
