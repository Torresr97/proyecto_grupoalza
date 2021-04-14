<?php
include("conexion1.php");

$ciudad=$_POST['ciudad'];

$nomreequpo=$_POST['tipoequipo'];
if($nomreequpo == 'desktop'){
    $ciudad=$_POST['ciudad'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $servicet=$_POST['servicetag'];
    $procesador=$_POST['procesador'];
    $ram=$_POST['ram'];
    $discoduro=$_POST['discoduro'];
    $descrip=$_POST['descripcion'];


    $myparams['ciudad'] =  $ciudad;

    $myparams['marca'] =  $marca;
    $myparams['modelo'] =  $modelo;
    $myparams['servicetag'] =  $servicet;
    $myparams['procesador'] =  $procesador;
    $myparams['ram'] =  $ram;
    $myparams['discoduro'] =  $discoduro;
    $myparams['descripcion'] =  $descrip;
    
    $params = array( 
        array(&$myparams['ciudad'], SQLSRV_PARAM_IN),
        array(&$myparams['marca'] , SQLSRV_PARAM_IN),
        array(&$myparams['modelo'], SQLSRV_PARAM_IN),
        array(&$myparams['servicetag'], SQLSRV_PARAM_IN),
        array(&$myparams['procesador'] , SQLSRV_PARAM_IN),
        array(&$myparams['ram'] , SQLSRV_PARAM_IN),
        array(&$myparams['discoduro'], SQLSRV_PARAM_IN),
        array(&$myparams['descripcion'], SQLSRV_PARAM_IN)
        
      );
   

    $sql = " EXEC Proc_insertardatosdesktop @ciudad=?,@nombreequipo=DESKTOP,@marca=?,@modelo=?,@servicetag=?,@procesador=?,@ram=?,@discoduro=?,@descripcion=?"; //calling stored procedure with single input parameter and 1 output parameter
    
    
    
$stmt = sqlsrv_prepare($conn, $sql, $params);

if( !$stmt ) {
die( print_r( sqlsrv_errors(), true));
}

if(sqlsrv_execute($stmt)){
  while($res = sqlsrv_next_result($stmt)){
    // make sure all result sets are stepped through, since the output params may not be set until this happens
  }
  // Output params are now set,
  echo'<script type="text/javascript">
window.location.href="../form.php";
    alert("Datos Ingresados");
    </script>';
  
}else{
  die( print_r( sqlsrv_errors(), true));
}


    
}elseif ($nomreequpo == 'laptop'){
  $ciudad=$_POST['ciudad'];
    $marca=$_POST['lmarca'];
    $modelo=$_POST['lmodelo'];
    $servicet=$_POST['lservicetag'];
    $ram=$_POST['lprocesador'];
    $ram=$_POST['lram'];
    $discoduro=$_POST['ldiscoduro'];
    $descrip=$_POST['ldescripcion'];


    $myparams['marca'] =  $marca;
    $myparams['modelo'] =  $modelo;
    $myparams['servicetag'] =  $servicet;
    $myparams['procesador'] =  $procesador;
    $myparams['ram'] =  $ram;
    $myparams['discoduro'] =  $discoduro;
    $myparams['descripcion'] =  $descrip;
    
    $params = array( 
        array(&$myparams['ciudad'], SQLSRV_PARAM_IN),
        array(&$myparams['marca'] , SQLSRV_PARAM_IN),
        array(&$myparams['modelo'], SQLSRV_PARAM_IN),
        array(&$myparams['servicetag'], SQLSRV_PARAM_IN),
        array(&$myparams['procesador'] , SQLSRV_PARAM_IN),
        array(&$myparams['ram'] , SQLSRV_PARAM_IN),
        array(&$myparams['discoduro'], SQLSRV_PARAM_IN),
        array(&$myparams['descripcion'], SQLSRV_PARAM_IN)
        
      );
   

    $sql = " EXEC Proc_insertardatosdesktop @ciudad=?,@nombreequipo=DESKTOP,@marca=?,@modelo=?,@servicetag=?,@procesador=?,@ram=?,@discoduro=?,@descripcion=?"; //calling stored procedure with single input parameter and 1 output parameter
    
    
    
$stmt = sqlsrv_prepare($conn, $sql, $params);

if( !$stmt ) {
die( print_r( sqlsrv_errors(), true));
}

if(sqlsrv_execute($stmt)){
  while($res = sqlsrv_next_result($stmt)){
    // make sure all result sets are stepped through, since the output params may not be set until this happens
  }
  // Output params are now set,
  echo'<script type="text/javascript">
window.location.href="../form.php";
    alert("Datos Ingresados");
    </script>';
  
}else{
  die( print_r( sqlsrv_errors(), true));
}


    
}elseif ($nomreequpo == 'celular'){
   $ciudad=$_POST['ciudad'];
    $marca=$_POST['cmarca'];
    $modelo=$_POST['cmodelo'];
    $imei=$_POST['cimei'];
    $decrip=$_POST['cdescripcion'];

    $myparams['ciudad'] =  $ciudad;
    $myparams['cmarca'] =  $marca;
    $myparams['cmodelo'] =  $modelo;
    $myparams['cimei'] =  $imei;
    $myparams['cdescripcion'] =  $decrip;
    
    
  
    $params = array( 
        array(&$myparams['ciudad'], SQLSRV_PARAM_IN),
        array(&$myparams['cmarca'] , SQLSRV_PARAM_IN),
        array(&$myparams['cmodelo'], SQLSRV_PARAM_IN),
        array(&$myparams['cimei'], SQLSRV_PARAM_IN),
        array(&$myparams['cdescripcion'] , SQLSRV_PARAM_IN)
       
        
      );
   

    $sql = " EXEC Proc_insertardatosdesktop @ciudad=?,@nombreequipo=CELULAR,@cmarca=?,@cmodelo=?,@cimei=?,@cdescripcion=?"; //calling stored procedure with single input parameter and 1 output parameter
    
    
    
$stmt = sqlsrv_prepare($conn, $sql, $params);

if( !$stmt ) {
die( print_r( sqlsrv_errors(), true));
}

if(sqlsrv_execute($stmt)){
  while($res = sqlsrv_next_result($stmt)){
    // make sure all result sets are stepped through, since the output params may not be set until this happens
  }
  // Output params are now set,
  echo'<script type="text/javascript">
window.location.href="../form.php";
    alert("Datos Ingresados");
    </script>';
  
}else{
  die( print_r( sqlsrv_errors(), true));
}




}elseif ($nomreequpo == 'telefono'){
  $ciudad=$_POST['ciudad'];
    $marca=$_POST['tmarca'];
    $modelo=$_POST['tmodelo'];
    $imei=$_POST['timei'];
    $decrip=$_POST['tdescripcion'];

    $myparams['ciudad'] =  $ciudad;
    $myparams['tmarca'] =  $marca;
    $myparams['tmodelo'] =  $modelo;
    $myparams['timei'] =  $imei;
    $myparams['tdescripcion'] =  $decrip;
    
    
  
    $params = array( 
        array(&$myparams['ciudad'], SQLSRV_PARAM_IN),
        array(&$myparams['tmarca'] , SQLSRV_PARAM_IN),
        array(&$myparams['tmodelo'], SQLSRV_PARAM_IN),
        array(&$myparams['timei'], SQLSRV_PARAM_IN),
        array(&$myparams['tdescripcion'] , SQLSRV_PARAM_IN)
       
        
      );
   

    $sql = " EXEC Proc_insertardatosdesktop @ciudad=?,@nombreequipo=TELEFONO,@tmarca=?,@tmodelo=?,@timei=?,@tdescripcion=?"; //calling stored procedure with single input parameter and 1 output parameter
    
    
    
$stmt = sqlsrv_prepare($conn, $sql, $params);

if( !$stmt ) {
die( print_r( sqlsrv_errors(), true));
}

if(sqlsrv_execute($stmt)){
  while($res = sqlsrv_next_result($stmt)){
    // make sure all result sets are stepped through, since the output params may not be set until this happens
  }
  // Output params are now set,
  echo'<script type="text/javascript">
window.location.href="../form.php";
    alert("Datos Ingresados");
    </script>';
  
}else{
  die( print_r( sqlsrv_errors(), true));
}



}elseif ($nomreequpo == 'otros'){
  $ciudad=$_POST['ciudad'];
    $nombreequipo=$_POST['onombreequipo'];
    $marca=$_POST['omarca'];
    $modelo=$_POST['omodelo'];
    $descrip=$_POST['odescripcion'];

    $myparams['ciudad'] =  $ciudad;
    $myparams['onombreequipo'] =  $nombreequipo;
    $myparams['omarca'] =  $marca;
    $myparams['omodelo'] =  $modelo;
    $myparams['odescripcion'] =  $decrip;
    
    
  
    $params = array( 
        array(&$myparams['ciudad'], SQLSRV_PARAM_IN),
        array(&$myparams['onombreequipo'], SQLSRV_PARAM_IN),
        array(&$myparams['omarca'] , SQLSRV_PARAM_IN),
        array(&$myparams['omodelo'], SQLSRV_PARAM_IN),
        array(&$myparams['odescripcion'] , SQLSRV_PARAM_IN)
       
        
      );
   

    $sql = " EXEC Proc_insertardatosdesktop @ciudad=?,@nombreequipo=OTROS,@onombreequipo=?,@omarca=?,@omodelo=?,@odescripcion=?"; //calling stored procedure with single input parameter and 1 output parameter
    
    
    
$stmt = sqlsrv_prepare($conn, $sql, $params);

if( !$stmt ) {
die( print_r( sqlsrv_errors(), true));
}

if(sqlsrv_execute($stmt)){
  while($res = sqlsrv_next_result($stmt)){
    // make sure all result sets are stepped through, since the output params may not be set until this happens
  }
  // Output params are now set,
  echo'<script type="text/javascript">
window.location.href="../form.php";
    alert("Datos Ingresados");
    </script>';
  
}else{
  die( print_r( sqlsrv_errors(), true));
}

}

   


?>