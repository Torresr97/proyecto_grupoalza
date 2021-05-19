<!DOCTYPE html>
<?php
include("..\php\conexion1.php");
if (isset($_GET["id"]) && isset($_GET["nombreequipo"]) && isset($_GET["marca"]) && isset($_GET["modelo"]) && isset($_GET["servicetag"])
&& isset($_GET["procesador"])&& isset($_GET["ram"])&& isset($_GET["discoduro"])&& isset($_GET["descripcion"])
) {
    // asignar w1 y w2 a dos variables
    $id = $_GET["id"];
    $nombreequipo = $_GET["nombreequipo"];
	$marca = $_GET["marca"];
	$modelo = $_GET["modelo"];
	$servicetag = $_GET["servicetag"];
	$procesador = $_GET["procesador"];
	$ram = $_GET["ram"];
	$discoduro = $_GET["discoduro"];
	$descripcion = $_GET["descripcion"];


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


	<script  src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
	<script  src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.14/jspdf.plugin.autotable.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/af-2.3.5/kt-2.6.1/datatables.min.css"/>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<!-- Bootstrap -->
	<link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="../../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="../../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="../../vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../../build/css/custom.min.css" rel="stylesheet">
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
                      <li><a href="../form.php">Registro</a></li>
                      <li><a href="../asignacion.php">Asignacion</a></li>
                      <li><a href="../recepcion.php">Recepcion</a></li>
                      <li><a href="../inventario.php">Inventario</a></li>
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


					<form class="" action="../php/asignaciones/asignacionnuevadesktopylaptop.php" method="post">

					<div >
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">ID de Equipo</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="midequipo" name="midequipo" value="<?php echo $id ?>" type="text" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row ">
						<label class="control-label col-md-3 col-sm-3 ">Equipo</label>
						<div class="col-md-4 col-sm-4 ">
							<input id="mequipo" name="mequipo" value="<?php echo $nombreequipo ?>" type="text" class="form-control" readonly>
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

						<div class="form-group row">
							<label class="control-label col-md-3 col-sm-3 ">Empleado:</label>
							<div class="col-md-4 col-sm-4 ">
								<select  class="form-control"  name="mempleado" id="mempleado" >
								<?php
									$sql = "SELECT idempleado,NombreCompleto FROM dbo.inventario_empleado order by NombreCompleto ";
									$stmt = sqlsrv_query( $conn, $sql );
									if( $stmt === false) {
										die( print_r( sqlsrv_errors(), true) );
									}


									while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {


										echo '<option value="' .$row['idempleado']. '">' .$row['NombreCompleto']. '</option>';

									}

									sqlsrv_close( $conn ) ;
									?>
								</select>
							</div>
						</div>
						<div class="form-group row ">
							<label class="control-label col-md-3 col-sm-3 ">Area</label>
							<div class="col-md-5 col-sm-5 ">
								<input id="marea" name="marea" type="text" class="form-control" placeholder="Area">
							</div>
						</div>
						<div class="form-group row ">
							<label class="control-label col-md-3 col-sm-3 ">Autorizado por:</label>
							<div class="col-md-5 col-sm-5 ">
								<input id="mautorizado" name="mautorizado" type="text" class="form-control" placeholder="Autorizado">
							</div>
						</div>
						<div class="form-group row ">
							<label class="control-label col-md-3 col-sm-3 ">Entregado por</label>
							<div class="col-md-5 col-sm-5 ">
								<input id="mentregado" name="mentregado" type="text" class="form-control" placeholder="Entregado">
							</div>
							</div>

							<div class="form-group row ">
							<label class="control-label col-md-3 col-sm-3 "></label>
							<div class="col-md-5 col-sm-5 ">

						<button  type="submit" class="btn btn-primary btn-xs" >Save changes</button>
						<input type="button" class="btn btn-secondary" value="Generar Reporte" onclick="generarpdfdesktopylaptop()">

			</div>
							</div>


		</div>

</form>






		  </div>

	  </div>
	</div>





</div>










<script type="text/javascript" >
// variables globales para capturar los datos del Datatable
var valores="";
$(document).ready(function() {
    $('#datatable').DataTable();
	var select = document.getElementById("mempleado"); //El <select>
} );

//boton que despliega el modal obtenemos lo datos de cada fila del datatable





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
			img.src = '../images/logoalza.png';  // some random imgur image



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
			doc.setFontSize(10);
			doc.text(138, 105,$('select[name="mempleado"] option:selected').text());
			doc.setFontSize(12);
			doc.setFontType("normal");
			doc.text(10, 110, 'quien se desempena en el area de:');
			doc.setFontType("bold");
			doc.text(78, 110, document.getElementById("marea").value );
			doc.setFontType("normal");
			doc.text(125, 110, '. Se compromete a cumplir ');
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

		doc.text(10, 252, 'Recibido por: '+ ($('select[name="mempleado"] option:selected').text()).split(" ",2));
		doc.text(110, 252, 'Entregado por: '+ document.getElementById("mentregado").value);
		doc.text(10, 270, '_____________________________');

		doc.text(10, 275, 'Autorizado por: '+ document.getElementById("mautorizado").value);



}






</script>




	<!-- jQuery -->
	<script src="../../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="../../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../../vendors/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="../../vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../../vendors/moment/min/moment.min.js"></script>
	<script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="../../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="../../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="../../vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="../../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="../../vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="../../vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="../../vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="../../vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="../../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="../../vendors/starrr/dist/starrr.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="../../build/js/custom.min.js"></script>
	<script src="../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>





</body></html>
