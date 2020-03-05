<?php 
session_start();
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

	
$sql= "call insertarClienteNuevo ('".$_POST['apellido']."','".$_POST['nombre']."','".$_POST['dni']."', '".$_POST['direc']."', '".$_POST['mail']."', '".$_POST['cel']."', '".$_POST['telef']."', ".$_POST['idUser'].", ".$_POST['cliSexo'].", '".$_POST['fechNac']."' );";

$stmt = $conection->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_array(MYSQLI_NUM))
{
	echo $idCli=$row[0];
}
$stmt->fetch();

$stmt->close();
	




?>