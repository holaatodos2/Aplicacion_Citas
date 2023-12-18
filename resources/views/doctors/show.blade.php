@extends('adminlte::page')

@section('title', 'Ver Médico')

@section('content_header')
    <h2 class="text-center" style="color:#16a085"><b>DATOS DEL MÉDICO</b></h2> <hr>
@stop

@section('content')

    <div class="card">
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
                                <th>Especialidades</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>DNI</th>
                                <th>Dirección</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>{{$doctor->id}}</b></td>
                                <td>{{$doctor->name}}</td>
                                
                                <td>
                                    @foreach($specialties as $specialty)
                                        {{$specialty->name}}
                                        @if(!   $loop->last){{ ', ' }}@endif
                                    @endforeach
                                </td>
                                <td>{{$doctor->email}}</td>
                                <td>{{$doctor->phone}}</td>
                                <td>{{$doctor->dni}}</td>
                                <td>{{$doctor->address}}</td>
                                <td>
                                    <button type="button" class="no-border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="img-boton">
                                            @if($doctor->photo == NULL)
                                                <img src="{{asset('img/default.png')}}" alt="" class="img-fluid rounded-circle">
                                            @else
                                                <img src="{{asset('storage/' . $doctor->photo)}}" alt="" class="img-fluid rounded-circle">
                                            @endif
                                        </div>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-right" style="margin-top: 30px; margin-right:30px">
                        <a href="{{route('doctors.index')}}" class="btn btn-outline-danger">Volver</a>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Foto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if($doctor->photo == NULL)
                                    <img src="{{asset('img/default.png')}}" alt="" class="img-panel rounded-circle">
                                @else
                                    <img src="{{asset('storage/' . $doctor->photo)}}" alt="" class="img-panel rounded-circle">
                                @endif
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/photo/photo.css')}}">
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@stop