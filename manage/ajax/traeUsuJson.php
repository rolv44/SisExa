<?php
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$categoria=array();
$resultado=mysqli_query($con,"select *from usuario ")or die(mysqli_error($con));
while($row=mysqli_fetch_array($resultado)){
  if($row[6]==1){
    $st="ACTIVO";
  }else{$st="INACTIVO";} 
    array_push($categoria,array("id"=>$row[0],"nombre"=>$row[1],"apellido"=>$row[2],"usu"=>$row[4],"estado"=>$st));
}
echo json_encode($categoria);

?>