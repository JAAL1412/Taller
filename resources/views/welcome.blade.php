@extends('Layout/plantilla')

@section('titulo', 'Inicio de sesión')

@section('contenido')
<style>
.form-control{
    background-color: transparent;
    border:1px solid #ffc107;
	color: #ffc107;
}
.form-control:active{
    background-color:transparent;
    border:2px solid #ffc107;
}
.container{
	max-width: 50%;
	min-width:50%;
}	
.btn{
        margin: 10px;
        background-color: #ffc107;
        color:#2c0c00 ;
        border: 1mm solid #2c0c00;
    }
.btn:hover{
        margin: 10px;
        background-color: #2c0c00;
        color:#ffc107;
        border: 1mm solid #2c0c00;
    }
</style>

<div class="row">
    <div class="col-md-10 form1" style="margin: auto;">
   
    <h3 class="title">Iniciando sesión</h3>
    	<form action="{{route('Users.verifica')}}" method="POST">
		@csrf
			<div class="try">
				<label for="" class="form-label">Usuario</label>	
				<input type="text" name="User" class="form-control" required>
			</div>	
			<div class="try" >
				<label for="" class="form-label">Contraseña</label>	
				<input type="text" name="Contra" class="form-control"required>
			</div>	
			<button class="btn" type="submit">Entrar</button>
		</form>
    
    </div>
</div>
@endsection



