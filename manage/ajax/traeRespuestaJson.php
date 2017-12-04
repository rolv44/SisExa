<?php
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$categoria=array();
$resultado=mysqli_query($con,"select * from respuesta")or die(mysqli_error($con));
while($row=mysqli_fetch_array($resultado)){ 
    array_push($categoria,array("id"=>$row[0],"pregunta"=>$row[1],"alternativa"=>$row[2],"fundamento"=>$row[3]));
}
echo json_encode($categoria);

?>