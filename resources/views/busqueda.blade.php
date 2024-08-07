@extends('Layout/plantilla2')
@section('titulo', 'Busqueda')
@section('contenido')

  <!-- Barra de busqueda-->
<form action="{{route('vehiculo.index')}}" method="POST">
		@csrf
        <div class="input-group-text mb-3">
            <input type="text" class="form-control" name="search" placeholder="Modelo del vehiculo">
            <button class="btn" type="sumbmit" name="bt" value=1>Buscar</button>
        </div>
		</form>
  <!-- Barra de navegación-->
  </section>    
  <!-- if para solo mostrar la información solo si ya se realizo la busqueda-->
  @if($x)
    <section class="container" style="background-color: transparent;">
        <!-- Tabla de información del vehículo-->
        <table class="table">
            <thead>
                <tr style="border-bottom: 1mm solid #ffff;">
                    <th style="border-left: transparent !important;" class="t">ID</th>
                    <th scope="col" class="t">Placa</th>
                    <th scope="col" class="t">Color</th>
                    <th scope="col" class="t">Modelo</th>
                    <th scope="col" class="t">Dueño</th>
                    <th scope="col" class="t">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- For para llenar la tala con los datos-->
                @foreach($datos as $item)
                    <tr style="border-left: transparent;">
                        <td style="border-left: transparent !important;" class="t">{{$item->vid}}</td>
                        
                        <!-- link para buscar por placa-->
                        <td class="t"><a class="aplaca" href="{{route('vehiculo.busqueda', $item->placa )}}" method="GET">{{$item->placa}}</a>
                        </td>
                        <td class="t">{{$item->color}}</td>
                        <td class="t">{{$item->modelo}}</td>
                        <td class="t">{{$item->nombre}} {{$item->apellido}}</td>
                        <!-- Boton para editar-->
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
        <!-- tabla del historal-->
        <table class="table">
            <h2 class="title" style="border-radius: 10px; background-color:#212429;">
                Historial
            </h2>
            <thead>
                <tr style="border-bottom: 1mm solid #ffff;">
                    <th scope="col" style="border-left: transparent !important;" class="t">Id</th>
                    <th scope="col" class="t">Ingreso</th>
                    <th scope="col" class="t">Salida</th>
                    <th scope="col" class="t">Reparacion</th>
                    <th scope="col" class="t">Monto</th>
                    <th scope="col" class="t">concepto</th>
                    <th scope="col" class="t">Comentario</th>
                </tr>
            </thead>
            <tbody>
                <!-- for para rellenar los datos del historal-->
                @foreach($datoh as $dato)
                    <tr>
                        <td style="border-left: transparent !important;" class="t">{{$dato->id}}</td>
                        <td class="t">{{$dato->ingreso}}</td>
                        <td class="t">{{$dato->salida}}</td>

                        <!-- boton para editar reparación-->
                        <td class="t">
                                <button class="btn" style="background-color: transparent !important; color:#FE0000 !important; border: trnasparent;" data-bs-toggle="modal" data-bs-target="#{{$dato->id}}1">
                                    {{$dato->reparacion}}
                                </button>
                            </td>
                        <td class="t">{{$dato->monto}}</td>
                        <td class="t">{{$dato->concepto}}</td>

                        <!-- boton para editar transacción-->
                        <td class="t">
                        <button class="btn" style="background-color: transparent !important; color:#FE0000 !important; border: trnasparent;" data-bs-toggle="modal" data-bs-target="#{{$dato->id}}">
                                    {{$dato->comentario}}
                                </button>
                        </td>
                    </tr>
                
                    <!-- Modal para las reparaciones-->
                <div class="modal fade"  id="{{$dato->id}}1" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" >
                  <div class="modal-content" style="background-color: black;">
                    <div class="modal-header" style="border-bottom: .5mm solid #ffc107;">
                      <h1 class="modal-title title fs-5" id="{{$dato->id}}1">
                        Editar
                      </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    @if($dato->reparacion==null)
                    <h2 class="title">Se debe agregar una salida primero</h2>
                    @else

                    <form action="{{route('historialr.salida')}}" method="POST">
                        <div class="modal-body">
                    @csrf
                        <div> 
                            <label class="form-label">Comentario</label>
                            <br>
                            <input type="text" class="form-control" name="comentario" value="{{$dato->coment}}">
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button class="btn col col-md-4" type="submit"  name="id" Value="{{$dato->id}}">Editar</button>  
                        </div>
                    </form>
                    @endif


                  </div>
                </div>
              </div>

              <!-- Modal para las transacciones-->
              <div class="modal fade"  id="{{$dato->id}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" >
                  <div class="modal-content" style="background-color: black;">
                    <div class="modal-header" style="border-bottom: .5mm solid #ffc107;">
                      <h1 class="modal-title title fs-5" id="{{$dato->id}}">
                        Editar
                      </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                    <form action="{{route('transacciones.up')}}" method="POST">
                        @csrf
                            <div> 
                                <label class="form-label">Comentario</label>
                                <br>
                                <input type="text" class="form-control" name="coment" value="{{$dato->comentario}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn col col-md-4" type="submit"  name="idt" Value="{{$dato->idt}}">Editar</button>  
                        </div>
                    </form>


                  </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </section>
@endif
@endsection





