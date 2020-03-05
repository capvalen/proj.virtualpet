<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarServicios();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

echo '<option class="optActividadVeter mayuscula" data-tokens="'.$row['idServicio'].'">'.$row['servDescripcion'].'</option>';

}
mysqli_close($conection); //desconectamos la base de datos

?>