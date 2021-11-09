<?php
  //$proveedor=new ProveedorCRUD();   //va a conectar a base de datos
  //$proveedore=null;  //si aqui la variable si es proveedore y este recibira informacion
  //if(isset($_GET['codigoe'])){
    //$proveedor->set_codigo($_GET['codigoe']);
    //llamar la funcion para hacer la consulta
    //$proveedore=$proveedor->read_by_id();
    //print_r($proveedore);
    //echo "
    //<script>
      //$(document).ready(function(){
      //$('#exampleModal').modal('show');
      //});
    //</script>
    //";
  //}

  //$proveedorb=null;  //si aqui la variable si es proveedorb y este recibira informacion
  //if(isset($_GET['codigob'])){
    //$proveedor->set_codigo($_GET['codigob']);
    //llamar la funcion para hacer la consulta
    //$proveedorb=$proveedor->read_by_id();
    //print_r($proveedorb);
    //echo "
    //<script>
      //$(document).ready(function(){
      //$('#exampleModal').modal('show');
      //});
    //</script>
   //";
  //}
?>
<!-- Button trigger modal -->

<script>
  $(document).ready(function(){
  $('#exampleModal').modal('show');
  });
</script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



<!-- Modal -->

  <center>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Registrar Proveedor
    </button></center>
    <br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="needs-validation" novalidate action=""
      method="GET" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-row">

            <p>Proveedor es la única tabla con un formulario, debido a que actualizaremos esta parte con la base datos</p>

              <div class="col-md-4 mb-3">
                  <h4 style="color: black;" for="validationCustom01">Codigo:</h4>
                  <input type="hidden" class="form-control" id="codigo" name="codigo"
                  value="">
                  <div class="valid-feedback">
                      Correcto!
                  </div>
                  <div class="invalid-feedback">
                      Ingresa un nombre valido.
                  </div>
              </div>
              <!--final de la primer columna-->

              <!--final de la segunda columna-->
              <div class="col-md-4 mb-3">
                  <h4 style="color: black;" for="validationCustom01">Nombre del Proveedor:</h4>
                  <input type="text" class="form-control" id="nombreproveedor" name="nombreproveedor"
                  value="">
                  <div class="valid-feedback">
                      Correcto!
                  </div>
                  <div class="invalid-feedback">
                      Ingresa una marca valida.
                  </div>
              </div>

              <div class="col-md-4 mb-3">
                      <br>
                      <h4 style="color: black;" for="validationCustom01">Marca:</h4>
                      <input type="text" class="form-control" id="marca" name="marca"
                      value="">
                      <div class="valid-feedback">
                          Correcto!
                      </div>
                      <div class="invalid-feedback">
                          Ingresa un número valido.
                      </div>
                  </div>

                  <div class="col-md-4 mb-3">
                      <br>
                      <h4 style="color: black;" for="validationCustom01">Telefono:</h4>
                      <input type="text" class="form-control" id="telprov" name="telprov"
                      value="" >
                      <div class="valid-feedback">
                          Correcto!
                      </div>
                      <div class="invalid-feedback">
                          Ingresa un número valido.
                      </div>
                  </div>

                  <!--final de la primer columna-->
                  <div class="col-md-4 mb-3">
                      <br>
                      <h4 style="color: black;" for="validationCustom02">Estatus:</h4>
                      <input type="text" class="form-control" id="estatus" name="estatus"
                      value="">
                      <div class="valid-feedback">
                          Correcto!
                      </div>
                      <div class="invalid-feedback">
                          Ingresa un correo valido.
                      </div>
                  </div><br>


              <br>


          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<h1>Data de Proveedor</h1>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">Codigo</th>
      <th scope="col">Nombre Proveedor</th>
      <th scope="col">Marca</th>
      <th scope="col">Telefono</th>
      <th scope="col">Estatus</th>
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
    //foreach($proveedores as $proveedor){
  ?>
    <tr>

      <td><?php //echo $proveedor['codigo'] ?></td>
      <td><?php //echo $proveedor['nombreproveedor'] ?></td>
      <td><?php //echo $proveedor['marca'] ?></td>
      <td><?php //echo $proveedor['telprov'] ?></td>
      <td><?php //echo $proveedor['estatus'] ?></td>
      <td><a href="#<?php //echo $proveedor['codigo'] ?>">Editar</a></td>
      <?php
        //if($_SESSION['tipodeempleado']=='Gerente'){
      ?>
      <td><a href="#<?php //echo $proveedor['codigo'] ?>">Borrar</a></td>
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
