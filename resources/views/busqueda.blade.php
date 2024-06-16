@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')
<style>
    td,th{
      align-items: center;
      text-align: center;
    }
</style>
<form action="{{route('vehiculo.index')}}" method="POST">
		@csrf
        <div class="input-group-text mb-3">
            <input type="text" class="form-control" name="search" placeholder="Placa del vehículo">
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
      <td>{{$item->modelo}}</td>
      <td>{{$item->nombre}} {{$item->apellido}}</td>
      <td>
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
      <td>{{$item1->ingreso}} </td>
      <td>{{$item1->salida}}</td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
        <ion-icon name="alert-outline"></ion-icon>
        </button>
          <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Reparacion</th>
                        <th>monto</th>
                        <th>comentario</th>
                        <th>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>{{$item1->reparacion}}</td>
                      <td>{{$item1->monto}}$</td>
                      <td>{{$item1->comentario}}</td>
                      </tr>
                    </tbody>
                  </table>
                  <button type="button" class="btn"> <ion-icon name="create-outline"></ion-icon></button>
                </div>
              </div>
            </div>
          </div>
</td>
    </tr>
  @endforeach
  </tbody>
</table>
  @endif
@endsection




