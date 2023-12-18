@extends('adminlte::page')

@section('title', 'Editar especialidad')

@section('content_header')
    <h2 class="text-left" style="color:#16a085; margin-left:20px"><b>Editar especialidad</b></h2> <hr>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('specialties.update', $specialty)}}" method="POST" >
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="col-sm-2 col-form-label" for="name">Nombre de la especialidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{$specialty->name}}" required>
                        @error('name')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-outline-info" value="Modificar especialidad">
                    <a href="{{route('specialties.index')}}" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    
@stop