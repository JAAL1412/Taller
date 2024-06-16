@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')
<style>
    .container{
      background-color: transparent;
    }
</style>
<table>
        <thead>
          <tr style="border-bottom: 2mm solid #ffc107 !important;">
            <th style="border-left: transparent !important;" class="t">ID</th>
            <th class="t">$historial->placa</th>
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
            <td class="t">{{$item->comentario}} <br> <button class="btn"><ion-icon name="create-outline"></ion-icon></button></td>
            <td class="t">
              <button class="btn"><ion-icon name="create-outline"></ion-icon></button>
           </tr>
            
           @endforeach
          </tbody>

@endsection