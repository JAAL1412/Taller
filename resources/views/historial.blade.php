@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')
<style>
    td, th {
   border-left: 1mm solid #ffc107;
   text-align: center;
   background-color: black;
}
    tr{
    border-top-right-radius:5% ;
    border-top-left-radius: 5%;
    border-left: black;
    }
</style>
<table>
        <thead>
          <tr style="border-bottom: 2mm solid #ffc107;">
            <th style="border-left:1mm solid black;">ID</th>
            <th>Placa</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Trabajo Realizado</th>
            <th>Accion</th>
        
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="border-left:1mm solid black;">1</td>
            <td>25J6K9</td>
            <td>9:00AM</td>
            <td>6:00PM</td>
            <td>Se le realizaron arreglos al motor</td>
            <td><button class="button"><ion-icon name="create-outline"></ion-icon></button>
              <button class="button"> <ion-icon name="trash-outline"></ion-icon></td></button>
           </tr>
          </tr>

@endsection