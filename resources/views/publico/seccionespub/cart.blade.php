<section class="py-5">
    <article class="container">
        <div class="row">
            <!--carrito de compras-->
            <div class="checkout-right">
                <h4 class="mb-sm-4 mb-3">
                    <!--Bienvenido al -->
                </h4>
                <div class="table table-dark">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Quitar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //$total = 0;
                            //foreach ($carrito as $producto) {
                                //$total = $total + $producto['subtotal'];
                            ?>
                                <tr class="rem1">
                                    <td class="invert"><?php //echo $producto['codigojuguete'] ?></td>
                                    <td class="invert-image">
                                            <img class="bd-placeholder-img card-img-top" src="images/producto/BabyYoda1.jpg<?php //echo $producto['nomb_imagen_principal'] ?>" alt="Juguete" style="width: 70px;">
                                    </td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus">

                                                </div>
                                                <div class="entry value">
                                                    <span>1</span>
                                                </div>
                                                <div class="entry value-plus active">

                                                </div>
                                            </div>

                                        </div>

                                    </td>
                                    <!-- Product name-->
                                    <td class="invert">
                                        <h5 class="fw-bolder"><?php //echo $producto['nombrejuguete'] ?></h5>
                                    </td>
                                    <!-- Product price-->
                                    <td class="invert">
                                        <h5>$<?php //echo $producto['preciounitario'] ?></h5>
                                    </td>
                                    <td class="text-center">
                                        <form action="../backend/controladores/productoscarrito_controlador.php" method="POST">
                                            <input type="hidden" name="codigojuguete" value="<?php //echo $producto['codigojuguete'] ?>">
                                            <input type="hidden" name="operacion" value="quitar">
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash">  Quitar</i></button>
                                        </form>
                                    </td>

                                </tr>
                            <?php
                            //}
                            //$_SESSION['total'] = $total;
                            ?>
                        </tbody>

                    </table>
                </div>
                <div style="background-color: 5089C6; margin-left:79%; border-radius: 15px;">
                <div style="color: white; font-size:40px;text-align:right;padding:10px;">Total:  $<span class="text-lg"><?php //echo $total ?></span></div>
                </div>
            </div>

            <center>
                <div class="col-md-6 mb-3 ">
                    <h2 style="color: black;" for="validationCustom01"></h2><br>
                    <p>Por el momento no contamos con base de datos, no se puede guardar nada <b>bro</b> </p><br>
                    <a class="btn btn-dark btn-lg btn-block" href="#">Guardar Compra</a>
                </div>
            </center>

            <center>
                <div class="col-md-4 mb-3 ">
                    <h2 style="color: black;" for="validationCustom01"></h2><br>
                    <a class="btn btn-dark btn-lg btn-block" href="{{ url('/catalogo')}}">Regresar al catálogo</a>
                </div>
            </center>

    </article>

</section>
