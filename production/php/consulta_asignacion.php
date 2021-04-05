<?php
include("conexion1.php");

$nomreequpo=$_POST['tipoequipo'];
if($nomreequpo == 'desktop'){
   
$sql = "SELECT * FROM V_equiposdesktop";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {  
    
    echo "<tbody>";
    echo '<table class="table table-striped projects">';
    echo  "<thead>";
    echo   "<tr>";
    echo  '<th style="width: 1%">#</th>';
    echo   '<th style="width: 20%">Nombre del Equipo</th>';
    echo   " <th>Marca</th>
         <th>Modelo</th>
         <th>ServiceTag</th>
         <th>Ram</th>
         <th>Disco Duro</th>
         <th>Descripcion</th>";
    echo   '<th style="width: 20%">Accion</th>';
    echo  "</tr>
     </thead>
     <tbody>
          <tr>
          <td>#</td>
         <td>";
  echo  '<ul class="list-inline">';
  echo   "<li>";
            echo $row['nombreequipo'];
           echo "</li>
            </ul>
          </td>
          <td>";
  echo   '<ul class="list-inline">';
  echo     " <li>";
              echo $row['marcca_desktop'];
            echo  "</li>
              </ul>
            </td>
            <td >";
     echo  '<ul class="list-inline">';
     echo      " <li>";
              echo $row['modelo_desktop'];
              echo  "</li>
              </ul>
            </td>
            <td>
           
            </td>
            <td>";
            echo    '<a  href="#"  class="btn btn-success btn-xs"> <span  class="glyphicon glyphicon-plus" aria-hidden="true"></span>Asignar </a>';
            
            echo      "</td>
          </tr>";
        
         
         
          
       
  
       echo "</tbody>
      </table> ";








}


    
}elseif ($nomreequpo == 'laptop'){
    $marca=$_POST['lmarca'];
    $modelo=$_POST['lmodelo'];
    $servicet=$_POST['lservicetag'];
    $ram=$_POST['lram'];
    $discoduro=$_POST['ldiscoduro'];
    $descrip=$_POST['ldescripcion'];

    
}elseif ($nomreequpo == 'celular'){
    $marca=$_POST['cmarca'];
    $modelo=$_POST['cmodelo'];
    $imei=$_POST['cimei'];
    $decrip=$_POST['cdescripcion'];
}elseif ($nomreequpo == 'telefono'){
    $marca=$_POST['tmarca'];
    $modelo=$_POST['tmodelo'];
    $imei=$_POST['timei'];
    $decrip=$_POST['tdescripcion'];
}elseif ($nomreequpo == 'otros'){
    $nombreequipo=$_POST['onombreequipo'];
    $marca=$_POST['omarca'];
    $modelo=$_POST['omodelo'];
    $descrip=$_POST['odescripcion'];
}

   


?>