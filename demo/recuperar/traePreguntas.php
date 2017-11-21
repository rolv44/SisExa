<?php
include "../conexion.php";
$cn=new conexion();
$con=$cn->conectar();
$rs=mysqli_query($con,"SELECT MAX(idPregunta) as fn from pregunta");
$arr=mysqli_fetch_array($rs);
$fn=$arr['fn'];
$lista=array();
$preguntas=array();
for ($i=0; $i < ; $i++) { 
  $d=mt_rand(1,$fn);
  
  $rs1=mysqli_query($con,"select *from pregunta where idPregunta=$d")or die($con);
  $row=mysqli_fetch_array($rs1);
  array_push($preguntas,array());
}
$res=mysqli_query()or die(mysqli_error($con));


?>