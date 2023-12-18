@extends('adminlte::page')

@section('title', 'Reservar Cita')

@section('content_header')
    <br>
@stop

@section('content')
    
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0" style="color:#16a085"><b>RESERVAR NUEVA CITA</b></h3> <hr>
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

            <form action="{{route('reservar.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="specialties">Especialidades:</label>
                    <div class="col-sm-10">
                        <select class="form-control js-example-basic-multiple" name="specialties[]" multiple="multiple" required>
                            @foreach($specialties as $specialty)
                                <option value="{{ $specialty->id }}" {{ in_array($specialty->id, $selectedSpecialties) ? 'selected' : '' }}>
                                    {{ $specialty->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('specialties')
                            <span class="text-danger">
                                <span>*{{ $message }}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="doctors">Médicos:</label>
                    <div class="col-sm-10">
                        <select class="form-control js-example-basic-multiple" name="doctors[]" multiple="multiple" required>
                            @foreach($doctors as $doctor)
                                <option value="{{ $doctor->id }}" {{ in_array($doctor->id, old('doctors', [])) ? 'selected' : '' }}>
                                    {{ $doctor->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('doctors')
                            <span class="text-danger">
                                <span>*{{ $message }}</span>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="cedula">Fecha:</label>
                    <div class="col-sm-10">
                        <input type="text" name="datetimes" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="address">Hora de atención:</label>
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
                    <label class="col-sm-2 col-form-label" for="phone">Tipo de consulta:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" required>
                        @error('phone')
                            <span class="text-danger">
                                <span>*{{$message}}</span>
                            </span>
                        @enderror
                    </div>
                </div>
                <input type="submit" class="btn btn-outline-info" value="Guardar">
            </form>
        </div>
    </div>
    
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@stop

@section('js')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                theme: "classic"
            });
        });
    </script>


    <script>
        $(function() {
            $('input[name="datetimes"]').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        });
    </script>
@stop