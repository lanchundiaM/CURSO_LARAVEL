@extends('layouts.app')
@section('content')

<div class="container">

<div class="card">
  <div class="card-header bg-primary text-white">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{route('categories.create')}}" class="btn btn-primary">AGREGAR</a>
 <hr/>
 <table class="table table-light">
         <tr>
             <th>ID</th>
             <th>NOMBRES</th>
             <th>SLUG</th>
             <th>ACCIONES</th>

         </tr>
     </thead>
     <tbody>
     @forelse($categories as $category)
         <tr>
           
            <th>{{$category->id}}</th>
             <th>{{$category->name}}</th>
             <th>{{$category->slug}}</th>
             <th>ACCIONES</th>


         </tr>
         @empty
         <tr>
         <th colspan="4" >no hay registros</th>
         </tr>
         @endforelse
     </tbody>
 </table>



  </div>
</div>
</div>
@endsection