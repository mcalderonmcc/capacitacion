@extends('layouts.app')
@section('content')
<div class="container">

<div class="card">
  <div class="card-header bg-primary text-white">
  <h5>  Lista de Categorias</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title">Tratamientos especiales para títulos</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{route('categories.create')}}" class="btn btn-primary">AGREGAR</a>
    
    <hr/>

    <table class="table">
     <tr>
       <th>ID</th>
       <th>NOMBRE</th>
       <th>SLUG</th>
       <th>ACCIONES</th>
     </tr>
     @forelse($categories as $category)
     <tr>
       <td>{{$category->id}}</td>
       <td>{{$category->name}}</td>
       <td>{{$category->slug}}</td>
       <td></td>
     </tr>
     @empty
       <tr><td colspan="4">Sin registros </td></tr>
     @endforelse
     </table>
     {!! $categories->render() !!}
  </div>
 </div>
</div>
@endsection