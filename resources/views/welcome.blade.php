@extends('Layout/plantilla')

@section('titulo', 'Inicio de sesión')

@section('contenido')
<style>
.form-control{
        background-color: rgb(0,0,0,0.0);
        border:1px solid #ffc107;
    }</style>

<div class="row">
    <div class="col-md-3 form1" style="margin: auto;">
   
    <h3 class="title">Iniciando sesión</h3>
    <form action="" method="POST">
		@csrf
		<!--@if($mensajes= Session::get('succes'))-->
		<div class="alert alert-success" role="alert">
 	 		<!--{{$mensajes}}-->
			</div>
			<!--@endif
		@if($aviso= Session::get('warning'))-->
		<div class="alert alert-warning" role="alert">
 	 		<!--{{$aviso}}-->
			</div>
			<!--@endif-->
		<div class="try">
			<label for="" class="form-label">Usuario</label>	
			<input type="text" name="rif" class="form-control" required>
		</div>	
		<div class="try" >
			<label for="" class="form-label">Contraseña</label>	
			<input type="text" name="name_pro" class="form-control"required><span class="barra"></span>
		</div>	
		<button class="btn btn-success btn-block" type="submit" style="margin: 10px;">Añadir</button>
		<a class="btn btn-secondary btn-block" href=""><ion-icon name="chevron-forward-outline"></ion-icon></a>
		</form>
    
    </div>
</div>
@endsection



