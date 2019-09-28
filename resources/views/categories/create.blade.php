@extends('layouts.app')
@section('content')
<div class="container">

<div class="card">
  <div class="card-header bg-primary text-white">
  <h5> Ingreso de Categorias</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title">Tratamientos especiales para títulos</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{route('categories.index')}}" class="btn btn-primary">REGRESAR</a>
    {!! Form::open() !!}
    {!! Field::text('name',null,['label'=>'Nombre','placeholder'=>'Ingrese el nombre']) !!}
    {!! Field::text('description',null,['label'=>'Descripcion','placeholder'=>'Ingrese la descripción']) !!}
    {!! Form::close() !!}
  </div>
 </div>
</div>
@endsection