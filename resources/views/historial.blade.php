@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')

<label class="form-label">Dueño </label>
<form action="{{route('historial.store')}}" method="POST">
		@csrf
    <select class="form-select form-control" name="vehiculo">
      <option selected>Vehiculos</option>
      @foreach($vehiculos as $vehiculos)
      <option value="{{$vehiculos->placa}}">{{$vehiculos->placa}}-{{$vehiculos->modelo}}</option>
      @endforeach
    </select>
     <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal">
      Añadir Entrada
    </button>

<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalLabel">Dato sobre el ingreso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
            <input type="text" class="form-control" name="comentario" placeholder="comentario">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn col col-md-4" type="submit">Agregar</button>  
      </div>
    </div>
  </div>
</div>
</form>



<table>
        <thead>
          <tr style="border-bottom: 2mm solid #ffc107 !important;">
            <th style="border-left: transparent !important;" class="t">ID</th>
            <th class="t">Placa</th>
            <th class="t">Entrada</th>
            <th class="t">Salida</th>
            <th class="t">Trabajo Realizado</th>
            <th class="t">comentario</th>
            <th class="t">Accion</th>
        
          </tr>
        </thead>
        <tbody>
          @foreach($historial as $item)
         
          <tr>
            <td style="border-left:transparent !important;" class="t">{{$item->id}}</td>
            <td class="t">{{$item->placav}}</td>
            <td class="t">{{$item->ingreso}}</td>
            <td class="t">{{$item->salida}}</td>
            <td class="t">{{$item->reparacion}}</td>
            <td class="t">{{$item->comenta1}} <br> <button class="btn"><ion-icon name="create-outline"></ion-icon></button></td>
            <td class="t">

         
              <button class="btn" style="background-color: red;" data-bs-toggle="modal" data-bs-target="#{{$item->id}}">
                <ion-icon name="log-out-outline"></ion-icon>
              </button>
              <form action="{{route('historial.salida')}}" method="POST">
              @csrf
              <div class="modal fade"  id="{{$item->id}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" style="background-color: black;">
      <div class="modal-header" style="border-bottom: .5mm solid #ffc107;">
        <h1 class="modal-title fs-5" id="{{$item->id}}Label">
          Ingrese Reparación realizada y  Monto cobrado
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
            <input type="text" class="form-control" name="reparacion" value="{{$item->reparacion}}">
            <br>
            <input type="text" class="form-control" name="monto" value="{{$item->monto}}">
            <br>
            <input type="text" name="concepto" class="form-control" value="{{$item->concepto}}">
            <br>
            <input type="text" class="form-control" name="comenta" value="{{$item->comenta2}}">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn col col-md-4" type="submit"  name="id"value="{{$item->id}}">Agregar</button>  
      </div>
    </div>
  </div>
</div>
          </form>
           </tr>
            
           @endforeach
          </tbody>

@endsection