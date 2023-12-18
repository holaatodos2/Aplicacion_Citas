@extends('adminlte::page')

@section('title', 'Horarios')

@section('content_header')
    <br>
@stop

@section('content')
    
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0" style="color:#16a085"><b>GESTIONAR HORARIOS</b></h3> <hr>
                </div>
                <div class="col text-right">
                        <a href="" class="btn btn-outline-light" style="background-color: #16a085">Guardar Cambios</a>
                </div>
            </div>
        </div>
        <div class="card-body">
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
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light"> 
                    <tr>
                        <th scope="col">Día</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Turno mañana</th>
                        <th scope="col">Turno tarde</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($days as $day)
                        <tr>
                            <th>{{$day}}</th>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="border-color: #16a085" >
                                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>   
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" name="" id="">
                                            @for ($i=8; $i<=11; $i++)
                                                <option value="">{{$i}}:00 AM </option>
                                                <option value="">{{$i}}:30 AM </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="" id="">
                                            @for ($i=8; $i<=11; $i++)
                                                <option value="">{{$i}}:00 AM </option>
                                                <option value="">{{$i}}:30 AM </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" name="" id="">
                                            @for ($i=2; $i<=11; $i++)
                                                <option value="">{{$i}}:00 PM </option>
                                                <option value="">{{$i}}:30 PM </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="" id="">
                                            @for ($i=2; $i<=11; $i++)
                                                <option value="">{{$i}}:00 PM </option>
                                                <option value="">{{$i}}:30 PM </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@stop