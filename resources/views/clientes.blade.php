@extends('Layout/plantilla2')
@section('titulo', 'Formularios')
@section('contenido')

<h1 class="title">Clientes</h1>
<form action="{{route('Cliente.add')}}" method="POST">
		@csrf
     <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Modal">
      Añadir Cliente
    </button>

<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="title">Formulario</h3>
          <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div> 
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control" placeholder="Insertar nombre" name="nombre" required />
          <br>
          <label class="form-label">Apellido</label>
          <input type="text" class="form-control" placeholder="Insertar apellido" name="apellido" required />
          <br>
          <label class="form-label">Documento</label>
          <input type="text" class="form-control" placeholder="Insertar Documento" name= "documento"required />
          <br>
          <label class="form-label">Direccion(Opcional)</label>
          <input type="text" class="form-control" placeholder="Insertar direccion" name="direccion"/>
          <br>
          <label class="form-label">Telefono(Opcional)</label>
          <input type="text" class="form-control" placeholder="Insertar telefono" name="telefono" />
          <br>
          <label class="form-label">Correo(Opcional)</label>
          <input type="text" class="form-control" placeholder="Insertar correo" name="correo" />
          <br>
          <label class="form-label">Comentario</label>
          <input type="text" class="form-control" placeholder="Insertar comentario" name="comentario" required />
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
            <th style="border-left: transparent !important; padding: 0%; width:40px" class="t">ID</th>
            <th class="t">Nombre</th>
            <th class="t">Documento</th>
            <th class="t">Direccion</th>
            <th class="t">Telefono</th>
            <th class="t">Correo</th>
            <th class="t">Comentario</th>
            <th class="t">Accion</th>
        
          </tr>
        </thead>
        <tbody>
          @foreach($cliente as $item)
          <tr>
            <td style="border-left:transparent !important;" class="t">{{$item->id}}</td>
            <td class="t">{{$item->nombre}} {{$item->apellido}}</td>
            <td class="t">{{$item->documento}}</td>
            <td class="t">{{$item->direccion}}</td>
            <td class="t">{{$item->telefono}}</td>
            <td class="t">{{$item->correo}}</td>
            <td class="t">{{$item->comentario}}</td>
            <td class="t">
              <button class="btn" style="background-color: red;" data-bs-toggle="modal" data-bs-target="#{{$item->id}}1">
              <ion-icon name="create-outline">
              </button>
            <form action="{{route('Cliente.up')}}" method="POST">
                @csrf
              <div class="modal fade"  id="{{$item->id}}1" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" >
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="{{$item->id}}Label">
                        Editar
                      </h1>
                      <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div>
                      <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" value="{{$item->nombre}}" name="nombre" required />
                        <br>
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control" value="{{$item->apellido}}" name="apellido" required />
                        <br>
                        <label class="form-label">Documento</label>
                        <input type="text" class="form-control" value="{{$item->documento}}" name= "documento"required />
                        <br>
                        <label class="form-label">Direccion</label>
                        <input type="text" class="form-control" value="{{$item->direccion}}" name="direccion"/>
                        <br>
                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" value="{{$item->telefono}}" name="telefono"/>
                        <br>
                        <label class="form-label">Correo</label>
                        <input type="text" class="form-control" value="{{$item->correo}}" name="correo"/>
                        <br>
                        <label class="form-label">Comentario</label>
                        <input type="text" class="form-control" value="{{$item->comentario}}" name="comentario" required />
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn col col-md-4" type="submit"  name="id"value="{{$item->id}}">Editar</button>  
                    </div>
                  </div>
                </div>
              </div>
                        </form>
           </tr>
            
           @endforeach
          </tbody>




















@endsection