<?php
    /*$producto = new ProductoCRUD();
    $productoe = null;
    if(isset($_GET['codigojuguetee'])){
        $producto->set_codigojuguete($_GET['codigojuguetee']);
        $productoe = $producto->read_by_id();
        //print_r($productoe);
        echo "
        <script>
        $(document).ready(function(){
        $('#exampleModal').modal('show');
        });
        </script>
        ";
    }

    $productob = null;
    if(isset($_GET['codigojugueteb'])){
        $producto->set_codigojuguete($_GET['codigojugueteb']);
        $productob = $producto->read_by_id();
        //print_r($productob);
        echo "
        <script>
        $(document).ready(function(){
        $('#exampleModal').modal('show');
        });
        </script>
        ";
    }*/
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Button trigger modal -->

<style>
  th{
    background-color: red;
  }
</style>
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Registrar juguete
</button></center><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <!-- novalidate action="../../../backend/controladores/producto_controlador.php" -->
    <form class="needs-validation" novalidate action=""
    method="POST" enctype="multipart/form-data">
    <input type="hidden" id="operation" name="operation"
    value="<?php //echo ($productob!=null)?'delete':(($productoe!=null)?'update':'create') ?>">
    <?php
    /*if ($productob!=null){
        $productoe=$productob;
    }*/
    ?>
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><img src="images/logowizard.png" alt="">Registro de productoes</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<h1>Data del juguete</h1>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col" style="padding: 2px">Imagen principal</th>
        <th scope="col" style="padding: 2px">Imagen para carrito</th>
        <th scope="col" style="padding: 2px">Imagen de muestra</th>
        <th scope="col" style="padding: 2px">Codigo</th>
        <th scope="col" style="padding: 2px">Nombre</th>
        <th scope="col" style="padding: 2px">Precio</th>
        <th scope="col" style="padding: 2px">Marca</th>
        <th scope="col" style="padding: 2px">Genero</th>
        <th scope="col" style="padding: 2px">Categoria</th>
        <th scope="col" style="padding: 2px">Descripcion</th>
        <th scope="col" style="padding: 2px">Existencia</th>
        <th scope="col" style="padding: 2px">Stock minimo</th>
        <th scope="col" style="padding: 2px">Stock maximo</th>
        <th scope="col" style="padding: 2px">Estatus</th>
        <th scope="col" style="padding: 2px">Editar</th>
        <?php
        //if($_SESSION['tipodeempleado']=='Gerente'){
        ?>
        <th scope="col">Borrar</th>
        <?php
            //}
        ?>
      </tr>
    </thead>
    <tbody>
      <?php
        //foreach($productos as $producto){
      ?>
      <tr>
          <!--<td><img src="../../imagenes/producto/<?php //echo $producto['nomb_imagen_principal'] ?>" width="50px" alt=""></td>
          <td><img src="../../imagenes/producto/<?php //echo $producto['nomb_imagen_carrito'] ?>" width="50px" alt=""></td>
          <td><img src="../../imagenes/producto/<?php //echo $producto['nomb_imagen_mini'] ?>" width="50px" alt=""></td>-->
          <td><?php //echo $producto['codigojuguete'] ?></td>
          <td><?php //echo $producto['nombrejuguete'] ?></td>
          <td><?php //echo $producto['preciounitario'] ?></td>
          <td><?php //echo $producto['marca'] ?></td>
          <td><?php //echo $producto['genero'] ?></td>
          <td><?php //echo $producto['categoria'] ?></td>
          <td><?php //echo $producto['descripcion'] ?></td>
          <td><?php //echo $producto['existencia'] ?></td>
          <td><?php //echo $producto['stockminimo'] ?></td>
          <td><?php //echo $producto['stockmaximo'] ?></td>
          <td><?php //echo $producto['estatus'] ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="#<?php //echo $producto['codigojuguete'] ?>">Editar</a></td>
          <?php
                //if($_SESSION['tipodeempleado']=='Gerente'){
            ?>
          <td><a href="#<?php //echo $producto['codigojuguete'] ?>">Borrar</a></td>
          <?php
        //}
      ?>
      </tr>
      <?php
        //}
    ?>
    </tbody>
  </table>



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
