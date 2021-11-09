<?php

use Illuminate\Support\Facades\Route;
use App\Models\Buy;
use App\Models\Suplier;
use App\Models\Sale;
use App\Models\Client;
use App\Models\Employe;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//PUBLICO
Route::view('/index', 'publico.landingpage');
Route::view('/catalogo', 'publico.catalogo');
Route::view('/detalle', 'publico.detalle');
Route::view('/carrito', 'publico.carrito');
Route::view('/cliente', 'publico.sesioncliente');
Route::view('/empleado', 'publico.sesionempleado');
Route::view('/perfil', 'publico.perfilcliente');

//PRIVADO
Route::view('/dashboard', 'privado.dashboard');
//DASHBOARDS
Route::view('/proveedordash', 'privado.proveedor');
Route::view('/clientedash', 'privado.cliente');
Route::view('/ventadash', 'privado.venta');
Route::view('/juguetedash', 'privado.juguete');
Route::view('/empleadodash', 'privado.empleado');
Route::view('/ventadeproductodash', 'privado.ventadeproducto');


//PRUEBAS DE DB//
//a quien se le hiso la venta y quien la vendio
Route::get('/pruebaclientemployesale', function () {
    $clients = Sale::find(1)->client;
    $employes = Sale::find(1)->employe;
    return dd($clients, $employes);
});
//ver que proveedor hiso una compra
Route::get('/pruebaBuys', function () {
    $supliers = Buy::find(1)->suplier;
    $employes = Buy::find(1)->employe;
    return dd($supliers, $employes);

});
//se vio el la compra y que producto fue con su cantidad.
Route::get('/productbuy', function () {
    $products = Buy::find(1)->products; //aca es objeto
    foreach ($products as $product) {  //esto sirve para ver la info de la comlumna intermedia pivot
        echo $product->pivot->quantity;
        echo $product->pivot->price;
        echo $product->pivot->subtotal;
    }
    return dd($products);

//trae la cantidad de piezas 1 que hay en transaciones

});

//trae los productos de las ventas 2
Route::get('/pruebasale', function () {
    $products = Sale::find(1)->products;
    foreach ($products as $product) {
        echo $product->pivot->quantity;
	echo $product->pivot->price;
	echo $product->pivot->subtotal;
    }
    return dd($products);

});
