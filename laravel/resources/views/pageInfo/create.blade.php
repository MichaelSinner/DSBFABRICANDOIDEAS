@extends('layouts.category')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Agregar Categoria
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
      <form method="post" action="{{ route('infos.store') }}">
          @csrf
          <div class="form-group">
              <label for="name">Misión:</label>
              <input type="text" class="form-control" name="mision"/>
          </div>
          <div class="form-group">
              <label for="name">Visión:</label>
              <input type="text" class="form-control" name="vision"/>
          </div>
          <div class="form-group">
              <label for="name">¿Quiénes somos?:</label>
              <input type="text" class="form-control" name="whoarewe"/>
          </div>
          <div class="form-group">
              <label for="name">Reseña Histórica:</label>
              <input type="text" class="form-control" name="historical_review"/>
          </div>
          <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
  </div>
</div>
@endsection
