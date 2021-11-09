<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/logowizard.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/stylessamy.css" rel="stylesheet" />

    <style>

    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('privado.seccionespriv.navbar')
    <!-- Masthead-->
   @include('privado.seccionespriv.header')
    <!-- Services-->
<article>
    <!--Aqui ira el espacio de dashboard-->
    @yield('dashboard')
    <!--Catalogo-->
    @yield('catalogo')
    <!--Detalle del Juguete-->
    @yield('detalle')
    <!--Carrito-->
    @yield('carrito')
    <!--Perfil-->
    @yield('perfilcliente')
    <!--Iniciar Sesion Cliente-->
    @yield('sesioncliente')
    <!--Iniciar Sesion Empleado-->
    @yield('sesionempleado')

</article>

    <!-- Footer-->
    @include('privado.seccionespriv.footer')
    <!-- Portfolio Modals-->

    <!-- Portfolio item 6 modal popup-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scriptssammy.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
