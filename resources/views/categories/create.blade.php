@extends('layouts.app')
@section('content')

<div class="container">

<div class="card">
  <div class="card-header bg-danger text-white">
    Ingreso
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{route('categories.index')}}" class="btn btn-primary">REGRESAR</a>
    {!! Form::open() !!}
      {!! Field::text('name',null,['label'->'Nombres','palceholder'=>'Ingrese el nombre']) !!}
      {!! Field::text('description',null,['label'->'Descripcion','palceholder'=>'Ingrese la descripcion']) !!}


    {!! Form::close() !!}


  </div>
</div>
</div>
@endsection