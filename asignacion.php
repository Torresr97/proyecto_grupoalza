
<!DOCTYPE html>
<?php
include("php\conexion1.php");
?>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Grupo Alza </title>


	<script  src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
	<script  src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.14/jspdf.plugin.autotable.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/af-2.3.5/kt-2.6.1/datatables.min.css"/>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
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
                  <li><a><i class="fa fa-home"></i> Grupo Alza <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.php">Registro</a></li>
                      <li><a href="asignacion.php">Asignacion</a></li>
                      <li><a href="recepcion.php">Recepcion</a></li>
                      <li><a href="inventario.php">Inventario</a></li>
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
			<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Asignaciones</h3>
              </div>

              <div class="title_right">
              <div class="form-group row">


							</div>
              </div>
            </div>

          <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">

                    <div class="clearfix"></div>
                  </div>



                  <div class="x_content">

                   <form method="POST" action= "asignacion.php">
                     <div style="padding-bottom: 20px !important"  class="col-md-3 col-sm-3 ">
                     <select  class="form-control" name="tipoequipo" id="tipoequipo" >
                     <option value="nulo" >Seleccione un Equipo</option>
                  	<option value="DESKTOP" >Desktop</option>
										<option value="LAPTOP">Laptop</option>
										<option value="CELULAR">Celular</option>
										<option value="TELEFONO">Telefono</option>
										<option value="OTROS">Otros</option>
                    </select>

                      </div>

                      <button  type="submit" class="btn btn-info"  >Buscar</button></form>



						<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
				  <h2>Equipos Disponibles</h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>


                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                       	 	<div class="card-box table-responsive">
												<?php
													$nomreequpo=$_POST['tipoequipo'];
													if($nomreequpo == 'DESKTOP'){
																		echo '<table id="datatable" class="table table-striped table-bordered" style="width:100%">';
																		echo '<thead>';
																	echo '<tr>';
																	echo '<th style="width: 1%">#</th>';
																	echo '<th style="width: 10%">Nombre del Equipo</th>';
																	echo  '<th style="width: 10%">Marca</th>';
																	echo  '<th style="width: 10%">Modelo</th>';
																	echo   '<th style="width: 10%">ServiceTag</th>';
																	echo   '<th style="width: 5%">Procesador</th>';
																	echo  ' <th style="width: 5%">Ram</th>';
																	echo   '<th style="width: 10%">Disco Duro</th>';
																	echo   '<th style="width: 15%" >Descripcion</th>';
																	echo   '<th style="width: 10%">Accion</th>';
																	echo   '</tr>' ;
																	echo   '</thead>';
																	echo	'<tbody>';

																		echo "<tr>";
																	$sql = "SELECT * FROM V_equiposdesktop  Where estado = 0";
																	$stmt = sqlsrv_query( $conn, $sql );
																	if( $stmt === false) {
																		die( print_r( sqlsrv_errors(), true) );
																	}


																	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {


																		echo '<td class="id">'.$row['idequipo']."</td>";
																		echo '<td class="nombreequipo">'.$row['nombreequipo']."</td>";
																		echo '<td class="marca">'.$row["marca_desktop"]."</td>";
																		echo '<td class="modelo">'.$row["modelo_desktop"]."</td>";
																		echo '<td class="servicetag">'.$row["servicetag_desktop"]."</td>";
																		echo '<td class="procesador">'.$row["procesador_desktop"]."</td>";
																		echo '<td class="ram">'.$row["ram_desktop"]." GB</td>";
																		echo '<td class="discoduro">'.$row["discoduro_desktop"]." GB</td>";
																		echo '<td class="descripcion">'.$row["descripcion_desktop"]."</td>";
																		echo  '<td> <button class="botondesktop btn btn-success btn-xs "  > <span style="padding-right: 8px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span> Asignar </button></td>';

																			echo "</tr>";
																	}
																	echo "</tbody>";
																	sqlsrv_close( $conn ) ;
																	echo "</table>";
														} 	//FIN DEL SELECT DESKTOP

														if($nomreequpo == 'LAPTOP'){
															echo '<table id="datatable" class="table table-striped table-bordered" style="width:100%">';
															echo '<thead>';
														echo '<tr>';
														echo '<th style="width: 1%">#</th>';
														echo '<th style="width: 10%">Nombre del Equipo</th>';
														echo  '<th style="width: 10%">Marca</th>';
														echo  '<th style="width: 10%">Modelo</th>';
														echo   '<th style="width: 10%">ServiceTag</th>';
														echo   '<th style="width: 5%">Procesador</th>';
														echo  ' <th style="width: 5%">Ram</th>';
														echo   '<th style="width: 10%">Disco Duro</th>';
														echo   '<th style="width: 15%" >Descripcion</th>';
														echo   '<th style="width: 10%">Accion</th>';
														echo   '</tr>' ;
														echo   '</thead>';
														echo	'<tbody>';

															echo "<tr>";
														$sql = "SELECT * FROM V_equiposlaptop  Where estado = 0";
														$stmt = sqlsrv_query( $conn, $sql );
														if( $stmt === false) {
															die( print_r( sqlsrv_errors(), true) );
														}


														while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {


															echo '<td class="id">'.$row['idequipo']."</td>";
															echo '<td class="nombreequipo">'.$row['nombreequipo']."</td>";
															echo '<td class="marca">'.$row["marca_laptop"]."</td>";
															echo '<td class="modelo">'.$row["modelo_laptop"]."</td>";
															echo '<td class="servicetag">'.$row["servicetag"]."</td>";
															echo '<td class="procesador">'.$row["procesador_laptop"]."</td>";
															echo '<td class="ram">'.$row["ram_laptop"]." GB</td>";
															echo '<td class="discoduro">'.$row["discoduro_laptop"]." GB</td>";
															echo '<td class="descripcion">'.$row["descripcion_laptop"]."</td>";
															echo  '<td> <button class="botondesktop btn btn-success btn-xs "  data-toggle="modal" data-target="#modaldedesktop"> <span style="padding-right: 8px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span> Asignar </button></td>';

																echo "</tr>";
														}
														echo "</tbody>";
														sqlsrv_close( $conn ) ;
														echo "</table>";
											} 	// fin del if laptops


								//select ala vista celulares y genera la tabla
														if($nomreequpo == 'CELULAR'){
															echo '<table id="datatable" class="table table-striped table-bordered" style="width:100%">';
															echo '<thead>';
														echo '<tr>';
														echo '<th style="width: 1%">#</th>';
														echo '<th style="width: 10%">Nombre del Equipo</th>';
														echo  '<th style="width: 10%">Marca</th>';
														echo  '<th style="width: 10%">Modelo</th>';
														echo   '<th style="width: 10%">imei</th>';
														echo   '<th style="width: 15%" >Descripcion</th>';
														echo   '<th style="width: 10%">Accion</th>';
														echo   '</tr>' ;
														echo   '</thead>';
														echo	'<tbody>';

															echo "<tr>";
														$sql = "SELECT * FROM V_equiposcelulares  Where estado = 0";
														$stmt = sqlsrv_query( $conn, $sql );
														if( $stmt === false) {
															die( print_r( sqlsrv_errors(), true) );
														}


														while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {


															echo '<td class="id">'.$row['idequipo']."</td>";
															echo '<td class="nombreequipo">'.$row['nombreequipo']."</td>";
															echo '<td class="marca">'.$row["marca_cel"]."</td>";
															echo '<td class="modelo">'.$row["modelo_cel"]."</td>";
															echo '<td class="imei">'.$row["imei_cel"]."</td>";
															echo '<td class="descripcion">'.$row["descripcion_cel"]."</td>";
															echo  '<td> <button class="botoncelular btn btn-success btn-xs "  data-toggle="modal" data-target="#modalcelular"> <span style="padding-right: 8px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span> Asignar </button></td>';

																echo "</tr>";
														}
														echo "</tbody>";
														sqlsrv_close( $conn ) ;
														echo "</table>";
													}// fin del if celular



								//inicio de select ala vista y genera la tabla telefono
													if($nomreequpo == 'TELEFONO'){
														echo '<table id="datatable" class="table table-striped table-bordered" style="width:100%">';
														echo '<thead>';
													echo '<tr>';
													echo '<th style="width: 1%">#</th>';
													echo '<th style="width: 10%">Nombre del Equipo</th>';
													echo  '<th style="width: 10%">Marca</th>';
													echo  '<th style="width: 10%">Modelo</th>';
													echo   '<th style="width: 10%">imei</th>';
													echo   '<th style="width: 15%" >Descripcion</th>';
													echo   '<th style="width: 10%">Accion</th>';
													echo   '</tr>' ;
													echo   '</thead>';
													echo	'<tbody>';

														echo "<tr>";
													$sql = "SELECT * FROM V_equipostelefonos  Where estado = 0";
													$stmt = sqlsrv_query( $conn, $sql );
													if( $stmt === false) {
														die( print_r( sqlsrv_errors(), true) );
													}


													while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {


														echo '<td class="id">'.$row['idequipo']."</td>";
														echo '<td class="nombreequipo">'.$row['nombreequipo']."</td>";
														echo '<td class="marca">'.$row["marca_tel"]."</td>";
														echo '<td class="modelo">'.$row["modelo_tel"]."</td>";
														echo '<td class="imei">'.$row["imei_tel"]."</td>";
														echo '<td class="descripcion">'.$row["descripcion_tel"]."</td>";
														echo  '<td> <button class="botoncelular btn btn-success btn-xs "  data-toggle="modal" data-target="#modalcelular"> <span style="padding-right: 8px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span> Asignar </button></td>';

															echo "</tr>";
													}
													echo "</tbody>";
													sqlsrv_close( $conn ) ;
													echo "</table>";
												}//fin de if telefono




												if($nomreequpo == 'OTROS'){
													echo '<table id="datatable" class="table table-striped table-bordered" style="width:100%">';
													echo '<thead>';
													echo '<tr>';
													echo '<th style="width: 1%">#</th>';
													echo '<th style="width: 10%">Nombre del Equipo</th>';
													echo  '<th style="width: 10%">Nombre Dispositivo</th>';
													echo  '<th style="width: 10%">Marca</th>';
													echo  '<th style="width: 10%">Modelo</th>';
													echo   '<th style="width: 15%" >Descripcion</th>';
													echo   '<th style="width: 10%">Accion</th>';
													echo   '</tr>' ;
													echo   '</thead>';
													echo	'<tbody>';

													echo "<tr>";
												$sql = "SELECT * FROM V_equiposotros where estado = 0";
												$stmt = sqlsrv_query( $conn, $sql );
												if( $stmt === false) {
													die( print_r( sqlsrv_errors(), true) );
												}


												while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {


													echo '<td class="id">'.$row['idequipo']."</td>";
													echo '<td class="nombreequipo">'.$row['nombreequipo']."</td>";
													echo '<td class="nombre_otro">'.$row["nombre_otro"]."</td>";
													echo '<td class="marca">'.$row["marca_otro"]."</td>";
													echo '<td class="modelo">'.$row["modelo_otro"]."</td>";
													echo '<td class="descripcion">'.$row["descripcion_otro"]."</td>";
													echo  '<td> <button class="botonotros btn btn-success btn-xs "  data-toggle="modal" data-target="#modalotros"> <span style="padding-right: 8px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span> Asignar </button></td>';

														echo "</tr>";
												}
												echo "</tbody>";
												sqlsrv_close( $conn ) ;
												echo "</table>";
											}//fin de if otros
										?>

    </div>
                    </div>

                  </div>


                </div>
              </div>
            </div>





    </div>






<!--Modal para Celular y telefonos-->
<form  id="prueba2" method="POST" action="php/asignaciones/asignacionnuevacelytel.php">

<div  style="heigh" id="modalcelular" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				  <div style="padding-left: 15px;" class="modal-content">

					<div class="modal-header">
					  <h4 class="modal-title" id="myModalLabel">Asignacion de Equipo</h4>
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					  </button>
					</div>
					<div class="modal-body">
					<div style="display: none;">
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">ID de Equipo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="mcidequipo" name="mcidequipo" type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Equipo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="mcequipo" name="mcequipo" type="text" class="form-control" readonly>
								</div>
							</div>

							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Marca</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="mcmarca" name="mcmarca" type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Modelo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="mcmodelo" name="mcmodelo" type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Imei</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="mcimei" name="mcimei" type="text" class="form-control" readonly>
								</div>
							</div>

							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Descripcion</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="mcdescripcion" name="mcdescripcion" type="text" class="form-control" readonly>
								</div>
							</div>
							</div>

						</div>
							<div class="form-group row">
								<label class="control-label col-md-3 col-sm-3 ">Empleado:</label>
								<div class="col-md-4 col-sm-4 ">
									<select  class="form-control"  name="mcempleado" id="mcempleado" >
										<option value="1" >Seleccione un Empleado</option>

									</select>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Area</label>
								<div class="col-md-5 col-sm-5 ">
									<input id="mcarea" name="mcarea" type="text" class="form-control" placeholder="Area">
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Autorizado por:</label>
								<div class="col-md-5 col-sm-5 ">
									<input id="mcautorizado" name="mcautorizado" type="text" class="form-control" placeholder="Autorizado">
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Entregado por</label>
								<div class="col-md-5 col-sm-5 ">
									<input id="mcentregado" name="mcentregado" type="text" class="form-control" placeholder="Entregado">
								</div>
							</div>
							<div class="modal-footer">

					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button  type="submit" id="prueba"   class="btn btn-primary btn-xs" >Save changes</button>
					<input type="button" class="btn btn-secondary" value="Generar Reporte" onclick="generarpdfcelytel()">
				   </div>
					</div>


				  </div>
				</div>
			  </div>
			  </form>
			  <!--Modal para Celular y telefonos-->


<!--Modal para otros-->
<form  id="prueba2" method="POST" action="php/asignaciones/asignaciootros.php">

<div  style="heigh" id="modalotros" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				  <div style="padding-left: 15px;" class="modal-content">

					<div class="modal-header">
					  <h4 class="modal-title" id="myModalLabel">Asignacion de Equipo</h4>
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					  </button>
					</div>
					<div class="modal-body">
					<div style="display: none;">
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">ID de Equipo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="moidequipo" name="moidequipo" type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Tipo Equipo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="moequipo" name="moequipo" type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Equipo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="monombreequipo" name="monombreequipo" type="text" class="form-control" readonly>
								</div>
							</div>

							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Marca</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="momarca" name="momarca" type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Modelo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="momodelo" name="momodelo" type="text" class="form-control" readonly>
								</div>
							</div>


							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Descripcion</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="modescripcion" name="modescripcion" type="text" class="form-control" readonly>
								</div>
							</div>
							</div>

						</div>
							<div class="form-group row">
								<label class="control-label col-md-3 col-sm-3 ">Empleado:</label>
								<div class="col-md-4 col-sm-4 ">
									<select  class="form-control"  name="mcempleado" id="mcempleado" >
										<option value="1" >Seleccione un Empleado</option>

									</select>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Area</label>
								<div class="col-md-5 col-sm-5 ">
									<input id="oarea" name="oarea" type="text" class="form-control" placeholder="Area">
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Autorizado por:</label>
								<div class="col-md-5 col-sm-5 ">
									<input id="oautorizado" name="oautorizado" type="text" class="form-control" placeholder="Autorizado">
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Entregado por</label>
								<div class="col-md-5 col-sm-5 ">
									<input id="oentregado" name="oentregado" type="text" class="form-control" placeholder="Entregado">
								</div>
							</div>
							<div class="modal-footer">

					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button  type="submit" id="prueba"   class="btn btn-primary btn-xs" >Save changes</button>
					<input type="button" class="btn btn-secondary" value="Generar Reporte" onclick="generarpdfotros()">

				   </div>
					</div>


				  </div>
				</div>
			  </div>
			  </form>
<!--Modal para otros-->



<script >
// variables globales para capturar los datos del Datatable
var id;
	var nombreequipo ;
	var marca ;
	var modelo ;
	var servicetag; 
	var procesador ;
	var ram ;
	var discoduro; 
	var descripcion; 
	

// variables globales para capturar los datos del Datatable


var valores="";
$(document).ready(function() {
    $('#datatable').DataTable();
	var id = "";
} );

//boton que despliega el modal obtenemos lo datos de cada fila del datatable

$(".botondesktop").click(function(){
	
	var id = $(this).closest('tr').find('.id').text();
	var nombreequipo = $(this).closest('tr').find('.nombreequipo').text();
	var marca = $(this).closest('tr').find('.marca').text();
	var modelo = $(this).closest('tr').find('.modelo').text();
	var servicetag = $(this).closest('tr').find('.servicetag').text();
	var procesador = $(this).closest('tr').find('.procesador').text();
	var ram = $(this).closest('tr').find('.ram').text();
	var discoduro = $(this).closest('tr').find('.discoduro').text();
	var descripcion = $(this).closest('tr').find('.descripcion').text();
	

	alert(id);

	window.location.href = 'formularios/formulariopcs.php' + '?id=' + id + "&nombreequipo=" + nombreequipo + "&marca=" + marca + 
	"&modelo=" + modelo + "&servicetag=" + servicetag + "&procesador=" + procesador + "&ram=" + ram + "&discoduro=" + discoduro + "&descripcion=" + descripcion;
	});





//boton que despliega el modal obtenemos lo datos de cada fila del datatable
	$(".botoncelular").click(function(){
	var id = $(this).closest('tr').find('.id').text();
	var nombreequipo = $(this).closest('tr').find('.nombreequipo').text();
	var marca = $(this).closest('tr').find('.marca').text();
	var modelo = $(this).closest('tr').find('.modelo').text();
	var imei = $(this).closest('tr').find('.imei').text();
	var descripcion = $(this).closest('tr').find('.descripcion').text();


	alert(imei);



	document.getElementById("mcidequipo").value =  id;
	document.getElementById("mcequipo").value =nombreequipo;
	document.getElementById("mcmarca").value = marca;
	document.getElementById("mcmodelo").value= modelo;
	document.getElementById("mcimei").value= imei;
	document.getElementById("mcdescripcion").value= descripcion;

	});

//boton que despliega el modal obtenemos lo datos de cada fila del datatable
	$(".botonotros").click(function(){
	var id = $(this).closest('tr').find('.id').text();
	var tippoequipo = $(this).closest('tr').find('.nombreequipo').text();
	var nombreequipo = $(this).closest('tr').find('.nombre_otro').text();
	var marca = $(this).closest('tr').find('.marca').text();
	var modelo = $(this).closest('tr').find('.modelo').text();
	var descripcion = $(this).closest('tr').find('.descripcion').text();


	alert(nombreequipo);
	document.getElementById("moidequipo").value =  id;
	document.getElementById("moequipo").value =tippoequipo;
	document.getElementById("monombreequipo").value =nombreequipo;

	document.getElementById("momarca").value = marca;
	document.getElementById("momodelo").value= modelo;

	document.getElementById("modescripcion").value= descripcion;

	});







//funcion para general el archivo pdf despues de guardar los datos en la base de datos

	function generarpdfdesktopylaptop(){
		//variables

		//variables

		var doc = new jsPDF();

			var img = new Image;
			img.onload = function() {
				doc.addImage(this, 0, 0,210,60);

				window.open(doc.output('bloburl'), '_blank');
			};
			img.crossOrigin = "";  // for demo as we are at different origin than image
			img.src = 'images/logoalza.png';  // some random imgur image



			doc.setFontSize(20);
			doc.text(70, 70, 'Asignacion de Equipo');

			doc.setFontSize(12);
			doc.text(10, 80, 'San Pedro Sula');
			doc.text(10, 85, 'Cortes');
			var today = new Date();
			var newdat = today.toDateString(); // "Sun Jun 14 2020";
			doc.text(10,90,newdat);
			doc.text(10, 105, 'Por medio del presente se hace entrega del Equipo de Computo a: ');
			doc.setFontType("bold");
			doc.text(160, 105, document.getElementById("mempleado").value);
			doc.setFontType("normal");
			doc.text(10, 110, 'quien se desempena en el area de:');
			doc.setFontType("bold");
			doc.text(90, 110, document.getElementById("marea").value );
			doc.setFontType("normal");
			doc.text(135, 110, '. Se compromete a cumplir ');
			doc.text(10, 115, 'con las politicas establecidas por el departamento de IT revisadas por Genrecia');
			doc.text(10, 130, 'Este mismo se compromete a cuidar con la Integridad Fisica del equipo');
			doc.text(10, 140, 'El equipo cuenta con las siguientes especificaciones');

			var columns = ["", ""];
			var data = [
			["Marca:", document.getElementById("mmarca").value],
			["Modelo:",document.getElementById("mmodelo").value ],
			["Serie:", document.getElementById("mservicetag").value ],
			["Procesador:",document.getElementById("mprocesador").value ],
			["Ram:", document.getElementById("mram").value],
			["DiscoDuro:",document.getElementById("mdiscoduro").value],
			["Nota:",document.getElementById("mdescripcion").value ]];


			doc.autoTable(columns,data,{

				 startY: 145,
				 tableLineColor: [255, 255, 255],
      				tableLineWidth: 0.75,

				 columnStyles: {
					0: {
						columnWidth: 40
					},
					1: {
						columnWidth: 40
					}
    				 },
					 styles: { fontSize: 14 },

				 theme: 'plain' // 'striped', 'grid' or 'plain'

		});


		doc.text(10, 245, '_____________________________');
		doc.text(110, 245, '_____________________________');

		doc.text(10, 252, 'Recibido por: '+ document.getElementById("mempleado").value);
		doc.text(110, 252, 'Entregado por: '+ document.getElementById("mentregado").value);
		doc.text(10, 270, '_____________________________');

		doc.text(10, 275, 'Autorizado por: '+ document.getElementById("mautorizado").value);



}



function generarpdfcelytel(){
		//variables



		var doc = new jsPDF();

			var img = new Image;
			img.onload = function() {
				doc.addImage(this, 0, 0,210,60);

				window.open(doc.output('bloburl'), '_blank');
			};
			img.crossOrigin = "";  // for demo as we are at different origin than image
			img.src = 'images/logoalza.png';  // some random imgur image



			doc.setFontSize(20);
			doc.text(70, 70, 'Asignacion de Equipo');

			doc.setFontSize(12);
			doc.text(10, 80, 'San Pedro Sula');
			doc.text(10, 85, 'Cortes');
			var today = new Date();
			var newdat = today.toDateString(); // "Sun Jun 14 2020";
			doc.text(10,90,newdat);
			doc.text(10, 105, 'Por medio del presente se hace entrega del Dispositivo Movil a: ');
			doc.setFontType("bold");
			doc.text(160, 105, document.getElementById("mcempleado").value);
			doc.setFontType("normal");
			doc.text(10, 110, 'quien se desempena en el area de:');
			doc.setFontType("bold");
			doc.text(90, 110, document.getElementById("mcarea").value );
			doc.setFontType("normal");
			doc.text(135, 110, '. Se compromete a cumplir ');
			doc.text(10, 115, 'con las politicas establecidas por el departamento de IT revisadas por Genrecia');
			doc.text(10, 130, 'Este mismo se compromete a cuidar con la Integridad Fisica del equipo');
			doc.text(10, 140, 'El equipo cuenta con las siguientes especificaciones');





		//variables

			var columns = ["", ""];
			var data = [
			["Marca:", document.getElementById("mcmarca").value],
			["Modelo:",document.getElementById("mcmodelo").value ],
			["Imei:", document.getElementById("mcimei").value ],
			["Nota:",document.getElementById("mcdescripcion").value ]];


			doc.autoTable(columns,data,{

				 startY: 145,
				 tableLineColor: [255, 255, 255],
      				tableLineWidth: 0.75,

				 columnStyles: {
					0: {
						columnWidth: 40
					},
					1: {
						columnWidth: 40
					}
    				 },
					 styles: { fontSize: 14 },

				 theme: 'plain' // 'striped', 'grid' or 'plain'

		});


		doc.text(10, 245, '_____________________________');
		doc.text(110, 245, '_____________________________');

		doc.text(10, 252, 'Recibido por: '+ document.getElementById("mcempleado").value);
		doc.text(110, 252, 'Entregado por: '+ document.getElementById("mcentregado").value);
		doc.text(10, 270, '_____________________________');

		doc.text(10, 275, 'Autorizado por: '+ document.getElementById("mcautorizado").value);



}




function generarpdfotros(){
		//variables



		var doc = new jsPDF();

			var img = new Image;
			img.onload = function() {
				doc.addImage(this, 0, 0,210,60);

				window.open(doc.output('bloburl'), '_blank');
			};
			img.crossOrigin = "";  // for demo as we are at different origin than image
			img.src = 'images/logoalza.png';  // some random imgur image



			doc.setFontSize(20);
			doc.text(70, 70, 'Asignacion de Equipo');

			doc.setFontSize(12);
			doc.text(10, 80, 'San Pedro Sula');
			doc.text(10, 85, 'Cortes');
			var today = new Date();
			var newdat = today.toDateString(); // "Sun Jun 14 2020";
			doc.text(10,90,newdat);
			doc.text(10, 105, 'Por medio del presente se hace entrega del Equipo a: ');
			doc.setFontType("bold");
			doc.text(160, 105, document.getElementById("mcempleado").value);
			doc.setFontType("normal");
			doc.text(10, 110, 'quien se desempena en el area de:');
			doc.setFontType("bold");
			doc.text(90, 110, document.getElementById("mcarea").value );
			doc.setFontType("normal");
			doc.text(135, 110, '. Se compromete a cumplir ');
			doc.text(10, 115, 'con las politicas establecidas por el departamento de IT revisadas por Genrecia');
			doc.text(10, 130, 'Este mismo se compromete a cuidar con la Integridad Fisica del equipo');
			doc.text(10, 140, 'El equipo cuenta con las siguientes especificaciones');





		//variables

			var columns = ["", ""];
			var data = [
			["Equipo:", document.getElementById("monombreequipo").value],
			["Marca:", document.getElementById("momarca").value],
			["Modelo:",document.getElementById("momodelo").value ],
			["Nota:",document.getElementById("modescripcion").value ]];


			doc.autoTable(columns,data,{

				 startY: 145,
				 tableLineColor: [255, 255, 255],
      				tableLineWidth: 0.75,

				 columnStyles: {
					0: {
						columnWidth: 40
					},
					1: {
						columnWidth: 40
					}
    				 },
					 styles: { fontSize: 14 },

				 theme: 'plain' // 'striped', 'grid' or 'plain'

		});


		doc.text(10, 245, '_____________________________');
		doc.text(110, 245, '_____________________________');

		doc.text(10, 252, 'Recibido por: '+ document.getElementById("mcempleado").value);
		doc.text(110, 252, 'Entregado por: '+ document.getElementById("ocentregado").value);
		doc.text(10, 270, '_____________________________');

		doc.text(10, 275, 'Autorizado por: '+ document.getElementById("ocautorizado").value);



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
	<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>





</body></html>
