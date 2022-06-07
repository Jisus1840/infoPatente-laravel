@extends('layouts.base_html')

@section('title')
    Sistema de patentes - Administrador
@endsection

@push('styles')
    <style>

    </style>
@endpush

@section('main')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="{{ asset('img/NuevaAplicacion.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">Nueva Aplicacion</h5>
                        <p class="card-text">Esta opción implica iniciar la entrada de datos para una nueva solicitud de
                            patente. Debes tener el título de la patente, así como el número e información de los
                            inventores, así como el tipo de patente
                            solicitada.<br> Por otro lado, el sistema le permite guardar la información en cualquier momento
                            y luego retroceder y continuar o cambiar los adtos que proporcionó.</p>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <a href=""><i class="fas fa-plus"></i> Crear Nueva Aplicación</a>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="{{ asset('img/UltimaPatenteAplicada.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><b>Ultima Patente Aplicada</b></h5>
                        <p class="card-text">En esta opción puede continuar trabajando en la última solicitud de
                            patente en la que trabajó en el sistema. Podra editar la informacion que haya llenado con
                            anterioridad</p>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <a href=""><i class="fas fa-calendar"></i> Consultar Ultima Patente Aplicada</a>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="{{ asset('img/PatentesAplicadas.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><b>Consultar Patentes Aplicadas</b></h5>
                        <p class="card-text">Esta opción enumera todas las solicitudes de patentes que se encuentran en
                            el sistema. Le muestra la lista y el estado actual de cada aplicación y le permite elegir qué
                            aplicaciones desea ver ahora.</p>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <a href=""><i class="fas fa-calendar"></i> Consultar Ultima Patente Aplicada</a>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="{{ asset('img/Patentes.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><b>Paginas para conculta de patentes aplicadas</b></h5>
                        <p class="card-text">Esta opción muestras distintas paginas en donde podras encontrar patentes ya registradas.
                            Podras revisar en todas ellas y darte una idea de lo que ya esta patentado.
                        </p>
                    </div>
                </div>
                <div class="card-footer border-success">
                    <a href=""><i class="fas fa-calendar"></i> Paginas para revisar patentes registradas</a>
                </div>
            </div>
        </div>
    </div>
@endsection
