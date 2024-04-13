@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>LISTA DE CLIENTES</h3>
        <br>
        <!-- Button trigger modal -->
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Create">
        Nuevo
  </button>
        <div class="table-responsive">
            <br>
            <table class="table table-bordered border border-2 rounded" style="background-color: #f8f9fa;">
                <thead class="bg-dark text-white-50">
                    <tr>
                        <th scope="col" class="rounded">ID</th>
                        <th scope="col" class="rounded">NOMBRE</th>
                        <th scope="col" class="rounded">TELEFONO</th>
                        <th scope="col" class="rounded">CORREO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td scope="row" class="rounded">{{$cliente->id}}</td>
                        <td class="rounded">{{$cliente->nombre}}</td>
                        <td class="rounded">{{$cliente->telefono}}</td>
                        <td class="rounded">{{$cliente->correo}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$cliente->id}}">
                                Editar
                          </button>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$cliente->id}}">
                            Eliminar
                      </button>

                        </td>
                    </tr>
                    @include('cliente.info')
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('cliente.create')

    </div>
    <div class="col-md-2"></div>
</div>

@endsection






