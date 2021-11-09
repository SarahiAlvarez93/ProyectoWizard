

<div class="container-fluid"></div>
    <div class="row" style="width: 80%">
        <div class="col-sm-2">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ url("/proveedordash") }}">
                        <span data-feather="home"></span>
                        Proveedor
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url("/clientedash") }}">
                        <span data-feather="file"></span>
                        Cliente
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url("/ventadash") }}">
                        <span data-feather="shopping-cart"></span>
                        Venta
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url("/juguetedash") }}">
                        <span data-feather="users"></span>
                        Juguete
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url("/empleadodash") }}">
                        <span data-feather="bar-chart-2"></span>
                        Empleado
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url("/ventadeproductodash") }}">
                        <span data-feather="layers"></span>
                        Venta de Producto
                      </a>
                    </li>
                  </ul>



                </div>
              </nav>
        </div>
        <div class="col-sm-10">




                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Dashboard</h1>

                </div>


                <!--Aqui estaba el canvas-->

                <!--Aqui anda la tabla-->
                <!---->


                <!--Proveedor-->
                @yield('proveedor')
                <!--Cliente-->
                @yield('cliente')
                <!--Venta-->
                @yield('venta')
                <!--Juguete-->
                @yield('juguete')
                <!--Empleado-->
                @yield('empleado')
                <!--Venta Producto-->
                @yield('ventaproducto')



        </div>
    </div>
</div>




