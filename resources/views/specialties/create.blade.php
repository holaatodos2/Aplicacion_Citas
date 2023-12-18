@extends('adminlte::page')

@section('title', 'Crear especialidad')

@section('content_header')
    <h2 class="text-left" style="color:#16a085; margin-left:20px"><b>Agregar nueva especialidad</b></h2> <hr>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('specialties.store')}}" method="POST" >
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name">Nombre de la especialidad: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                        @error('name')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-outline-info" value="Crear especialidad">
                    <a href="{{route('specialties.index')}}" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    
@stop