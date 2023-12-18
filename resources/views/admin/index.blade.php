@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="text-left" style="color: #5CBAA9; font-size:40px; "><img src="{{asset('img/img.png')}}" alt="" style="width: 75px "><b> CITA SANA</b></h1>
            </div>
            <div class="col-6">
                <h1 style="color: #5CBAA9" class="text-right">{{ now()->setTimezone('America/Lima')->format('d/m/Y') }}</h1>

            </div>
        </div>
    </div>


@stop

@section('content')
    <div class="text-center">
        <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('img/default.png')}}" alt="" width="200" height="200" class="rounded-circle">
    </div> 
    <br> <br>
    <h4 class="text-center">¡Hola! <b>{{ Auth::user()->name }}</b>🤚, desde aquí podrás administrar tus citas y realizarles un seguimiento😁.</h4>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="background-color: rgb(217, 217, 217)">
                    <div class="card-header text-center" style="background-color: #5CBAA9" >
                        <b>Gestionar Horario</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('img/calendario.png')}}" alt="" style="width: 50 " height="50">
                            <br> <br>
                            <a href="#" class="btn btn-outline-dark" style="background-color: #5CBAA9">Ir al panel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: rgb(217, 217, 217)">
                    <div class="card-header text-center" style="background-color: #5CBAA9">
                        <b>Realizar Cita</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('img/cita.png')}}" alt="" style="width: 50 " height="50">
                            <br> <br>
                            <a href="#" class="btn btn-outline-dark" style="background-color: #5CBAA9">Ir al panel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: rgb(217, 217, 217)">
                    <div class="card-header text-center" style="background-color: #5CBAA9">
                        <b>Mis Citas</b>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('img/mis.png')}}" alt="" style="width: 50 " height="50">
                            <br> <br>
                            <a href="#" class="btn btn-outline-dark" style="background-color: #5CBAA9">Ir al panel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop