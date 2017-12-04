<?php 
include"../conexion.php";
$cn=new conexion();
$con=$cn->conectar();
$des=$_POST['dds'];
$query1=mysqli_query($con,"select trae_id_categoria() as ID ")or die(mysqli_error($con));
$rsCat=mysqli_fetch_array($query1);
$idCat=$rsCat['ID'];
$query2=mysqli_query($con,"insert into categoria values('$idCat','$des')")or die(mysqli_error($con));
$resultado=array();
if($query2){
  array_push($resultado,array("respuesta"=>"OK"));
  echo json_encode($resultado);
}else{
  array_push($resultado,array("respuesta"=>"No se ha podido ingresar"));
  echo json_encode($resultado);
}

?>