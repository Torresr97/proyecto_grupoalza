<?php
$serverName = "HNSPS0096"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"inventario_grupoalza");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>