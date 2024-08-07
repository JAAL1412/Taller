@extends('Layout/plantilla2')
@section('titulo', 'Editar')
@section('contenido')
<div class="row">
    <div class="col-md-10 form1" style="margin: auto;">

    <!-- Formulario para Editar vehiculos-->
<form action="{{route('vehiculo.up', $datos->id)}}" class="form" method="post">
    @csrf 
        <h3 class="title">Editar información del vehiculo </h3>
        <br>
        <label class="form-label">Dueño</label>
        <br>
        <select class="form-select form-control" name="dueño">
            <option selected value="{{$datos->dueño}}">{{$dueño->nombre}}{{$dueño->apellido}}</option>
            @foreach($dueños as $item)
            <option value="{{$item->id}}" >{{$item->nombre}}{{$item->apellido}}</option>
            @endforeach
            </select>
            <br>
          <label class="form-label" name="placa">Placa</label>
          <input type="text" class="form-control" value="{{$datos->placa}}" name="placa" required />
          <br>
          <label class="form-label" name="año">Año de frabricacion</label>
          <input type="text" class="form-control" value="{{$datos->fecha_fabri}}" name="año" required />
          <br>
          <label class="form-label" name="color">Color </label>
          <input type="text" class="form-control" value="{{$datos->color}}" name="color" required />
          <br>
          <label class="form-label" name="modelo">Modelo</label>
          <input type="text" class="form-control" value="{{$datos->modelo}}" name= "modelo"required />
          <br>
          <label class="form-label" name="pais">País</label>
          <input type="text" class="form-control" value="{{$datos->pais}}" name="pais" required />
          <br>
          <button class="btn" type="submit" style="height: 50px; border:solid #2c0c00 2px; font-size:5mm;" >Editar</button>
            
      </form>
</div>
</div>

@endsection