<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/app.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>@yield('titulo')</title>
  </head>
  <body class="bo">
  <header>
    <nav class="navbar navbar-expand-lg bg-warning" >
    <div class=" container-fluid con1 " >
        <a href="#" class="navbar-brand" >
           <h2>Taller Mister Mecánico</h2>
            </a> 
        </div>
        <style>
            .bo{

                background-repeat: no-repeat;
                background-size: cover;
            }
            .navb{
            padding: 10px;
            color:#2c0c00;
            border-radius:10px; 
            border:#2c0c00 2px solid;
            font-size: 5mm;
            margin: 10px;
        }
        .navb:hover{
            color:#ffc107;  
            background-color: #2c0c00;;
        }
            .form-control{
            background-color: transparent;
            border:1px solid #ffc107;
            color: #ffc107;
        }
        .form-control::placeholder{
            color: #ffc107;
        }
        .form-control:active{
            background-color:transparent;
            border:2px solid #ffc107;
        }
        .input-group-text{
            background-color: transparent;
            border-color: transparent;
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
        <div class="collapse navbar-collapse  d-flex" id="navbarSupportedContent">
        <a href="{{route('clie.index')}}"class=" nav-link navb" >
               Formulario
            </a>
        <a href="{{route('hist1.index')}}"class="nav-link navb">
               Historial
            </a>
            <form action="{{route('vehiculo.index')}}" method="POST">
            @csrf
            <button class="btn" type="submit" value=0 name="bt" style="height: 50px; border:solid #2c0c00 2px; font-size:5mm;" >Buscar</button>
            </form>
        </div>
    </nav>
</header>
    .<div class="container">
        @yield('contenido')
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="./js/dios.js"></script>

    </body>
</html>