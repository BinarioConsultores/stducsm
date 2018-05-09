@extends('layouts.plantilla')

@section('contenido')
<div class="content">
    <div id="mail" class="page-layout carded left-sidebar">

        <div class="top-bg bg-secondary"></div>

        <div class="page-content-wrapper">

            <aside class="page-sidebar" data-fuse-bar="mail-sidebar" data-fuse-bar-media-step="md">
                <!-- HEADER -->
                <div class="header d-flex flex-column justify-content-between p-6 bg-secondary text-auto">

                    <div class="logo d-flex align-items-center pt-7">
                        <i class="icon-email mr-4"></i>
                        <span class="logo-text h4">Bandeja</span>
                    </div>
                    <div class="account">
                        <div class="title">{{Auth::user()->name}}</div>
                    </div>

                </div>
                <!-- / HEADER -->

                <div>

                    <div class="p-6">
                        <button type="button" class="btn btn-secondary btn-block">Nuevo Trámite</button>
                    </div>

                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link ripple" href="#">
                                <i class="icon s-4 icon-inbox"></i>
                                <span>Bandeja</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link ripple" href="#">
                                <i class="icon s-4 icon-send"></i>
                                <span>Derivados</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link ripple" href="#">
                                <i class="icon s-4 icon-delete"></i>
                                <span>En archivo</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </aside>

            <!-- CONTENT -->
            <div class="page-content">
                <!-- HEADER -->
                <div class="header d-flex flex-column justify-content-center bg-secondary text-auto">

                    <div class="search-bar row align-items-center no-gutters bg-white text-auto">

                        <button type="button" class="sidebar-toggle-button btn btn-icon d-block d-lg-none" data-fuse-bar-toggle="mail-sidebar">
                            <i class="icon icon-menu"></i>
                        </button>

                        <i class="icon-magnify s-6 mx-4"></i>

                        <input class="search-bar-input col" type="text" placeholder="Search for an e-mail or contact">

                    </div>
                </div>
                <!-- / HEADER -->

                <div class="page-content-card">

                    <!-- CONTENT TOOLBAR -->
                    <div class="toolbar row no-gutters align-items-center p-4 p-sm-6">

                        <div class="col">

                            <div class="row no-gutters align-items-center">

                                <div class="col-auto">

                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" />
                                        <span class="custom-control-indicator"></span>
                                    </label>

                                </div>

                                <div class="action-buttons col">

                                    <div class="row no-gutters align-items-center flex-nowrap d-none d-xl-flex">

                                        <div class="divider-vertical"></div>

                                        <button type="button" class="btn btn-icon" aria-label="archive">
                                            <i class="icon icon-archive"></i>
                                        </button>

                                        <button type="button" class="btn btn-icon" aria-label="spam">
                                            <i class="icon icon-alert-octagon"></i>
                                        </button>

                                        <button type="button" class="btn btn-icon" aria-label="delete">
                                            <i class="icon icon-delete"></i>
                                        </button>

                                        <div class="divider-vertical"></div>

                                        <button type="button" class="btn btn-icon" aria-label="move to">
                                            <i class="icon icon-folder"></i>
                                        </button>

                                        <button type="button" class="btn btn-icon" aria-label="labels">
                                            <i class="icon icon-label"></i>
                                        </button>

                                        <button type="button" class="btn btn-icon" aria-label="move to">
                                            <i class="icon icon-folder"></i>
                                        </button>

                                        <div class="divider-vertical"></div>

                                        <button type="button" class="btn btn-icon" aria-label="more">
                                            <i class="icon icon-dots-vertical"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">

                            <div class="row no-gutters align-items-center">

                                <span class="page-info px-2 d-none d-sm-block">1 - 100 of 980</span>

                                <button type="button" class="btn btn-icon">
                                    <i class="icon icon-chevron-left"></i>
                                </button>

                                <button type="button" class="btn btn-icon">
                                    <i class="icon icon-chevron-right"></i>
                                </button>

                                <button type="button" class="btn btn-icon">
                                    <i class="icon icon-settings"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- / CONTENT TOOLBAR -->

                    <div class="thread-list">

                        <div class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 unread">

                            <label class="col-auto custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-indicator"></span>
                            </label>

                            <div class="info col px-4">

                                <div class="name row no-gutters align-items-center">

                                    <img class="avatar mr-2" alt="Alice Freeman" src="../assets/images/avatars/alice.jpg" />

                                    <span class="">Ángela Ramos / Secretaría / Mesa de Partes</span>

                                    <i class="icon-paperclip has-attachment s-4"></i>

                                </div>

                                <div class="subject">
                                    Solicitud de cambio de carrera
                                </div>

                                <div class="message">

                                    Se solicita el cambio de carrera del alumno Juan Soto Benavidez con código...
                                    <div class="labels">

                                        <div class="label badge badge-default" style='background-color: #607D8B;'>
                                            prioridad 3
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                <div class="time mb-2">5 Mayo 2018</div>

                                <div class="actions row no-gutters">

                                    <button type="button" class="btn btn-icon">

                                        <i class="icon-star-outline"></i>

                                    </button>

                                    <button type="button" class="btn btn-icon">

                                        <i class="icon-label"></i>

                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 unread">

                            <label class="col-auto custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-indicator"></span>
                            </label>

                            <div class="info col px-4">

                                <div class="name row no-gutters align-items-center">

                                    <img class="avatar mr-2" alt="Lawrence Collins" src="../assets/images/avatars/vincent.jpg" />

                                    <span class="">Antonio Muñoz / Usuario Comun / Tesorería</span>

                                    <i class="icon-paperclip has-attachment s-4"></i>

                                </div>

                                <div class="subject">
                                    Oficio múltilple
                                </div>

                                <div class="message">

                                    Oficio múltiple de comunicado por suspensión de clases el día...
                                    
                                    <div class="labels">

                                        <div class="label badge badge-default" style='background-color: #EF6C00;'>
                                            prioridad 2
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                <div class="time mb-2">29 Abril 2018</div>

                                <div class="actions row no-gutters">

                                    <button type="button" class="btn btn-icon">

                                        <i class="icon-star-outline"></i>

                                    </button>

                                    <button type="button" class="btn btn-icon">

                                        <i class="icon-label-outline"></i>

                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 ">

                            <label class="col-auto custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-indicator"></span>
                            </label>

                            <div class="info col px-4">

                                <div class="name row no-gutters align-items-center">

                                    <img class="avatar mr-2" alt="Judith Burton" src="../assets/images/avatars/joyce.jpg" />

                                    <span class="">Jorge Garnica / Usuario Común / Informática</span>

                                    <i class="icon-paperclip has-attachment s-4"></i>

                                </div>

                                <div class="subject">
                                    Corte de la red Wi-fi en la universidad
                                </div>

                                <div class="message">

                                    El día 9/6/2018 se realizará un corte de toda la red wi-fi a las 11:00 am....
                                    <div class="labels">

                                        <div class="label badge badge-default" style='background-color: #E91E63;'>
                                            prioridad 1
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                                <div class="time mb-2">4 Mayo 2018</div>

                                <div class="actions row no-gutters">

                                    <button type="button" class="btn btn-icon">

                                        <i class="icon-star-outline"></i>

                                    </button>

                                    <button type="button" class="btn btn-icon">

                                        <i class="icon-label-outline"></i>

                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / CONTENT -->

        </div>
    </div>
</div>
@endsection