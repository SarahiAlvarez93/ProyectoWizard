<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
        //foreach($productos as $producto){
        ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <!--<img class="card-img-top" src="./imagenes/jessie1.webp" alt="jessie1" />-->
                    <img  class ="card-img-top" src="images/producto/BabyYoda1.jpg<?php //echo $producto['nomb_imagen_principal'] ?>"  alt="<?php //echo $producto['nomb_imagen_principal'] ?>">
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?php //echo $producto['nombrejuguete'] ?></h5>
                            <!-- Product price-->
                            <p>Precio:</p>
                            <h5>$<?php //echo $producto['preciounitario'] ?></h5>
                            <p>Marca:</p>
                            <?php //echo $producto['marca'] ?>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ url('detalle')}} ">Detalle de juguete</a></div> <!--esto hiba aqui: detail.php?codigojuguete=<?php //echo $producto['codigojuguete'] ?>-->
                    </div>

                </div>
            </div>
    <?php
    //}
    ?>







    </div>
</section>
