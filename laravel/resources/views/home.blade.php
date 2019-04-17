@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menú</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    
                    <br>
                    <br>
                    <br>

                    <div class="card-body">
                        <a class="btn btn-primary" href="">Categorias</a>
                        <a class="btn btn-primary" href="">Productos</a>
                        <a class="btn btn-primary" href="">Información Página</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
