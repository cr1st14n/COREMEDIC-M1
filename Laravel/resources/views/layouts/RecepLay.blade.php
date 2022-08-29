<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Meta information -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<!-- Title-->
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
	<link rel="shortcut icon" href="{{ asset('assets/ico/TM.ico') }}">
	<!-- CSS Stylesheet-->
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap-themes.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

	<!-- Styleswitch if  you don't chang theme , you can delete -->
	<link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="{{ asset('assets/css/styleTheme1.css') }}" />
	<link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="{{ asset('assets/css/styleTheme2.css') }}" />
	<link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="{{ asset('assets/css/styleTheme3.css') }}" />
	<link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="{{ asset('assets/css/styleTheme4.css') }}" />
	@yield('head')

</head>

<body class="leftMenu nav-collapse">
	<div id="wrapper">
		<div id="header">
			<div class="logo-area clearfix">
				<a href="#" class="logo"></a>
			</div>
			<!-- //logo-area-->
			<div class="tools-bar">
				<ul class="nav navbar-nav nav-main-xs">
					<li><a href="#" class="icon-toolsbar nav-mini"><i class="fa fa-bars"></i></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right tooltip-area">
					<li><a href="#" id="btn_conf_print" title="Configurar Impresora"><i class="fa fa-print"></i></a></li>
					<li class="hidden-xs hidden-sm"><a class="h-seperate">AREA : RECEPCION</a></li>

					<li><a href="#"><img alt="" src="" class="circle"></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
							<em><strong>Usuario Activo </strong>, {{ Auth::user()->usu_nombre }} - CI: {{ Auth::user()->usu_ci}} </em> <i class="dropdown-icon fa fa-angle-down"></i>
							<input type="text" id="UsuarioCI" value="{{ Auth::user()->usu_ci}}" hidden>
						</a>
						<ul class="dropdown-menu pull-right icon-right arrow">
							<li><a href="{{route('store_user_recepcion')}} "><i class="fa fa-user"></i> Perfil</a></li>
							<li class="divider"></li>
							<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									salir
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
						<!-- //dropdown-menu-->
					</li>
					<li class="visible-lg">
						<a href="#" class="h-seperate fullscreen" data-toggle="tooltip" title="Full Screen" data-container="body" data-placement="left">
							<i class="fa fa-expand"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- //tools-bar-->
		</div>
		<!-- //header-->
		<div id="main">
			@yield('refUbi')
			@if(Session::has('flash_message_correcto'))
			<div class="col-lg-8"></div>
			<div class="col-lg-4">
				<div class="alert bg-success">
					<strong>Exelente! </strong>{{ Session::get('flash_message_correcto')}}
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				</div>
			</div>
			@endif
			@if(Session::has('flash_message_rechazado'))
			<div class="col-lg-8"></div>
			<div class="col-lg-4">
				<div class="alert bg-danger">
					<strong>Alerta! </strong>{{ Session::get('flash_message_rechazado')}}
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				</div>
			</div>
			@endif
			<!-- //breadcrumb-->

			<div id="content" id="lay_contend">
				<div class="row">
					@yield('content')
				</div>
				<!-- //content > row-->
			</div>
		</div>
		<!-- //main-->

		<!--
		//////////////////////////////////////////////////////////////
		//////////     LEFT NAV MENU     //////////
		///////////////////////////////////////////////////////////
		-->
		<nav id="menu" data-search="close">
			<ul>
				<li><a href="{{route('recepcion.home')}} "><span><i class="icon fa fa-home"></i> Inicio </span></a></li>
				<li class="Label label-lg  text-center"> Gestionar Pacientes</li>
				<li><a href="{{route('form_buscar_paciente')}} "><span><i class="icon fa fa-search"></i> Buscar Paciente</span></a></li>
				<!-- <li><a href="{{route('index_paciente')}} "><span><i class="icon fa fa-pencil"></i> Afiliar Paciente</span></a></li> -->
				<li><a href="#" onclick="registerPaciente_1()"><span><i class="icon fa fa-pencil"></i> Afiliar Paciente</span></a></li>


				<li class="Label label-lg text-center">Gestionar Atencion</li>
				<!-- <li><a href="{{route('inf_atencion')}} "><span><i class="icon fa fa-book"></i> Paciente - Especialidad </span></a></li> -->
				<li><a href="{{route('reporte_index')}} "> <i class="icon  fa fa-bar-chart-o"></i>Informes / Reportes </a></li>
				<li><a href="{{route('notas-index')}} "> <i class="icon  fa fa-file-o"></i>Notas</a></li>
				<li><a href="#" id="btn_index_pagPantInfo"> <i class="icon fa fa-desktop"></i>Pantalla de información</a></li>


			</ul>
		</nav>
		<!-- //nav left menu-->



		<!--
		/////////////////////////////////////////////////////////////////
		//////////     RIGHT NAV MENU     //////////
		/////////////////////////////////////////////////////////////
		-->

		<!-- //nav right menu-->
		<div id="modal-confImprsora" class="modal fade">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title">Configuracion de Impresora Termica</h4>
			</div>
			<!-- //modal-header-->
			<div class="modal-body">
				<main role="main" class="container-fluid">
					<div class="row">
						<div class="col-12 col-lg-6">
							<strong>Nombre de impresora seleccionada: </strong>
							<p id="impresoraSeleccionada"></p>
							<div class="form-group">
								<select class="form-control" id="listaDeImpresoras"></select>
							</div>

						</div>
						<div class="col-12 col-lg-6">

							<button class="btn btn-primary btn-sm btn-block" id="btnRefrescarLista">Refrescar lista</button>
							<button class="btn btn-primary btn-sm btn-block" id="btnEstablecerImpresora">Establecer como predeterminada</button>
							<button class="btn btn-success btn-block" id="btnImprimir">Imprimir de prueba</button>

						</div>
						<div class="col-12 col-lg-12">
							<button class="btn btn-warning btn-sm" id="btnLimpiarLog">Limpiar log</button>
							<pre id="estado"></pre>
						</div>
					</div>
				</main>
			</div>
			<!-- //modal-body-->
		</div>
		<div id="md-form_create_paciente" class="modal fade md-stickTop " tabindex="-1" data-width="900">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" id=""></i></button>
				<h2><strong>Registro </strong>Nuevo Paciente</h2>
			</div>
			<form id="form_registerPaciente_1">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-lg-6">
						<section class="panel">
							<header class="panel-heading sm" data-color="theme-inverse">
								<h2>Datos personales</h2>
							</header>
							<div class="panel-body">
								<div class="form-horizontal" data-collabel="3" data-alignlabel="center">
									<div class="form-group">
										<label for="pa_ci" class="col-md-4 control-label">C.I./C.N.</label>
										<div class="col-md-6">
											<input id="pa_ci" type="text" class="form-control rounded" placeholder="Carnet o Certificado de nacimiento" name="pa_ci" maxlength="10" data-always-show="true" onkeypress="return soloNu(event)" onblur="limpia()">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Nombre </label>
										<div>
											<input id="pa_nombre" name="pa_nombre" type="text" class="form-control rounded" maxlength="30" data-always-show="false" onkeypress="return soloLe(event)" onblur="limpia()" required>

										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Apellido paterno</label>
										<div>
											<input id="pa_appaterno" name="pa_appaterno" type="text" class="form-control rounded" maxlength="30" data-always-show="false" onkeypress="return soloLe(event)" onblur="limpia()" required>

										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Apellido materno</label>
										<div>
											<input id="pa_apmaterno" name="pa_apmaterno" type="text" class="form-control rounded" maxlength="30" data-always-show="false" onkeypress="return soloLe(event)" onblur="limpia()">

										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Fecha de nacimiento</label>
										<div>
											<input id="pa_fechnac" name="pa_fechnac" type="date" class="form-control rounded" maxlength="30" data-always-show="false" required="date">


										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Sexo</label>
										<div>
											<ul class="iCheck" data-color="red">
												<li><input type="radio" name="pa_sexo" value="M" required="">
													<label>masculino</label>
												</li>
												<li><input type="radio" name="pa_sexo" value="F" required="">
													<label>femenino</label>
												</li>
											</ul>
										</div>

									</div>
									<div class="form-group">
										<label class="control-label">Pais de nacimiento</label>
										<div class="col-md-6">
											<input id="pa_pais_nac" name="pa_pais_nac" value="" type="text" class="form-control rounded" maxlength="30" onkeypress="return soloLe(event)" onblur="limpia()">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Ciudad de nacimiento</label>
										<div class="col-md-6">
											<input id="pa_ciudad_nac" name="pa_ciudad_nac" type="text" class="form-control rounded" maxlength="30" onkeypress="return soloLe(event)" onblur="limpia()">
										</div>
									</div>

								</div>
							</div>
						</section>
					</div>

					<!-- seguada columna -->
					<div class="col-lg-6">
						<section class="panel">
							<header class="panel-heading sm" data-color="theme-inverse">
								<h2>Datos referenciales</h2>
							</header>
							<div class="panel-body">
								<div class="form-horizontal" data-collabel="3" data-alignlabel="center">
									<div class="form-group">
										<label class="control-label">Estado Civil</label>

										<div class="col-md-6">
											<select id="pa_estado_civil" name="pa_estado_civil" class=" form-control show-menu-arrow" data-style="btn-theme-inverse" required>
												<option selected="true" value="Null">Seleccionar</option>
												<option value="Soltero">Soltero</option>
												<option value="Casado">Casado</option>
												<option value="Viudo">Viudo</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Telf/Cel:</label>
										<div>
											<input id="pa_telf" name="pa_telf" type="text" class="form-control rounded" maxlength="11" data-always-show="false" onkeypress="return soloNu(event)" onblur="limpia()">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Zona:</label>
										<div class="col-md-6">
											<input id="pa_zona" name="pa_zona" value="{{ old('pa_zona') }}" type="text" class="form-control rounded" maxlength="30" onkeypress="return soloLeNu(event)" onblur="limpia()">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Domicilio:</label>
										<div>
											<input id="pa_domicilio" name="pa_domicilio" value="{{ old('pa_domicilio') }}" type="text" class="form-control rounded" maxlength="200" onkeypress="return soloLeNu(event)" onblur="limpia()">
										</div>
									</div>
									<footer class="panel-footer">
										<button type="submit" class="btn btn-theme-inverse btn-block">Registrar</button>
									</footer>
								</div>
						</section>
					</div>
			</form>
		</div>
		<div id="md-form_create_cita" class="modal fade md-stickTop " tabindex="-1" data-width="1200">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" id=""></i></button>
				<h2><strong>Registro </strong>Atención Medica</h2>
			</div>
			<div class="row">
				<div class="col-lg-5">
					<div class=" panel-body">
						<table class="table table-bordered">
							<tbody id="contendJS_datoPaciente">
								<tr>
									<td># HCL:</td>
									<td>--</td>
								</tr>
								<tr>
									<td>Paciente:</td>
									<td>--</td>
								</tr>
								<tr>
									<td>C.I.:</td>
									<td>--</td>
								</tr>
								<tr>
									<td>Sexo:</td>
									<td>--</td>
								</tr>
								<tr>
									<td>Fecha de Nacimiento:</td>
									<td>--</td>
								</tr>
								<tr>
									<td>Edad:</td>
									<td>--</td>
								</tr>
							</tbody>
						</table>
						<hr>
						<p>Citas previas:</p>
						<table class="table table-responsive table-striped">
							<thead>
								<th>Fecha:</th>
								<th>Medico:</th>
								<th>Detalle:</th>
							</thead>
							<tbody id="tableBoContCitasAnt"></tbody>
						</table>
					</div>
				</div>
				<div class="col-lg-7">
					<form id="ate_formCreateCitPrev_2">
						<input type="number" id="id_paciente_create_citPrev" hidden>
						<div class="modal-body">
							<div class="panel-body">
								<div class="form-horizontal" data-collabel="3" data-alignlabel="center">
									<div class="form-group">
										<label class="control-label">Especialidad:</label>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-lg-12">
														<select required="" name="ate_especialidad" class=" form-control show-menu-arrow" data-style="btn-theme-inverse" id="selecEspecialidad">
															<option selected="true" disabled="disabled">Seleccionar</option>
														</select>
													</div>

												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Medico Asignado</label>
										<div class="row">
											<div class="col-md-12">
												<select id="ate_medCit" name="ate_medCit" class="form-control" data-size="10" required="">
													<option selected="true" disabled="disabled">Buscar medico</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Observacion</label>
										<div class="row">
											<div class="col-md-6">
												<textarea id="ate_observacion" name="ate_observacion" cols="30" rows="2" require></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<footer class="panel-footer" align="right">
							<button type="button" onclick="registerAtencion()" class="btn btn-theme-inverse btn-block">Agendar Turno</button>
							<!-- <button type="reset" class="btn" onclick="clearForm(this.form);"> Limpiar Formulario</button> -->
						</footer>
					</form>
				</div>
			</div>
		</div>

	</div>



	<!-- //wrapper-->



	<!--
	////////////////////////////////////////////////////////////////////////
	//////////     JAVASCRIPT  LIBRARY     //////////
	/////////////////////////////////////////////////////////////////////
	-->
	<!-- Jquery Library -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
	<!-- Modernizr Library For HTML5 And CSS3 -->
	<script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/mmenu/jquery.mmenu.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/styleswitch.js') }}"></script>
	<!-- Library 10+ Form plugins-->
	<script type="text/javascript" src="{{ asset('assets/plugins/form/form.js') }}"></script>
	<!-- Datetime plugins -->
	<script type="text/javascript" src="{{ asset('assets/plugins/datetime/datetime.js') }}"></script>
	<!-- Library Chart-->
	<script type="text/javascript" src="{{ asset('assets/plugins/chart/chart.js') }}"></script>
	<!-- Library  5+ plugins for bootstrap -->
	<script type="text/javascript" src="{{ asset('assets/plugins/pluginsForBS/pluginsForBS.js') }}"></script>
	<!-- Library 10+ miscellaneous plugins -->
	<script type="text/javascript" src="{{ asset('assets/plugins/miscellaneous/miscellaneous.js') }}"></script>
	<!-- Library Themes Customize-->
	<script type="text/javascript" src="{{ asset('assets/js/caplet.custom.js') }}"></script>
	<!-- Library datable -->
	<script type="text/javascript" src="{{ asset('assets/plugins/datable/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/datable/dataTables.bootstrap.js') }}"></script>
	{{--momentJS--}}
	<script src="{{asset('moment/min/moment.min.js')}}"></script>
	<!-- scripts propios del sistema-->
	<script type="text/javascript" src="{{ asset('/asincrono/homeJs.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asincrono/paciente_2.js') }}"></script>

	<!-- impresora termica -->
	<script type="text/javascript" src="{{ asset('/asincrono/plugImp/Impresora.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/asincrono/plugImp/script.js') }}"></script>
	<!--  -->
	@yield('scripts')
	<script type="text/javascript">
		$('div.alert').delay(4000).slideUp(300);
	</script>


	<script>
		function soloLe(e) {
			key = e.keyCode || e.which;
			tecla = String.fromCharCode(key).toLowerCase();
			letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
			especiales = [8, 37, 39, 46];

			tecla_especial = false
			for (var i in especiales) {
				if (key == especiales[i]) {
					tecla_especial = true;
					break;
				}
			}
			if (letras.indexOf(tecla) == -1 && !tecla_especial)
				return false;
		}

		function limpia() {
			var val = document.getElementById("miInput").value;
			var tam = val.length;
			for (i = 0; i < tam; i++) {
				if (!isNaN(val[i]))
					document.getElementById("miInput").value = '';
			}
		}
	</script>
	<script>
		function soloNu(e) {
			key = e.keyCode || e.which;
			tecla = String.fromCharCode(key).toLowerCase();
			letras = "0123456789";
			especiales = [8, 37, 39, 46];

			tecla_especial = false
			for (var i in especiales) {
				if (key == especiales[i]) {
					tecla_especial = true;
					break;
				}
			}

			if (letras.indexOf(tecla) == -1 && !tecla_especial)
				return false;
		}

		function limpia() {
			var val = document.getElementById("miInput").value;
			var tam = val.length;
			for (i = 0; i < tam; i++) {
				if (!isNaN(val[i]))
					document.getElementById("miInput").value = '';
			}
		}
	</script>
	<script>
		function soloLeNu(e) {
			key = e.keyCode || e.which;
			tecla = String.fromCharCode(key).toLowerCase();
			letras = " áéíóúabcdefghijklmnñopqrstuvwxyz0123456789/-#";
			especiales = [8, 37, 39, 46];

			tecla_especial = false
			for (var i in especiales) {
				if (key == especiales[i]) {
					tecla_especial = true;
					break;
				}
			}

			if (letras.indexOf(tecla) == -1 && !tecla_especial)
				return false;
		}

		function limpia() {
			var val = document.getElementById("miInput").value;
			var tam = val.length;
			for (i = 0; i < tam; i++) {
				if (!isNaN(val[i]))
					document.getElementById("miInput").value = '';
			}
		}
	</script>

</body>

</html>