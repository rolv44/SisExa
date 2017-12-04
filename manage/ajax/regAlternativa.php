<?php 
include"../conexion.php";
$cn=new conexion();
$con=$cn->conectar();
$des=$_POST['des'];
$query1=mysqli_query($con,"select trae_id_alternativa() as ID ")or die(mysqli_error($con));
$rsCat=mysqli_fetch_array($query1);
$idalt=$rsCat['ID'];
$query2=mysqli_query($con,"insert into alternativa values('$idalt','$des')")or die(mysqli_error($con));
$resultado=array();
if($query2){
  array_push($resultado,array("respuesta"=>"OK"));
  echo json_encode($resultado);
}else{
  array_push($resultado,array("respuesta"=>"No se ha podido ingresar"));
  echo json_encode($resultado);
}

?>