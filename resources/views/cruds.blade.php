@extends('layout')

    @section('content')
    <div class="container">
        
        <a href="/agregar" class="btn btn-primary">CREAR</a>


    <table class="table table-dark table-striped mt-4">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Código</th>
          <th scope="col">Descripción</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <body>    
      @forelse ($cruds as $crud)
        <tr>
            <td>{{$crud->id}}</td>
            <td>{{$crud->codigo}}</td>
            <td>{{$crud->descripcion}}</td>
            <td>{{$crud->cantidad}}</td>
            <td>{{$crud->precio}}</td>
            <td>
            <form action="{{url("cruds/{$crud->id}") }}" method="POST">
              <a href="{{ route('cruds.editar', ['id'=> $crud->id])}}" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')   
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>          
            </td>        
        </tr>
        @empty
          <p>no hay elementos disponibles </br> <a href="/agregar">Agregar elementos</a></p>
        @endforelse
        
      </body>
    </table>
    </div>

    @endsection