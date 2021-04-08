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

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

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
                    <h2>Equipos Disponibles</h2>
                  
                    <div class="clearfix"></div>
                  </div>


                
                  <div class="x_content">

                   <form method="POST" action= "asignacion.php">
                     <div style="padding-bottom: 20px !important"  class="col-md-3 col-sm-3 ">
                     <select  class="form-control" name="tipoequipo" id="tipoequipo" >
                     <option value="nulo" >Seleccione un Equipo</option>
                  	<option value="desktop" >Desktop</option>
										<option value="laptop">Laptop</option>
										<option value="celular">Celular</option>
										<option value="telefono">Telefono</option>
										<option value="otros">Otros</option>	
                    </select>
                   
                      </div>

                      <button  type="submit" class="btn btn-info"  >Buscar</button></form>
                    <div id="mostrardatos">
                    <table class="table table-striped projects">
                    <thead>
                     <tr>
                     <th style="width: 1%">#</th>
                      <th style="width: 10%">Nombre del Equipo</th>
                       <th style="width: 10%">Marca</th>
                        <th style="width: 10%">Modelo</th>
                        <th style="width: 10%">ServiceTag</th>
                        <th style="width: 5%">Ram</th>
                        <th style="width: 5%">Disco Duro</th>
                        <th style="width: 15%" >Descripcion</th>
                        <th style="width: 10%">Accion</th>
                        </tr> 
                        </thead>
                    <?php
                      $nomreequpo=$_POST['tipoequipo'];
                      if($nomreequpo == 'desktop'){
                        
                      $sql = "SELECT * FROM V_equiposdesktop";
                      $stmt = sqlsrv_query( $conn, $sql );
                      if( $stmt === false) {
                          die( print_r( sqlsrv_errors(), true) );
                      }
                     

                      while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                      
                      echo "<tbody>";
                        echo "<tr>";
                      
                        echo "<td>#</td>";
                        echo "<td>".$row['nombreequipo']."</td>";
                        echo "<td>".$row["marcca_desktop"]."</td>";
                          echo "<td>".$row["modelo_desktop"]."</td>";
                          echo "<td>".$row["servicetag_desktop"]."</td>";
                          echo "<td>".$row["ram_desktop"]." GB</td>";
                          echo "<td>".$row["discoduro_desktop"]." GB</td>";
                          echo "<td>".$row["descripcion_desktop"]."</td>";
                          echo  '<td> <a  href="#"  class="btn btn-success btn-xs"> <span style="padding-right: 8px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span> Asignar </a></td>';
                        
                            echo "</tr>";

                      echo "</tbody>";
                        
                     } 
                         

                       


                   
                     sqlsrv_close( $conn ) ; 
                        
                        }?>
  
                    </div>

                  </div>
             
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- modal -->


        <!-- modal -->



        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      
    </div>
    
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

   
   <script>
     window.onload = function () {
    Cargar();    
}

function Cargar()
{
    $("#mostrardatos").load("consulta_asignacion.php");    
}



   </script>

     
  </body>
</html>