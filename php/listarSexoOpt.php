<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarSexos();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

echo '<option class="optSexo mayuscula" data-tokens="'.$row['idSexo'].'">'.$row['sexDescripcion'].'</option>';

}
mysqli_close($conection); //desconectamos la base de datos

?>