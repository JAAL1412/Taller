@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')

<form action="{{route('vehiculo.index')}}" method="POST">
		@csrf
        <div class="input-group-text mb-3">
            <input type="text" class="form-control" name="search" placeholder="Placa del vehículo">
            <button class="btn" type="sumbmit" name="bt" value=1>Buscar</button>
        </div>

		</form>

  </section>    
  @if($x)
    <section class="container" style="background-color: transparent;">
        <table class="table">
            <thead>
                <tr style="border-bottom: 1mm solid #ffc107;">
                    <th style="border-left: transparent !important;" class="t">ID</th>
                    <th scope="col" class="t">Placa</th>
                    <th scope="col" class="t">Color</th>
                    <th scope="col" class="t">Modelo</th>
                    <th scope="col" class="t">Dueño</th>
                    <th scope="col" class="t">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $item)
                    <tr style="border-left: transparent;">
                        <td style="border-left: transparent !important;" class="t">{{$item->vid}}</td>
                        <td class="t">{{$item->placa}}</td>
                        <td class="t">{{$item->color}}</td>
                        <td class="t">{{$item->modelo}}</td>
                        <td class="t">{{$item->nombre}} {{$item->apellido}}</td>
                        <td class="t">
                            <form action="{{route('vehiculo.edit', $item->placa)}}" method="GET">
                                <button class="btn btn-warning btn-sm">
                                    <ion-icon name="create-outline"></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table">
            <h2 class="title" style="border-radius: 10px; background-color:#2c0c00;">
                Historial
            </h2>
            <thead>
                <tr style="border-bottom: 1mm solid #ffc107;">
                    <th scope="col" style="border-left: transparent !important;" class="t">Id</th>
                    <th scope="col" class="t">Ingreso</th>
                    <th scope="col" class="t">Salida</th>
                    <th scope="col" class="t">Reparacion</th>
                    <th scope="col" class="t">Monto</th>
                    <th scope="col" class="t">Comentario</th>
                    <th scope="col" class="t">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datoh as $dato)
                    <tr>
                        <td style="border-left: transparent !important;" class="t">{{$dato->id}}</td>
                        <td class="t">{{$dato->ingreso}}</td>
                        <td class="t">{{$dato->salida}}</td>
                        <td class="t">
                                <button class="btn" style="background-color: transparent !important; color:#ffc107 !important; border: trnasparent;" data-bs-toggle="modal" data-bs-target="#{{$dato->id}}1">
                                    {{$dato->reparacion}}
                                </button>
                            </td>
                        <td class="t">{{$dato->monto}}</td>
                        <td class="t">{{$dato->comentario}}</td>
                        <td class="t">
                            <form action="{{route('vehiculo.edit', $dato->placav)}}" method="GET">
                                <button class="btn btn-warning btn-sm">
                                    <ion-icon name="create-outline"></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <div class="modal fade"  id="{{$dato->id}}1" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" >
                  <div class="modal-content" style="background-color: black;">
                    <div class="modal-header" style="border-bottom: .5mm solid #ffc107;">
                      <h1 class="modal-title fs-5" id="{{$dato->id}}1">
                        Comentario
                      </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div> 
            <label class="form-label">Comentario</label>
            <br>
            <input type="text" class="form-control" name="comentario" value="{{$dato->coment}}">
        </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn col col-md-4" type="submit"  name="id" Value="{{$dato->id}}1">Editar</button>  
                    </div>
                  </div>
                </div>
              </div>
                
                @endforeach
            </tbody>
        </table>
    </section>
@endif
@endsection





