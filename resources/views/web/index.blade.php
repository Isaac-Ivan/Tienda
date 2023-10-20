@extends('layouts.admin-app')
@section('content-app')
<div class=" content panel">
    <div class="hide-window" id="inventariosComponent">
        <x-inventarios-component></x-inventarios-component>
    </div>
    <div class="hide-window" id="proveedoresComponent">
        <x-proveedores-component></x-proveedores-component>
    </div>
    <!-- <div  class="hide-window" id="pagosComponent ">
    <x-pagos-component></x-pagos-component>
</div> -->
</div>
@endsection
