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
            <td>Nombre de la Categoria</td>
            <td colspan="2">Acciones</td>
          </tr>
      </thead>
      <tbody>
          @foreach($categories as $category)
          <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td><a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">Editar</a></td>
              <td>
                  <form action="{{ route('categories.destroy', $category->id)}}" method="post">
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
