@extends('layout.app')
@section('content')
<div class="container" >
    <div class="row ">
        <div class="">
        <h1 class="bg-success mg-50  text-center text-light">
            Buscador De Animales  <img src="{{url('upload/portada.png')}}" width="200" height="100" ></h1>
        </div>
    </div><br><br>
    <div class="row">
        <input type="search" class="buscador form-control" id="buscador">
        @foreach ($buscadores as $buscador )
        <div class="col-3"><br>
            <img src="{{url('upload/'.$buscador->images->image)}}" width="200" height="150">
            <p>Nombre: {{$buscador->name}}</p>
            <p>Descripcion: {{$buscador->description}}</p>
            <p>Tipo: {{$buscador->type}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
