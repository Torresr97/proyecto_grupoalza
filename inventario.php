
<?php
include("php\conexion1.php");
if (isset($_GET["id"])&& isset($_GET["nombreequipo"]))
 {

    // asignar w1 y w2 a dos variables
    $id = $_GET["id"];
    $nombreequipo= $_GET["nombreequipo"];
	echo "$id";

          if($nombreequipo == "DESKTOP"){

                  $sql = "SELECT * FROM V_equiposdesktop  Where idinventario = $id";
                  $stmt = sqlsrv_query( $conn, $sql);
                  if( $stmt === false ) {
                       die( print_r( sqlsrv_errors(), true));
                  }

                  // Hacer que sea disponible para su lectura la primera (y en este caso única) fila del conjunto resultado.
                  if( sqlsrv_fetch( $stmt ) === false) {
                       die( print_r( sqlsrv_errors(), true));
                  }

                  // Obtener los campos de la fila. Los índices de campo empiezan desde 0 y se deben obtener en orden.
                  // Recuperar los nombres de campo por su nombre no está soportado por sqlsrv_get_field.
                  $idequipo = sqlsrv_get_field( $stmt,1);
                  $marca = sqlsrv_get_field( $stmt,7);
                  $modelo = sqlsrv_get_field( $stmt,8);
                  $servicetag = sqlsrv_get_field( $stmt,9);
                  $procesador = sqlsrv_get_field( $stmt,10);
                  $ram = sqlsrv_get_field( $stmt,1);
                  $discoduro = sqlsrv_get_field( $stmt,12);
                    $descripcion = sqlsrv_get_field( $stmt,13);




          }


} else {
    echo "<p>No parameters</p>";
}


?>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Grupo Alza </title>



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
                      <li><a href="#">Inventario</a></li>
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
                <h3>Projects <small>Listing design</small></h3>
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

																		echo '<table id="datatable" class="table table-striped table-bordered" style="width:100%">';
																		echo '<thead>';
																	echo '<tr>';
																	echo '<th style="width: 1%">#</th>';
																	echo '<th style="width: 10%">Ciudad</th>';
																	echo   '<th style="width: 10%">Responsable</th>';
                                  echo   '<th style="width: 10%">Tipo Equipo</th>';
																	echo  '<th style="width: 10%">Fecha de Ingreso</th>';
																	echo  '<th style="width: 10%">Estado</th>';


																	echo   '<th style="width: 10%">Accion</th>';
																	echo   '</tr>' ;
																	echo   '</thead>';
																	echo	'<tbody>';

																		echo "<tr>";
																	$sql = "SELECT * FROM V_inventariototal";
																	$stmt = sqlsrv_query( $conn, $sql );
																	if( $stmt === false) {
																		die( print_r( sqlsrv_errors(), true) );
																	}


																	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

																		$Estado = $row["estado"];
																		if ($Estado == 0){
																			$Estado = 'No Asignado';
																		}else{
																			$Estado = 'Asignado';
																		}
																		echo '<td class="id">'.$row['idequipo']."</td>";
																		echo '<td class="ciudad">'.$row['ciudad']."</td>";
																		echo '<td class="ciudad">'.$row['NombreCompleto']."</td>";
                                                                        echo '<td class="nombreequipo">'.$row["nombreequipo"]."</td>";
																		echo '<td class="FechaIngreso">'.$row["FechaIngreso"]."</td>";
																		echo '<td class="Estado">'.$Estado."</td>";

																		echo  '<td> <button  style="color: #f8f9fa;background-color: #26B99A;border: 1px solid #169F85;" class="boton btn  btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"s> <span class="glyphicon glyphicon-share" aria-hidden="true"></span></button>
																		<button  style="color: #f8f9fa;background-color: #007bff;" class="boton btn  btn-xs "  ><span  class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
																		<button class="boton btn btn-danger btn-xs "  >   <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>	</td>';

																			echo "</tr>";
																	}
																	echo "</tbody>";
																	sqlsrv_close( $conn ) ;
																	echo "</table>";



?>


    </div>
                    </div>

                  </div>


                </div>
              </div>
            </div>





    </div>


<!--Modal para Desktop-->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Detalle</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h4><?php echo $marca?></h4>
                          <div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">ID de Equipo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="mcidequipo" name="mcidequipo" value="<?php echo $marca?>" type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row ">
								<label class="control-label col-md-3 col-sm-3 ">Equipo</label>
								<div class="col-md-4 col-sm-4 ">
									<input id="mcequipo" name="mcequipo" value="<?php echo $nombreequipo?>" type="text" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Marca</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="mmarca" name="mmarca" value="<?php echo $marca ?>" type="text" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Modelo</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="mmodelo" name="mmodelo" value="<?php echo $modelo ?>" type="text" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Service Tag</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="mservicetag" name="mservicetag" value="<?php echo $servicetag ?>" type="text" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">procesador</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="mprocesador" name="mprocesador" value="<?php echo $procesador ?>" type="text" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Ram</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="mram" name="mram" type="text" value="<?php echo $ram ?>" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Disco duro</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="mdiscoduro" name="mdiscoduro" value="<?php echo $discoduro ?>" type="text" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Descripcion</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="mdescripcion" name="mdescripcion" value="<?php echo $descripcion ?>" type="text" class="form-control" readonly>
						</div>
					</div>
					


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         
                        </div>

                      </div>
                    </div>
                  </div>

				  <!--Modal para Desktop-->





<!--Modal para Celular-->
<form  id="prueba1" method="POST" action="php/asignacionnueva.php">

<div  style="heigh" id="modalcelular" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">

					<div class="modal-header">
					  <h4 class="modal-title" id="myModalLabel">Asignacion de Equipo</h4>
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					  </button>
					</div>
					<div class="modal-body">
					<div >
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


				   </div>
					</div>


				  </div>
				</div>
			  </div>
			  </form>
			  <!--Modal para Celular-->







<script >
// variables globales para capturar los datos del Datatable
var valores="";
$(document).ready(function() {
    $('#datatable').DataTable();
	var id = "";
} );



$(".botondetalle").click(function(){
	var id = $(this).closest('tr').find('.id').text();
	var nombreequipo = $(this).closest('tr').find('.nombreequipo').text();


  window.location.href = 'inventario.php' + '?id=' + id +'&nombreequipo=' + nombreequipo;


	alert(nombreequipo);



	});






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
