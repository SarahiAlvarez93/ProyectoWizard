<div id="footwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <article class="container">
                    <div class="row">
                        <!--columna de 3 espacios-->
                        <?php
                        //foreach($clientes as $cliente){


                        ?>
                        <div id="col" class="col-sm-6">
                            <article class="card shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                                <img class="card-img-top" src="images/cliente/oscar.jpg<?php //echo $clientee['nomb_imagen'] ?>" height="500" alt="<?php //echo $clientee['nomb_imagen'] ?>">
                            </article>
                        </div>
                        <div id="col" class="col-sm-6 ">
                            <article class="card shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                                <div class="card-body">
                                    <div class="text-center font-weight-bold">
                                        <!-- Product name-->
                                        <h3 class="fw-bolder">Bienvenido <?php //echo $clientee['nombrecliente'] ?></h3>
                                        <!-- Product reviews-->
                                        <br><br>
                                        <p>
                                            Código: <?php //echo $clientee['codigo'] ?>
                                        </p>
                                        <p>
                                            Nombre: <?php //echo $clientee['nombrecliente'] ?>
                                        </p>
                                        <p>
                                            Telefono: <?php //echo $clientee['telefonocliente'] ?>
                                        </p>
                                        <p>
                                            Tu correo: <?php //echo $clientee['correocliente'] ?>
                                        </p>
                                        <p>
                                            Contraseña: <?php //echo $clientee['contrasena'] ?>
                                        </p>
                                        <p>
                                            Calle: <?php //echo $clientee['calle'] ?>
                                        </p>
                                        <p>
                                            Número de casa: <?php //echo $clientee['numero'] ?>
                                        </p>
                                        <p>
                                            Estatus: <?php //echo $clientee['estatus'] ?>
                                        </p>


                                    </div>
                                    <br><br>

                                </div>
                            </article>
                            <?php
                            //}
                            ?>
                        </div>
                </article>




                <!-- Button trigger modal -->
                <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Editar Mi Perfil
                    </button></center>
                    <p>Este boton no funciona debido a que no hay base de datos</p>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="needs-validation" novalidate action="../../../backend/controladores/cliente_controlador.php" method="POST" enctype="multipart/form-data">
                                <!--Este input hace con condiciones que elija entre las tres opciones a hacer.-->
                                <input type="hidden" id="operation" name="operation" value="update">

                                <div class="col-md-6 mb-3">
                                    <h2 style="color: black;" for="validationCustom02">Código de cliente:</h2>
                                    <input type="hidden" class="form-control" id="codigo" name="codigo" value="<?php //echo ($clientee != null) ? $clientee['codigo'] : '' ?>">
                                    <div class="valid-feedback">
                                        Registrado
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un número válido (1-9999).
                                    </div>
                                </div>

                                <!--final de la primer columna Codigo cliente que estara oculto por el momento-->
                                <div class="col-md-6 mb-3">
                                    <h2 style="color: black;" for="validationCustom01">Nombre(s):</h2>
                                    <input type="text" class="form-control" id="nombrecliente" name="nombrecliente" value="<?php //echo ($clientee != null) ? $clientee['nombrecliente'] : '' ?>">
                                    <div class="valid-feedback">
                                        Completado
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un nombre válido.
                                    </div>
                                </div>
                                <!--final de la segunda columna-->
                                <div class="col-md-4 mb-3">
                                    <br>
                                    <h2 style="color: black;" for="validationCustom01">Número de teléfono:</h2>
                                    <input type="text" class="form-control" id="telefonocliente" name="telefonocliente" value="<?php //echo ($clientee != null) ? $clientee['telefonocliente'] : '' ?>">
                                    <div class="valid-feedback">
                                        Completado
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un número valido.
                                    </div>
                                </div>
                                <!--final de la tercera columna-->
                                <div class="col-md-4 mb-3">
                                    <br>
                                    <h2 style="color: black;" for="validationCustom02">Correo Electrónico:</h2>
                                    <input type="text" class="form-control" id="correocliente" name="correocliente" value="<?php //echo ($clientee != null) ? $clientee['correocliente'] : '' ?>">
                                    <div class="valid-feedback">
                                        Completado
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un correo valido.
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <br>
                                    <h2 style="color: black;" for="validationCustom02">Contraseña:</h2>
                                    <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?php //echo ($clientee != null) ? $clientee['contrasena'] : '' ?>">
                                    <div class="valid-feedback">
                                        Completado
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un correo valido.
                                    </div>
                                </div>

                                <!--final de la cuarta columna-->
                                <div class="col-md-4 mb-3">
                                    <br>
                                    <h2 style="color: black;" for="validationCustom02">Dirección de calle:</h2>
                                    <input type="text" class="form-control" id="calle" name="calle" value="<?php //echo ($clientee != null) ? $clientee['calle'] : '' ?>">
                                    <div class="valid-feedback">
                                        Completado
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa una dirección valido.
                                    </div>
                                </div>
                                <!--final de la quinta columna-->
                                <div class="col-md-4 mb-3">
                                    <br>
                                    <h2 style="color: black;" for="validationCustom02">Número de calle:</h2>
                                    <input type="text" class="form-control" id="numero" name="numero" value="<?php //echo ($clientee != null) ? $clientee['numero'] : '' ?>">
                                    <div class="valid-feedback">
                                        Completado
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un número de dirección valido.
                                    </div>
                                </div>
                                <!--final de la sexta columna-->
                                <div class="col-md-4 mb-3">
                                    <br>
                                    <h2 style="color: black;" for="validationCustom02">Estatus de cliente:</h2>
                                    <input type="text" class="form-control" id="estatus" name="estatus" value="<?php //echo ($clientee != null) ? $clientee['estatus'] : '' ?>">
                                    <div class="valid-feedback">
                                        Completado
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un estatus valido.
                                    </div>
                                </div>
                                <!--final de la septima columna-->
                                <?php
                                //if ($clientee != null) {



                                ?>
                                    <div class="col-md-4">
                                        <img src="../../imagenes/cliente/<?php //echo $clientee['nomb_imagen'] ?>" width="200px" alt="">
                                        <input type="text" class="form-control" id="nombreimagen_actual" name="nombreimagen_actual" value="<?php //echo ($clientee != null) ? $clientee['nomb_imagen'] : '' ?>">
                                        <div class="valid-feedback">
                                            Imagen!
                                        </div>
                                    </div>
                                <?php
                                //} //en nombreimagen_actual se usa para colocar el nombre de la imagen que estamos subiendo y ponemos
                                //readonly para que este no pueda ser modificada
                                ?>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">imagen</label>
                                    <input type="file" class="form-control" id="imagen" name="imagen" <?php //echo (($clientee != null) ? '' : 'readonly') ?>>
                                    <div class="valid-feedback">
                                        Imagen!
                                    </div>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <!--<img src="../../../backend/imagenes/cliente/<?php //echo $cliente['nombre_imagen'] ?>" width="50px" alt="imagen">-->






            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
            <!--create-->
            <?php
            //include "create_venta.php";
            ?>

            <!--form-->
            <?php
            //include "data_venta.php";
            ?>
        </div>
    </div>
    <!--/.row -->
</div>
