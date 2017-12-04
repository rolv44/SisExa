<?php 
include"../conexion.php";
$cn=new conexion();
$con=$cn->conectar();
$codP=$_POST['pregunta'];
$codAl=$_POST['alternativa'];
$funda=$_POST['fundamento'];
$query1=mysqli_query($con,"select trae_id_respuesta() as ID ")or die(mysqli_error($con));
$rsCat=mysqli_fetch_array($query1);
$idrs=$rsCat['ID'];
$resultado=array();
$query3=mysqli_query($con,"insert into respuesta values('$idrs','$codP','$codAl','$funda')")or die(mysqli_error($con));

if($query3){
  array_push($resultado,array("respuesta"=>"OK"));
  echo json_encode($resultado);
}else{
  array_push($resultado,array("respuesta"=>"No se ha podido ingresar"));
  echo json_encode($resultado);
}
/*
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
*/
?>