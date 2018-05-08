@extends('layouts.plantilla')

@section('contenido')

<div id="register-v2" class="row no-gutters">

    <div class="intro col-12 col-md">

        <div class="d-flex flex-column align-items-center align-items-md-start text-center text-md-left py-16 py-md-32 px-12">

            <div class="logo bg-secondary mb-8">
                <span>U</span>
            </div>

            <div class="title">
                Bienvenido al STD-UCSM
            </div>

            <div class="description pt-2">
                Sistema de Trámite y Seguimiento Documentario de la Universidad Católica de Santa María
            </div>

        </div>
    </div>

    <div class="form-wrapper col-12 col-md-auto d-flex justify-content-center p-4 p-md-0">

        <div class="form-content md-elevation-8 h-100 bg-white text-auto py-16 py-md-32 px-12">

            <div class="title h5">Crear una cuenta</div>

            <div class="description mt-2">Llena los campos a continuación</div>

            <form name="registerForm" novalidate class="mt-8" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group mb-4">
                    <input type="text" class="form-control" id="registerFormInputName" aria-describedby="nameHelp" name="name" />
                    <label for="registerFormInputName">Nombres</label>
                </div>

                <div class="form-group mb-4">
                    <input type="text" class="form-control" id="apellido" aria-describedby="nameHelp" name="apellido" />
                    <label for="apellido">Apellidos</label>
                </div>

                <div class="form-group mb-4">
                    <input type="text" class="form-control" id="dni" aria-describedby="nameHelp" name="dni" />
                    <label for="dni">DNI</label>
                </div>

                <div class="form-group mb-4">
                    <input type="email" class="form-control" id="registerFormInputEmail" aria-describedby="emailHelp" name="email" />
                    <label for="registerFormInputEmail">E-mail</label>
                </div>

                <div class="form-group mb-4">
                    <input type="password" class="form-control" id="password" name="password" />
                    <label for="password">Contraseña</label>
                </div>

                <div class="form-group mb-4">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
                    <label for="password_confirmation">Confirmar Contraseña</label>
                </div>

                <div class="form-group mb-4">
                    <label for="area_id">Eliga un Área</label>
                    <select class="form-control form-control-lg" name="area_id" id="area_id">
                        @foreach($areas as $area)
                            <option value="{{$area->area_id}}">{{$area->area_desc}}</option>
                        @endforeach
                    </select>
                    
                </div>
                
                <div class="form-group mb-4">
                    <label for="tusu_id">Confirmar Contraseña</label>
                    <select class="form-control form-control-lg" name="tusu_id" id="tusu_id">
                        @foreach($tipousuarios as $tipousuario)
                            <option value="{{$tipousuario->tusu_id}}">{{$tipousuario->tusu_desc}}</option>
                        @endforeach
                    </select>
                    
                </div>


                <button type="submit" class="submit-button btn btn-block btn-secondary my-4 mx-auto" aria-label="LOG IN">
                    CREATE MY ACCOUNT
                </button>

            </form>

            <div class="login d-flex flex-column flex-sm-row align-items-center justify-content-center mt-8 mb-6 mx-auto">
                <span class="text mr-sm-2">Already have an account?</span>
                <a class="link text-secondary" href="pages-auth-login-v2.html">Log in</a>
            </div>

        </div>
    </div>
</div>
@endsection