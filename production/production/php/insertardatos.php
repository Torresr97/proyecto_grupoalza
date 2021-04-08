<?php
include("conexion1.php");



$nomreequpo=$_POST['tipoequipo'];
if($nomreequpo == 'desktop'){
    $ciudad=$_POST['ciudad'];
    $estado=$_POST['destado'];
    $marca=$_POST['dmarca'];
    $modelo=$_POST['dmodelo'];
    $servicet=$_POST['dservicetag'];
    $dprocesador=$_POST['dprocesador'];
    $ram=$_POST['dram'];
    $discoduro=$_POST['ddiscoduro'];
    $descrip=$_POST['ddescripcion'];
  
    $myparams['ciudad'] =   $ciudad;
    $myparams['estado'] =   $estado;
    $myparams['nomreequpo'] =   $nomreequpo;
    $myparams['marca'] =   $marca;
    $myparams['modelo'] =   $modelo;
    $myparams['servicetstado'] =   $servicet;
    $myparams['dprocesador'] =   $dprocesador;
    $myparams['ram'] =   $ram;
    $myparams['discoduro'] =   $discoduro;
    $myparams['descrip'] =   $descrip;
    //arreglo de parametros
    $procedure_params = array(
        array(&$myparams['ciudad'], SQLSRV_PARAM_OUT),
        array(&$myparams['estado'], SQLSRV_PARAM_OUT),
        array(&$myparams['nomreequpo'], SQLSRV_PARAM_OUT),
        array(&$myparams['marca'], SQLSRV_PARAM_OUT),
        array(&$myparams['modelo'] , SQLSRV_PARAM_OUT),
        array(&$myparams['servicetstado'], SQLSRV_PARAM_OUT,
        array(&$myparams['dprocesador'], SQLSRV_PARAM_OUT),
        array(&$myparams['ram'], SQLSRV_PARAM_OUT),
        array(&$myparams['discoduro'] , SQLSRV_PARAM_OUT),
        array(&$myparams['descrip'],SQLSRV_PARAM_OUT))
        );
         
    $sql = "EXEC Proc_insertardatosdesktop @ciudad=?, @estado=?, @nomreequpo = ?, @marca = ?, @modelo = ?, @servicet = ?, @dprocesador = ?, @ram = ?, @discoduro = ?, @descrip = ?";
        $stmt = sqlsrv_prepare($conn, $sql, $procedure_params);
            
            if( !$stmt ) {
                die( print_r( sqlsrv_errors(), true));
                }else{
                    
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