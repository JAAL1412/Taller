<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Estilos css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    <title>@yield('titulo')</title>
  </head>


  <body class="bo">
    <!-- Barra de navegación-->
  <header>
    <nav class="navbar navbar-expand-lg bg-dark" >
    <div class=" container-fluid con1 " >
        <a href="{{route('Users.index')}}" class="navbar-brand" >
        <img src="{{asset('css/img/tallerlogo2.png')}}"
         alt="Taller Mister Mecánico">
        <!-- <h2>Taller Mister Mecánico</h2>--->
        </div>
        <div class="collapse navbar-collapse  d-flex" id="navbarSupportedContent">
        <a href="{{route('vehiculo.form')}}"class=" nav-link navb" >
               Vehículos
            </a>
        <a href="{{route('historial.index')}}"class="nav-link navb">
               Historial
            </a>
        <a href="{{route('Cliente.index')}}"class="nav-link navb">
            Clientes
         </a>
            <form action="{{route('vehiculo.index')}}" method="POST">
            @csrf
            <button class="nav-link navb" type="submit" value=0 name="bt" style="height: 50px; border:solid #2c0c00 2px; font-size:5mm;" >Buscar</button>
            </form>
        </div>
    </nav>
</header>
    .<section class="container">
        @yield('contenido')
</section>




   <!-- scripts de bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
     <!--Iconos -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>