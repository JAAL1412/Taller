@extends('Layout/plantilla2')
@section('titulo', 'Formularios')
@section('contenido')
<div class="row">
    <div class="col-md-10 form1" style="margin: auto;">
        
    <form action="{{route('vehiculo.add')}}" class="form" method="post">
    @csrf 
        <h3 class="title">Agregar información del vehiculo </h3>
        <br>
        <label class="form-label">Dueño </label>
        <select class="form-select form-control" name="dueño">
            <option selected>ingresar dueño</option>
            @foreach($dueños as $item)
            <option value="{{$item->id}}">{{$item->nombre}}{{$item->apellido}}</option>
            @endforeach
            </select>
            <a href="{{route('Cliente.index')}}" class="btn">¿Nuevo Cliente?</a>
            <br>
          <label class="form-label" name="placa">Placa</label>
          <input type="text" class="form-control" placeholder="Insertar placa" name="placa" required />
          <br>
          <label class="form-label">Modelo</label>
          <input type="text" class="form-control" placeholder="Insertar Modelo" name="modelo" required />
          <br>
          <label class="form-label">Año de fabricacion</label>
          <input type="text" class="form-control" placeholder="Insertar fecha usando formato AAAA-MM-DD" name= "fecha_fabri"required />
          <br>
          <label class="form-label">País</label>
          <input type="text" class="form-control" placeholder="Insertar pais" name="pais" required />
          <br>
          <label class="form-label">Color </label>
          <input type="text" class="form-control" placeholder="Insertar Color" name="color" required />
          <br>
            <br>
          <button class="btn" type="submit" value=0 name="bt" style="height: 50px; border:solid #2c0c00 2px; font-size:5mm;" >Agregar</button>   
      </form>
</div>
</div>






















@endsection