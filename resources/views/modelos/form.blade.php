@extends('layouts.plantilla')
@section('contenido')
<div class="content">
	<div class="doc data-table-doc page-layout simple full-width">
        <!-- HEADER -->
        <div class="page-header bg-secondary text-auto p-6 row no-gutters align-items-center justify-content-between">
            <h2 class="doc-title" id="content">Formulario básico</h2>
        </div>
        <div class="page-content p-6">
            <div class="content container">
                <div class="row">
                	<div class="col-md-8 col-centered">
	                	<div class="profile-box latest-activity card">
	                        <header class="row no-gutters align-items-center justify-content-between bg-secondary text-auto p-4"> 
	                            <div class="title h6">Titulo</div>
	                            <div class="more text-muted">Subtitulo o helper</div>
	                        </header>

	                        <div class="content activities p-4">
	                            <form action="" method="POST">
	                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                                
	                                <div class="form-group">
	                                    <input type="text" class="form-control" name="sol_nombre" id="sol_nombre"  placeholder="Nombre de Solicitante" required>
	                                    <label for="sol_nombre"><i class="icon-account-box"></i> Nombre de Solicitante</label>
	                                </div>

	                                <fieldset class="form-group">
                                        <legend><i class="icon-account-box"></i> Radio buttons</legend>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                                <span class="radio-icon fuse-ripple-ready"></span>
                                                <span>Option one is this and that—be sure to include why it's great</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                                <span class="radio-icon fuse-ripple-ready"></span>
                                                <span>Option two can be something else and selecting it will deselect option one</span>
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                                                <span class="radio-icon fuse-ripple-ready"></span>
                                                <span>Option three is disabled</span>
                                            </label>
                                        </div>
                                    </fieldset>
                                    
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="checkbox-icon fuse-ripple-ready"></span>
                                            <span>Check me out</span>
                                        </label>
                                    </div>
	                                <div class="form-group">
                                        <label for="exampleFormControlSelect1"><i class="icon-account-box"></i>Example select</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
	                                <div class="row" id="divFilColNichos">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="pab_nrofil" class="form-control" id="pab_nrofil" placeholder="Ingrese el número de filas">
                                                <label for="pab_nrofil"><i class="icon-cellphone-android"></i> Número de Filas</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="pab_nrocol" class="form-control" id="pab_nrocol" placeholder="Ingrese el número de columnas">
                                                <label for="pab_nrocol"><i class="icon-cellphone-android"></i> Número de Columnas</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" />
                                        <label for="example-datetime-local-input"><i class="icon-cellphone-android"></i>Date and time</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2"><i class="icon-cellphone-android"></i>Example multiple select</label>
                                        <select multiple="" class="form-control" id="exampleFormControlSelect2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-color-input">Color</label>
                                        <input class="form-control" type="color" value="#563d7c" id="example-color-input" />
                                    </div>

	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <button type="button" id="btnLimpiar" class="btn btn-danger btn-block fuse-ripple-ready">Cancelar<i class=""></i></button>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <button  type="submit" class="btn btn-secondary btn-block fuse-ripple-ready">Siguiente <i class="icon-arrow-right"></i></button>
	                                        </div>    
	                                    </div>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-6 col-centered">
	                	<div class="profile-box latest-activity card">
	                        <header class="row no-gutters align-items-center justify-content-between bg-secondary text-auto p-4"> 
	                            <div class="title h6">Titulo</div>
	                            <div class="more text-muted">Subtitulo o helper</div>
	                        </header>

	                        <div class="content activities p-4">
	                            <form action="" method="POST">
	                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                                
	                                <div class="form-group">
	                                    <input type="text" class="form-control" name="sol_nombre" id="sol_nombre"  placeholder="Nombre de Solicitante" required>
	                                    <label for="sol_nombre"><i class="icon-account-box"></i> Nombre de Solicitante</label>
	                                </div>
	                                <div class="form-group">
	                                    <input type="text" class="form-control" name="sol_telefono"  id="sol_telefono"  placeholder="Ingrese su Telefono" required>
	                                    <label for="sol_telefono"><i class="icon-cellphone-android"></i> Telefono</label>
	                                </div>
	                                <div class="form-group">
	                                    <input type="text" class="form-control" name="sol_dir"  id="sol_dir"  placeholder="Ingrese su Direccion" required>
	                                    <label for="sol_dir"><i class="icon-map-marker-radius"></i> Direccion</label>
	                                </div>
	                                <div class="form-group">
	                                    <input pattern=".{8,8}" required title="Ingrese un D.N.I. válido" type="text" class="form-control" name="sol_dni" id="sol_dni"  placeholder="Ingrese su DNI">
	                                    <label for="sol_dni"><i class="icon-account-card-details"></i> DNI</label>
	                                </div>

	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <button type="button" id="btnLimpiar" class="btn btn-danger btn-block fuse-ripple-ready">Cancelar<i class=""></i></button>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <button  type="submit" class="btn btn-secondary btn-block fuse-ripple-ready">Siguiente <i class="icon-arrow-right"></i></button>
	                                        </div>    
	                                    </div>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
                    </div>
                    <div class="col-md-6 col-centered">
	                	<div class="profile-box latest-activity card">
	                        <header class="row no-gutters align-items-center justify-content-between bg-secondary text-auto p-4"> 
	                            <div class="title h6">Titulo</div>
	                            <div class="more text-muted">Subtitulo o helper</div>
	                        </header>

	                        <div class="content activities p-4">
	                            <form action="" method="POST">
	                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                                
	                                <div class="form-group">
	                                    <input type="text" class="form-control" name="sol_nombre" id="sol_nombre"  placeholder="Nombre de Solicitante" required>
	                                    <label for="sol_nombre"><i class="icon-account-box"></i> Nombre de Solicitante</label>
	                                </div>
	                                <div class="form-group">
	                                    <input type="text" class="form-control" name="sol_telefono"  id="sol_telefono"  placeholder="Ingrese su Telefono" required>
	                                    <label for="sol_telefono"><i class="icon-cellphone-android"></i> Telefono</label>
	                                </div>
	                                <div class="form-group">
	                                    <input type="text" class="form-control" name="sol_dir"  id="sol_dir"  placeholder="Ingrese su Direccion" required>
	                                    <label for="sol_dir"><i class="icon-map-marker-radius"></i> Direccion</label>
	                                </div>
	                                <div class="form-group">
	                                    <input pattern=".{8,8}" required title="Ingrese un D.N.I. válido" type="text" class="form-control" name="sol_dni" id="sol_dni"  placeholder="Ingrese su DNI">
	                                    <label for="sol_dni"><i class="icon-account-card-details"></i> DNI</label>
	                                </div>

	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <button type="button" id="btnLimpiar" class="btn btn-danger btn-block fuse-ripple-ready">Cancelar<i class=""></i></button>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <button  type="submit" class="btn btn-secondary btn-block fuse-ripple-ready">Siguiente <i class="icon-arrow-right"></i></button>
	                                        </div>    
	                                    </div>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection