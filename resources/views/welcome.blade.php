@extends('Layout/plantilla')
@section('titulo', 'Inicio de sesión')
@section('contenido')

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
				<input type="password" name="Contra" class="form-control"required>
			</div>	
			<button class="btn" type="submit">Entrar</button>
		</form>
    
    </div>
</div>
@endsection



