<?php
include("conexion.php");

$nomreequpo=$_POST['tipoequipo'];
if($nomreequpo == 'desktop'){
    $marca=$_POST['dmarca'];
    $modelo=$_POST['dmodelo'];
    $servicet=$_POST['dservicetag'];
    $ram=$_POST['dram'];
    $discoduro=$_POST['ddiscoduro'];
    $descrip=$_POST['ddescripcion'];

         
    $sql = "INSERT INTO equipos (ciudad,nombreequipo,marca_desktop,modelo_desktop,servicetag_desktop,ram_desktop,discoduro_desktop,descripcion_desktop) VALUES (?,?, ?,?,?,?,?,?)";

   
  
$params = array("SPS",$nomreequpo,$marca,$modelo,$servicet,$ram,$discoduro,$descrip);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}else 
echo'<script type="text/javascript">
window.location.href="../form.php";
    alert("Datos Ingresados");
    </script>';

    
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