@extends('adminlte::page')

@section('title', 'Editar Paciente')

@section('content_header')
    <h2 class="text-left" style="color:#16a085; margin-left:20px"><b>EDITAR PACIENTE</b></h2> <hr>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('patients.update', $patient)}}" method="POST" >
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $patient->name)}}" required>
                        @error('name')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="email">Correo:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email', $patient->email)}}" required>
                        @error('email')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="address">Dirección:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address', $patient->address)}}" required>
                        @error('address')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="phone">Teléfono:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $patient->phone)}}" required maxlength="9" minlength="9">
                        @error('phone')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="dni">DNI:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni', $patient->dni)}}" required maxlength="8" minlength="8">
                        @error('dni')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-outline-info" value="Editar Paciente">
                    <a href="{{route('patients.index')}}" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    
@stop