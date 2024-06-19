@extends('Layout/plantilla2')
@section('titulo', 'Formularios')
@section('contenido')

style>
.   
<label class="form-label">Dueño </label>
<form action="{{route('Cliente.add')}}" method="POST">
		@csrf
     <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal">
      Añadir Cliente
    </button>

<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <label class="form-label" ">Nombre</label>
          <input type="text" class="form-control" placeholder="Insertar nombre" name="nombre" required />
          <br>
          <label class="form-label">Apellido</label>
          <input type="text" class="form-control" placeholder="Insertar apellido" name="apellido" required />
          <br>
          <label class="form-label">Documento</label>
          <input type="text" class="form-control" placeholder="Insertar Documento" name= "documento"required />
          <br>
          <label class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control" placeholder="Insertar fecha de nacimiento" name="fecha_nacimiento" required />
          <br>
          <label class="form-label">Direccion </label>
          <input type="text" class="form-control" placeholder="Insertar direccion" name="direccion" required />
          <br>
          <label class="form-label">Telefono </label>
          <input type="text" class="form-control" placeholder="Insertar telefono" name="telefono" required />
          <br>
          <label class="form-label">Correo </label>
          <input type="text" class="form-control" placeholder="Insertar correo" name="correo" required />
          <br>
          <label class="form-label">Comentario </label>
          <input type="text" class="form-control" placeholder="Insertar comentario" name="comentario" required />
          <br>
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
          @foreach($cliente as $item)
         
          <tr>
            <td style="border-left:transparent !important;" class="t">{{$item->id}}</td>
            <td class="t">{{$item->placav}}</td>
            <td class="t">{{$item->ingreso}}</td>
            <td class="t">{{$item->salida}}</td>
            <td class="t">{{$item->reparacion}}</td>
            <td class="t">{{$item->comentario}} <br> <button class="btn"><ion-icon name="create-outline"></ion-icon></button></td>
            <td class="t">

         
              <button class="btn" style="background-color: red;" data-bs-toggle="modal" data-bs-target="#{{$item->id}}">
                <ion-icon name="log-out-outline"></ion-icon>
              </button>
              <form action="{{route('Cliente.salida')}}" method="POST">
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
            <input type="text" class="form-control" name="reparacion" placeholder="Reparación">
            <br>
            <input type="text" class="form-control" name="monto" placeholder="Monto">
            <br>
            <input type="text" name="concepto" class="form-control" placeholder="Concepto">
            <br>
            <input type="text" class="form-control" name="comenta" placeholder="Comentario">
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