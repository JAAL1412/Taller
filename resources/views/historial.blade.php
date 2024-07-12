@extends('Layout/plantilla2')
@section('titulo', 'historial')
@section('contenido')
<!-- Formulario para agregar entrada-->
<form action="{{route('historial.store')}}" method="POST">
		@csrf
     <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal">
      Añadir Entrada
    </button>

<!-- Modal con el formulario de entrada-->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 title" id="ModalLabel">Dato sobre el ingreso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
        <select class="form-select form-control" name="vehiculo">
      <option selected>Vehiculos</option>
      @foreach($vehiculos as $vehiculos)
      <option value="{{$vehiculos->placa}}">{{$vehiculos->placa}}-{{$vehiculos->modelo}}</option>
      @endforeach
    </select>
    <br>
    <label class="form-label">Comentario</label>
            <input type="text" class="form-control" name="comentario" placeholder="comentario">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn col col-md-4" type="submit">Agregar</button>  
        <a href="{{route('vehiculo.form')}}" class="btn"> Nuveo vehiculo</a>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Tabla del historial-->
<table>
        <thead>
          <tr style="border-bottom: 2mm solid #ffffff !important;">
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

          <!-- For para llenar tabla -->
          @foreach($historial as $item)
         
          <tr>
            <td style="border-left:transparent !important;" class="t">{{$item->id}}</td>

            <!-- Link de busqueda por placa-->
            <td class="t"><a class="aplaca" href="{{route('vehiculo.busqueda', $item->placav )}}" method="GET">{{$item->placav}}</a>
              </td>
            <td class="t">{{$item->ingreso}}</td>
            <td class="t">{{$item->salida}}</td>
            <td class="t">{{$item->reparacion}}</td>
            <td class="t">{{$item->comenta1}} <br> </td>
            <td class="t">
            
            <!-- Boton para añadir salida-->
            <button class="btn" style="background-color: red;" data-bs-toggle="modal" data-bs-target="#{{$item->id}}2">
                <ion-icon name="log-out-outline"></ion-icon>
              </button>

            <!-- Modal con formulario para añadir salida-->
<form action="{{route('historial.salida')}}" method="POST">
              @csrf
              <div class="modal fade"  id="{{$item->id}}2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" style="background-color: black;">
      <div class="modal-header" style="border-bottom: .5mm solid #ffc107;">
        <h1 class="modal-title fs-5" id="{{$item->id}}2Label">
          Añadir salida
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
        <label class="form-label">Reparación</label><br>
            <input type="text" class="form-control" name="reparacion" value="{{$item->reparacion}}" required>
            <br>
            <label class="form-label">Monto</label><br>
            <input type="number" class="form-control" name="monto" value="{{$item->monto}}" required>
            <br>
            <label class="form-label">Concepto</label><br>
            <input type="text" name="concepto" class="form-control" value="{{$item->concepto}}" required>
            <br>
            <label class="form-label">Comentario</label><br>        
            <input type="text" class="form-control" name="comenta" value="{{$item->comenta2}}" required>
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