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
        <img src="https://lh3.googleusercontent.com/fife/ALs6j_HUlr2aPjpDMv7NN6Y6fCSry_ryjTz2TaOH_TvvOFRH1bOaQs2h8z0tzMlXaxICemaknnJj1ZWMJ2vk6xJQgPSgtW1yFSGzjU3BE1p8rPldEdOhFnQn3At-US7JHY9kjmlWKDyKHKX6Kc7OKMz_u_EebUNXzDaK3wxh98GzFPHPPQbLH2wnrGqV5ZRR6xJYFU5pgMWIWZygX33s-n3eqRPjdwAz00t2zW462SPyXD82fkBjeqLuTJPSk4iIAPB3CItKHL85cJ0b_c2RhbJWe1mrNBXi3UCCzd9tp_PDdkmO06yk9kByoPXpxSZHTqcP_upkNtSqd7OKDuTuE4pDGzDr1ogBrQAzMbqi3gO--qL06Dpk2Don1VH8yWwSX12pnsga-4yyXBMSZh4KtVPZzTa2NewFKou-CIEq65NbsqWyLIzJAahK5MVDZ9GpTIJMk8OxAeEhOx9ZeSOpP9vYhfhO2P48mJz2AzULf_GEiDaFub6e4F6e72P_VzRFJXq4igB8BzF-dLcNpTmJfu7VaS7QzLxf3nERQt-3dTdNlTEwg3xcLd8BDqfajuj64Hejjs8RQgKFGh_yugNa6HikE1KveMqWhvJDHaIdCiCX4gSncx0pCu5Lr2SKd8o4MRlbLRsk3mlLcGJrik8rST1yYDkf8jmne3X6zfPH5jSH04P38Dc--NCLrYVc4NhYD0yf7SDoAA1k5ghY3dPoFEHeuQ2YCMkHdbkA5v-FldoVIgp8sMUOj209EYG2y4vj4XS2SyYPQb396bk9jOvBBdbn2erLcL2qIOdVUciOS2U5SdhWGosT6z3iwu2UTXoNDzs1UoDY3lbxvLdWRCIOwEa93ALicTR9i7deEHpmLcbaps4eYCQ44G_LW3pnDXmW80Y6Z-lHDs7gv1h9AXKXUlvcVhY792_lK_5Z6jkExcxqrbfxtTv3CbrERn8qKA15PJi-I5sH16ZK4kmeyPgc_E6Zmiynr7Wx5Q6ygZSobTCSVv46RXGown2JHDWdS97_xPaFknGGbO1I1KsGHhT3HjeCYFHKj9XxP3PdBebY0P2_PwKx6c45InKmhEP0nsTU_dnTHWp5jHWZzZwPVZY0G2UDo_D684NY18i2eOnhz9CwQk2S-DoDe8ZrzYIRfldVoKlAszN4qSN2gnoWyFa-azU3S558giGrHZNCwAw9NFRJxHTqgwcpZaSrnLrTZkH26ux1B0UJiJOnn-c63miOXKVNUIPkIggFTcP7v9kqUgtqPPUIql84ONd3nn_p3fvOyWPYB4-gl92CdYwRdzGlY22XOPozjAww3qvQcsGwDQERIhTi68zMsTUOB_brYQaJdUkLOh2KbbrHPI7sIEf267o7RrS1aeEVO9Mlu7MpYCf6_6Oqlqec9im2RhZNaG8SVX9qZLQfAfnnlJfMKNg3L9UipR2yTPY19X7ePzxGVPLFZnoF_crOqYp3sqmI3rToiQb0tbmnTOL60OhWXCLIIp40lIxEqacIt8X2U7-MomTTwoDeRHBaEwce0T8IFwdZu9Okjuk0OifwgzNmVvrcAEdNRUcmYEQ-eKWtyoKNIbV7E5MObMoL7nxXhDOaJcnLuk8hK3palaqyUTLQ-gfNvwzrpIQlXV-aqQV7CiGXImmoiVVtRxFwwkzHmf8hVm_BMxiVrKWhJsZESUkBJe_NUy-fLvVi6w1PWA=w1392-h762">
        <!-- <h2>Taller Mister Mecánico</h2>--->
        </div>
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
    </nav>
</header>
    .<section class="container">
        @yield('contenido')
</section>


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