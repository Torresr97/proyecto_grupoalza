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
   echo "<tr>"; 
   echo '<<td>'.$row['nombreequipo'].'</td>'; 
   echo "<td>".$row["marcca_desktop"]."</td>";
    echo "<td>".$row["modelo_desktop"]."</td>";
     echo "<td>".$row["servicetag_desktop"]."</td>";
      echo "</tr>"; } 
      echo " <table> <thead> <tr> <th>Nombre del Equipo</th> <th>Marca</th> <th>Modelo</th> <th>ServiceTag</th> </tr> </thead> </table>  ";

  
  } ?>
  

