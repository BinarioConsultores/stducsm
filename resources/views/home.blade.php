@extends('layouts.plantilla')

@section('contenido')
    <div class="content">
        <div class="page-layout simple full-width">
            <!-- HEADER -->
            <div class="page-header bg-secondary text-auto p-6">
                <span class="h2">Bienvenido al Sistema</span>
            </div>
            <!-- / HEADER -->
            <!-- CONTENT -->
            <div class="page-content p-6">
                <!-- DEMO CONTENT -->
                <!-- DEMO CONTENT -->
                <div class="demo-content">
                    <h5><strong>Usuario :</strong>{{Auth::user()->name}}</h5>
                    <h5><strong>Área de Trabajo :</strong>{{Auth::user()->Area->area_desc}}</h5>
                    <h5><strong>Tipo de Usuario :</strong>{{Auth::user()->TipoUsuario->tusu_desc}}</h5>
                </div>
                <!-- / DEMO CONTENT -->
                <!-- / DEMO CONTENT -->
            </div>
            <!-- / CONTENT -->
        </div>
    </div>
@endsection