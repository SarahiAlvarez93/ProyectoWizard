<?php
/*
    $venta = new VentaCRUD();
    $ventae = null;
    if(isset($_GET['codigoventae'])){
        $venta->set_codigoventa($_GET['codigoventae']);
        $ventae = $venta->read_by_id();
        //print_r($ventae);
        echo "
        <script>
        $(document).ready(function(){
        $('#exampleModal').modal('show');
        });
        </script>
        ";

    }
    $ventab = null;
    if(isset($_GET['codigoventab'])){
        $venta->set_codigoventa($_GET['codigoventab']);
        $ventab = $venta->read_by_id();
        //print_r($ventab);
        echo "
        <script>
        $(document).ready(function(){
        $('#exampleModal').modal('show');
        });
        </script>
        ";
    }
    */
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!-- Button trigger modal -->
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Registrar venta
  <br>
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <!-- novalidate action="../../../backend/controladores/venta_controlador.php" -->
    <form class="needs-validation" novalidate action=""
    method="GET" enctype="multipart/form-data">
    <input type="hidden" id="operation" name="operation"
    value="<?php //echo ($ventab!=null)?'delete':(($ventae!=null)?'update':'create') ?>">
    <?php
    /*if ($ventab!=null){
        $ventae=$ventab;
    }*/
    ?>
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><img src="images/logowizard.png" alt="">Registro de ventas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<p>Aquí va el contenido del formulario de ventas, el esqueleto lo tenemos en proveedores</p>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<h1>Data de venta</h1>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Código de la venta</th>
        <th scope="col">Código del cliente</th>
        <th scope="col">Código del empleado</th>
        <th scope="col">Fecha de venta</th>
        <th scope="col">Cantidad vendida</th>
        <th scope="col">Total de la venta</th>
        <th scope="col">Editar</th>
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
      //foreach ($ventas as $venta) {
      ?>
        <tr>
          <td><?php //echo $venta['codigoventa'] ?></td>
          <td><?php //echo $venta['codigocliente'] ?></td>
          <td><?php //echo $venta['fecha'] ?></td>
          <td><?php //echo $venta['total'] ?></td>
          <td></td>
          <td></td>
          <td><a href="#<?php //echo $venta['codigoventa'] ?>">Editar</a></td>
          <?php
          //if ($_SESSION['tipodeempleado'] == 'Gerente') {
          ?>
            <td><a href="#<?php //echo $venta['codigoventa'] ?>">Borrar</a></td>
          <?php
         // }
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
