@extends('layouts.category')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Información de la página
  </div>
  <div class="card-body">
      <div class="form-group">
          <label for="id">ID de la categoría:</label>
          <input type="text" class="form-control" name="id" value="{{$infos->id}}" readonly/>
      </div>
      <div class="form-group">
          <label for="mision">Misión:</label>
          <br>
          <textarea rows = "10" cols = "180" name="mision" readonly>
            {{$infos->mision}}
          </textarea>
      </div>
      <div class="form-group">
          <label for="vision">Visión:</label>
          <textarea rows = "10" cols = "180" name="vision" readonly>
            {{$infos->vision}}
          </textarea>
      </div>
      <div class="form-group">
          <label for="whoarewe">¿Quiénes Somos?</label>
          <textarea rows = "10" cols = "180" name="whoarewe" readonly>
            {{$infos->whoarewe}}
          </textarea>
      </div>
      <div class="form-group">
          <label for="historical_review">Reseña Histórica:</label>
          <textarea rows = "10" cols = "180" name="historical_review" readonly>
            {{$infos->historical_review}}
          </textarea>
      </div>
  </div>
</div>
@endsection