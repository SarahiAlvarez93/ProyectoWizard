<style>
    .row{
        align-self: center;
        display: flex;
        justify-content: center;
    }
    .col{
        padding-block-start: 15px;
        padding-block-end: 15px;
    }
    button {
        margin: 15px;
    }
    input {
        margin: 15px;
    }
</style>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <div class="card-body text-center">

            <form class="form-signin" action="../../../backend/controladores/empleado_controlador.php" method="POST">
                <input type="hidden"  id="operation" name="operation"
                  value="login">

                  <h1 class="h3 mb-3 font-weight-normal">Por favor, ingrese su codigo y contraseña</h1>
                  <?php
                    //if(isset($_GET['mensaje'])){
                      //echo'<div class="alert alert-warning" role="alert">
                      //'.$_GET["mensaje"].'
                    //</div>';
                    //}
                    ?>

                  <label for="inputEmail" class="sr-only">Dirección de correo electrónico</label>
                  <input type="type" id="inputEmail" name="codigo" class="form-control" placeholder="Codigo de empleado" required autofocus>
                  <label for="inputPassword" class="sr-only">Contraseña</label>
                  <input type="password" id="inputPassword" name="contrasena" class="form-control" placeholder="Contraseña" required>


                  <div class="checkbox mb-3">
                    <label>
                      <!--Aqui estaba el recuerdame-->
                    </label>
                  </div>

                  <!--<button class="btn btn-lg btn-primary btn-block" type="button">Iniciar sesión</button><br>-->

                  <a href="{{ url('/dashboard') }}"><button class="btn btn-lg btn-primary btn-block" type="button">Ir al Dashboard</button></a><br>
                  <br>
                  <a href="{{url('/index')}}">Regresar</a><br>
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
                </form>

        </div>
      </div>
    </div>
</div>
