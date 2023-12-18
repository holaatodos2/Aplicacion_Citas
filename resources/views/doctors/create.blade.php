
@extends('adminlte::page')

@section('title', 'Agregar Médico')

@section('content_header')
    <h2 class="text-left" style="color:#16a085; margin-left:20px"><b>Agregar Médico</b></h2> <hr>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('doctors.store')}}" method="POST" >
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                        @error('name')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="specialties">Especialidades:</label>
                    <div class="col-sm-10">
                        <select class="form-control js-example-basic-multiple" name="specialties[]"  multiple="multiple" required>
                            @foreach($specialties as $specialty)
                                <option value="{{$specialty->id}}" {{in_array($specialty->id, old('specialties', [])) ? 'selected' : ''}}>{{$specialty->name}}</option>
                            @endforeach
                        </select>
                        @error('specialties')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="email">Correo:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
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
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" required>
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
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" required maxlength="9" minlength="9">
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
                        <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni')}}" required maxlength="8" minlength="8">
                        @error('dni')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="password">Contraseña:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" value="" required>
                        @error('password')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="password_confirmation">Confirmar contraseña:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-outline-info" value="Agregar Médico">
                    <a href="{{route('doctors.index')}}" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                theme: "classic"
            });
        });
    </script>
@stop