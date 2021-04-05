<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="sdds.php">
 <select name="miselector" id="miselector" onchange="this.form.submit()">
 <option value="">Seleccionar</option>
 <option value="coches">Coches</option>
 <option value="casas">Casas</option>
</form>

///Lectura de la variable "en la misma página" desde php

<?php
echo "Select: ".$_GET["miselector"];
?>
</body>
</html>



<?php
      $sql = "SELECT * FROM Vequiposdesktop";
      $stmt = sqlsrv_query( $conn, $sql );
      if( $stmt === false) {
          die( print_r( sqlsrv_errors(), true) );
      }
      
      while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) { ?>
   <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                          <ul class="list-inline">
                              <li>
                              <?php echo $row['nombreequipo'];?>
                              </li>
                            </ul>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                              <?php echo $row['marcca_desktop'];?>
                              </li>
                            </ul>
                          </td>
                          <td >
                          <ul class="list-inline">
                              <li>
                              <?php echo $row['modelo_desktop'];?>
                              </li>
                            </ul>
                          </td>
                          <td>
                         
                          </td>
                          <td>
                            <a  href="#"  class="btn btn-success btn-xs"> <span  class="glyphicon glyphicon-plus" aria-hidden="true"></span>Asignar </a>
                          
                          </td>
                        </tr>
                       <?php 
                       }
                       ?>
                        
                     
                
                      </tbody>
                    </table>  