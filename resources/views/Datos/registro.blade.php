@extends('plantilla')
@section('contenido')

<form action="{{ route('datos.guardar')}}" method="POST">
    @csrf  
<div class="col-md-11">
    <form>
    <div class="card-body">
    <div class="form-group">
        <label for="exampleInputEmail1">Codigo de Barras</label>
        <input type="number" class="form-control" name="codigo_barras" id="codigo_barras" >
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" >
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="num" class="form-control" name="precio" id="precio" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="num" class="form-control" name="cantidad" id="cantidad" >
            </div>

            <button type="Submit" class="btn btn-success">Registrar</button>

</div>
</div>
@endsection