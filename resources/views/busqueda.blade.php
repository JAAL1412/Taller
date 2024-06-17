@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')

<form action="{{route('vehiculo.index')}}" method="POST">
		@csrf
        <div class="input-group-text mb-3">
            <input type="text" class="form-control" name="search" placeholder="Placa del vehículo">
            <button class="btn" type="sumbmit" name="bt" value=1>Buscar</button>
        </div>

		</form>
    @if($x)
  </section>
    <section class="container" style="background-color: transparent;">
  <table class="table">
  <thead>
  <tr style="border-bottom: 1mm solid #ffc107;">
      <th style="border-left: transparent !important;" class="t">ID</th>
      <th scope="col" class="t">Placa</th>
      <th scope="col" class="t">Color</th>
      <th scope="col"class="t">Modelo</th>
      <th scope="col" class="t">Dueño</th>
      <th scope="col" class="t">Acción</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $item)
    <tr style="border-left: transparent;">
      <td style="border-left: transparent !important;" class="t">{{$item->vid}}</td>
      <td class="t">{{$item->placa}}</td>
      <td class="t">{{$item->color}}</td>
      <td class="t">{{$item->modelo}}</td>
      <td class="t">{{$item->nombre}} {{$item->apellido}}</td>
      <td class="t">
      <form action="{{route('vehiculo.edit', $item->vid)}}" method="GET">
			<button class="btn btn-warning btn-sm">
      <ion-icon name="create-outline"></ion-icon>
			</button>
	  </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

<table class="table">
  <h2 class="title" style="border-radius: 10px; background-color:black">
    Historial
  </h2>
   <thead>
    <tr style="border-bottom: 1mm solid #ffc107;">
    
      <th scope="col" style="border-left: transparent !important;" class="t">Id</th>
      <th scope="col" class="t">Ingreso</th>
      <th scope="col" class="t">Salida</th>
      <th scope="col" class="t">Reparacion</th>
      <th scope="col" class="t">monto</th>
      <th scope="col" class="t">Comentario</th>
      <th scope="col" class="t">Acción</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($datoh as $item1)
    <tr>
      <td style="border-left: transparent !important;" class="t">{{$item1->id}}</td>
      <td class="t">{{$item1->ingreso}} </td>
      <td class="t">{{$item1->salida}}</td>
      <td class="t">{{$item1->reparacion}}</td>
      <td class="t">{{$item1->monto}}</td>
      <td class="t">{{$item1->comentario}}</td>
      <td class="t"><form action="{{route('vehiculo.edit', $item->vid)}}" method="GET">
			<button class="btn btn-warning btn-sm">
      <ion-icon name="create-outline"></ion-icon>
			</button>
	  </form></td>
    </tr>
  @endforeach
  </tbody>
</table>
  @endif
@endsection




