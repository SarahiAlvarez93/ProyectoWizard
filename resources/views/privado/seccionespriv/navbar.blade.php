<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ url('index')}}"><img src="images/logowizard.png" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><!--<?php
                    //if($_SESSION['estatus']==''){
                ?>-->

                <!--<?php
                    //}


                ?>--></li>
                <li class="nav-item"><!--<?php
                    //if($_SESSION['estatus']=='Activo'){
                ?>-->

                <!--<?php
                    //}


                ?>--></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('catalogo')}}">Catálogo</a></li>

                <!--
                <li class="nav-item"><a class="nav-link" href="{{ url('empleado')}}">Empleados</a></li>
                -->

                <!--<?php
                    //if($_SESSION['estatus']=='Activo'){
                        ?>-->

                <li>
                    <form class="form-signin" action="../backend/controladores/cliente_controlador.php"
                        method="POST">
                        <input type="hidden" id="operation" name="operation"
                        value="logout">
                        <!--aqui hiba la imagen-->


                        <a href="{{ url('/index')}}"><button class="btn btn-lg btn-primary btn-block" type="button">Salir</button></a>

                        </form>
                    </li>
                    <!--<?php
                                                    //}
                                                ?>-->
                <!--<li class="nav-item"><a class="nav-link" href="#team">Empleado del mes</a></li>-->
            </ul>
        </div>
    </div>
</nav>
