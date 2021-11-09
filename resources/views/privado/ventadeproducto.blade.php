@extends('privado.dashboard')

@section('title', 'VentaProducto - WIZARD')

@section('venta')
<!--¿Porque es venta y no ventaprod? Yo también me lo pregunto...-->
    @parent
    @include('privado.seccionespriv.ventaprod')
@endsection
