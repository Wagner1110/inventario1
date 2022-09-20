@extends('plantilla')
@section('contenido')


<div class="row">
    <div class="col-12">
    <div class="card-body">
    <table id="example1" class="table table-white table-striped">
    <thead>
      <tr>
        <th >ID</th>
        <th >Codigo</th>
        <th >Nombre</th>
        <th >Precio</th>
        <th >Descripcion</th>
        <th >Cantidad</th>
        <th >Fecha</th>
        <th >Acciones</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($datos as $dat)
        <tr>
            <td>{{ $dat->id }}</td>
            <td>{{ $dat->codigo_barras }}</td>
            <td>{{ $dat->nombre }}</td>
            <td>Q. {{ $dat->precio }}</td>
            <td>{{ $dat->descripcion }}</td>
            <td>{{ $dat->cantidad }}</td>
            <td>{{ $dat->updated_at }}</td>
            <td>
                
              <a href ="{{route('datos.edit', $dat->id) }}" class="btn btn-warning" title="editar"><i class="fas fa-user-edit"></i></a>
              <a href ="{{route('datos.delete', $dat) }}" class="btn btn-danger" title="eliminar"><i class="fas fa-trash"></i></a>  

            </td>
           </tr>
           @endforeach
        </tbody>
    </table>
</div> 
</div>
  </div>
@endsection