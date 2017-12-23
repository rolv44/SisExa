<?php 
include"../conexion.php";
$cn=new conexion();
$con=$cn->conectar();
$id=$_POST['id'];
$campo=$_POST['campo'];
$tabla=$_POST['tabla'];
$resultado=array();
$query1=mysqli_query($con,"update usuario set Estado='$campo' where idUsuario='$id'")or die(mysqli_error($con));
if($query1){
  array_push($resultado,array("respuesta"=>"OK"));
  echo json_encode($resultado);
}else{
  array_push($resultado,array("respuesta"=>"No se ha podido ingresar"));
  echo json_encode($resultado);
}

?>