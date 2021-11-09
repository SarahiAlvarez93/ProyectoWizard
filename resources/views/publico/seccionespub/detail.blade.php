<section class="py-5">
    <article class="container">
        <div class="row">
            <!--columna de 3 espacios-->
            <div id="col" class="col-sm-6">
                <article class="card shadow p-3 mb-5 bg-white rounded" style="width: 100%;">

                    <img class="card-img-top" src="images/producto/BabyYoda1.jpg<?php //echo $producto['nomb_imagen_principal'] ?>" alt="<?php //echo $producto['nomb_imagen_principal'] ?>">
                    <div class="card-deck">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img class="card-img" width="77" height="77"  src="images/producto/BabyYoda1.jpg<?php //echo $producto['nomb_imagen_carrito'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img class="card-img" width="77" height="77"  src="images/producto/BabyYoda2.jpg<?php //echo $producto['nomb_imagen_principal'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img class="card-img" width="77" height="77"  src="images/producto/BabyYoda3.jpg<?php //echo $producto['nomb_imagen_mini'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style> /*este es el estilo de las imagenes pequeñas de yoda.*/
                        .card-img{
                            width: fit-content;
                            align-self: center;
                        }
                    </style>
                </article>
            </div>
            <div id="col" class="col-sm-6 ">
                <article class="card shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="card-body">
                        <div class="text-center font-weight-bold">
                            <!-- Product name-->
                            <h3 class="fw-bolder"><?php //echo $producto['nombrejuguete'] ?></h3>
                            <!-- Product reviews-->
                            <br><br>
                            <h5>Codigo de juguete:<?php //echo $producto['codigojuguete'] ?></h5>
                            <h5>Marca:<?php //echo $producto['marca'] ?></h5>
                            <h5>Categoria:<?php //echo $producto['categoria'] ?></h5>
                            <h5>Genero:<?php //echo $producto['genero'] ?></h5>
                            <h5>Estatus del juguete:<?php //echo $producto['estatus'] ?></h5>
                            <h4><?php //echo //$producto['descripcion'] ?></h4>

                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>

                            <br><br>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through"></span>
                            <br>
                            <h1>$<?php //echo $producto['preciounitario'] ?></h1>

                            <div class="container">
                                <div class="row">
                                    <main id="items" class="col-sm-8 row"></main>
                                    <aside class="col-sm-12">
                                        <form action="../backend/controladores/productoscarrito_controlador.php" method="POST">
                                            <input type="hidden" name="operacion" value="agregar">
                                            <input type="hidden" name="codigojuguete" value="<?php //echo $producto['codigojuguete'] ?>">

                                            <a href="{{ url('/carrito')}}"><button class="btn btn-primary" type="button">Agregar al carrito</button></a>
                                        </form>
                                    </aside>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <!--
                    <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Añadir al carrito</a></div>
                    </div>-->
                    </div>
                </article>
            </div>
    </article>
</section>
