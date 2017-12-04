<?php
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$categoria=array();
$resultado=mysqli_query($con,"select *from categoria")or die(mysqli_error($con));
while($row=mysqli_fetch_array($resultado)){ 
    array_push($categoria,array("id"=>$row[0],"descripcion"=>$row[1]));
}
echo json_encode($categoria);

?>