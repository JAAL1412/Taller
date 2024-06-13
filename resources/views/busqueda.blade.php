@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')
<style>
    

 
</style>
<form action="{{route('vehiculo.index')}}" method="POST">
		@csrf
        <div class="input-group-text mb-3">
            <input type="text" class="form-control" name="search" placeholder="Placa del vehículo" >
            <button class="btn" type="sumbmit" name="bt" value=1>Buscar</button>
        </div>

		</form>
    @if($x)
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Placa</th>
      <th scope="col">Color</th>
      <th scope="col">Modelo</th>
      <th scope="col">Dueño</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $item)
    <tr>
      <td>{{$item->vid}}</td>
      <td>{{$item->placa}}</td>
      <td>{{$item->color}}</td>
      <td>{{$item->moddelo}}</td>
      <td>{{$item->nombre}}</td>
    </tr>
  @endforeach
  </tbody>
</table>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ingreso</th>
      <th scope="col">Salida</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <h2 class="title">
    Historial
  </h2>
  <tbody>
  @foreach($datoh as $item1)
    <tr>
      <td>{{$item1->id}}</td>
      <td>{{$item1->ingreso}} hora: {{$item1->hentrada}}</td>
      <td>{{$item1->salida}} hora: {{$item1->hsalida}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
  @endif
@endsection