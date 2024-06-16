@extends('Layout/plantilla2')
@section('titulo', 'Formularios')
@section('contenido')

style>
   
</style><br>
<div class="row">
    <div class="col-md-10 form1" style="margin: auto;">
        
    <form action="{{route('Cliente.add')}}" class="form" method="post">
    @csrf 
        <h3 class="title">Agregar nuevo cliente </h3>
        <br>
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
        <br>
          <button class="btn" type="submit" value=0 name="bt" style="height: 50px; border:solid #2c0c00 2px; font-size:5mm;" >Agregar</button>   
      </form>
</div>
</div>






















@endsection