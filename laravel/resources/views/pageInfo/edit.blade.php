@extends('layouts.category')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar información de la página
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
      <form method="post" action="{{ route('infos.update', $info->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="mision">Misión :</label>      
          <textarea rows = "10" cols = "180" name="mision" data-validation="required" class="form-control">
            {{ $info->mision }}
          </textarea>            
        </div>
        <div class="form-group">
          <label for="vision">Visión :</label>
          <textarea rows = "10" cols = "180" name="vision" data-validation="required" class="form-control">
            {{ $info->vision }}
          </textarea>
        </div>
        <div class="form-group">
          <label for="whoarewe">¿Quiénes somos? :</label>
          <textarea rows = "10" cols = "180" name="whoarewe" data-validation="required" class="form-control">
            {{ $info->whoarewe }}
          </textarea>
        </div>
        <div class="form-group">
          <label for="historical_review">Reseña Histórica :</label>
          <textarea rows = "10" cols = "180" name="historical_review" data-validation="required" class="form-control">
            {{ $info->historical_review }}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  </div>
</div>
@endsection
