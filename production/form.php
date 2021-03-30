
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Grupo Alza</span></a>
					</div>

					<div class="clearfix"></div>

				

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
						  <h3>Inventarios</h3>
						  <ul class="nav side-menu">
							<li><a><i class="fa fa-home"></i> Grupo Alza SPS <span class="fa fa-chevron-down"></span></a>
							  <ul class="nav child_menu">
								<li><a href="form.php">Registro</a></li>
								<li><a href="index.html">Asignacion</a></li>
								<li><a href="index2.html">Recepcion</a></li>
								<li><a href="index3.html">Inventario</a></li>
							  </ul>
							</li>
							<li><a><i class="fa fa-home"></i> Grupo Alza TGU<span class="fa fa-chevron-down"></span></a>
							  <ul class="nav child_menu">
								<li><a href="index.html">Registro</a></li>
								<li><a href="index.html">Asignacion</a></li>
								<li><a href="index2.html">Recepcion</a></li>
								<li><a href="index3.html">Inventario</a></li>
							  </ul>
							</li>
							<li><a><i class="fa fa-home"></i> Proyesa <span class="fa fa-chevron-down"></span></a>
							  <ul class="nav child_menu">
								<li><a href="index.html">Registro</a></li>
								<li><a href="index.html">Asignacion</a></li>
								<li><a href="index2.html">Recepcion</a></li>
								<li><a href="index3.html">Inventario</a></li>
							  </ul>
							</li>
						   
						</div>
					   
					  </div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="images/img.jpg" alt="">John Doe
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Help</a>
									<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
								
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div  class="right_col" role="main">

				<div class="col-md-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Registro Equipo </h2>
							<ul class="nav navbar-right panel_toolbox">
							
							</ul>
							<div class="clearfix"></div>
						</div>

						<!--Formulario-->
						<div class="x_content">
							<br />
							<form id="formularioregistro" method="POST" action="insertardatos.php" class="form-horizontal form-label-left">

							</div>
							<div class="form-group row">
								<label class="control-label col-md-3 col-sm-3 ">Tipo-Equipo</label>
								<div class="col-md-5 col-sm-5 ">
									<select class="form-control" name="tipoequipo" id="tipoequipo" onclick="SelectRegistro();">
										<option value="desktop" >Desktop</option>
										<option value="laptop">Laptop</option>
										<option value="celular">Celular</option>
										<option value="telefono">Telefono</option>
										<option value="otros">Otros</option>
									
									</select>

									
								</div>
							</div>

							

						
							<!--FORMULARIO PARA DESKTOP-->

							<div id="desktop">
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Marca</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="dmarca" name="dmarca"  type="text"  class="form-control" placeholder="Marca">
									</div>
								</div>

								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Modelo</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="dmodelo" name="dmodelo" type="text" class="form-control" placeholder="Modelo">
									</div>
								</div>


								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Service Tag</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="dservicetag" name="dservicetag" type="text" class="form-control" placeholder="Service Tag">
									</div>
								</div>


								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">RAM</label>
									<div class="col-md-5 col-sm-5 ">
										<input  id="dram" name="dram" type="number" class="form-control" placeholder="Ram">
									</div>
								</div>

								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Disco Duro</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="ddiscoduro" name="ddiscoduro" type="number" class="form-control" placeholder="Disco Duro">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Descripcion <span class="required">*</span>
									</label>
									<div class="col-md-9 col-sm-9 ">
										<textarea id="ddescripcion" name="ddescripcion" class="form-control" rows="3" placeholder="Descripcion"></textarea>
									</div>
								</div>


							</div>
							<!--FORMULARIO PARA DESKTOP-->

								<!--FORMULARIO PARA LAPTOP-->
								<div id="laptop">
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Marca</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="lmarca" name="lmarca"  type="text"  class="form-control" placeholder="Marca">
									</div>
								</div>

								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Modelo</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="lmodelo" name="lmodelo" type="text" class="form-control" placeholder="Modelo">
									</div>
								</div>


								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Service Tag</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="lservicetag" name="lservicetag" type="text" class="form-control" placeholder="Service Tag">
									</div>
								</div>


								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">RAM</label>
									<div class="col-md-5 col-sm-5 ">
										<input  id="lram" name="lram" type="number" class="form-control" placeholder="Ram">
									</div>
								</div>

								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Disco Duro</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="ldiscoduro" name="ldiscoduro" type="number" class="form-control" placeholder="Disco Duro">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Descripcion <span class="required">*</span>
									</label>
									<div class="col-md-9 col-sm-9 ">
										<textarea id="ldescripcion" name="ldescripcion" class="form-control" rows="3" placeholder="Descripcion"></textarea>
									</div>
								</div>


							</div>



<!--FORMULARIO PARA LAPTOP-->
							<!--FORMULARIO PARA CELULAR-->
							<div id="celular">
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Marca</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="cmarca" type="text" class="form-control" placeholder="Marca">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Modelo</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="cmodelo" type="text" class="form-control" placeholder="Modelo">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">IMEI</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="cimei" name="cimei" type="number" class="form-control" placeholder="Imei">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Descripcion <span class="required">*</span>
									</label>
									<div class="col-md-9 col-sm-9 ">
										<textarea id="cdescripcion" class="form-control" rows="3" placeholder="Descripcion"></textarea>
									</div>
								</div>
							</div>
							<!--FORMULARIO PARA CELULAR-->

							<!--FORMULARIO PARA TELEFONO-->
							<div id="telefono">
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Marca</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="tmarca" type="text" class="form-control" placeholder="Marca">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Modelo</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="tmodelo" type="text" class="form-control" placeholder="Modelo">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">IMEI</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="timei" type="number" class="form-control" placeholder="Imei">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Descripcion <span class="required">*</span>
									</label>
									<div class="col-md-9 col-sm-9 ">
										<textarea id="tdescripcion" class="form-control" rows="3" placeholder="Descripcion"></textarea>
									</div>
								</div>
							</div>
							<!--FORMULARIO PARA TELEFONO-->

							<!--FORMULARIO PARA OTROS-->
							<div id="otros">
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Nombre del Equipo</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="onombreequipo" type="text" class="form-control" placeholder="Nombre del Equipo">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Marca</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="omarca" type="text" class="form-control" placeholder="Marca">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Modelo</label>
									<div class="col-md-5 col-sm-5 ">
										<input id="omodelo" type="text" class="form-control" placeholder="Modelo">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Descripcion <span class="required">*</span>
									</label>
									<div class="col-md-9 col-sm-9 ">
										<textarea id="odescripcion"  class="form-control" rows="3" placeholder="Descripcion"></textarea>
									</div>
								</div>
							</div>

							<!--FORMULARIO PARA OTROS-->


								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-9 col-sm-9  offset-md-3">
										<button type="reset" class="btn btn-primary">Reset</button>
										<button id="btnguardar" type="submit" class="btn btn-success">Submit</button>
									</div>
								</div>
								<div id=respuesta></div>
							</form>


			</div>

			
		
			<!-- /page content -->

			
		</div>
	</div>

	

	<script>
			function SelectRegistro(){
											id = document.getElementById("tipoequipo").value;
											
											if (id == "desktop") {
											$("#desktop").show();
											$("#laptop").hide();
											$("#celular").hide();
											$("#telefono").hide();
											$("#otros").hide();
											}
											
											else if (id == "laptop") {
											$("#laptop").show();
											$("#desktop").hide();
											$("#celular").hide();
											$("#telefono").hide();
											$("#otros").hide();
										
											}
											else if(id == "celular") {
												$("#laptop").hide();
											$("#desktop").hide();
											$("#celular").show();
											$("#telefono").hide();
											$("#otros").hide();
										
											}else if(id=="telefono"){
												$("#laptop").hide();
											$("#desktop").hide();
											$("#celular").hide();
											$("#telefono").show();
											$("#otros").hide();
											}else if(id=="otros"){
												$("#laptop").hide();
											$("#desktop").hide();
											$("#celular").hide();
											$("#telefono").hide();
											$("#otros").show();
											}
										}
						
										

		
	</script>



	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../vendors/moment/min/moment.min.js"></script>
	<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="../vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="../vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="../vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="../vendors/starrr/dist/starrr.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

</body></html>