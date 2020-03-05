<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarEspecies();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

echo '<option class="optEspecie mayuscula" data-tokens="'.$row['idEspecie'].'">'.$row['espNombre'].'</option>';

}
mysqli_close($conection); //desconectamos la base de datos

?>