
@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h2 class="text-center" style="color:#16a085"><b>PACIENTES</b></h2> <hr>
@stop

@section('content')

    @if(session('success-create'))
        <div class="alert alert-info text-center">
            {{session('success-create')}}
        </div>
    @elseif(session('success-update'))
        <div class="alert alert-success text-center">
            {{session('success-update')}}
        </div>
    @elseif(session('success-delete'))
        <div class="alert alert-warning text-center">
            {{session('success-delete')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    @can('patients.create')
                        <a href="{{route('patients.create')}}" class="btn btn-outline-light" style="background-color: #16a085"><b>Agregar Paciente</b></a>
                    @endcan
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="{{route('patients.index')}}" method="GET">
                        <div class="mb-3 row">
                            <div class="col-sm-9">
                                <input type="text" name="filterValue" placeholder="Buscar por nombre de paciente" class="form-control rounded border-primary text-secondary">
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-info"><b>Buscar</b></button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <img src="{{ asset('img/dino1.png') }}" alt="" height="50px" style="float: right">
                <img src="{{ asset('img/dino1.png') }}" alt="" height="50px" style="float: right">
                <img src="{{ asset('img/dino1.png') }}" alt="" height="50px" style="float: right">
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <img src="{{ asset('img/especialidad.png') }}" alt="" width="180px" height="400px" style="margin-top: 50px">
            </div>
            <div class="col-md-10">
                
                <div class="card-body">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>DNI</th>
                                <th class="text-center " colspan="3" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td><b>{{$patient->id}}</b></td>
                                    <td>{{$patient->name}}</td>
                                    <td>{{$patient->email}}</td>
                                    <td>{{$patient->phone}}</td>
                                    <td>{{$patient->dni}}</td>
                                    <td width='2px'>
                                            <a href="{{route('patients.show', $patient)}}" class="btn btn-outline-light btn-sm mb-2" style="background-color: #16a085">Mostrar</a>
                                        </td>
                                    <td width='5px'>
                                        @can('patients.edit')
                                            <a href="{{route('patients.edit', $patient)}}" class="btn btn-outline-light btn-sm mb-2" style="background-color: #16a085">Editar</a>
                                        @endcan
                                    </td>
                                    <td width='5px'>
                                        @can('patients.destroy')
                                            <form action="{{route('patients.destroy', $patient)}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar al médico {{$patient->name}}?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm " >Eliminar</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mt-3">
                        {{$patients->appends(["filterValue" => $filterValue])->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop