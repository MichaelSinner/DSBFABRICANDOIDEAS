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
            <td>Misión</td>
            <td>Visión</td>
            <td>¿Quiénes somos?</td>
            <td>Reseña Histórica</td>
            <td colspan="2">Acciones</td>
          </tr>
      </thead>
      <tbody>
          @foreach($infos as $info)
          <tr>
              <td>{{$info->mision}}</td>
              <td>{{$info->vision}}</td>
              <td>{{$info->whoarewe}}</td>
              <td>{{$info->historical_review}}</td>
              <td><a href="{{ route('infos.edit',$info->id)}}" class="btn btn-primary">Editar</a></td>
              <td>
                  <form action="{{ route('infos.destroy', $info->id)}}" method="post">
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
