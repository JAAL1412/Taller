@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')
<table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Trabajo Realizado</th>
            <th>Accion</th>
        
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>25J6K9</td>
            <td>9:00AM</td>
            <td>6:00PM</td>
            <td>Se le realizaron arreglos al motor</td>
            <td><button class="button"><ion-icon name="create-outline"></ion-icon></button>
              <button class="button"> <ion-icon name="trash-outline"></ion-icon></td></button>
           </tr>
          </tr>

@endsection