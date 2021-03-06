@extends('layouts.headerAdmin')

@section('title')
    Sistema de patentes - Administrador
@endsection

@push('styles')
    <style>

    </style>
@endpush

@section('subtitulo')
<h5 class="text-center" style="color: white">Sistema de apoyo en el Registro de Patentes</h6>
@endsection
@section('menuNavBar')
<a href="{{ route('register') }}">
    <i class="fas fa-user-plus fa-4x" style="color:white"></i>
</a>
@endsection

@section('main')
    <div class="row">
        <div class="col-sm-12 col-md-6 ">

            <div class="card m-3">
                <div class="card-header color-headerCard">Para acceder a infopatente necesitas tener una cuenta activa</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="card-body">
                        <div class="item item-label mb-2">
                            <div class="wrapper mb-4 mt-4">
                                <label for="">Correo</label>
                                <input id="email" type="email" class="form-control   @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="item item-label">
                            <div class="wrapper">
                                <label for="">correo</label>
                                <input id="password" type="password" class="" name="password" required
                                    autocomplete="current-password">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <div class="item item-label mb-2">
                            <div class="wrapper mb-4 ">
                                <label for="" id="password">Contrase??a</label>
                                <input id="password" type="password"
                                    class="form-control form-control-sm  @error('password') is-invalid @enderror" name="password" id="el4"
                                    required autocomplete="current-password">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex align-center mt-3">
                            <button type="submit" class="btnLogin">
                                INICIAR SESION
                            </button>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link mt-5" href="{{ route('password.request') }}">
                               olvide mi contrase??a
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">

            <div class="">
                <div class="card p-4">
                    <div class="card-content" style="overflow-y: auto; max-height: 80vh;">
                        {{-- <div class="row"> --}}

                        <div class="p-3 mb-3 bg-primary d-flex align-items-center justify-content-center">
                                    {{-- <a href="{{ route('download') }}" class="text-white text-center">Descargar app</a> --}}
                                    <a href="{{ route('correo.download') }}" class="text-white text-center">Descargar app</a>
                        </div>
                            {{-- <div class="col-md-6"> --}}
                            <div class="text-center mb-3">
                                <h2 class="card-title text-center">??Que es Infopatente?</h2>
                            </div>

                            {{-- <div class="col-md-6"> --}}
                            <div class="ms-1">
                                <h6><b>Infopatente es un sistema para el apoyo al registro de patentes.<br>
                                        Los servicios que proporciona son los siguientes:</b></h6>
                            </div>
                        {{-- </div> --}}
                        <div class="row ms-2">
                            <div class="col-md-6 ms-2">
                                <h6 class="ms-2"><b>Gu??a estructurada para el llenado de informaci??n general de la patente.</b></h6>
                                <ul>
                                    <li><i class="fas fa-check"></i> Titulo de la patente</li>
                                    <li><i class="fas fa-check"></i> Numero de Autores</li>
                                    <li><i class="fas fa-check"></i> Pa??s de aplicaci??n</li>
                                    <li><i class="fas fa-check"></i> Representante legal</li>
                                    <li><i class="fas fa-check"></i> Tipo de aplicaci??n</li>
                                    <li><i class="fas fa-check"></i> Estrategia de solicitud</li>
                                    <li><i class="fas fa-check"></i> Tarifa de descuento</li>
                                    <li><i class="fas fa-check"></i> Solicitante</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6><b>Apoyo en la redacci??n de la Solicitud de Patente.</b></h6>
                                <ul>
                                    <li><i class="fas fa-check"></i> Resumen de la invenci??n</li>
                                    <li><i class="fas fa-check"></i> Antecedentes de la invenci??n</li>
                                    <li><i class="fas fa-check"></i> Realizaci??n preferente / Sumario</li>
                                    <li><i class="fas fa-check"></i> Breve Descripci??n de los Dibujos</li>
                                    <li><i class="fas fa-check"></i> Descripci??n Detallada del invento</li>
                                    <li><i class="fas fa-check"></i> Reivindicaciones</li>
                                    <li><i class="fas fa-check"></i> Objeto / Campo T??cnico de la invenci??n
                                    </li>
                                    <li><i class="fas fa-check"></i> Dibujos</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6><b>Informacion administrativa.</b></h6>
                                <ul>
                                    <li><i class="fas fa-check"></i> Acceso al sistema de internet PASE del
                                        IMPI</li>
                                </ul>
                            </div>
                            <div class=" col-md-6">
                                <h6><b>B??squeda de Arte Previo relacionado.</b></h6>
                                <ul>
                                    <li><i class="fas fa-check"></i> Descripci??n del proceso de b??squeda</li>
                                    <li><i class="fas fa-check"></i> B??squedas Nuevas</li>
                                    <li><i class="fas fa-check"></i> B??squedas previamente guardadas</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>En cada elemento se da una descripci??n de lo que hay que hacer o escribir. En el caso de
                                    los
                                    elementos de la Solicitud de Patente se proporcionan ejemplos de estos elementos en
                                    patentes
                                    otorgadas en el ??rea similar a la patente que se esta elaborando.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection



@push('scripts')
    <script>
        $(document).ready(function() {
            $('input').each(function() {
                $(this).on('focus', function() {
                    $(this).parent('.wrapper').addClass('active');
                });
                $(this).on('blur', function() {
                    if ($(this).val().length === 0) {
                        $(this).parent('.wrapper').removeClass('active');
                    }
                });
                if ($(this).val() !== '') $(this).parent('.wrapper').addClass('active');
            });
        });
    </script>
@endpush
