<?php
  /*$empleado =new EmpleadoCRUD();   //va a conectar a base de datos
  $empleadoe=null;  //si aqui la variable si es proveedore y este recibira informacion
  if(isset($_GET['codigoe'])){
    $empleado->set_codigo($_GET['codigoe']);
    //llamar la funcion para hacer la consulta
    $empleadoe=$empleado->read_by_id();
    //print_r($empleadoe);
    echo "
    <script>
      $(document).ready(function(){
      $('#exampleModal').modal('show');
      });
    </script>
    ";
  }

  $empleadob=null;  //si aqui la variable si es proveedorb y este recibira informacion
  if(isset($_GET['codigob'])){
    $empleado->set_codigo($_GET['codigob']);
    //llamar la funcion para hacer la consulta
    $empleadob=$empleado->read_by_id();
    //print_r($empleadob);
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
<center>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Registrar Empleado
    </button>
</center>
<br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><img src="images/logowizard.png" alt="">Registro de Empleados</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- novalidate action="../../../backend/controladores/empleado_controlador.php" -->
                <form class="needs-validation" novalidate action=""
                method="POST" enctype="multipart/form-data">
                <input type="hidden" id="operation" name="operation"
                value="<?php //echo ($empleadob!=null)?'delete':(($empleadoe!=null)?'update':'create') ?>">
                <?php
                /*if ($empleadob!=null){
                    $empleadoe=$empleadob;
                }*/
                ?>




                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<h1>Data de Empleado</h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Fotografia</th>
      <th scope="col">Codigo Empleado </th>
      <th scope="col">Nombre Empleado</th>
      <th scope="col">Tipo de empleado </th>
      <th scope="col">Contraseña</th>
      <th scope="col">Estatus</th>
      <th scope="col">Nombre de la Fotografía</th>

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
        //foreach($empleados as $empleado){
    ?>
    <tr>
    <!--<th><img src="../../imagenes/empleado/<?php //echo $empleado['nomb_imagen'] ?>" width="50px" alt=""></th>-->
      <td><?php //echo $empleado['codigo'] ?></td>
      <td><?php //echo $empleado['nombre'] ?></td>
      <td><?php //echo $empleado['tipodeempleado'] ?></td>
      <td><?php //echo $empleado['contrasena'] ?></td>
      <td><?php //echo $empleado['estatus'] ?></td>
      <td><?php //echo $empleado['nomb_imagen'] ?></td>
      <td></td>

      <td><a href="#<?php //echo $empleado['codigo'] ?>">Editar</a></td>
      <?php
        //if($_SESSION['tipodeempleado']=='Gerente'){
      ?>
      <td><a href="#<?php //echo $empleado['codigo'] ?>">Borrar</a></td>
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
