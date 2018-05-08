@extends('layouts.plantilla')

@section('contenido')

<div id="login-v2" class="row no-gutters">

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

            <div class="title h5">Inicia sesión en tu cuenta</div>

            <div class="description mt-2">Si olvidas tu usuario y contraseña, contáctate con soporte técnico.</div>

            <form name="loginForm" class="mt-8" action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group mb-4">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder=" " />
                    <label for="email">Correo Electrónico</label>
                </div>

                <div class="form-group mb-4">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" />
                    <label for="password">Contraseña</label>
                </div>

                <div class="remember-forgot-password row no-gutters align-items-center justify-content-between pt-4">

                    <div class="form-check remember-me mb-4">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" aria-label="Remember Me" />
                            <span class="checkbox-icon"></span>
                            <span class="form-check-description">Recordar Contraseña</span>
                        </label>
                    </div>
                    <a href="#" class="forgot-password text-secondary mb-4">¿Olvidaste la contraseña?</a>

                </div>
                <button type="submit" class="submit-button btn btn-block btn-secondary my-4 mx-auto" aria-label="INGRESAR">
                    INGRESAR
                </button>
            </form>
        </div>
    </div>
</div>


@endsection