<?php 
include"../conexion.php";
$cn=new conexion();
$con=$cn->conectar();
$dni=$_POST['dni'];
$nombres=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$query2=mysqli_query($con,"insert into usuario values('$dni','$nombres','$apellido','1','$usuario',sha1('$contra'),'1')")or die(mysqli_error($con));
$resultado=array();
if($query2){
  array_push($resultado,array("respuesta"=>"OK"));
  echo json_encode($resultado);
}else{
  array_push($resultado,array("respuesta"=>"No se ha podido ingresar"));
  echo json_encode($resultado);
}

?>