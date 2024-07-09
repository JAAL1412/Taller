<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}" type="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>@yield('titulo')</title>
  </head>
  <body class="bo">
  <header>
    <nav class="navbar navbar-expand-lg bg-dark" >
    <div class=" container-fluid con1 " >
        <a href="#" class="navbar-brand" >
        <img src="https://lh3.googleusercontent.com/fife/ALs6j_GLf0MisHVwsuXe5bKG3qb8C3x53FuR4hhMby4kNk1A5dN3QhhnEvGKU-2atzikgjR1dKOsy3uX2JtyzWJ0gdfYQD2ZUl5Bt3gytc_XFdJVSeUKR_n5ObHeSCSYRqwBxxdT7Wt7ZdkePXsdvmYSqytXunmGoJUtTYFa6nz5ncUDG1BURtjxIpc1EgsnYUSqFMwLOXctLUzn04CqpXnLh7hJ0LhQkqG6aihGY6aoDB4lcXvflw9AeXGHB8sejYOAx5tiLCVDC8nsZzfNU_qaIZTuBKrRuU2fKWpwHR6EwGL95NgfV90VB3WGFQObicbtX-scUTXk8YJpiZU8qCoiI_hzextbO3hJZmZU-0Ap172pXjbKzK_ccbRtamQ6d7NYtcgxCedvJQyWYmWEQykhoiLfAwRzR_vVgo0tk3IhdIWJQmOl8kXsc_OyBKRykDvC5x_VM6GRzdCCJtsGA1phNL5IixFTlUfsUEsJbNFsQXGo3MmEigFCvjupIL-Wdl4GdTPLndKWdgMBYjzVRp6dOVb32iG8394L_85tRzihjKf-J-ogiUPwzwd0lapATOo_clRfye8NzHW4Jpiq9pbEdHzEqXcbH3xsHAcSUMF56woQtwqFt7xD6JHxRNt6tB5lRqZ5oOp2smnFoKS6FxVU-Z9JcIM7mDzL4iS1zx9ejEVnkDao3rSUlOrY0U8z3CcjXx8dqlRbWca6VNqxwpuzQ_swbzyF_rEBiYYEHt_clc9PMkse9Brz6QfDchmMyYt2cuIwldIW8Q6XwiTQcwyaLCqnzHA80ZJ2pKRxPf6pk2YTZSIPLrpIKRL0yGoalxuTFSFPT_a0EGyd-whsp2MlaIyHN_-OFM3z3Cpi7jPxlljoLi0WTbQ2P8S3GlUq2UMIqDu20fvll-YDzMoZscOUh0aiJGnp_Z6AGeh1Ht9W5hNfr__g4FBjmFj0iGA4WnqdRwNcc8wtuzILh5gT52caP9nQ9ifaZ-q8jejKWqc-iqAXlyXEoxKvpqIJoYqW8wMNZDdZvG-RIsTZbfAoASckhMiN-mzMKPz5iS-rHYiYkHSJohlBp1qYypLSceeYMbb7ZwBi6Hp7Nml4qUN-8WN6Uq19k3xxi7cfpUs_tw_9KO1-2d6EPMr3tkxxouWjQ-fd3uFfYKbneWDmy7g5gli802TqcPRuQZOO42gUzyuAx_FYk3j-qolfpMaoFSUpzcziD-Nfdwkk8KALBR5kaqpwrmcXkDQYvvKCFuwpFMFJSyl-DkMntmvdshE2W7bfXBKE7apJMulJcp-jCU8y4HIsGXLWfDGQ2DkXYWMNwM7XUSmI-kyupTo2FkKjTAmTwfOM8YGEl8J1zCeG2Q9wngAmNuNDsj2sb7E7CRVi4yg6TRH-9uXEzKeKcp7pNIHFQngfweCWfpOqlCcfb9BU3cno3QIcaTrJyUeyxFY-jOss4xqp79-oxx58zhN-vLzXR1HHCk8Y1Wp8-zMj51ABgyea4DE1uwjin-kf8GEEzXaYiyGyOWj2dhBprKCYZXQggnWs_lkokE63phiZgML5jPP2saZ_6nEYnD1F9JY_S5oiFsPDSoxBhdomKWRPdaRwMAjrMtrDie9E1akn3NHFkhvWF1Z3iRfrYBx2hfsbXUOp1tLFViDQS1mMvlxw7G21_lvcGan-wET82OEubSMQYukOptlTYOxI=w1392-h762" alt="Taller Mister Mecánico">
        </div>
        
        @if($mensajes= Session::get('succes'))
        <div class="collapse navbar-collapse  d-flex" id="navbarSupportedContent">
        <a href="{{route('form.index')}}"class=" nav-link navb" >
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
        @endif
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>