@extends('adminlte::page')

@section('title', 'Especialidades')

@section('content_header')
    <h2 class="text-center" style="color:#16a085"><b>ESPECIALIDADES</b></h2> <hr>
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
                    @can('specialties.create')
                        <a href="{{route('specialties.create')}}" class="btn btn-outline-light" style="background-color: #16a085"><b>Agregar especialidad</b></a>
                    @endcan
                    </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form action="{{route('specialties.index')}}" method="GET">
                        <div class="mb-3 row">
                            <div class="col-sm-9">
                                <input type="text" name="filterValue" placeholder="Buscar por nombre de especialidad" class="form-control rounded border-primary text-secondary">
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
                                <th>Nombre de Especialidad</th>
                                <th class="text-center " colspan="2" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($specialties as $specialty)
                                <tr>
                                    <td><b>{{$specialty->id}}</b></td>
                                    <td>{{$specialty->name}}</td>
                
                                    <td width='5px'>
                                        @can('specialties.edit')
                                            <a href="{{route('specialties.edit', $specialty)}}" class="btn btn-outline-light btn-sm mb-2" style="background-color: #16a085">Editar</a>
                                        @endcan
                                        </td>
                                    <td width='5px'>
                                        @can('specialties.destroy')
                                            <form action="{{route('specialties.destroy', $specialty)}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar al médico {{$specialty->name}}?')">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Eliminar" class="btn btn-outline-danger btn-sm">
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mt-3">
                        {{$specialties->appends(["filterValue" => $filterValue])->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop


